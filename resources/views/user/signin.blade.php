@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h1> Mendaftar </h1>
    <!-- tampikan ketika ada galat -->
    @if(count($errors) > 0)
      <div class="alert alert-danger">
        @foreach($erors->all() as $eror)
          <p>{{ $eror }}</p>
          @endforeach
      </div>
    @endif
    <form action="{{ route('user.signin') }}" method="post">
      <div class="form-group">
        <label for="email"> E-Mail</label>
        <input name="email" type="text" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="password"> Password</label>
        <input name="password" type="password" id="password" class="form-control">
      </div>
      
      <button type="sumbit" class="btn btn-primary"> Masuk </button>
      {{ csrf_field() }}
    </form>
    
  </div>
  
</div> 
@endsection
 
