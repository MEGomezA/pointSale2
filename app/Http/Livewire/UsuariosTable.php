<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Usuario;
use Livewire\Component;

class UsuariosTable extends Component
{
    public $buscar;
    public function render()
    {
        $buscarSQL = '%' . $this->buscar . '%';

        $nombres = Usuario::where('name', 'like', $buscarSQL)
            ->orwhere('email', 'like', $buscarSQL)
            ->paginate(10); //Toda la info de bd

        return view('livewire.usuarios-table', compact('nombres')); //la enviamos
    }
}
