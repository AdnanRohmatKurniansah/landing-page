@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
            <div class="header">
                <h3 class="fw-bold">Manage Promosi</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if ($promosi === null)
                        <a class="btn btn-primary mb-3" href="/dashboard/promosi/create">Create</a>
                    @else 
                        <a class="btn btn-success mb-3" href="/dashboard/promosi/1/edit">Edit</a>
                    @endif
                </div>
                <div class="col-lg-6">
                    <p class="text-danger d-flex justify-content-end">{--hover component below and you will know what element it is--}</p>
                </div>
            </div>
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-12">
                        <div class="card-body">
                            <section id="question" class="p-3"  style="background-color: #F8F6F3; border-radius: 10px">
                                @if ($promosi !== null)   
                                    <div class="row p-3">
                                        <div class="heading col-lg-4 p-5 d-flex align-items-center" data-class="heading" style="background-color: black">
                                            <h3 style="color: #fff" data-aos="fade-up" data-aos-once="true">"{{ $promosi->heading }}"</h3>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col-lg-7 pt-5">
                                            <div class="text" data-class="text">
                                                {!! $promosi->text !!}
                                            </div>
                                        </div>
                                        
                                        <div class="booking mt-2 pb-5 d-flex justify-content-center">
                                            <a class="p-3" style="background-color: #000; color: #fff" href="#"><i style="margin-right: 10px; font-size: 20px" class='bx bxl-whatsapp'></i> Booking Sekarang</a>
                                        </div>
                                    </div>
                                @else
                                    <h1 class="d-flex justify-content-center align-items-center text-white">Data Promosi Empty</h1>
                                @endif
                        </section>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection