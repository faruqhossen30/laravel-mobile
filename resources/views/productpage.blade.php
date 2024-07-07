@extends('layouts.app')
@section('content')
    <section>
        <div class="container mx-auto">
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
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-------------section------------>
    <section>
        <div class="container mx-auto grid grid-cols-12">
            <div class="col-span-9 py-3">
                <h1 class="text-3xl font-bold ">Samsung Galaxy A15</h1>

                <div class="grid grid-cols-12">
                    <div class="col-span-6 py-3">
                        <div class="border rounded  p-3 ">

                            <img src="{{ asset('img/client/Samsung-Galaxy-A15.webp') }}" alt="" srcset="">
                        </div>

                        <div class=" flex border-0 py-3 space-x-4 mt-2">
                            <div class="border inline-block p-3">
                                <img src="{{ asset('img/client/Samsung-Galaxy-A15.webp') }}" alt="" height="80px "
                                    width="80px" srcset="">
                            </div>
                            <div class="border inline-block p-3">
                                <img src="{{ asset('img/client/Samsung-Galaxy-A15.webp') }}" alt="" height="80px "
                                    width="80px" srcset="">
                            </div>
                            <div class="border inline-block p-3">
                                <img src="{{ asset('img/client/Samsung-Galaxy-A15.webp') }}" alt="" height="80px "
                                    width="80px" srcset="">
                            </div>
                            <div class="border inline-block p-3">
                                <img src="{{ asset('img/client/Samsung-Galaxy-A15.webp') }}" alt="" height="80px "
                                    width="80px" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <p class="text-2xl font-thin px-6">৳17,000.00</p>
                        <div class="flex px-6  py-1 ">
                            <span class=" font-semibold text-[#999]">Brand: </span>
                            <p class="  font-thin px-3 ">Samsung</p>
                        </div>
                        <div class="flex px-6 py-1 ">
                            <span class=" font-semibold text-[#999]">Category: </span>
                            <p class="  font-thin px-3 ">Smartphones</p>
                        </div>
                        <div class="flex px-6 py-1 ">
                            <span class=" font-semibold text-[#999]">Added on: </span>
                            <p class=" font-thin px-3 "> 10th, Feb, 2023</p>
                        </div>
                        <div class="flex px-6 py-1 ">
                            <span class=" font-semibold text-[#999]">Last updated: </span>
                            <p class=" font-thin px-3 "> 9th, Jun, 2024</p>
                        </div>

                        <div class="flex items-center mb-4 px-6">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Add to Compare</label>
                        </div>

                        <div class=" flex space-x-3 px-6 py-3">
                            <p class="text-sm text-white bg-[#097def] rounded p-1">AVAILABLE </p>
                            <p class="text-sm text-white bg-yellow-400 rounded p-1">UNOFFICIAL</p>
                        </div>


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
                                        fill="currentColor" class="bi bi-android2" viewBox="0 0 12 12" class="size-6">
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
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
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
                                <svg class="w-4 h-4 text-white mr-1 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Whatsup
                            </a>
                        </div>

                    </div>
                    <div class="col-span-12">
                        <div class="border-b ">
                            <h2 class="text-3xl  font-sans font-bold text-[#2c2f34]">Specifications</h2>
                        </div>

                        <div class=" border rounded mt-4">
                            <div
                                class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Prices</h3>
                                <span>$</span>
                            </div>
                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Official</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">8GB 128GB ৳29,999 /
                                            8GB 256GB ৳32,999</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Global price</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">€280</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" border rounded mt-4">
                            <div
                                class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Network</h3>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                    </svg>
                                </span>
                            </div>
                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Technology</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">GSM / HSPA / LTE</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            2G bands
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">GSM 850 / 900 / 1800 /
                                            1900 - SIM 1 & SIM 2</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            3G bands
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">HSDPA 850 / 900 /
                                            1700(AWS) / 1900 / 2100</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            4G bands
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">1, 3, 5, 7, 8, 20, 28
                                        </td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Speed</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">HSPA, LTE
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" border rounded mt-4">
                            <div
                                class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Body</h3>
                                <span>
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M5 4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4Zm12 12V5H7v11h10Zm-5 1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </span>
                            </div>
                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Dimensions</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">163.2 x 75.8 x 7.8 mm
                                            (6.43 x 2.98 x 0.31 in)</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Weight</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">186 g or 188 g (6.56
                                            oz)</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Build</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Glass front</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            SIM
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Dual SIM (Nano-SIM,
                                            dual stand-by)</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Others</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">IP54, dust and splash
                                            resistant</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=" border rounded mt-4">
                            <div
                                class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Display</h3>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                    </svg>
                                </span>
                            </div>
                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Type</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">AMOLED, 1B colors,
                                            120Hz, 1200 nits (peak)</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Size </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">6.67 inches, 107.4 cm2
                                            (~86.8% screen-to-body ratio)</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Resolution</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">1080 x 2400 pixels,
                                            20:9 ratio (~395 ppi density)</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Protection
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">DT-Star2 Plus</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Features</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Always-on display</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" border rounded mt-4">
                            <div
                                class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Platform</h3>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                                    </svg>
                                </span>
                            </div>
                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            OS</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">Android 14, Funtouch
                                            14</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            Chipset </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Qualcomm SM6225
                                            Snapdragon 685 (6 nm)</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            CPU</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Octa-core (4x2.8 GHz
                                            Cortex-A73 & 4x1.9 GHz Cortex-A53)</td>
                                    </tr>
                                    <tr class="group">
                                        <td
                                            class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">
                                            GPU
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Adreno 610</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-span-3">
                <img src="{{ asset('img/client/9994403579511717515.png') }}" alt="" srcset="">
            </div>

        </div>
    </section>
    <!-------------section------------>
@endsection
