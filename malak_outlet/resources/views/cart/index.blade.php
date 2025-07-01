@extends('layouts.app')

@section('title', 'سلة التسوق')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 mb-8 text-right">سلة التسوق</h1>

            @if(empty($cartItems))
                <div class="bg-white rounded-lg shadow-md p-8 text-center">
                    <div class="mb-6">
                        <svg class="w-24 h-24 text-gray-300 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4m2.6 8L5 3H3m4 10v6a1 1 0 001 1h8a1 1 0 001-1v-6m-9 5a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-600 mb-4">سلة التسوق فارغة</h2>
                    <p class="text-gray-500 mb-6">لم تقم بإضافة أي منتجات إلى سلة التسوق بعد</p>
                    <a href="{{ route('home') }}" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-orange-600 transition duration-300">
                        تسوق الآن
                    </a>
                </div>
            @else
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Cart Items -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="p-6">
                                <h2 class="text-xl font-semibold text-gray-900 mb-6 text-right">المنتجات ({{ count($cartItems) }})</h2>
                                
                                <div class="space-y-6">
                                    @foreach($cartItems as $item)
                                        <div class="flex items-center space-x-4 space-x-reverse border-b border-gray-200 pb-6" data-product-id="{{ $item['product']->id }}">
                                            <!-- Product Image -->
                                            <div class="flex-shrink-0">
                                                @if($item['product']->images->first())
                                                    <img src="{{ $item['product']->images->first()->image_url }}" 
                                                         alt="{{ $item['product']->name }}" 
                                                         class="w-20 h-20 object-cover rounded-lg">
                                                @else
                                                    <div class="w-20 h-20 bg-gray-200 rounded-lg flex items-center justify-center">
                                                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                        </svg>
                                                    </div>
                                                @endif
                                            </div>

                                            <!-- Product Details -->
                                            <div class="flex-1 min-w-0">
                                                <h3 class="text-lg font-medium text-gray-900 text-right">{{ $item['product']->name }}</h3>
                                                @if($item['product']->brand)
                                                    <p class="text-sm text-gray-500 text-right">{{ $item['product']->brand->name }}</p>
                                                @endif
                                                
                                                <!-- Price -->
                                                <div class="mt-2 text-right">
                                                    @if($item['product']->sale_price)
                                                        <span class="text-lg font-bold text-orange-600">{{ number_format($item['product']->sale_price, 2) }} ر.س</span>
                                                        <span class="text-sm text-gray-500 line-through mr-2">{{ number_format($item['product']->price, 2) }} ر.س</span>
                                                    @else
                                                        <span class="text-lg font-bold text-gray-900">{{ number_format($item['product']->price, 2) }} ر.س</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- Quantity Controls -->
                                            <div class="flex items-center space-x-2 space-x-reverse">
                                                <button onclick="updateQuantity({{ $item['product']->id }}, {{ $item['quantity'] - 1 }})" 
                                                        class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition duration-200"
                                                        {{ $item['quantity'] <= 1 ? 'disabled' : '' }}>
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                                    </svg>
                                                </button>
                                                
                                                <span class="w-12 text-center font-medium quantity-display">{{ $item['quantity'] }}</span>
                                                
                                                <button onclick="updateQuantity({{ $item['product']->id }}, {{ $item['quantity'] + 1 }})"
                                                        class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition duration-200">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                    </svg>
                                                </button>
                                            </div>

                                            <!-- Subtotal -->
                                            <div class="text-right">
                                                <div class="text-lg font-bold text-gray-900 subtotal">{{ number_format($item['subtotal'], 2) }} ر.س</div>
                                            </div>

                                            <!-- Remove Button -->
                                            <button onclick="removeFromCart({{ $item['product']->id }})" 
                                                    class="text-red-500 hover:text-red-700 transition duration-200 p-2">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-lg shadow-md p-6 sticky top-6">
                            <h2 class="text-xl font-semibold text-gray-900 mb-6 text-right">ملخص الطلب</h2>
                            
                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">المجموع الفرعي</span>
                                    <span class="font-medium" id="subtotal">{{ number_format($total, 2) }} ر.س</span>
                                </div>
                                
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">الشحن</span>
                                    <span class="font-medium">مجاني</span>
                                </div>
                                
                                <div class="border-t border-gray-200 pt-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-lg font-semibold text-gray-900">الإجمالي</span>
                                        <span class="text-xl font-bold text-orange-600" id="total">{{ number_format($total, 2) }} ر.س</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 space-y-3">
                                <button class="w-full bg-orange-500 text-white py-3 px-4 rounded-lg font-medium hover:bg-orange-600 transition duration-300">
                                    إتمام الطلب
                                </button>
                                
                                <a href="{{ route('home') }}" class="block w-full text-center bg-gray-100 text-gray-700 py-3 px-4 rounded-lg font-medium hover:bg-gray-200 transition duration-300">
                                    متابعة التسوق
                                </a>
                                
                                <button onclick="clearCart()" class="w-full text-red-500 py-2 px-4 rounded-lg font-medium hover:bg-red-50 transition duration-300">
                                    مسح السلة
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<script>
function updateQuantity(productId, quantity) {
    if (quantity < 1) return;
    
    fetch(`/cart/update/${productId}`, {
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
            location.reload();
        }
    });
}

function removeFromCart(productId) {
    if (confirm('هل أنت متأكد من حذف هذا المنتج؟')) {
        fetch(`/cart/remove/${productId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }
}

function clearCart() {
    if (confirm('هل أنت متأكد من مسح السلة بالكامل؟')) {
        fetch('/cart/clear', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }
}
</script>
@endsection
