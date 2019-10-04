@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-12" style="margin-bottom: 2em;">
        รายชื่อนักศึกษา <br>
    </div>
        <div class="col-md-10">
            <?php $i = 0; ?>
            @foreach($member as $ls)
            <?php $i++ ?>
            <div class="card" style="margin-bottom: 2em;">
                <div class="card-header">{{$i}}. {{$ls->first_name}}  {{$ls->last_name}} ({{$ls->nick_name}})</div>

                <div class="card-body">


                   ......
                   <div class="rigth" style="text-align: right!important;">
                   <a href="./view_member/{{$ls->member_id}}" class="btn btn-primary" >รายละเอียด</a>
                   </div>

                </div>
            </div>
            @endforeach
        </div>
        <form action="./add_member" class="was-validated" method="post">
            @csrf
            <div class="form-group">
              <label for="first_name">first_name:</label>
              <input type="text" class="form-control" id="first_name" name="first_name" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="last_name">last_name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            <div class="form-group">
                <label for="nick_name">nick_name:</label>
                <input type="text" class="form-control" id="nick_name" name="nick_name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="gender">gender:</label>
                <input type="text" class="form-control" id="gender" name="gender" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="img_url">img_url:</label>
                <input type="text" class="form-control" id="img_url" name="img_url" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="year">year:</label>
                <input type="text" class="form-control" id="year" name="year" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection
