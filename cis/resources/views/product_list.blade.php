@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @foreach($products as $ls)
                {{$ls->product_name}}<br>
                @endforeach
        </div>
    </div>
</div>
@endsection
