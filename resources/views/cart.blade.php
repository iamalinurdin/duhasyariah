<x-layout.app>
    <div class="container">
        <h4 class="text-center">Troli Anda</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($carts as $cart)
                    <tr>
                        <td>{{ $cart->product->name }}</td>
                        <td>{{ $cart->product->price }}</td>
                        <td>{{ $cart->quantity }}</td>
                        <td>{{ $cart->product->price * $cart->quantity }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Tidak ada keranjang</td>
                    </tr>
                @endforelse


                @if (count($carts) > 0)
                    <tr>
                        <td colspan="4">
                            <a href="#" class="fw-bold text-success float-right text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">Gunakan Kode</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="float-right">Total: {{ Auth::user()->total - Session::get('discount') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kode diskon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('cart.apply') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Discount code" name="coupon"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Terapkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
