@php

    $brandids = null;
    if (isset($_GET['brandids'])) {
        $brandids = $_GET['brandids'];
    }
    $catids = null;
    if (isset($_GET['catids'])) {
        $catids = $_GET['catids'];
    }
    $valueids = null;
    if (isset($_GET['valueids'])) {
        $valueids = $_GET['valueids'];
    }

@endphp

@extends('layouts.app')
@section('content')
    <section class="bg-gray-50">
        <div class="container mx-auto pt-3  px-3 ">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Products</a>
                        </div>
                    </li>

                </ol>
            </nav>

        </div>
    </section>
    <section class="bg-gray-50 pt-4">
        <div class="container mx-auto ">
            <form action="" method="GET">
                <div class="grid grid-cols-12 gap-6 ">
                    <div class="col-span-3 space-y-4">

                        <div class=" bg-white border shadow rounded">
                            <div class="bg-gray-100 px-3 py-1">
                                <span class="font-normal">Brand</span>
                            </div>

                            <div class="max-h-24 overflow-hidden  border-gray-300 rounded-md p-2  " id="brand-filter">
                                @foreach ($brands as $brand)
                                    <div class="flex items-center ">
                                        <input
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                            type="checkbox" name="brandids[]" value="{{ $brand->id }}"
                                            id="brand-{{ $brand->id }}" @if ($brandids && in_array($brand->id, $brandids)) checked @endif
                                            onchange="this.form.submit()">
                                        <label for="brand-{{ $brand->id }}"
                                            class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300 uppercase">{{ $brand->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" id="view-more-btn"
                                class="mt-2 pl-3 pb-2 text-gray-700 text-xs font-bold">+ View More</button>
                        </div>
                        <div class=" bg-white border shadow rounded">
                            <div class="bg-gray-100 px-3 py-1">
                                <span class="font-normal">Category</span>
                            </div>

                            <div class="max-h-24 overflow-hidden  border-gray-300 rounded-md p-2 " id="category-filter">
                                @foreach ($categories as $category)
                                    <div class="flex items-center ">
                                        <input
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                            type="checkbox" name="catids[]" value="{{ $category->id }}"
                                            id="category-{{ $category->id }}"
                                            @if ($catids && in_array($category->id, $catids)) checked @endif onchange="this.form.submit()">
                                        <label for="category-{{ $category->id }}"
                                            class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300 uppercase">{{ $category->name }}</label>
                                    </div>
                                @endforeach
                            </div>


                            <button type="button" id="view-category-btn"
                                class="mt-2 text-gray-700 pl-3 pb-2 text-xs font-bold ">+
                                View More</button>
                        </div>
                        @foreach ($attributes as $attribute)
                            <div class=" bg-white border shadow rounded">
                                <div class="bg-gray-100 px-3 py-1">
                                    <span class="font-normal">{{ $attribute->name }}</span>
                                </div>
                                {{-- <h3 class="bg-white">{{ $attribute->name }}</h3> --}}
                                <div class="bg-white max-h-24 p-3 overflow-hidden  border-gray-300 rounded-md attributefilter"
                                    id="attribute-filter{{ $attribute->id }}">
                                    @foreach ($attribute->values as $value)
                                        <div class="flex items-center mb-1">
                                            <input
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                type="checkbox" name="valueids[]" value="{{ $value->id }}"
                                                id="batteryvalues-{{ $value->id }}"
                                                @if ($valueids && in_array($value->id, $valueids)) checked @endif
                                                onchange="this.form.submit()">
                                            <label for="batteryvalues-{{ $value->id }}"
                                                class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300 uppercase">{{ $value->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button" id="view-attribute-btn{{ $attribute->id }}"
                                    class="mt-2 bg-white text-gray-700 text-xs font-bold pl-3 pb-2  viewattributebtn">+ View
                                    More</button>
                            </div>
                        @endforeach

                    </div>
                    <div class="col-span-9">

                        <div class=" bg-white flex justify-between px-3 ">
                            <div class=" p-3 flex  space-x-2">
                                <a href="{{ route('productpage', ['view'=>'list']) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-4 text-gray-800 dark:text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                </a>


                                <a href="{{ route('productpage')}}">
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z" />
                                    </svg>
                                </a>
                                <a href="">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="w-4 h-4 text-gray-800 dark:text-white bi bi-grid-3x3-gap"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M4 2v2H2V2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1M9 2v2H7V2zm5 0v2h-2V2zM4 7v2H2V7zm5 0v2H7V7zm5 0h-2v2h2zM4 12v2H2v-2zm5 0v2H7v-2zm5 0v2h-2v-2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1z" />
                                    </svg>
                                </a>

                            </div>

                            <div class=" flex space-x-2 py-3 ">
                                <div class="flex items-center space-x-1">
                                    <label for="">Order:</label>
                                    <select name="per_page" onchange="this.form.submit()"
                                        class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <option value="">Show:</option>
                                        <option value="10" @if (isset($_GET['per_page']) && $_GET['per_page'] == '10') selected @endif>10
                                        </option>
                                        <option value="20" @if (isset($_GET['per_page']) && $_GET['per_page'] == '20') selected @endif>20
                                        </option>
                                        <option value="30" @if (isset($_GET['per_page']) && $_GET['per_page'] == '30') selected @endif>30
                                        </option>
                                    </select>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <label for="">Order:</label>
                                    <select name="orderby" onchange="this.form.submit()"
                                        class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <option value="">Sort by:</option>
                                        <option value="asc">Latest</option>
                                        <option value="desc">Oldest</option>
                                    </select>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <label for="">Sort:</label>
                                    <select name="sortby" onchange="this.form.submit()"
                                        class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <option value="">Price:</option>
                                        <option value="asc">Low to Hith</option>
                                        <option value="desc">High to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="grid grid-cols-12 gap-3 py-3">
                            @foreach ($products as $product)
                                <div class="col-span-3 border group">
                                    <a href="{{ route('product.single', $product->slug) }}"
                                        class=" bg-white inline-block rounded px-6 py-4">
                                        <div class="hidden">
                                            {{ $product->id }}
                                        </div>
                                        <div class="flex items-center bg-red-500 rounded-lg overflow-hidden">
                                            <img src="{{ asset('storage/' . $product->thumbnail) }}"
                                                class="group-hover:scale-110  transition duration-300 ease-in-out"
                                                alt="">
                                        </div>
                                        <p class="text-center text-sm font-medium text-gray-600 py-1">
                                            {{ $product->title }}
                                        </p>
                                        <div class="flex  space-x-1">
                                            <P class="text-center text-base font-medium text-gray-600"><span
                                                    class="font-bold">৳</span>
                                                {{ $product->price }}
                                            </P></span>
                                        </div>
                                        <div class="flex justify-end px-3">
                                            <sup class="line-through text-right">৳ 12000</sup>
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
                                        <a href="{{ route('product.single', $product->slug) }}">
                                            <p class="text-center text-gray-800">View Details</p>
                                        </a>
                                        <div>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-6 text-gray-800">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="py-2 ">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection


@push('styles')
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 12px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 10px;
            border: 2px solid #f1f1f1;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }
    </style>
@endpush


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#view-more-btn').on('click', function() {
                var brandFilter = $('#brand-filter');
                if (brandFilter.hasClass('max-h-24')) {
                    brandFilter.removeClass('max-h-24');
                    $(this).text('- View Less');
                } else {
                    brandFilter.addClass('max-h-24');
                    $(this).text('+ View More');
                }
            });
            $('#view-category-btn').on('click', function() {
                var brandFilter = $('#category-filter');
                if (brandFilter.hasClass('max-h-24')) {
                    brandFilter.removeClass('max-h-24');
                    $(this).text('- View Less');
                } else {
                    brandFilter.addClass('max-h-24');
                    $(this).text('+ View More');
                }
            });


            $(document).ready(function() {
                $('.viewattributebtn').on('click', function() {
                    // Get the corresponding attribute filter div
                    var attributeId = $(this).attr('id').replace('view-attribute-btn', '');
                    var filterDiv = $('#attribute-filter' + attributeId);

                    // Toggle the max-height and overflow classes
                    filterDiv.toggleClass('max-h-24 overflow-hidden');

                    // Change the button text
                    if (filterDiv.hasClass('max-h-24')) {
                        $(this).text('+ View More');
                    } else {
                        $(this).text('- View Less');
                    }
                });
            });
        });
    </script>
@endpush
