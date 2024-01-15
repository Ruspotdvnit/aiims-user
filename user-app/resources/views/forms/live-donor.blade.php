@extends('layouts.app')

@section('content')

<div class="container my-4">
    <h2 class="fw-bold  ">Live Kidney Transplantation - Donor Registration</h2>

    <form>
        
        <x-accordions />

        <div class="d-grid gap-2 col-4 mx-auto my-4">
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </div>

    </form>

</div>

@endsection