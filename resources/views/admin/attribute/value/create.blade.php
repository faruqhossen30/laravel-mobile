@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Arribute" pageoneRoute="{{ route('attribute.index') }}" pagetwo="Value" />
@endsection
@section('content')
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-8 shadow-md bg-white dark:bg-gray-900">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Sn
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 text-end  py-3">
                                Action
                            </th>

                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @php($x = 1)
                        @forelse ($attribute->values as $value)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                    {{ $x++ }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                    {{ $value->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">

                                    <button data-modal-target="attributevalue-modal-{{$value->id}}"
                                        data-modal-toggle="attributevalue-modal-{{$value->id}}"
                                        class="py-1 px-2 inline-flex justify-center text-end items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>

                                    <!-- Main modal -->
                                    <div id="attributevalue-modal-{{$value->id}}" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Edit Attribute valus
                                                    </h3>
                                                    <button type="button"
                                                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="attributevalue-modal-{{$value->id}}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">
                                                    <form class="space-y-4"
                                                        action="{{ route('attributevalue.update', $value->id) }}" method="POST">
                                                        @csrf
                                                        <div>
                                                            <label for="name"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Attributer
                                                                Name</label>
                                                            <input type="text" name="name" id="name"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white disabled:opacity-50 disabled:pointer-events-none"
                                                                placeholder="Attributer Name" value="{{ $attribute->name }}"
                                                                disabled />
                                                        </div>
                                                        <div>
                                                            <label for="name"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Attributer
                                                                Value</label>
                                                            <input type="text" name="name" id="name"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                placeholder="Attributer Name" value="{{ $value->name }}"
                                                                required />
                                                        </div>


                                                        <button type="submit"
                                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End of Modal body -->

                                    <form action="{{ route('attributevalue.destroy', $value->id) }}" method="post"
                                        class="inline">
                                        @csrf
                                        <button type="submit" onclick="return confirm('Are you  sure to delete?')"
                                            class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-red-500">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>

                                </td>

                            </tr>
                        @empty
                            <td colspan="3"
                                class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-800 dark:text-gray-200">
                                No colors found.
                            </td>
                        @endforelse

                    </tbody>
                </table>
            </div>


        </div>
        <div class="col-span-4 shadow-md bg-white dark:bg-gray-900 p-4">

            <form class="max-w-sm mx-auto" action="{{ route('attributevalue.store', $attribute->id) }}" method="POST">
                @csrf
                <div class="mb-5">

                    <div class="space-y-1 py-1">
                        <label for="attribute" class="text-gray-500 dark:text-gray-500 text-sm font-medium">
                            Attirbute Name</label>
                        <input id="attribute" type="texy" name="attribute" value="{{ $attribute->name }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                            disabled>

                    </div>

                    <x-form.input name="name" label="Value" />
                </div>
                <x-form.submit-button />
            </form>


        </div>
    </div>
@endsection
