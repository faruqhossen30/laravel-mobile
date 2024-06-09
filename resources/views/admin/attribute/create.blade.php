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
                        <x-form.submit-button />
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
