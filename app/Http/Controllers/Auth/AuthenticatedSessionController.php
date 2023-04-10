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
         $nombres = [];// inicializa el arreglo de nombres vacío

    foreach (auth()->user()->roles as $role) {
        $nombres[] = $role->name; // agrega el nombre del usuario al arreglo de nombres
    }

    if (in_array('admin', $nombres)) {
      Auth::logout();
      return redirect()->route('admin.login')->withErrors([
          'message' => __('No puedes iniciar sesión en esta aplicación.'),
      ]);
    
  }
  else if(in_array('normal', $nombres)){
    return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
  }
  else if(in_array('supervisor', $nombres)){
    Mail::to($request->email)->send(new EmailSend());
    return view('verificacion');
  }
  
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
      Cookie::queue(Cookie::forget('code'));
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
