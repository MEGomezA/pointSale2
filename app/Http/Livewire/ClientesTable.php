<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class ClientesTable extends Component
{
    public $buscar;
    public function render()
    {
        $buscarSQL = '%' . $this->buscar . '%';

        $nombres = Cliente::where('nombre', 'like', $buscarSQL)
            ->orwhere('correo', 'like', $buscarSQL)
            ->paginate(10); //Toda la info de bd

        return view('livewire.clientes-table', compact('nombres')); //la enviamos
    }
}
