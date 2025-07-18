<x-layouts.app.sidebar :title="'Your Cart'">
    <div class="p-4">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(count($cart) > 0)
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-2">Product</th>
                        <th class="p-2">Quantity</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Subtotal</th>
                        <th class="p-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach ($cart as $id => $item)
                        @php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; @endphp
                        <tr>
                            <td class="p-2 flex items-center gap-2">
                                <img src="{{ asset('storage/' . $item['image']) }}" class="w-16 h-16 object-cover rounded" alt="{{ $item['name'] }}">
                                {{ $item['name'] }}
                            </td>
                            <td class="p-2">
                                <form action="{{ route('cart.update', $id) }}" method="POST" class="flex items-center gap-2">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="w-16 border rounded px-2 py-1">
                                    <button type="submit" class="text-blue-600 hover:underline text-sm">Update</button>
                                </form>
                            </td>
                            <td class="p-2">₹{{ number_format($item['price'], 2) }}</td>
                            <td class="p-2">₹{{ number_format($subtotal, 2) }}</td>
                            <td class="p-2">
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="font-bold bg-gray-50">
                        <td colspan="3" class="p-2 text-right">Total:</td>
                        <td class="p-2">₹{{ number_format($total, 2) }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
</x-layouts.app.sidebar>
