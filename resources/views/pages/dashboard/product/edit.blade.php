@extends('layouts.dashboard')
@section('title')
    Product Edit
@endsection
@push('before-style')
    @livewireStyles
@endpush

@section('content')

<h1 class="mb-3">Product</h1>
    <div class="container">
        <div class="mb-4">
            <a href="{{ route('dashboard.product') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="row mb-4">
            <div class="col-md-8">
                @livewire('product-edit',['product'=>$product_edit])
            </div>
        </div>
    </div>

@endsection

@push('after-script')
@livewireScripts
@endpush
