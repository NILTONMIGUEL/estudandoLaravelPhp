<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;


class CriarUsuarios extends Component
{
    public $codigo;
    public $name = '';
    public $email = '';
    public $password = '';

    //criando o usuario
    public ? User $user = null; 

    public function mount(){
        
        if($this->user){
            $this->name = $this->user->name;
            $this->email = $this->user->email;
            
        }
    }

    public function salvar(){
        $this->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|unique:users,email' . ($this->user ? ',' . $this->user->id : ''),
            'password' => $this->user ? 'nullable|string|min:6' : 'required|string|min:6',
        ]);
        if ($this->user) {
            $this->user->name = $this->name;
            $this->user->email = $this->email;
            if ($this->password) {
                $this->user->password = bcrypt($this->password);
            }
            $this->user->save();
        } else {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
        }

        session()->flash('message', 'Usuário salvo com sucesso!');
        return redirect()->route('usuarios');
    }


    public function render()
    {
        return view('livewire.criar-usuarios');
    }
}
