<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

use function PHPUnit\Framework\isNull;

class ProductosDetalle extends Component
{
    public Producto $prod;

    protected $rules = [
        'prod.codigo' => 'required|min:4',
        'prod.descripcion' => 'required|min:6',
        'prod.precio' => 'numeric'
    ];

    public function mount($id = null)
    {
        if (isNull($id)) {
            $this->prod = new Producto();
        } else {
            $this->prod = Producto::find($id);
        }
    }

    public function render()
    {
        return view('livewire.productos-detalle');
    }

    public function save()
    {
        $this->validate();
        $this->prod->save();
        return redirect()->route('productos');
    }
}
