@extends('layouts.app')

@section('content')

<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Register As</h2>
        </div>
        <div class="card-body px-5">
            <div class="mt-4">
                <h3 class="card-title"><strong>Live Kidney Transplantation Registration</strong></h3>
                <div class="mx-5 my-4">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="float-start"><strong>Donor</strong></h4>
                                <h4><i class="float-end bi bi-chevron-right"></i></h4>
                                <a href="{{ route('live-donor-demo') }}" class="stretched-link"></a>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <h4 class="float-start"><strong>Recipient</strong></h4>
                                <h4><i class="float-end bi bi-chevron-right"></i></h4>
                                <a href="{{ route('live-recp-demo') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="card-title"><strong>Live Kidney Transplantation - Routine Investigation Donor/Recipient</strong></h3>
            <div class="mx-5 my-4">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="float-start"><strong> Fill Form</strong></h4>
                            <h4><i class="float-end bi bi-chevron-right"></i></h4>
                            <a href="{{ route('live-routine') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>



        </div>
    </div>
</div>

@endsection