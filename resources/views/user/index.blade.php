@extends('user.wrapper')

@section('user')


    <!-- mobile menubar -->
    <div
        class="fixed w-full border-t border-gray-200 shadow-sm bg-white py-3 bottom-0 left-0 flex justify-around items-start px-6 lg:hidden z-40">
        <a href="javascript:void(0)" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl" id="menuBar">
                <i class="fas fa-bars"></i>
            </div>
            <div class="text-xs leading-3">Menu</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-list-ul"></i>
            </div>
            <div class="text-xs leading-3">Category</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-search"></i>
            </div>
            <div class="text-xs leading-3">Search</div>
        </a>
        <a href="cart.html" class="text-center text-gray-700 hover:text-primary transition relative">
            <span
                class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
            <div class="text-2xl">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="text-xs leading-3">Cart</div>
        </a>
    </div>
    <!-- mobile menu end -->

    <!-- mobile sidebar menu -->
    <div class="fixed left-0 top-0 w-full h-full z-50 bg-black bg-opacity-30 shadow hidden" id="mobileMenu">
        <div class="absolute left-0 top-0 w-72 h-full z-50 bg-white shadow">
            <div id="closeMenu"
                class="text-gray-400 hover:text-primary text-lg absolute right-3 top-3 cursor-pointer">
                <i class="fas fa-times"></i>
            </div>
            <!-- navlink -->
            <h3 class="text-xl font-semibold text-gray-700 mb-1 font-roboto pl-4 pt-4">Menu</h3>
            <div class="">
                <a href="index.html" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Home
                </a>
                <a href="shop.html" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Shop
                </a>
                <a href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    About Us
                </a>
                <roa href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Contact Us
                </roa>
            </div>
            <!-- navlinks end -->
        </div>
    </div>
    <!-- mobile sidebar menu end -->

    <!-- banner -->
    <div class="bg-cover bg-no-repeat bg-center py-36 relative" style="background-photo: url('photos/banner-bg.jpg')">
        <div class="container">
            <!-- banner content -->
            <h1 class="xl:text-6xl md:text-5xl text-4xl text-gray-800 font-medium mb-4">
                Best Collection For <br class="hidden sm:block"> Home Decoration
            </h1>
            <p class="text-base text-gray-600 leading-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa <br class="hidden sm:block">
                assumenda aliquid inventore nihil laboriosam odio
            </p>
            <!-- banner button -->
            <div class="mt-12">
                <a href="shop.html"
                    class="bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md uppercase hover:bg-transparent
               hover:text-primary transition">
                    Shop now
                </a>
            </div>
            <!-- banner button end -->
            <!-- banner content end -->
        </div>
    </div>
    <!-- banner end -->

    <!-- features -->
    <div class="container py-16">
        <div class="lg:w-10/12 grid md:grid-cols-3 gap-3 lg:gap-6 mx-auto justify-center">

            <!-- single feature -->
            <div
                class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
                <img src="{{ asset('user/dist/photos/icons/delivery-van.svg') }}"
                    class="lg:w-12 w-10 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">free shipping</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">Order over $200</p>
                </div>
            </div>
            <!-- single feature end -->
            <!-- single feature -->
            <div
                class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
                <img src="{{ asset('user/dist/photos/icons/money-back.svg') }}"
                    class="lg:w-12 w-10 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Money returns</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">30 Days money return</p>
                </div>
            </div>
            <!-- single feature end -->
            <!-- single feature -->
            <div
                class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
                <img src="{{ asset('user/dist/photos/icons/service-hours.svg') }}"
                    class="lg:w-12 w-10 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">Customer support</p>
                </div>
            </div>
            <!-- single feature end -->

        </div>
    </div>
    <!-- features end -->

    <!-- categories -->
    <div class="container pb-16">
        <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">shop by category</h2>
        <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-3">
            <!-- single category -->
            <div class="relative group rounded-sm overflow-hidden">
                <img src="{{ asset('user/dist/photos/category/category-1.jpg') }}" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                    font-roboto font-medium tracking-wide transition">
                    Bedroom
                </a>
            </div>
            <!-- single category end -->
            <!-- single category -->
            <div class="relative group rounded-sm overflow-hidden">
                <img src="{{ asset('user/dist/photos/category/category-5.jpg') }}" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                    font-roboto font-medium tracking-wide transition">
                    Sofa
                </a>
            </div>
            <!-- single category end -->
            <!-- single category -->
            <div class="relative group rounded-sm overflow-hidden">
                <img src="{{ asset('user/dist/photos/category/category-3.jpg') }}" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                    font-roboto font-medium tracking-wide transition">
                    Office
                </a>
            </div>
            <!-- single category end -->
            <!-- single category -->
            <div class="relative group rounded-sm overflow-hidden">
                <img src="{{ asset('user/dist/photos/category/category-4.jpg') }}" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                    font-roboto font-medium tracking-wide transition">
                    Outdoor
                </a>
            </div>
            <!-- single category end -->
            <!-- single category -->
            <div class="relative group rounded-sm overflow-hidden">
                <img src="{{ asset('user/dist/photos/category/category-2.jpg') }}" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                    font-roboto font-medium tracking-wide transition">
                    Mattress
                </a>
            </div>
            <!-- single category end -->
            <!-- single category -->
            <div class="relative group rounded-sm overflow-hidden">
                <img src="{{ asset('user/dist/photos/category/category-6.jpg') }}" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                        font-roboto font-medium tracking-wide transition">
                    Dinings
                </a>
            </div>
            <!-- single category end -->
        </div>
    </div>
    <!-- categories end -->

    <!-- top new arrival -->
    <div class="container pb-16">
        <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">top new arrival</h2>
        <!-- product wrapper -->
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="{{ asset('user/dist/photos/products/product9.jpg') }}" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="{{ asset('user/dist/photos/products/product1.jpg') }}" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="{{ asset('user/dist/photos/products/product8.jpg') }}" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="{{ asset('user/dist/photos/products/product12.jpg') }}" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
        </div>
        <!-- product wrapper end -->
    </div>
    <!-- top new arrival end -->

    <!-- ad section -->
    <div class="container pb-16">
        <a href="#">
            <img src="{{ asset('user/dist/photos/offer.jpg') }}" class="w-full">
        </a>
    </div>
    <!-- ad section end -->

    <!-- recomended for you -->
    <div class="container pb-16">
        <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">recomended for you</h2>
        <!-- product wrapper -->
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="{{ asset('user/dist/photos/products/product2.jpg') }}" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="{{ asset('user/dist/photos/products/product3.jpg ') }}" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="{{ asset('user/dist/photos/products/product4.jpg') }}" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="{{ asset('user/dist/photos/products/product9.jpg') }}" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="{{ asset('user/dist/photos/products/product1.jpg') }}" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="photos/products/product8.jpg" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="photos/products/product10.jpg" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product photo -->
                <div class="relative">
                    <img src="photos/products/product11.jpg" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="view.html"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product photo end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            Guyer chair
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#"
                    class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->
        </div>
        <!-- product wrapper end -->
    </div>
    <!-- recomended for you end -->
@endsection