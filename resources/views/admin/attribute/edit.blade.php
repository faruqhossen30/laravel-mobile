
@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Arribute" pageoneRoute="" pagetwo="Edit" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">
                    <form action="{{ route('attribute.update',$attribute->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <x-form.input name="name" label="Attribute Name" value="{{$attribute->name}}" />
                        <x-form.submit-button  title="Update"/>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
