<div class="contianer-fluid py-[10px] px-6 bg-[#63C8E9] md:flex justify-between">
    <h1><span class="text-[#faf9f6] text-4xl">Woza Woza Kota Place</span></h1>
    <button type="button" style="background-color: #054979"
        class="text-white bg-[#054979] hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 mr-2">
        @if (Route::has('login'))
            @auth
                <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
            @else
                <a href="{{ route('login') }}">Login/Sign-Up</a></li>
            @endauth
        @endif
    </button>
</div>

<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700" style="background-color: #054979">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto px-4 py-2.5">
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 ml-3 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col justify-item-center font-medium p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm  md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                style="background-color: #054979">
                <li class="lg:w-52 sm:-100 text-center ">
                    <a href="{{route('menu')}}" class="block py-2 pl-3 pr-4 text-white  rounded hover:bg-[#005a92]"
                        style="font-family: 'trebuchet MS', sans-serif" aria-current="page">
                        Home
                    </a>
                </li>
                <li class="lg:w-52 sm:w-100 text-center">
                    <a href="{{ route('contact-us') }}"
                        class="block py-2 pl-3 pr-4 text-white rounded hover:bg-[#005a92]"
                        style="font-family: 'trebuchet MS', sans-serif">
                        Contact Details
                    </a>
                </li>
                <li class="lg:w-52 sm:w-100 text-center">
                    <a href="{{ route('aboutUs') }}" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-[#005a92]"
                        style="font-family: 'trebuchet MS', sans-serif">
                        About Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- drawer init and toggle -->
<div class="container-fluid bg-[#08415c] p-2 text-right">
    <button
        class="text-white bg-[#054979] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 m-2   dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
        data-drawer-placement="right" aria-controls="drawer-right-example">
        <i class="fa-solid fa-cart-shopping text-[#FCD12A] p-1.5"></i>
        Cart({{ count((array) session('cart')) }})

    </button>
</div>



<!-- shopping cart-->
<div id="drawer-right-example"
    class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-right-label">
    <!-- shopping cart header -->
    <div class=" border-b-4 border-[#FCD12A] mb-6">
        <h5 id="drawer-right-label"
            class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">Cart</h5>
        <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
    </div>
    <!-- end of shopping cart header -->

    <!-- chopping cart content -->
    <div class="flow-root h-[25rem] overflow-auto">
        <ul role="list" class="-my-6 divide-y divide-gray-200">
            @php $total = 0 @endphp
            @foreach ((array) session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
            @endforeach

            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    <li class="flex py-6" data-id="{{ $id }}">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="{{ asset('storage/image/product') }}/{{ $details['image'] }}"
                                class="h-full w-full object-cover object-center">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col">
                            <div>
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        <a href="#">{{ $details['product_name'] }}</a>
                                    </h3>
                                    <p class="ml-4">{{ $details['price'] }}</p>
                                </div>
                                <p class="mt-1 text-sm text-gray-500">{{ $details['category']}}</p>
                            </div>

                            <div class="flex flex-1 items-end justify-between text-sm">
                                <input type="number" name="" id="" value="{{ $details['quantity'] }}"
                                    class=" shrink w-24 text-base rounded cart_update quantity" />
                                <div class="flex">
                                    <button type="button"
                                        class="font-medium text-indigo-600 hover:text-indigo-500 py-3">
                                        <i class="bx bx-trash-alt cart-remove cart_remove"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
    <!-- end of shopping cart -->

    <!-- shopping cart footer -->

    <div class=" absolute inset-x-0 bottom-0 border-t-4 mt-6 border-[#FCD12A] px-4 py-6 sm:px-6 ">
        <div class="flex justify-between text-base font-medium text-gray-900">
            <p>Subtotal</p>
            <p>R{{ $total }}</p>
        </div>
        <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
        <div class="mt-6">
            <a href="{{ route('checkout') }}"
                class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
        </div>
    </div>
    <!-- end of shopping cart footer -->


</div>
