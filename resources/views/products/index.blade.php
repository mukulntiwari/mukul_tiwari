@foreach($products as $product)
    @if($product->name !== 'Bookshelf')
        <div class="bg-white rounded-xl shadow p-4 w-72">
            <a href="{{ route('products.show', $product->id) }}">
                <img 
                    src="{{ asset($product->image) }}" 
                    alt="{{ $product->name }}" 
                    class="h-48 w-full object-cover rounded"
                    onerror="this.onerror=null;this.src='{{ asset('images/default.webp') }}';"
                >
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
    @endif
@endforeach
