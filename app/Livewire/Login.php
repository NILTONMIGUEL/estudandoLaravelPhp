<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    //criando variavel para email e senha importante que seja igual do input
    public $email;
    public $password;

   public function login(){

    //pegando os valores do input
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        //fazendo a verificação
        $authenticated = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);

        //se a verificação der verdadeiro vou para a tela do painel
        if($authenticated){
            //mudando a tela para ir para a tela do painel
            return redirect()->route('painel');
        }
        else{
            //caso der erro me mostre uma mensagem
            session()->flash('error' , 'email ou senha inválida');
        }
   }

    public function render()
    {
        return view('livewire.login');
    }
}
