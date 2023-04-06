<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Mail\EmailSend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;
use App\Models\Qrs;



class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        
       // $value = $request->session()->get('key', 'default');
         $nombres = "";// inicializa el arreglo de nombres vacío

    foreach (auth()->user()->roles as $role) {
        $nombres = $role->name; // agrega el nombre del usuario al arreglo de nombres
    }
   
    //return $nombres; // devuelve el arreglo de nombres
      if ($nombres == "normal") {
        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
      }else{
        if($nombres == "admin"){
          //SE GENERA EL CODE
          $num = random_int(1000, 9999);
         
         
          $userid = Auth::id();
          $user = auth()->user();
  
          $code = Qrs::create([
              'Qr' => $num,
              'activo' => true,
              'user_id' => $userid,
          ]);
  
          $code->save();
          $otra = QrCode::size(250) -> generate($num);
          return view('QR',compact('otra'));
        }
        else{
          Mail::to($request->email)->send(new EmailSend());
          return view('verificacion');
        }
      
      
     
      }
       
        //return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
