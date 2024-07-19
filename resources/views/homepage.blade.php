@extends('layouts.app')

@section('content')
    <!--------header section start---------->


    <section class="bg-slate-200">
        <div class="container mx-auto py-4">
            <div class="grid grid-cols-12 gap-3 ">
                <div class="col-span-8 bg-white py-4 rounded-lg">
                    <h2 class=" text-center text-2xl font-bold text-blue-500 ">LETS FIND A MOBILE</h2>

                    <div class="grid grid-cols-12  ">
                        <div class="col-span-8 p-2 ">
                            <div class="bg-white ">
                                <div class="p-4">
                                    <input type="range" id="range" name="range" class="w-full mt-2" min="0"
                                        max="100">
                                </div>
                            </div>

                            <div class="flex bg-white justify-center p-4 space-x-3 ">

                                <div class=" flex px-2  items-center space-x-2">
                                    <p>Tk</p> <input type="text" id="small-input" placeholder="0"
                                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                                <div class=" px-2 flex  items-center space-x-2">
                                    <p>Tk </p><input type="text" id="small-input" placeholder="193215"
                                        class="block w-full p-2 px-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                            </div>

                        </div>
                        <div class="col-span-4 p-4">
                            <div class="bg-white">
                                <select id="small"
                                    class="block w-full mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Mobile</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                                <select id="small"
                                    class="block w-full mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Category</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                                <select id="small"
                                    class="block w-full mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Brand</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center  ">
                        <a href="#"
                            class="bg-blue-900 border px-20 uppercase text-white py-1 rounded inline-flex items-center">Find
                            Products
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5 font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="col-span-4 bg-white px-3 py-3 space-y-2 rounded-lg">
                    <div class=" flex   justify-between p-4">
                        <a href="#" class="inline font-bold  text-[#212529] text-lg">
                            POPULAR MOBILE PHONES
                        </a>
                        <a href="#" class="inline font-bold text-lg text-[#212529] uppercase">
                            View More
                        </a>
                    </div>
                    <div class="flex justify-around border rounded p-1 group hover:shadow">
                        <img src="{{ asset('img/client/Xiaomi-Redmi-Note-13-Pro-5G.webp') }}"
                            class=" bg-cover transform group-hover:scale-110 transition-transform duration-300"
                            alt="" height="50px" width="50px" srcset="">
                        <div>
                            <h4 class=" text-base font-semibold">Xiaomi Redmi Note 13 4G</h4>
                            <div class="flex space-x-2 ">

                                <p class="font-semibold text-lg">৳ 22,999</p><sub
                                    class="inline-block text-xs text-red-500">(official)</sub>
                            </div>
                        </div>
                        <div class="bg-[#009751] text-white p-1 text-xs font-medium">
                            <P> 71%</P>
                            <P>SPREC</P>
                            <p>SCORE</p>
                        </div>
                    </div>
                    <div class="flex justify-around border rounded p-1 group hover:shadow">
                        <img src="{{ asset('img/client/Xiaomi-Redmi-Note-13-Pro-5G.webp') }}"
                            class=" bg-cover transform group-hover:scale-110 transition-transform duration-300"
                            alt="" height="50px" width="50px" srcset="">
                        <div>
                            <h4 class=" text-base font-semibold">Xiaomi Redmi Note 13 4G</h4>
                            <div class="flex space-x-2 ">

                                <p class="font-semibold text-lg">৳ 22,999</p><sub
                                    class="inline-block text-xs text-red-500">(official)</sub>
                            </div>
                        </div>
                        <div class="bg-[#009751] text-white p-1 text-xs font-medium">
                            <P> 71%</P>
                            <P>SPREC</P>
                            <p>SCORE</p>
                        </div>
                    </div>
                    <div class="flex justify-around border rounded p-1 group hover:shadow">
                        <img src="{{ asset('img/client/Xiaomi-Redmi-Note-13-Pro-5G.webp') }}"
                            class=" bg-cover transform group-hover:scale-110 transition-transform duration-300"
                            alt="" height="50px" width="50px" srcset="">
                        <div>
                            <h4 class=" text-base font-semibold">Xiaomi Redmi Note 13 4G</h4>
                            <div class="flex space-x-2 ">
                                <p class="font-semibold text-lg">৳ 22,999</p><sub
                                    class="inline-block text-xs text-red-500">(official)</sub>
                            </div>
                        </div>
                        <div class="bg-[#009751] text-white p-1 text-xs font-medium">
                            <P> 71%</P>
                            <P>SPREC</P>
                            <p>SCORE</p>
                        </div>

                    </div>

                    <div class="p-4 hover:shadow-lg ">
                        <!-- Your content here -->
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--------header section end------------>


    <!----------brandpage----------->
    @include('brandpage')
    <!----------brandpage----------->
    <section class="bg-slate-200">
        <div class="container mx-auto bg-white">
            <div class="flex justify-between items-center border-b p-3 bg-white rounded-lg">
                <h2 class="text-lg font-bold">LATEST MOBILE PHONES</h2>
                <a href="" class="inline-flex items-center text-lg font-bold">View More
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                        stroke="currentColor" class="size-4 text-xl font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>

                </a>
            </div>

            <div id="productslider" class="owl-carousel owl-theme slider grid grid-cols-12 gap-3">
                @foreach ($products as $product)
                    <div class="col-span-2 border group">
                        <a href="#" class=" bg-white inline-block rounded px-6 py-4">
                            <div class="flex items-center bg-slate-100 rounded-lg overflow-hidden">
                                <img src="{{ asset('img/client/POCO.webp') }}"
                                    class="group-hover:scale-150  transition duration-300 ease-in-out" alt=""
                                    width="250px" height="300px" srcset="">
                            </div>
                            <p class="text-center text-lg font-medium py-1">Poco C61</p>
                            <div class="flex  space-x-1">
                                <P class="text-center text-base font-medium"><span class="font-bold">৳</span>
                                    {{ rand(5., 100) }}</P><span class="text-red-400">(offical)</span>
                            </div>
                            <div class="flex justify-end px-3">
                                <sup class="line-through text-right">৳ 500</sup>
                            </div>
                        </a>

                        <div class="border p-1 flex justify-between px-3">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </button>
                            <a href="{{ route('product.single', 'sd') }}">
                                <p class="text-center text-gray-800">View Details</p>
                            </a>
                            <div>

                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!------Post page-------->
    @include('postpage')
    <!------Post page-------->
    <!------Post page-------->

    <!------Post page-------->
@endsection



@push('styles')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    {{-- <style type="text/css">
        .slider {
            position: relative;
            margin: 0 auto;
        }

        .owl-nav .owl-next {
            position: absolute;
            top: calc(50% - 20px);
            right: 0;
            margin-right: -20px !important;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: white !important;
            color: gray !important;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .owl-nav .owl-prev {
            position: absolute;
            top: calc(50% - 20px);
            left: 0;
            margin-left: -20px !important;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: white !important;
            color: gray !important;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .owl-nav .owl-prev:hover {
            background-color: #FF003A !important;
            color: gray !important;
        }

        .owl-nav .owl-next:hover {
            background-color: #FF003A !important;
            color: white !important;
        }

    </style> --}}
    <script>
        $(document).ready(function() {
            // Feature Slider
            $('#brandslider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 6
                    },
                    1000: {
                        items: 12
                    }
                }
            })
            // product Slider
            $('#productslider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }
            })
            // post Slider
            $('#postslider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });
    </script>
@endpush
