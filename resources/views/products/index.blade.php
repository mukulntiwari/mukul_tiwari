<x-layouts.app.sidebar :title="'All Products'">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
            <div class="bg-white rounded-xl shadow p-4">
                <a href="{{ route('products.show', $product->id) }}">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-48 w-full object-cover rounded">
                    <h2 class="text-xl font-semibold mt-2">{{ $product->name }}</h2>
                </a>
                <p class="text-gray-600 mt-1">₹{{ number_format($product->price, 2) }}</p>

                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-2">
                    @csrf
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="image" value="{{ $product->image }}">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="mt-2 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Add to Cart</button>
                </form>
            </div>
        @endforeach
    </div>

</x-layouts.app.sidebar>
