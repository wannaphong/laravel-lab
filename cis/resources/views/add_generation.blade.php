@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            เพิ่มรุ่น
        </div>
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">ข้อมูลส่วนตัว</div>
                <form method="POST" action="./add_generation">
                @csrf
                <div class="card-body">


                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="year" class="col-md-4">ปี</label>

                                <div class="col-md-12">
                                    <input id="year" type="text" class="form-control" name="year" value="" required autofocus>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="gen_count" class="col-md-4">จำนวนนักศึกษา</label>

                                <div class="col-md-12">
                                    <input id="gen_count" type="text" class="form-control" name="gen_count" value="" required autofocus>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div style="margin-top: 2em;"></div>
            <center><button type="submit" class="btn btn-primary">บันทึก</button></center>


            </form>

            </div>
        </div>
    </div>
</div>
@endsection
