@extends('layouts.app')

@section('content')

<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Register As</h2>
        </div>
        <div class="card-body px-5">
            <h3 class="card-title"><strong>Live Kidney Transplantation</strong></h3>
            <div class="mx-5 my-4">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="float-start"><strong>Donor</strong></h4>
                            <h4><i class="float-end bi bi-chevron-right"></i></h4>
                            <a href="{{ route('live-donor') }}" class="stretched-link"></a>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body">
                            <h4 class="float-start"><strong>Recipient</strong></h4>
                            <h4><i class="float-end bi bi-chevron-right"></i></h4>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="mt-4">
                <h3 class="card-title"><strong>Brain Dead Donor Kidney Transplantation</strong></h3>
                <div class="mx-5 my-4">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="float-start"><strong>Donor</strong></h4>
                                <h4><i class="float-end bi bi-chevron-right"></i></h4>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <h4 class="float-start"><strong>Recipient</strong></h4>
                                <h4><i class="float-end bi bi-chevron-right"></i></h4>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection