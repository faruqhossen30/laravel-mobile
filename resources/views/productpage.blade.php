@php
    $keyword = null;
    if (isset($_GET['keyword'])) {
        $keyword = trim($_GET['keyword']);
    }
    $compare = null;
    if (isset($_GET['compare'])) {
        $compare = trim($_GET['compare']);
    }
@endphp

@extends('layouts.app')
@section('content')
    <section class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-3  px-3 ">
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
                            <a href="{{ route('productpage') }}"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Product</a>
                        </div>
                    </li>

                </ol>
            </nav>

        </div>
    </section>
    <!-------------section------------>




    <section class="bg-gray-100">
        <div class="max-w-7xl mx-auto grid grid-cols-12">
            <div class="col-span-9 ">
                <h1 class="text-3xl font-bold ">{{ $product->title }}</h1>
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-7 py-3">

                        <div class="slider-for">
                            @if ($product->slider)
                                @foreach (json_decode($product->slider) as $item)
                                    <div class="border rounded  p-3  ">
                                        <img src="{{ asset('storage/' . $item ?? '') }}" style="width: 100%" class="h-96"
                                            alt="" height="80px " width="80px" srcset="">
                                    </div>
                                @endforeach
                            @else
                            <div class="slick-slide slick-current slick-active bg-gray-50 rounded-lg h-96 " data-slick-index="0" aria-hidden="false" style="width: 560px;  height:600px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                <h3 class="flex justify-center items-center "></h3>
                            </div>
                            @endif
                        </div>
                        <div class=" flex border-0 py-3 space-x-4 mt-2 slider-nav"
                            data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
                            @if ($product->slider)
                                @foreach (json_decode($product->slider) as $item)
                                    <div class="border inline-block p-3 ">
                                        <img src="{{ asset('storage/' . $item ?? '') }}" style="width: 100%" class="h-24 "
                                            alt="1" height="80px " width="80px" srcset="">
                                    </div>
                                @endforeach
                            @else
                            <div class="slick-slide slick-current slick-active slick-center bg-gray-50 rounded-lg" data-slick-index="0" aria-hidden="false" style="width: 154px; height:130px" tabindex="-1" role="option" aria-describedby="slick-slide130">
                                <h3 class="flex justify-center items-center">Emtpy Slider</h3>
                            </div>
                            @endif
                        </div>



                    </div>
                    <div class="col-span-5 pt-5">
                        <p class="text-2xl font-thin px-6">৳{{ $product->price }}</p>
                        <div class="flex px-6  py-1 ">
                            <span class=" font-semibold text-[#999]">Brand: </span>
                            <p class="text-base px-3 ">{{ $product->brand->name ?? 'N/A' }}</p>
                        </div>
                        <div class="flex px-6 py-1 ">
                            <span class=" font-semibold text-[#999]">Category: </span>
                            <p class="  font-thin px-3 ">{{ $product->category->name ?? 'N/A' }}</p>
                        </div>
                        {{-- <div class="flex px-6 py-1 ">
                            <span class=" font-semibold text-[#999]">Added on: </span>
                            <p class=" font-thin px-3 "> {{ $product->created_at ?? 'N/A' }}</p>
                        </div> --}}
                        <div class="flex px-6 py-1 ">
                            <span class=" font-semibold text-[#999]">Last updated: </span>
                            <p class=" font-thin px-3 "> {{ $product->updated_at ?? 'N/A' }}</p>
                        </div>
                        <form action="" method="get">
                            <div class="flex items-center mb-4 px-6">
                                <input id="default-checkbox" type="checkbox" value="{{ $product->id }}" name="compare"
                                    onchange="this.form.submit()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Add to
                                    Compare</label>
                            </div>
                        </form>

                        <div class="divide-y px-3">
                            <div class="flex space-x-3  py-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 h-10 w-10 text-blue-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                    </svg>
                                </span>
                                <div class="">
                                    <span> Released</span>
                                    <p class="text-sm">2023, December 16</p>
                                </div>
                            </div>
                            <div class="flex space-x-3  py-1 ">
                                <span class="text-blue-600 h-10 w-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-android2 w-10 h-10" viewBox="0 0 16 16">
                                        <path
                                            d="m10.213 1.471.691-1.26q.069-.124-.048-.192-.128-.057-.195.058l-.7 1.27A4.8 4.8 0 0 0 8.005.941q-1.032 0-1.956.404l-.7-1.27Q5.281-.037 5.154.02q-.117.069-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.7 3.7 0 0 0 3.5 5.02h9q0-1.125-.623-2.072a4.27 4.27 0 0 0-1.664-1.476ZM6.22 3.303a.37.37 0 0 1-.267.11.35.35 0 0 1-.263-.11.37.37 0 0 1-.107-.264.37.37 0 0 1 .107-.265.35.35 0 0 1 .263-.11q.155 0 .267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264m4.101 0a.35.35 0 0 1-.262.11.37.37 0 0 1-.268-.11.36.36 0 0 1-.112-.264q0-.154.112-.265a.37.37 0 0 1 .268-.11q.155 0 .262.11a.37.37 0 0 1 .107.265q0 .153-.107.264M3.5 11.77q0 .441.311.75.311.306.76.307h.758l.01 2.182q0 .414.292.703a.96.96 0 0 0 .7.288.97.97 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182q0 .414.292.703a.97.97 0 0 0 .71.288.97.97 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76q.436 0 .749-.308.31-.307.311-.75V5.365h-9zm10.495-6.587a.98.98 0 0 0-.702.278.9.9 0 0 0-.293.685v4.063q0 .406.293.69a.97.97 0 0 0 .702.284q.42 0 .712-.284a.92.92 0 0 0 .293-.69V6.146a.9.9 0 0 0-.293-.685 1 1 0 0 0-.712-.278m-12.702.283a1 1 0 0 1 .712-.283q.41 0 .702.283a.9.9 0 0 1 .293.68v4.063a.93.93 0 0 1-.288.69.97.97 0 0 1-.707.284 1 1 0 0 1-.712-.284.92.92 0 0 1-.293-.69V6.146q0-.396.293-.68" />
                                    </svg>
                                </span>
                                <div class="">
                                    <span> OS </span>
                                    <p class="text-sm">2023, December 16</p>
                                </div>
                            </div>
                            <div class="flex space-x-3  py-1 ">
                                <span>
                                    <svg class="w-10 h-10 text-blue-600 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M5 4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4Zm12 12V5H7v11h10Zm-5 1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </span>
                                <div class="">
                                    <span> Released</span>
                                    <p class="text-sm">2023, December 16</p>
                                </div>
                            </div>
                            <div class="flex space-x-3   py-1">
                                <span class="text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 h-10 w-10">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                    </svg>

                                </span>
                                <div class="">
                                    <span> Released</span>
                                    <p class="text-sm">2023, December 16</p>
                                </div>
                            </div>
                            <div class="flex space-x-3   py-1">
                                <span class="text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 h-10 w-10">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                    </svg>

                                </span>
                                <div class="">
                                    <span> Released</span>
                                    <p class="text-sm">2023, December 16</p>
                                </div>
                            </div>


                            <p class="border-b-2 block py-2 text-gray-800 font-bold">Share Now</p>

                            <a href="https://www.facebook.com/sharer/sharer.php?u="
                                class="px-3 py-1 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/





                                    svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                        clip-rule="evenodd" />
                                </svg>
                                facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url="
                                class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#1DA1F2] rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-4 h-4 text-white  dark:text-white mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                twitter
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url="
                                class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#E4405F] rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-4 h-4 text-white mr-1 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                instagram
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url="
                                class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#0A66C2] rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                        clip-rule="evenodd" />
                                    <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                </svg>
                                linkedin
                            </a>
                            <a href="https://api.whatsapp.com/send?text="
                                class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-green-400 rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg>
                                <span class="ml-2">Whatsup</span>
                            </a>
                        </div>



                    </div>

                    <div class="col-span-12">
                        <div class="border-b ">
                            <h2 class="text-3xl  font-sans font-bold text-[#2c2f34]">Specifications</h2>
                        </div>

                        <div class=" border rounded mt-4">
                            <table class="table-border w-full">
                                <tbody class="space-y-5">
                                    @foreach ($data as $attribute)
                                        <tr class="border group py-2">
                                            <td
                                                class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                                {{ $attribute['name'] }}
                                            </td>
                                            <td class="border px-3  p-2 group-hover:bg-[#FFFFE6] text-sm">
                                                @foreach ($attribute['items'] as $item)
                                                    <span>{{ $item['name'] }}</span>,
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-span-3 py-10">
                <img src="{{ asset('img/client/9994403579511717515.png') }}" alt="">
            </div>
    </section>

    <!-------------section------------>
@endsection
@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true
        });
    </script>
@endpush
@push('styles')
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
