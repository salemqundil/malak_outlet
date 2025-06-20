<!-- Mobile Menu Overlay -->
<div x-show="mobileMenuOpen" @click="mobileMenuOpen = false"
    class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden" 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0" 
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-300" 
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0">
</div>

<!-- Mobile Side Menu -->
<div class="fixed top-0 right-0 w-3/4 h-full bg-white shadow-2xl z-50 transform transition-transform duration-300 mobile-menu md:hidden"
    :class="{'open': mobileMenuOpen}" x-show="mobileMenuOpen">
    <div class="p-4 border-b border-gray-200">
        <div class="flex justify-between items-center">
            <h2 class="text-lg font-bold text-orange-500">القائمة</h2>
            <button @click="mobileMenuOpen = false" class="text-gray-500 hover:text-gray-700">
                ✕
            </button>
        </div>
    </div>
    <div class="py-4">
        <ul class="list-none m-0 p-0">
            <li class="border-b border-gray-100">
                <a href="{{ route('products.category', 'toys') }}" class="block py-3 px-4 text-gray-700 hover:bg-orange-50">الألعاب</a>
            </li>
            <li class="border-b border-gray-100">
                <a href="{{ route('products.category', 'lego') }}" class="block py-3 px-4 text-gray-700 hover:bg-orange-50">مجموعات ليغو</a>
            </li>
            <li class="border-b border-gray-100">
                <a href="{{ route('products.category', 'building-blocks') }}" class="block py-3 px-4 text-gray-700 hover:bg-orange-50">مكعبات البناء</a>
            </li>
            <li class="border-b border-gray-100">
                <a href="{{ route('offers') }}" class="block py-3 px-4 text-gray-700 hover:bg-orange-50">العروض</a>
            </li>
            <li class="border-b border-gray-100">
                <a href="{{ route('about') }}" class="block py-3 px-4 text-gray-700 hover:bg-orange-50">عن الشركة</a>
            </li>
            @guest
                <li class="border-b border-gray-100">
                    <a href="{{ route('login') }}" class="block py-3 px-4 text-gray-700 hover:bg-orange-50">تسجيل دخول / تسجيل</a>
                </li>
            @else
                <li class="border-b border-gray-100">
                    <a href="{{ route('profile') }}" class="block py-3 px-4 text-gray-700 hover:bg-orange-50">الملف الشخصي</a>
                </li>
                <li class="border-b border-gray-100">
                    <a href="{{ route('orders') }}" class="block py-3 px-4 text-gray-700 hover:bg-orange-50">طلباتي</a>
                </li>
                <li class="border-b border-gray-100">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-right py-3 px-4 text-gray-700 hover:bg-orange-50">تسجيل خروج</button>
                    </form>
                </li>
            @endguest
            <li class="border-b border-gray-100">
                <a href="{{ route('products.index') }}" class="block py-3 px-4 text-gray-700 hover:bg-orange-50">جميع المنتجات</a>
            </li>
        </ul>
    </div>
</div>