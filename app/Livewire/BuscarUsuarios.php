<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class BuscarUsuarios extends Component
{
    use WithPagination;
    #[Url(as:'search')]
    public $search = '';
    protected $listeners = ['refresh' => '$refresh'];

    public function render()
    {
       $query = User::query()
        ->where('name','like','%'.$this->search.'%')
        ->orWhere('email','like','%'.$this->search.'%')
        ->orderBy('name','asc');

        $users = $query->paginate(10);


        return view('livewire.buscar-usuarios',[
            'users' => $users
        ]);
    }
}
