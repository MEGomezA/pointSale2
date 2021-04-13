<?php

namespace App\Http\Livewire;

use App\Models\Almacen;
use Livewire\Component;

class AlmacenesTable extends Component
{
    public $buscar;
    public function render()
    {
        $buscarSQL = '%' . $this->buscar . '%';

        $nombres = Almacen::where('nombre', 'like', $buscarSQL)
            ->orwhere('descripcion', 'like', $buscarSQL)
            ->paginate(10); //Toda la info de bd

        return view('livewire.almacenes-table', compact('nombres')); //la enviamos
    }
}
