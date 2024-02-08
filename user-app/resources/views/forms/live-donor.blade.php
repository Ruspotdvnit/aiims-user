@extends('layouts.app')

@section('content')

@if (isset($message))
    <div class="alert alert-info">
        {{ $message }}
    </div>
@endif


<div class="container my-4">
    <h2 class="fw-bold  ">Live Patient Routine Investigation</h2>

    <form action="{{ route('live-routine-receive') }}" method="POST" enctype="multipart/form-data" >
        @csrf

        <x-accordions type="routine"/>
        <x-rediological-investigation type="routine"/>
        <x-malignancy-screening type="routine"/>
        <x-immunological-investigation type="routine"/>
        <x-covid-report type="routine"/>
        <x-departmental-clearance type="routine"/>
        
        <div class="d-grid gap-2 col-4 mx-auto my-4">
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </div>

    </form>

</div>

@endsection