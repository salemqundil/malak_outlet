<!-- Footer -->
<footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"50\" cy=\"50\" r=\"2\" fill=\"white\"/></svg>'); background-size: 50px 50px;"></div>
    </div>
    
    <!-- Newsletter Section -->
    <div class="bg-gradient-to-r from-orange-500 to-orange-600 py-12 relative">
        <div class="container mx-auto px-4 md:px-10 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="text-center lg:text-right mb-6 lg:mb-0 lg:flex-1">
                    <h2 class="text-2xl md:text-3xl font-bold text-white mb-3">
                        🚀 ابق على اطلاع بآخر العروض!
                    </h2>
                    <p class="text-orange-100 text-lg">احصل على عروض حصرية ومنتجات جديدة مباشرة إلى بريدك الإلكتروني</p>
                </div>
                <div class="w-full lg:w-2/5">
                    <form class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="أدخل بريدك الإلكتروني..." 
                               class="flex-1 py-4 px-6 rounded-xl border-0 text-gray-800 placeholder-gray-500 outline-none focus:ring-4 focus:ring-orange-300 transition-all duration-200 text-right" />
                        <button type="submit" class="bg-white text-orange-600 font-bold py-4 px-8 rounded-xl hover:bg-gray-100 transform hover:scale-105 transition-all duration-200 shadow-lg flex items-center justify-center">
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            اشترك الآن
                        </button>
                    </form>
                    <p class="text-orange-200 text-sm mt-3 text-center">لا تقلق، لن نرسل لك رسائل مزعجة</p>
                </div>
            </div>
        </div>
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-x-16 -translate-y-16"></div>
        <div class="absolute bottom-0 right-0 w-24 h-24 bg-white opacity-5 rounded-full translate-x-12 translate-y-12"></div>
    </div>

    <!-- Main Footer Content -->
    <div class="py-16 px-4 md:px-10 relative z-10">
        <div class="container mx-auto">
            <!-- Top Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('images/malak.png') }}" alt="MalakOutlet Logo" class="w-16 h-16 ml-4" />
                        <div>
                            <h3 class="text-2xl font-bold text-white">MalakOutlet</h3>
                            <p class="text-orange-400 text-sm">متجر الألعاب الأول في الأردن</p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-base leading-relaxed mb-6 max-w-md">
                        وجهتك المثالية لجميع منتجات الألعاب والترفيه التعليمية للأطفال. نقدم مجموعة واسعة من الألعاب المميزة من أفضل العلامات التجارية العالمية بأفضل الأسعار.
                    </p>
                    
                    <!-- Trust Badges -->
                    <div class="flex flex-wrap gap-4 mb-6">
                        <div class="bg-gray-700 rounded-lg p-3 flex items-center">
                            <svg class="w-6 h-6 text-green-400 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-300">منتجات أصلية</span>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-3 flex items-center">
                            <svg class="w-6 h-6 text-blue-400 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-300">توصيل سريع</span>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-3 flex items-center">
                            <svg class="w-6 h-6 text-yellow-400 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="text-sm text-gray-300">دعم 24/7</span>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="flex space-x-4 space-x-reverse">
                        <a href="#" class="group bg-gray-700 hover:bg-blue-600 p-3 rounded-xl transition-all duration-300 transform hover:scale-110">
                            <svg class="w-6 h-6 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="group bg-gray-700 hover:bg-blue-700 p-3 rounded-xl transition-all duration-300 transform hover:scale-110">
                            <svg class="w-6 h-6 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="group bg-gray-700 hover:bg-pink-600 p-3 rounded-xl transition-all duration-300 transform hover:scale-110">
                            <svg class="w-6 h-6 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.748.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z."/>
                            </svg>
                        </a>
                        <a href="#" class="group bg-gray-700 hover:bg-red-600 p-3 rounded-xl transition-all duration-300 transform hover:scale-110">
                            <svg class="w-6 h-6 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-6 text-white flex items-center">
                        <svg class="w-6 h-6 ml-3 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                        روابط مهمة
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('about') }}" class="text-gray-300 hover:text-orange-400 transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 ml-2 text-orange-400 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                عن الشركة
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('privacy') }}" class="text-gray-300 hover:text-orange-400 transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 ml-2 text-orange-400 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                سياسة الخصوصية
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('terms') }}" class="text-gray-300 hover:text-orange-400 transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 ml-2 text-orange-400 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                الشروط والأحكام
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('returns') }}" class="text-gray-300 hover:text-orange-400 transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 ml-2 text-orange-400 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                سياسة الاستبدال
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}" class="text-gray-300 hover:text-orange-400 transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 ml-2 text-orange-400 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                الأسئلة الشائعة
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Categories -->
                <div>
                    <h3 class="text-xl font-bold mb-6 text-white flex items-center">
                        <svg class="w-6 h-6 ml-3 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14-7l2 2m0 0l2 2m-2-2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9a2 2 0 012-2h10a2 2 0 012 2z"></path>
                        </svg>
                        الفئات الرئيسية
                    </h3>
                    <ul class="space-y-3">
                        @foreach(App\Models\Category::where('is_active', true)->take(5)->get() as $category)
                        <li>
                            <a href="{{ route('products.category', $category->slug) }}" class="text-gray-300 hover:text-orange-400 transition-colors duration-200 flex items-center group">
                                <svg class="w-4 h-4 ml-2 text-orange-400 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                {{ $category->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-gradient-to-r from-gray-800 to-gray-700 rounded-2xl p-8 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center md:text-right">
                        <div class="bg-orange-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto md:mx-0 mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-white mb-2">العنوان</h4>
                        <p class="text-gray-300">الأردن - عمان<br>شفابدران - دوار التطبيقية</p>
                    </div>
                    
                    <div class="text-center md:text-right">
                        <div class="bg-orange-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto md:mx-0 mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-white mb-2">الهاتف</h4>
                        <p class="text-gray-300" dir="ltr">+962 79 004 35 81</p>
                    </div>
                    
                    <div class="text-center md:text-right">
                        <div class="bg-orange-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto md:mx-0 mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-white mb-2">البريد الإلكتروني</h4>
                        <p class="text-gray-300">info@MalakOutlet.com</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-gray-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-center md:text-right mb-4 md:mb-0">
                        <p class="text-gray-400">© 2025 MalakOutlet. جميع الحقوق محفوظة.</p>
                        <p class="text-gray-500 text-sm mt-1">صُنع بـ ❤️ في الأردن</p>
                    </div>
                    
                    <!-- Payment Methods -->
                    <div class="flex items-center space-x-4 space-x-reverse">
                        <span class="text-gray-400 text-sm">طرق الدفع المقبولة:</span>
                        <div class="flex space-x-2 space-x-reverse">
                            <div class="bg-white rounded p-2">
                                <svg class="w-8 h-6" viewBox="0 0 38 24" fill="none">
                                    <rect width="38" height="24" rx="4" fill="#0066B2"/>
                                    <path d="M12.5 8.5h3v7h-3v-7zm5.5 0h3v7h-3v-7zm5.5 0h3v7h-3v-7z" fill="white"/>
                                </svg>
                            </div>
                            <div class="bg-white rounded p-2">
                                <svg class="w-8 h-6" viewBox="0 0 38 24" fill="none">
                                    <rect width="38" height="24" rx="4" fill="#FF5F00"/>
                                    <circle cx="14" cy="12" r="6" fill="#FF5F00"/>
                                    <circle cx="24" cy="12" r="6" fill="#EB001B"/>
                                </svg>
                            </div>
                            <div class="bg-white rounded p-2">
                                <svg class="w-8 h-6" viewBox="0 0 38 24" fill="none">
                                    <rect width="38" height="24" rx="4" fill="#F7F7F7"/>
                                    <text x="19" y="14" text-anchor="middle" fill="#333" font-size="6" font-weight="bold">PayPal</text>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>