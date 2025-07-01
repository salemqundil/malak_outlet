@extends('layouts.main')

@section('title', 'جميع المنتجات - Malak Outlet')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">جميع المنتجات</h1>
                <div class="flex items-center space-x-4 space-x-reverse">
                    <span class="text-gray-600">{{ $products->total() }} منتج</span>
                </div>
            </div>

            @if($products->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($products as $product)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 group">
                            <div class="relative">
                                <a href="{{ route('products.show', $product->id) }}">
                                    @if($product->images->first())
                                        <img src="{{ $product->images->first()->image_url }}" 
                                             alt="{{ $product->name }}" 
                                             class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                                    @else
                                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    @endif
                                </a>
                                
                                @if($product->sale_price)
                                    <span class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                                        خصم {{ number_format((($product->price - $product->sale_price) / $product->price) * 100, 0) }}%
                                    </span>
                                @endif
                                
                                <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition duration-300">
                                    <button class="bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 text-gray-600">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="p-4">
                                <div class="text-right">
                                    <a href="{{ route('products.show', $product->id) }}">
                                        <h3 class="font-semibold text-lg mb-1 text-gray-800 hover:text-orange-600 transition duration-200">{{ $product->name }}</h3>
                                    </a>
                                    @if($product->brand)
                                        <p class="text-sm text-gray-500 mb-2">{{ $product->brand->name }}</p>
                                    @endif
                                    
                                    <div class="mb-3">
                                        @if($product->sale_price)
                                            <span class="text-lg font-bold text-orange-600">{{ number_format($product->sale_price, 2) }} ر.س</span>
                                            <span class="text-sm text-gray-500 line-through mr-2">{{ number_format($product->price, 2) }} ر.س</span>
                                        @else
                                            <span class="text-lg font-bold text-gray-800">{{ number_format($product->price, 2) }} ر.س</span>
                                        @endif
                                    </div>
                                    
                                    <div class="flex items-center justify-between">
                                        @if($product->stock_quantity > 0)
                                            <button onclick="addToCart({{ $product->id }})" 
                                                    class="add-to-cart-btn bg-orange-500 text-white px-3 py-2 rounded-lg text-sm hover:bg-orange-600 transition duration-300">
                                                <span class="btn-text">أضف للسلة</span>
                                                <span class="loading-text hidden">جاري...</span>
                                            </button>
                                        @else
                                            <span class="text-xs text-red-500 bg-red-50 px-2 py-1 rounded">غير متوفر</span>
                                        @endif
                                        
                                        <a href="{{ route('products.show', $product->id) }}" 
                                           class="text-orange-500 hover:text-orange-600 text-sm font-medium">
                                            عرض التفاصيل
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $products->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="w-24 h-24 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <h2 class="text-2xl font-semibold text-gray-600 mb-2">لا توجد منتجات</h2>
                    <p class="text-gray-500">لم يتم العثور على أي منتجات حالياً</p>
                </div>
            @endif
        </div>
    </div>
</div>

<script>
// Add to cart functionality
function addToCart(productId) {
    const button = event.target.closest('.add-to-cart-btn');
    const btnText = button.querySelector('.btn-text');
    const loadingText = button.querySelector('.loading-text');
    
    // Show loading state
    btnText.classList.add('hidden');
    loadingText.classList.remove('hidden');
    button.disabled = true;
    
    fetch(`/cart/add/${productId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ quantity: 1 })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update cart count in header
            const cartBadge = document.getElementById('cart-count');
            if (cartBadge) {
                cartBadge.textContent = data.cart_count;
                cartBadge.classList.remove('hidden');
            } else if (data.cart_count > 0) {
                // Create cart badge if it doesn't exist
                const cartLink = document.querySelector('a[href="/cart"]');
                if (cartLink) {
                    const badge = document.createElement('span');
                    badge.id = 'cart-count';
                    badge.className = 'absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center';
                    badge.textContent = data.cart_count;
                    cartLink.appendChild(badge);
                }
            }
            
            // Show success message
            showNotification('تم إضافة المنتج إلى السلة بنجاح!', 'success');
        } else {
            showNotification('حدث خطأ في إضافة المنتج', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('حدث خطأ في إضافة المنتج', 'error');
    })
    .finally(() => {
        // Reset button state
        btnText.classList.remove('hidden');
        loadingText.classList.add('hidden');
        button.disabled = false;
    });
}

// Notification function
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 px-6 py-3 rounded-lg text-white ${type === 'success' ? 'bg-green-500' : 'bg-red-500'} shadow-lg transition-opacity duration-300`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.opacity = '0';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}
</script>
@endsection
