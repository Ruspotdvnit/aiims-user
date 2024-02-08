@extends('layouts.app')

@section('content')

@if (isset($message))
    <div class="alert alert-info">
        {{ $message }}
    </div>
@endif

<div class="container my-4">
    <h2 class="fw-bold"> Live Kidney Transplant - Donor Registration </h2>

    <form action="{{ route('live-donor-demo-receive') }}" method="post" enctype="multipart/form-data" >
        @csrf

        <x-new.header type="donor" />

        <x-new.deseased-history type="donor"/>

        <div class="d-grid gap-2 col-4 mx-auto my-4">
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </div>
                
    </form>
    
</div>

@endsection