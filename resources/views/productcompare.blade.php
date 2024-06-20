@extends('layouts.app')
@section('content')
    <section>

        <div class="container mx-auto">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
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
        <div class="container mx-auto grid grid-cols-12  space-x-3">
            <div class="col-span-9 py-3 ">
                <div class=" flex space-x-3">

                    <h1 class="text-3xl font-bold ">Samsung Galaxy A15</h1><samp class="text-3xl font-bold">vs</samp>
                    <h1 class="text-3xl font-bold ">Samsung Galaxy A15</h1>
                    <h1></h1>
                </div>

                <div class="grid grid-cols-12">

                    <div class="col-span-12">

                        <div class=" border rounded mt-4">

                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td class="border"> <a href="#" class="group-hover:text-blue-500 hover:font-bold"></a></td>
                                        <td class="border"> <a href="#" class="group-hover:text-blue-500 hover:font-bold font-bold text-center">Energizer E288s</a></td>
                                        <td class="border"> <a href="#" class="group-hover:text-blue-500 hover:font-bold font-bold text-center">Symphony L142</a></td>
                                    </tr>

                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]"></td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm"><img src="{{asset('img/client/Symphony-L142-Blue-300x300.webp')}}" height="150px" width="150px" alt="" srcset=""></td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm"><img src="{{asset('img/client/Energizer-E288s-300x300.webp')}}" height="150px" width="150px" alt="" srcset=""></td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Price</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm text-blue-500">Coming soon</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm text-blue-500">Coming soon</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Our Rating                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm py-5"><span class="h-6 w-6 bg-gray-500 p-3 rounded-full text-white  ">7.0</span></td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm py-5"><span class="h-6 w-6 bg-gray-500 p-3 rounded-full text-white  ">6.8</span></td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Brand</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Energizer</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Symphony</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Category</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Feature phones</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Feature phones</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" border rounded mt-4">
                            <div class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Prices</h3>
                                <span>$</span>
                            </div>
                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Official</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">Coming soon</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">Coming soon</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class=" border rounded mt-4">
                            <div class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Network</h3>
                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                    </svg>
                                </span>
                            </div>
                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Technology</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">GSM / HSPA / LTE</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">2G bands
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">3G bands
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">4G bands
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">1, 3, 5, 7, 8, 20, 28
                                        </td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Speed</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">HSPA, LTE
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" border rounded mt-4">
                            <div class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Body</h3>
                                <span>
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Dimensions</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">163.2 x 75.8 x 7.8 mm (6.43 x 2.98 x 0.31 in)</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Weight</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">186 g or 188 g (6.56 oz)</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Build</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Glass front</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">SIM
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Dual SIM (Nano-SIM, dual stand-by)</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Others</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">IP54, dust and splash resistant</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=" border rounded mt-4">
                            <div class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Display</h3>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                      </svg>
                                </span>
                            </div>
                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Type</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">AMOLED, 1B colors, 120Hz, 1200 nits (peak)</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Size  </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">6.67 inches, 107.4 cm2 (~86.8% screen-to-body ratio)</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Resolution</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">1080 x 2400 pixels, 20:9 ratio (~395 ppi density)</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Protection
                                        </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">DT-Star2 Plus</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Features</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Always-on display</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" border rounded mt-4">
                            <div class="flex  justify-between items-center pt-3 px-3   text-xl text-[#2c2f34] font-semibold">
                                <h3>Platform</h3>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                                      </svg>
                                </span>
                            </div>
                            <table class="table-border w-full">
                                <tbody>
                                    <tr class="border group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">OS</td>
                                        <td class="border px-3  p-1 group-hover:bg-[#FFFFE6] text-sm">Android 14, Funtouch 14</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">Chipset  </td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Qualcomm SM6225 Snapdragon 685 (6 nm)</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">CPU</td>
                                        <td class="border px-3 p-1 group-hover:bg-[#FFFFE6] text-sm">Octa-core (4x2.8 GHz Cortex-A73 & 4x1.9 GHz Cortex-A53)</td>
                                    </tr>
                                    <tr class="group">
                                        <td class="text-[#2c2f34] text-sm font-medium  border px-5 bg-[#f7f8f9] group-hover:bg-[#FFFFE6]">GPU
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
