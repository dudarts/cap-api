<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Location;

class ContaController extends Controller
{
    public function getSaldo(Request $request){
        $user_id = Auth::id();

        if(Auth::attempt(['id' => $user_id, 'password' => $request["password"]]))
        {
            $conta = Conta::find($user_id);
            return view("saldo", ["erro" => false, "saldo" => number_format($conta["saldo"], 2, ",", "." )]);
        }
        else
            return view("saldo", ["erro" => true]);
    }

    public function saldo(){
        return view("saldo");
    }

    public function deposito(){
        return view('deposito');
    }

    public function depositar(Request $request){
        if ($request["valor"] > 0){
            $conta = Conta::find(Auth::id());
            $conta["saldo"] += $request["valor"];

            $conta->update();
            return redirect('home')->with('msg', 'Depósito realizado com sucesso!');
            //, ["msg" => "Depósito realizado com sucesso!" ]);
            //return view("home", ["msg" => "Depósito realizado com sucesso!" ]);
        } else {
            return redirect('home')->with("erro", "AÇÃO CANCELADA! O valor do depósito precisa ser maior que zero.");
        }
    }

    public function saque(){
        return view('saque');
    }

    public function sacar(Request $request){
        $conta = Conta::find(Auth::id());

        if ($request["valor"] <= $conta["saldo"]){
            $conta["saldo"] -= $request["valor"];

            $conta->update();
            return redirect('home')->with('msg', 'Retire seu dinheiro');
        } else {
            return redirect('home')->with("erro", "Sinto muito, saldo insuficiente");
        }
    }
}
