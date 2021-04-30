
@extends('layouts.app')
@section('content')
<div class="container bg-primary mt-5">
    <link rel="stylesheet" href="css/style.css">
    <nav class="navbar navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Name</a>

          <a class="navbar-brand text-white" href="#">Age</a>
          <a class="navbar-brand text-white" href="#">Address</a>
          <a class="navbar-brand text-white" href="#">Father_Name</a>
          <a class="navbar-brand text-white" href="#">Image</a>
          <a class="navbar-brand text-white" href="#">Repair</a>
        </div>
        <div class="container text-white">
          <div class="row">
              @foreach ($stuents as $stuent )
              <div class="col-lg-2">
                  <h5>{{ $stuent->name }}</h5>

              </div>

              @endforeach
          </div>





         </div>


        </div>
        <div>
            <a href="{{ route('post') }}" class="btn btn-primary">post</a>
          </div>

      </nav>

</div>
@endsection
