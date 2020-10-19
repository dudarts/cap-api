<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContaController extends Controller
{
    public function getSaldo(Request $request){
        $user_id = Auth::id();

        if(Auth::attempt(['id' => $user_id, 'password' => $request["password"]]))
        {
            $conta = Conta::find($user_id);
            return view("saldo", ["erro" => false, "saldo" => $conta["saldo"]]);
        }
        else
            return view("saldo", ["erro" => true]);
    }

    public function saldo(){
        return view("saldo");
    }
}
