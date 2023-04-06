<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Http\Requests\StoreCodeRequest;
use App\Http\Requests\UpdateCodeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CodeController extends Controller
{
    public function generarMovil(Request $request)
    {
        $code_mobil = $request->code;

        $codes = Code::where('activo', true)->get();

        foreach ($codes as $code) {
            if (Hash::check($code_mobil, $code->codigo)) {

                $code->activo = false;

                $code->save();

                $num = random_int(1000, 9999);

                Code::create([
                    'codigo' => Hash::make($num),
                    'activo' => true,
                    'user_id' => $code->user_id,
                ]);

                return response()->json($num, 200);
            }
        }
        return response()->json('Tu codigo no es valido', 400);
    }


    public function generarWeb(Request $request)
    {
        $code_web = $request->code;

        $codes = Code::where('activo', true)->get();

        foreach ($codes as $code) {
            if (Hash::check($code_web, $code->codigo)) {

                $code->activo = false;

                $code->save();

                Cookie::queue('code', $code_web);

                return redirect('dashboard');
            }
        }
        Session::flash('alert-danger', 'El código ingresado no es válido');
        return redirect()->back();
    }
}
