<x-layouts.app.sidebar title="{{ $product->name }}">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full max-w-md mx-auto rounded">
        <h2 class="text-3xl font-bold mt-6">{{ $product->name }}</h2>
        <p class="text-gray-600 mt-2">{{ $product->description }}</p>
        <p class="text-xl font-semibold text-green-600 mt-4">₹{{ $product->price }}</p>
        <a href="{{ route('products.index') }}" class="inline-block mt-6 text-blue-600 hover:underline">← Back to Products</a>
    </div>
</x-layouts.app.sidebar>
