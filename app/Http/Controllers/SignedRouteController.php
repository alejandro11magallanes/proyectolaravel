<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignedRouteController extends Controller
{
    public function SignedRoute(Request $request)
    {
        // verificar la firma de la URL
        if (!$request->hasValidSignature()) {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            abort(401, 'Se ha modificado la Ruta o el tiempo de la misma expiro');
        }

        $num = random_int(1000, 9999);

        $user = Auth::user();

        $code = Code::create([
            'codigo' => Hash::make($num),
            'activo' => true,
            'user_id' => $user->id,
        ]);

        $code->save();

        return view('correo', ['data' => $num]);
    }
}
