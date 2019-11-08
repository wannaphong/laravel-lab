@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">อาจารย์</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">ชื่อ</th>
                          <th scope="col">นามสกุล</th>
                          <th scope="col">สาขา</th>
                          @if (auth::user() != '')
                          <th></th>
                          <th></th>
                          @endif

                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                        @foreach($pro as $key)
                        <?php $i++?>

                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>{{$key->first_name}}</td>
                          <td>{{$key->last_name}}</td>
                          <td>{{$key->branch_name}}</td>
                          @if (auth::user() != '')
                          <td><a href ="profressor{{$key->pro_id}}">แก้ไข</a></td>
                          <td><a href ="del{{$key->pro_id}}">ลบ</a></td>


                          @endif
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
