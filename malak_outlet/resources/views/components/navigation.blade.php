<nav class="bg-orange-500 text-white px-4 md:px-10 pb-3 hidden md:block">
    <div class="flex justify-between items-center container mx-auto flex-wrap">
        <button class="bg-white text-orange-500 border-none py-2 px-4 rounded flex items-center font-bold text-sm lg:text-base">
            <span class="ml-2">≡</span> تصفح جميع الفئات
        </button>

        <ul class="flex list-none m-0 p-0 flex-wrap">
            <li class="mr-3 lg:mr-6 relative font-bold">
                <a href="{{ route('about') }}" class="text-white no-underline text-sm lg:text-base flex items-center hover:text-yellow-300">
                    عن الشركة
                </a>
            </li>
            <li class="mr-3 lg:mr-6 relative font-bold">
                <a href="{{ route('offers') }}" class="text-white no-underline text-sm lg:text-base flex items-center hover:text-yellow-300">
                    العروض
                </a>
            </li>
            <li class="mr-3 lg:mr-6 relative font-bold">
                <a href="{{ route('products.category', 'building-blocks') }}" class="text-white no-underline text-sm lg:text-base flex items-center hover:text-yellow-300">
                    مكعبات البناء
                </a>
            </li>
            <li class="mr-3 lg:mr-6 relative font-bold">
                <a href="{{ route('products.category', 'lego') }}" class="text-white no-underline text-sm lg:text-base flex items-center hover:text-yellow-300">
                    مجموعات ليغو
                </a>
            </li>
            <li class="mr-3 lg:mr-6 relative font-bold">
                <a href="{{ route('products.category', 'toys') }}" class="text-white no-underline text-sm lg:text-base flex items-center hover:text-yellow-300">
                    الألعاب
                </a>
            </li>
            <li class="mr-3 lg:mr-6 relative font-bold">
                <a href="{{ route('products.index') }}" class="text-white no-underline text-sm lg:text-base flex items-center hover:text-yellow-300">
                    جميع المنتجات
                </a>
            </li>
        </ul>
    </div>
</nav>