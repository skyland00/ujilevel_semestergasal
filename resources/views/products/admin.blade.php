@extends('layout.main')

@section('section')
<div class="container mx-auto px-4 py-8">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Kelola Produk</h1>
        <a href="{{ route('products.add') }}" class="px-4 py-2 bg-amber-700 hover:bg-amber-800 text-white text-sm font-medium rounded-md">
            Add Product
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Image</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Name</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Kategori</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Harga</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">
                        <img src="{{ asset('img/products/' . $product->img) }}" alt="{{ $product->name }}" class="w-12 h-12 object-cover rounded-md">
                    </td>
                    <td class="px-4 py-2 border-b">{{ $product->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->kategori }}</td>
                    <td class="px-4 py-2 border-b">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                    <td class="px-4 py-2 border-b">
                        <!-- Tombol Edit -->
                        <a href="{{ route('products.edit', $product->id) }}" 
                           class="px-3 py-1 text-sm bg-gray-600 text-white rounded hover:bg-gray-700 focus:outline-none mr-2">
                            Edit
                        </a>
                        
                        <!-- Tombol Delete -->
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-3 py-1 text-sm bg-red-600 text-white rounded hover:bg-red-700 focus:outline-none delete-button">
                                Delete
                            </button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            const form = this.closest('.delete-form');
            
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        });
    });
</script>

@endsection
