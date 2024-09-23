@extends('layouts/website')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            WE HELP YOUR BUSSINESS GROW
            <div class="cointainer col-md-6">
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('2303345.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="page-header">
      <h1>Example Page Header</h1>      
    </div>
    <p>This is some text.</p>      
    <p>This is another text.</p>      
  </div> --}}
  

@endsection
