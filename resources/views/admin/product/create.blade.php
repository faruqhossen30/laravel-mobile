@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Product" pageoneRoute="{{ route('product.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="p-6">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-8 space-y-2 bg-white  dark:bg-gray-800 p-4 rounded-lg">
                        <x-form.select name="category_id" label="Category" :data="$categories" />
                        <x-form.input name="title" label="Product Title" />
                        <label for="description" class="text-sm font-medium text-gray-500 dsark:text-gray-500">Description</label>
                        <div>
                            <textarea class="ckeditor" id="editor" name="description" cols="30" rows="10"></textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <x-form.textarea name="short_description" label="Short Description" />
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <x-form.input name="price" type="number" label="Price" />
                            </div>
                        </div>
                        <div>
                            <button type="button" id="addButton"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                    <path
                                        d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                                </svg>
                                add now
                            </button>
                            <div>

                            </div>
                        </div>

                        <div id="attributeSection" class="space-y-5">
                            {{-- <div class="grid grid-cols-12 border p-5 gap-5">
                                <div class="col-span-4">
                                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                                    <select id="countries"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a country</option>
                                        <option value="US">United States</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                    </select>
                                </div>
                                <div class="col-span-8">
                                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                                    <select id="countries"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a country</option>
                                        <option value="US">United States</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                    <div class="col-span-12 lg:col-span-4 pt-1 space-y-2 bg-white  dark:bg-gray-800 p-4 rounded-lg">

                        <div class="py-1">
                            <label for="status" class="text-gray-500 dark:text-gray-500">Status</label>
                            <select name="status" id="status"
                                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option value="">Select Status</option>
                                <option value="active" @if (isset($status) && $status == 'active') selected @endif>Active</option>
                                <option value="deactive" @if (isset($status) && $status == 'deactive') selected @endif>Deactive</option>
                                <option value="draft" @if (isset($status) && $status == 'draft') selected @endif>Draft</option>
                            </select>
                            @error('status')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- <x-form.select name="brand_id" label="Brand" :data="$brands" /> --}}
                        <div class="">

                            <label for="brand_ids" class="block text-sm font-medium mb-2 dark:text-white">Select
                                Brand</label>
                            <select id="brand_ids" name="brand_id"
                                class="select-brand py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option>Select Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <x-form.card title="SEO Section">
                            <x-form.input name="meta_title" label="Meta Title" />
                            <x-form.textarea name="meta_description" label="Meta Description" />
                            <div>
                                <label for="meta_keywords" class="block text-sm font-medium mb-2 dark:text-white">meta_keyword</label>
                                <select id="meta_keywords" name="meta_keywords[]"
                                    class="meta_keyword py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                    multiple="multiple">
                                </select>
                            </div>
                        </x-form.card>

                        <div class="col-span-2">
                            <label for="thumbnail" class="text-gray-500 dark:text-gray-500 text-sm font-medium">Image</label>
                            <input name="thumbnail" class="dropify" type="file" id="myDropify">
                        </div>
                    </div>

                </div>
                <x-form.submit-button />
            </form>
        </div>
    </div>
@endsection



@push('styles')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            $('.select-brand').select2();
            $('.meta_keyword').select2({
                tags: true
            });
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });

            $('#addButton').on('click', function() {
                $('#attributeSection').append(`
                <div class="grid grid-cols-12 border p-5 gap-5">
                        <div class="col-span-4">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select
                                class="bg-gray-50 select-attribute border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </select>
                        </div>
                        <div class="col-span-8">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select
                                class="select-attributevalue bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </select>
                        </div>
                    </div>
                `);
                runSelect2();
            });


            function runSelect2() {
                $('.select-attribute').select2({
                    placeholder: 'Select Driver',
                    // theme: 'bootstrap4',
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    ajax: {
                        type: "POST",
                        url: '{{ route('attributesearch') }}',
                        delay: 250,
                        dataType: 'json',
                        cache: true,
                        data: function(params) {
                            return {
                                search: params.term, // search term
                            };
                        },
                        processResults: function(response) {
                            return {
                                results: response
                            };
                        },

                    }
                }).on('select2:select', function(e) {
                    let data = e.params.data;
                    let id = e.params.data.id;
                    console.log(data);
                    arrtibuteValueSelect(id);
                });
            }

            function arrtibuteValueSelect(attributeid){
                console.log('attributeid',attributeid);
                $('.select-attributevalue').select2({
                    placeholder: 'Select',
                    // theme: 'bootstrap4',
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    ajax: {
                        type: "POST",
                        url: '{{ route('attributvalueesearch') }}',
                        delay: 250,
                        // data:{id:attributeid},
                        cache: true,
                        data: function(params) {
                            return {
                                search: params.term, // search term
                                id: attributeid // search term
                            };
                        },
                        processResults: function(response) {
                            return {
                                results: response
                            };
                        },

                    }
                });
            }

        });
    </script>
@endpush
