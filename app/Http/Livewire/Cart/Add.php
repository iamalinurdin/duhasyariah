<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use App\Models\Cart;

class Add extends Component
{
    public $user;
    public $product;

    public function mount($user, $product)
    {
        $this->user = $user;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.cart.add');
    }

    public function add()
    {
        $cart = Cart::where('user_id', $this->user)->where('product_id', $this->product)->get();

        if ($cart->isEmpty()) {
            $this->user->carts()->create([
                'user_id' => $this->user,
                'product_id' => $this->product,
                'quantity' => 1
            ]);
        } else {
            $cart->quantity += 1;
            $cart->save();
        }

    }
}
