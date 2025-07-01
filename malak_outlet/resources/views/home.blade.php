@extends('layouts.main')

@section('content')
<main class="container mx-auto px-4" style="max-width: 1400px;">
    <!-- Hero Section -->
    <section class="flex flex-col-reverse md:flex-row-reverse bg-orange-50 my-5 rounded-lg overflow-hidden relative">
        <div class="w-full md:w-1/2 flex items-center justify-center py-4">
            <img src="{{ asset('images/shop2.png') }}" alt="مجموعة حرب النجوم ليغو" class="max-w-full h-auto md:h-80" />
        </div>
        <div class="p-5 md:p-10 w-full md:w-1/2 text-right">
            <span class="inline-block py-1 px-4 bg-orange-100 text-orange-500 rounded-full font-bold mb-3 text-xs md:text-sm">مجموعة جديدة</span>
            <h1 class="text-2xl md:text-4xl my-2 md:my-3 text-gray-800 font-bold">لكل لحظة لعب... قصة خيالية تبدأ هنا!</h1>
            <p class="text-gray-600 mb-4 md:mb-8 text-sm md:text-base">متعة لا تنتهي... وأفكار تنمو مع كل لعبة!</p>
            <a href="{{ route('products.index') }}" class="inline-block py-2 px-6 md:py-3 md:px-8 bg-orange-500 text-white no-underline rounded font-bold transition-colors hover:bg-orange-600 text-sm md:text-base">تسوق الآن</a>
        </div>
    </section>

    <!-- Promotional Cards -->
    <div class="flex flex-col md:flex-row my-5 gap-5">
        <!-- Card 1 -->
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm flex flex-col md:flex-row w-full">
            <div class="flex-1 flex items-center justify-center p-4">
                <img src="{{ asset('images/pngegg.png') }}" alt="أحذية عالمية" class="max-w-full max-h-48 object-contain">
            </div>
            <div class="p-5 md:p-8 flex-1">
                <span class="inline-block py-1 px-3 bg-orange-50 text-orange-500 rounded-full font-bold mb-2 md:mb-4 text-xs md:text-sm">وصل حديثًا</span>
                <h2 class="text-xl md:text-2xl my-1 mb-2 md:mb-4">تشكيلتنا الجديدة من الأحذية العالمية وصلت!</h2>
                <a href="{{ route('products.index') }}" class="inline-flex items-center text-orange-500 font-bold no-underline text-sm md:text-base">تصفح المجموعة ←</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm flex flex-col md:flex-row w-full mt-5 md:mt-0">
            <div class="flex-1 flex items-center justify-center p-4">
                <img src="{{ asset('images/baby.png') }}" alt="ألعاب تعليمية" class="max-w-full max-h-48 object-contain">
            </div>
            <div class="p-5 md:p-8 flex-1">
                <span class="inline-block py-1 px-3 bg-orange-50 text-orange-500 rounded-full font-bold mb-2 md:mb-4 text-xs md:text-sm">الأكثر رواجاً</span>
                <h2 class="text-xl md:text-2xl my-1 mb-2 md:mb-4">منتجات العناية بطفلك <br>بجودة تريحك وتريح طفلك.</h2>
                <a href="{{ route('products.index') }}" class="inline-flex items-center text-orange-500 font-bold no-underline text-sm md:text-base">تصفح المجموعة ←</a>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <section class="my-8 md:my-10">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-xl md:text-2xl text-gray-800 m-0 font-bold">الألعاب حسب الفئة</h2>
            <a href="{{ route('products.index') }}" class="flex items-center text-orange-500 no-underline font-bold text-sm md:text-base">
                عرض جميع الفئات ←
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6">
            @php
                $categoryIcons = [
                    'electronics' => ['icon' => '📱', 'color' => 'bg-gradient-to-br from-blue-50 to-blue-100', 'age' => 'عمر 6+', 'border' => 'border-blue-200'],
                    'clothing' => ['icon' => '👕', 'color' => 'bg-gradient-to-br from-green-50 to-green-100', 'age' => 'جميع الأعمار', 'border' => 'border-green-200'],
                    'home-garden' => ['icon' => '🏠', 'color' => 'bg-gradient-to-br from-purple-50 to-purple-100', 'age' => 'عمر 8+', 'border' => 'border-purple-200'],
                    'sports-fitness' => ['icon' => '⚽', 'color' => 'bg-gradient-to-br from-red-50 to-red-100', 'age' => 'عمر 5+', 'border' => 'border-red-200'],
                    'books' => ['icon' => '📚', 'color' => 'bg-gradient-to-br from-indigo-50 to-indigo-100', 'age' => 'عمر 3+', 'border' => 'border-indigo-200'],
                    'toys-games' => ['icon' => '🎮', 'color' => 'bg-gradient-to-br from-yellow-50 to-yellow-100', 'age' => 'عمر 6+', 'border' => 'border-yellow-200'],
                ];
            @endphp
            
            @foreach($categories->take(6) as $category)
            @php
                $iconData = $categoryIcons[$category->slug] ?? ['icon' => '🛍️', 'color' => 'bg-gradient-to-br from-orange-50 to-orange-100', 'age' => 'جميع الأعمار', 'border' => 'border-orange-200'];
            @endphp
            <a href="{{ route('products.category', $category->slug) }}" 
               class="group flex flex-col items-center p-4 md:p-6 rounded-xl bg-white shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 no-underline text-gray-700 border {{ $iconData['border'] }} hover:border-opacity-100">
                <div class="w-16 h-16 md:w-20 md:h-20 {{ $iconData['color'] }} rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <span class="text-2xl md:text-3xl">{{ $iconData['icon'] }}</span>
                </div>
                <div class="font-bold text-center text-sm md:text-base group-hover:text-orange-600 transition-colors mb-2">{{ $category->name }}</div>
                <span class="inline-block py-1.5 px-3 bg-gradient-to-r from-orange-100 to-orange-200 text-orange-700 rounded-full text-xs font-medium shadow-sm">{{ $iconData['age'] }}</span>
            </a>
            @endforeach
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="my-8 md:my-10">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-xl md:text-2xl text-gray-800 m-0 font-bold">منتجات مميزة</h2>
            <a href="{{ route('products.index') }}" class="flex items-center text-orange-500 no-underline font-bold text-sm md:text-base">
                عرض الكل ←
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse($featuredProducts->take(8) as $product)
            <div class="group product-card bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-orange-200 transform hover:-translate-y-2 relative card-shine">
                <div class="relative overflow-hidden">
                    <a href="{{ route('products.show', $product->id) }}" class="block">
                        <div class="h-56 md:h-64 relative overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">
                            @if($product->images->first())
                                <img src="{{ $product->images->first()->image_url }}" alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                    <div class="animate-float">
                                        <svg class="w-20 h-20 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                            @endif
                            
                            <!-- Overlay with quick actions -->
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                                <div class="flex space-x-3 space-x-reverse">
                                    <button class="bg-white text-gray-700 p-3 rounded-full shadow-lg hover:bg-orange-500 hover:text-white transition-all duration-200 transform hover:scale-110">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="bg-white text-gray-700 p-3 rounded-full shadow-lg hover:bg-red-500 hover:text-white transition-all duration-200 transform hover:scale-110">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Product badges -->
                            <div class="absolute top-3 right-3 flex flex-col space-y-2">
                                @if($product->sale_price)
                                <span class="bg-gradient-to-r from-red-500 to-red-600 text-white text-xs font-bold rounded-full py-1.5 px-3 shadow-lg animate-pulse">
                                    خصم {{ number_format((($product->price - $product->sale_price) / $product->price) * 100, 0) }}%
                                </span>
                                @elseif($product->is_featured)
                                <span class="bg-gradient-to-r from-green-500 to-green-600 text-white text-xs font-bold rounded-full py-1.5 px-3 shadow-lg">⭐ مميز</span>
                                @endif
                                
                                @if($product->created_at->diffInDays() < 30)
                                <span class="bg-gradient-to-r from-blue-500 to-blue-600 text-white text-xs font-bold rounded-full py-1.5 px-3 shadow-lg">🆕 جديد</span>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="p-5">
                    <a href="{{ route('products.show', $product->id) }}" class="block">
                        <!-- Category and Brand -->
                        <div class="flex items-center justify-between mb-3">
                            @if($product->category)
                                <span class="text-orange-600 text-xs font-medium bg-orange-50 px-3 py-1 rounded-full border border-orange-200">{{ $product->category->name }}</span>
                            @endif
                            @if($product->brand)
                                <span class="text-gray-500 text-xs font-medium bg-gray-100 px-2 py-1 rounded">{{ $product->brand->name }}</span>
                            @endif
                        </div>
                        
                        <!-- Product Name -->
                        <h3 class="text-base md:text-lg font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-orange-600 transition-colors">
                            {{ $product->name }}
                        </h3>
                        
                        <!-- Rating -->
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                @endfor
                            </div>
                            <span class="text-gray-500 text-sm mr-2">(4.5)</span>
                            <span class="text-gray-400 text-xs">• 127 تقييم</span>
                        </div>
                        
                        <!-- Price Section -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex flex-col">
                                @if($product->sale_price)
                                    <div class="flex items-center space-x-2 space-x-reverse">
                                        <span class="text-xl font-bold text-gradient">{{ number_format($product->sale_price, 0) }} د.أ</span>
                                        <span class="text-sm text-gray-500 line-through">{{ number_format($product->price, 0) }} د.أ</span>
                                    </div>
                                    <span class="text-xs text-green-600 font-medium bg-green-50 px-2 py-1 rounded-full inline-block w-fit">وفّر {{ number_format($product->price - $product->sale_price, 0) }} د.أ</span>
                                @else
                                    <span class="text-xl font-bold text-gradient">{{ number_format($product->price, 0) }} د.أ</span>
                                @endif
                            </div>
                            
                            <!-- Stock Status -->
                            <div class="text-right">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-green-500 rounded-full ml-2 animate-pulse"></div>
                                    <span class="text-xs text-green-600 font-medium">متوفر</span>
                                </div>
                                <span class="text-xs text-gray-400">3 قطع متبقية</span>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Action Buttons -->
                    <div class="flex space-x-3 space-x-reverse">
                        <button class="add-to-cart-btn flex-1 btn-gradient text-white font-bold py-3 px-4 rounded-lg transition-all duration-200 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed"
                                data-product-id="{{ $product->id }}">
                            <span class="btn-text flex items-center justify-center">
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 2.5M7 13l2.5 2.5m6 0L18 18H9m6 0a2 2 0 11-4 0m4 0a2 2 0 11-4 0m4 0h2a2 2 0 002-2V6a2 2 0 00-2-2H4a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                                </svg>
                                أضف للسلة
                            </span>
                            <span class="loading-text hidden">
                                <svg class="animate-spin h-5 w-5 text-white mx-auto" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </span>
                        </button>
                        
                        <button class="bg-gray-100 text-gray-600 p-3 rounded-lg hover:bg-orange-50 hover:text-orange-600 transition-colors duration-200 group">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Quick Features -->
                    <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="w-4 h-4 ml-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            توصيل مجاني
                        </div>
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="w-4 h-4 ml-1 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            ضمان سنة
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-16">
                <div class="mx-auto w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center mb-6 animate-float">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-600 mb-3">لا توجد منتجات مميزة متاحة حالياً</h3>
                <p class="text-gray-500 mb-6">سنقوم بإضافة منتجات جديدة قريباً</p>
                <a href="{{ route('products.index') }}" class="btn-gradient text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 inline-block">
                    تصفح جميع المنتجات
                </a>
            </div>
            @endforelse
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="my-8 md:my-10 bg-orange-50 rounded-lg p-5 md:p-8">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="text-center md:text-right mb-5 md:mb-0">
                <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">لا تفوّت جديدنا!</h2>
                <p class="text-gray-600 text-sm md:text-base">احصل على آخر العروض والمنتجات الجديدة مباشرة إلى هاتفك</p>
            </div>
            <div class="w-full md:w-2/5">
                <div class="flex flex-col sm:flex-row w-full">
                    <input type="email" placeholder="أدخل رقم هاتفك" 
                           class="flex-grow py-3 px-4 rounded-lg md:rounded-r-none border-orange-200 border-2 mb-3 sm:mb-0 outline-none text-right" />
                    <button class="bg-orange-500 text-white font-bold py-3 px-6 rounded-lg md:rounded-r-none md:rounded-l-lg hover:bg-orange-600 transition-colors">
                        اشترك الآن
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Wait for DOM to load
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners to all add-to-cart buttons
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = this.getAttribute('data-product-id');
            addToCart(productId, this);
        });
    });
});

// Add to cart functionality
function addToCart(productId, button) {
    const btnText = button.querySelector('.btn-text');
    const loadingText = button.querySelector('.loading-text');
    
    // Show loading state
    if (btnText) btnText.classList.add('hidden');
    if (loadingText) loadingText.classList.remove('hidden');
    button.disabled = true;
    
    fetch('/cart/add/' + productId, {
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
        if (btnText) btnText.classList.remove('hidden');
        if (loadingText) loadingText.classList.add('hidden');
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