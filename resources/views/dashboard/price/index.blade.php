@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
            <div class="header">
                <h3 class="fw-bold">Manage Price</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if ($price === null)
                        <a class="btn btn-primary mb-3" href="/dashboard/price/create">Create</a>
                    @else 
                        <a class="btn btn-success mb-3" href="/dashboard/price/1/edit">Edit</a>
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
                        @if ($price !== null)
                            <section class="p-3" id="promo" style="background-color: #F5FCEB; border-radius: 10px">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="offer" data-class="offer" style="padding-top: 20px;">{{ $price->offer }}</h6>
                                        <h2 class="heading" data-class="heading" style="font-weight: 700" data-aos="fade-up" data-aos-once="true">{{ $price->heading }}</h2>
                                        <div class="row feature" data-class="feature">
                                            @if ($features->count())
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        @foreach ($features->take(10) as $feature)
                                                            <li><i class="fa-solid fa-{{ $feature->icon }} m-2"></i> {{ $feature->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        @foreach ($features->skip(10) as $feature)
                                                            <li><i class="fa-solid fa-{{ $feature->icon }} m-2"></i> {{ $feature->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @else
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                        <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="price col-lg-6" data-class="price">
                                                <small>Harga</small>
                                                <h3 style="font-weight: 700">Rp. {{ $price->price }}</h3>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="booking mt-3 pb-5 d-flex justify-content-center">
                                                    <a class="p-3" style="background-color: #000; color: #fff" href="#"><i style="margin-right: 10px; font-size: 20px" class='bx bxl-whatsapp'></i> Booking Sekarang</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-lg pb-3">
                                            <span class="promo input-group-text p-4" data-class="promo & requirement" style="background-color: #1A4543; color: #fff; font-size: 15px" id="inputGroup-sizing-lg">{{ $price->promo }}</span>
                                            <input type="text" class="requirement form-control" data-class="requirement" style="font-size: 13px; text-align: center; background-color: #fff" value="{{ $price->requirement }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="image" data-class="image">
                                            <img class="img-fluid w-100" data-class="image" src="{{ asset('storage/' . $price->image) }}" alt="">
                                        </div>
                                        <div class="adress mt-2">
                                            <div class="address d-flex justify-content-center" data-class="address">{{ $price->address }}</div>
                                            <h4 class="heading d-flex justify-content-center" data-class="heading">{{ $price->heading }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </section>
                                @else
                                    <h1 class="d-flex justify-content-center align-items-center text-black">Data price empty</h1>
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