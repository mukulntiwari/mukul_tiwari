@php
    $user = auth()->user();
@endphp

<div class="flex h-screen bg-gray-100">
    <aside class="w-64 bg-gray-800 text-white">
        <div class="p-4 border-b border-gray-700">
            @if ($user)
                <div class="font-semibold">Welcome, {{ $user->name }}</div>
            @else
                <div class="text-gray-400">Welcome, Guest</div>
            @endif
        </div>

        <!-- Add your sidebar navigation here -->
        <nav class="mt-4 px-4">
            <ul class="space-y-2">
                <li><a href="/" class="hover:text-yellow-400">Home</a></li>
                <li><a href="/products" class="hover:text-yellow-400">Products</a></li>
                <li><a href="/cart" class="hover:text-yellow-400">Cart</a></li>
                <!-- Add more links as needed -->
            </ul>
        </nav>
    </aside>

    <main class="flex-1 p-6 overflow-y-auto">
        <h1 class="text-2xl font-bold mb-4">{{ $title ?? 'Dashboard' }}</h1>

        <!-- Render slot content here -->
        {{ $slot }}
    </main>
</div>
