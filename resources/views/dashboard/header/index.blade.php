@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
            <div class="header">
                <h3>Manage Header</h3>
            </div>
            <a class="btn btn-primary mb-3" href="/dashboard/header/create">Tambah</a>
            <a class="btn btn-success mb-3" href="/dashboard/header/1/edit">Edit</a>
            <p class="text-danger d-flex justify-content-end">{--hover component below and you will know what element it is--}</p>
            <div class="card" style="background-color: #1A4543;">
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <section id="header">
                            <div class="pt-5">
                                <div class="row">
                                    <div class="col-lg-6" style="display: flex; flex-direction: column; justify-content: center; height: 100vh;">
                                        <div class="logo" data-class="logo">
                                            <img src="{{ asset('storage/' . $header->logo) }}" width="150px" alt="">
                                        </div>
                                        <h6 class="my-3 diskon" data-class="diskon" style="color: #3CBD6D">Diskon {{ $header->diskon }} %</h6>
                                        <div class="heading" data-class="heading">
                                            <h1 style="font-weight: 700; color: #fff" data-aos="fade-up" data-aos-once="true">{{ $header->heading }}</h1>
                                        </div>
                                        <div class="sub-heading mt-4" data-class="sub-heading">
                                            <p style="font-size: 16px">{!! $header->subHeading !!}</p>
                                        </div>
                                        <div class="booking mt-5 pb-5">
                                            <a class="p-3" style="background-color: white; color: black" href="#"><i style="margin-right: 10px; font-size: 20px" class='bx bxl-whatsapp'></i> Booking Sekarang</a>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                    <div class="col-lg-5 image" data-class="image">
                                        <img class="img-fluid h-100" data-aos="fade-left" data-aos-once="true" src="{{ asset('storage/' . $header->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection