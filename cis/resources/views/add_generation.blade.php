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
                <form method="POST" action="add_generation">

                <div class="card-body">


                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name" class="col-md-4">ปี</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control" name="first_name" value="" required autofocus>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="last_name" class="col-md-4">จำนวนนักศึกษา</label>

                                <div class="col-md-12">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="" required autofocus>

                                </div>
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
