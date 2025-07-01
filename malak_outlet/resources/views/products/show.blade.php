@extends('layouts.main')

@section('title', $product->name . ' - Malak Outlet')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-6xl mx-auto">
            <!-- Breadcrumb -->
            <nav class="text-sm mb-6" dir="ltr">
                <a href="{{ route('home') }}" class="text-orange-500 hover:underline">الرئيسية</a>
                <span class="mx-2">/</span>
                <a href="{{ route('products.category', $product->category->slug) }}" class="text-orange-500 hover:underline">{{ $product->category->name }}</a>
                <span class="mx-2">/</span>
                <span class="text-gray-600">{{ $product->name }}</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Product Images -->
                <div class="space-y-4">
                    <div class="aspect-square bg-white rounded-lg shadow-md overflow-hidden">
                        @if($product->images->first())
                            <img src="{{ $product->images->first()->image_url }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover"
                                 id="main-image">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Thumbnail Images -->
                    @if($product->images->count() > 1)
                        <div class="grid grid-cols-4 gap-2">
                            @foreach($product->images as $image)
                                <div class="aspect-square bg-white rounded-lg shadow-sm overflow-hidden cursor-pointer hover:shadow-md transition duration-200"
                                     onclick="changeMainImage('{{ $image->image_url }}')">
                                    <img src="{{ $image->image_url }}" 
                                         alt="{{ $product->name }}" 
                                         class="w-full h-full object-cover">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Product Details -->
                <div class="space-y-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 mb-2 text-right">{{ $product->name }}</h1>
                        @if($product->brand)
                            <p class="text-lg text-gray-600 text-right">{{ $product->brand->name }}</p>
                        @endif
                        <p class="text-sm text-gray-500 text-right">SKU: {{ $product->sku }}</p>
                    </div>

                    <!-- Price -->
                    <div class="text-right">
                        @if($product->sale_price)
                            <div class="space-y-1">
                                <span class="text-3xl font-bold text-orange-600">{{ number_format($product->sale_price, 2) }} ر.س</span>
                                <div>
                                    <span class="text-xl text-gray-500 line-through">{{ number_format($product->price, 2) }} ر.س</span>
                                    <span class="bg-red-100 text-red-800 text-sm font-medium px-2 py-1 rounded mr-2">
                                        وفر {{ number_format((($product->price - $product->sale_price) / $product->price) * 100, 0) }}%
                                    </span>
                                </div>
                            </div>
                        @else
                            <span class="text-3xl font-bold text-gray-900">{{ number_format($product->price, 2) }} ر.س</span>
                        @endif
                    </div>

                    <!-- Stock Status -->
                    <div class="text-right">
                        @if($product->stock_quantity > 0)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                متوفر في المخزن ({{ $product->stock_quantity }} قطعة)
                            </span>
                        @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                غير متوفر
                            </span>
                        @endif
                    </div>

                    <!-- Description -->
                    @if($product->description)
                        <div class="text-right">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">وصف المنتج</h3>
                            <p class="text-gray-700 leading-relaxed">{{ $product->description }}</p>
                        </div>
                    @endif

                    <!-- Add to Cart Section -->
                    <div class="border-t pt-6">
                        <div class="flex items-center space-x-4 space-x-reverse mb-4">
                            <label class="text-sm font-medium text-gray-700">الكمية:</label>
                            <div class="flex items-center border border-gray-300 rounded-lg">
                                <button type="button" onclick="changeQuantity(-1)" class="px-3 py-2 hover:bg-gray-100 transition duration-200">-</button>
                                <input type="number" id="quantity" value="1" min="1" max="{{ $product->stock_quantity }}" 
                                       class="w-16 text-center border-0 focus:ring-0 focus:outline-none">
                                <button type="button" onclick="changeQuantity(1)" class="px-3 py-2 hover:bg-gray-100 transition duration-200">+</button>
                            </div>
                        </div>

                        <div class="space-y-3">
                            @if($product->stock_quantity > 0)
                                <button onclick="addToCartWithQuantity({{ $product->id }})" 
                                        class="w-full bg-orange-500 text-white py-3 px-6 rounded-lg font-semibold text-lg hover:bg-orange-600 transition duration-300 add-to-cart-btn">
                                    <span class="btn-text">أضف إلى السلة</span>
                                    <span class="loading-text hidden">جاري الإضافة...</span>
                                </button>
                            @else
                                <button disabled class="w-full bg-gray-300 text-gray-500 py-3 px-6 rounded-lg font-semibold text-lg cursor-not-allowed">
                                    غير متوفر
                                </button>
                            @endif
                            
                            <button class="w-full border-2 border-orange-500 text-orange-500 py-3 px-6 rounded-lg font-semibold text-lg hover:bg-orange-50 transition duration-300">
                                أضف إلى المفضلة
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            @if($relatedProducts->count() > 0)
                <section class="mt-16">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8 text-right">منتجات ذات صلة</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($relatedProducts as $relatedProduct)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="relative">
                                    @if($relatedProduct->images->first())
                                        <img src="{{ $relatedProduct->images->first()->image_url }}" 
                                             alt="{{ $relatedProduct->name }}" 
                                             class="w-full h-48 object-cover">
                                    @else
                                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    @endif
                                </div>
                                <div class="p-4">
                                    <h3 class="font-semibold text-lg mb-2 text-gray-800 text-right">{{ $relatedProduct->name }}</h3>
                                    <div class="text-right">
                                        @if($relatedProduct->sale_price)
                                            <span class="text-lg font-bold text-orange-600">{{ number_format($relatedProduct->sale_price, 2) }} ر.س</span>
                                            <span class="text-sm text-gray-500 line-through mr-2">{{ number_format($relatedProduct->price, 2) }} ر.س</span>
                                        @else
                                            <span class="text-lg font-bold text-gray-800">{{ number_format($relatedProduct->price, 2) }} ر.س</span>
                                        @endif
                                    </div>
                                    <a href="{{ route('products.show', $relatedProduct->id) }}" 
                                       class="block mt-3 text-center bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-300">
                                        عرض المنتج
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
        </div>
    </div>
</div>

<script>
function changeMainImage(imageUrl) {
    document.getElementById('main-image').src = imageUrl;
}

function changeQuantity(change) {
    const quantityInput = document.getElementById('quantity');
    const currentValue = parseInt(quantityInput.value);
    const newValue = currentValue + change;
    const maxValue = parseInt(quantityInput.max);
    
    if (newValue >= 1 && newValue <= maxValue) {
        quantityInput.value = newValue;
    }
}

function addToCartWithQuantity(productId) {
    const quantity = parseInt(document.getElementById('quantity').value);
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
        body: JSON.stringify({ quantity: quantity })
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
