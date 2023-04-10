<?php

namespace App\Http\Controllers;

use App\Models\CodeUpdate;
use App\Http\Requests\StoreCodeUpdateRequest;
use App\Http\Requests\UpdateCodeUpdateRequest;
use Illuminate\Support\Facades\Hash;

class CodeUpdateController extends Controller
{
    public function Codigo(){
        $num = random_int(1000, 9999);
        $code = CodeUpdate::create([
            'codigo' => Hash::make($num),
            'activo' => true,
        ]);
        $code->save();
    }
    
}
