@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                        <div class="card-header">รายการสินค้า</div>

                        <div class="card-body">
                                <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อ</th>
                                            <th>ราคา</th>
                                            <th>ประเภท</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $ls)
                                            <tr>
                                                <td>{{$ls->product_id}}</td>
                                                <td>{{$ls->product_name}}</td>
                                                <td>{{$ls->price}}</td>
                                                <td>{{$ls->type_name}}</td>
                                                <td><a href="edit/{{$ls->product_id}}"> <button class="btn btn-warning">แก้ไข</button></a></td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                </table>
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection
