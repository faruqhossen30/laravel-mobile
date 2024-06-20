@extends('layouts.app')
@section('content')
    <section class="bg-gray-100">
        <div class="container mx-auto py-3 ">
            <h2 class="text-xl font-normal uppercase bg-[#fff] px-3 py-2">seo</h2>
        </div>
    </section>


    <section class="bg-gray-100">
        <div class="container mx-auto ">

            <div class="grid grid-cols-12 gap-6">
                <form action="" method="GET" class="col-span-3 space-y-4">
                    <div class=" bg-white border-b px-3 py-2">
                        <h3 class="bg-white py-1">Delivery Days</h3>
                        <hr class="py-1">
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Up to 10 days</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Up to 20 days</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Up to 20 days</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Up to 20 days</label>
                        </div>
                    </div>
                    <div class=" bg-white border-b px-3 py-2">
                        <h3 class="bg-white py-1">Brand</h3>
                        <hr class="py-1">
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Up to 10 days</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Up to 20 days</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Up to 20 days</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Up to 20 days</label>
                        </div>
                    </div>
                </form>
                <div class="col-span-9">

                    <div class="grid grid-cols-12 gap-3">


                        @foreach ([1,2,3,4,5,6,7,8,9,10,11,12]  as $product )
                        <div class="col-span-3 border group">
                            <a href="#" class=" bg-white inline-block rounded px-6 py-4">
                                <div class="flex items-center bg-slate-100 rounded-lg overflow-hidden">
                                    <img src="{{asset('img/client/POCO.webp')}}" class="group-hover:scale-110  transition duration-300 ease-in-out" alt="" width="250px" height="300px" srcset="">
                                </div>
                                <p class="text-center text-lg font-medium py-1">Poco C61</p>
                                <div class="flex  space-x-1">
                                    <P class="text-center text-base font-medium"><span class="font-bold">৳</span> 11499</P><span class="text-red-400">(offical)</span>
                                </div>
                                <div class="flex justify-end px-3">
                                    <sup class="line-through text-right">৳ 12000</sup>
                                </div>


                            </a>

                            <div class="border p-1 flex justify-between px-3">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                      </svg>
                                </button>
                                <a href="{{route('product.single')}}">
                                    <p class="text-center text-gray-800">View Details</p>
                                </a>
                                <div>

                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                                          </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        @endforeach


                    </div>


                </div>
            </div>

        </div>
    </section>
@endsection
