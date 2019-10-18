@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="../update">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อสินค้า') }}</label>

                            <div class="col-md-6">
                                <input value="{{$products->product_name}}" required id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="product_name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ราคา') }}</label>

                            <div class="col-md-6">
                                <input value="{{$products->price}}" required id="email" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('product_img') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control{{ $errors->has('product_img') ? ' is-invalid' : '' }}" name="product_img">

                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="{{$products->product_id}}">
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">ชนิดสินค้า</label>

                            <div class="col-md-6">
                                <select class="form-control" required id="type" name="type_id">
                                        <option value="">เลือกประเภท</option>
                                     @foreach($type as $ls)
                                     @if($ls->type_id==$products->type_id)
                                    <option selected value={{$ls->type_id}}>{{$ls->type_name}}</option>
                                    @else
                                    <option value={{$ls->type_id}}>{{$ls->type_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('บันทึก') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
