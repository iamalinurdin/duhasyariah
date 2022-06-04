<x-layout.app>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>
                            <span>{{ $product->name }}</span>
                            <br>
                            <small class="text-muted">{{ $product->code }}</small>
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            @livewire('cart.add',[
                                'user' => Auth::user(),
                                'product' => $product->id
                            ])
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Tidak ada produk</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout.app>
