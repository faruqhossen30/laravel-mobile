@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Arribute" pageoneRoute="" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">
                    <form action="{{ route('attribute.store') }}" method="POST">
                        @csrf
                        <x-form.input name="name" label="Attribute Name" />
                        <x-form.input name="sort" type="number" label="Sort Value" />
                        <div class="col-span-2">
                            <label for="thumbnail" class="text-gray-500 dark:text-gray-500 text-sm font-medium">Image</label>
                            <input name="icon" class="dropify" type="file" id="myDropify">
                        </div>
                        <x-form.submit-button />
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>


    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        });
    </script>
@endpush
