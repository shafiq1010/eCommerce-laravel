@extends('master')
@section('content')

<div class="container">
    <div>
        <div class="row">
            <div class="col-sm-4 col-offset-4">
                <form action="login" method="post">
                  <div class="form-group row">
                      @csrf
                    <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection