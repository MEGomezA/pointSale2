<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class ProductosTable extends Component
{
    use WithPagination;//recarga solo el paginador

    public $buscar;
    public function render()
    {
        $buscarSQL = '%' . $this->buscar . '%';

        $prods = Producto::where('codigo', 'like', $buscarSQL)
            ->orwhere('descripcion', 'like', $buscarSQL)
            ->paginate(3); //Toda la info de bd

        return view('livewire.productos-table', compact('prods')); //la enviamos
    }
}
