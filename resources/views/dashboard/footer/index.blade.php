@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
            <div class="header">
                <h3 class="fw-bold">Manage Footer</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if ($footer === null)
                        <a class="btn btn-primary mb-3" href="/dashboard/footer/create">Create</a>
                    @else 
                        <a class="btn btn-success mb-3" href="/dashboard/footer/1/edit">Edit</a>
                    @endif
                </div>
                <div class="col-lg-6">
                    <p class="text-danger d-flex justify-content-end">{--hover component below and you will know what element it is--}</p>
                </div>
            </div>
            <div class="card" >
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <section id="footer" style="color: #fff; background-color: #1A4543; border-radius: 10px">
                            <div class="row footer-top p-4" style="border-bottom: 1px solid #fff">
                                <div class="col-lg-6">
                                    <div class="texts">
                                        <h2 style="padding-top: 40px; color: #fff" class="heading" data-class="heading" data-aos="fade-up" data-aos-once="true">{{ $footer->heading }}</h2>
                                        <p class="sub-heading pt-3" data-class="sub-heading">{{ $footer->subHeading }}</p>
                                    </div>
                                    <div class="booking mt-5 pb-5">
                                        <a class="p-3" style="background-color: white; color: black" href="#"><i style="margin-right: 10px; font-size: 20px" class='bx bxl-whatsapp'></i> Booking Sekarang</a>
                                    </div>
                                </div>
                                <div class="image col-lg-6" data-class="image">
                                    <img class="img-fluid" src="{{ asset('storage/' . $footer->image) }}" alt="">
                                </div>
                            </div>
                                <div class="empty" style="height: 150px; background-color: #001524; border-bottom: 1px solid #22313C">
                                </div>
                                <div class="footer-bottom" style="background-color: #001524; border-radius: 10px">
                                    <div class="row p-3">
                                        <div class="col-lg-10 copyright" data-class="copyright">
                                            <p>Copyright © 
                                                <script>
                                                    document.write(new Date().getFullYear());
                                                </script> 
                                              | {{ $footer->copyright }}</p>
                                        </div>
                                        <div class="medsos col-lg d-flex justify-content-center justify-content-lg-start" data-class="medsos">
                                            <ul class="list-unstyled d-flex">
                                                <li class="mx-2"><a style="color: #fff" href="#"><i class='bx bxl-twitter'></a></i></li>
                                                <li class="mx-2"><a style="color: #fff" href="#"><i class='bx bxl-facebook-circle' ></a></i></li>
                                                <li class="mx-2"><a style="color: #fff" href="#"><i class='bx bxl-instagram' ></i></a></li>
                                            </ul>
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