@extends('layouts.frontend')

@section('title')
    All Products
@endsection

@section('content')
<div class="row mt-3">
    @foreach ($product as $p)
    {{-- col --}}
    <div class="mt-2 mb-5 col-md-2">
        {{-- card --}}
        <div class="card ">
            <img src="{{ asset('storage/' . $p->photo)}}" class="card-img-top rounded w-100" alt="...">
            <div class="card-body">

                <h5 class="card-title">{{ $p->name }}</h5>

                @if ($p->category == NULL)
                <h6 class="card-subtitle text-muted"><i>-Uncategory</i></h6>
                @else
                <h6 class="card-subtitle text-muted"><i>-{{ $p->category->name }}</i></h6>
                @endif

                <p class="card-text">{{ $p->description }}</p>

                <h5 class="d-flex text-danger"><span class="ms-auto">Rp {{ number_format($p->price) }}</span></h5>

            </div>
        </div>
        {{-- end card --}}
    </div>
    {{-- end col --}}
    @endforeach
</div>
{{-- end row --}}
@endsection
