@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
            <div class="header">
                <h3 class="fw-bold">Manage Benefit</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if ($benefit === null)
                        <a class="btn btn-primary mb-3" href="/dashboard/benefit/create">Create</a>
                    @else 
                        <a class="btn btn-success mb-3" href="/dashboard/benefit/1/edit">Edit</a>
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
                        @if ($benefit !== null)
                            <section class="p-3" id="benefit" style="background-color: #F4F4F4; border-radius: 10px">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h1 class="heading mb-3" data-class="heading" data-aos="fade-up" data-aos-once="true" style="font-weight: 500">Benefit saat Menyewa Vila</h1>
                                        <p class="desc" data-class="desc">Terletak di Batu, Jawa Timur Kami menyajikan Banyak sekali keuntungan yang bisa Anda dapatkan jika Anda menginap di Vila Mountain Oasis.  Seperti hal-hal berikut ini :</p>
                                        <div class="list row mt-4" data-class="list">
                                            <div class="col-lg-2 mb-2">
                                                <img class="img-fluid" src="/assets/img/tabungan.png" alt="">
                                            </div>
                                            <div class="col-lg-10">
                                                <h6 data-aos="fade-up" data-aos-once="true" >MENGHEMAT UANG</h6>
                                                <p data-aos="fade-up" data-aos-once="true">Nikmati harga lebih ekonomis dibandingkan dengan penginapan di hotel ketika Anda menyewa Vila Mountain Oasis.</p>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-2 mb-2">
                                                <img class="img-fluid" src="/assets/img/tabungan.png" alt="">
                                            </div>
                                            <div class="col-lg-10">
                                                <h6 data-aos="fade-up" data-aos-once="true" >MENGHEMAT UANG</h6>
                                                <p data-aos="fade-up" data-aos-once="true">Nikmati harga lebih ekonomis dibandingkan dengan penginapan di hotel ketika Anda menyewa Vila Mountain Oasis.</p>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-2 mb-2">
                                                <img class="img-fluid" src="/assets/img/tabungan.png" alt="">
                                            </div>
                                            <div class="col-lg-10">
                                                <h6 data-aos="fade-up" data-aos-once="true" >MENGHEMAT UANG</h6>
                                                <p data-aos="fade-up" data-aos-once="true">Nikmati harga lebih ekonomis dibandingkan dengan penginapan di hotel ketika Anda menyewa Vila Mountain Oasis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image col-lg-6" data-class="image">
                                        <img class="img-fluid h-100" src="/assets/img/villa.jpg" alt="">
                                    </div>
                                </div>
                                <div class="booking mt-5 pb-5 d-flex justify-content-center">
                                    <a class="p-3" style="background-color: #000; color: #fff" href="#"><i style="margin-right: 10px; font-size: 20px" class='bx bxl-whatsapp'></i> Booking Sekarang</a>
                                </div>
                            </section>
                                @else
                                    <h1 class="d-flex justify-content-center align-items-center text-black">Data benefit empty</h1>
                                @endif
                            </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection