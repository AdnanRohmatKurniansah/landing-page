@extends('layout.main')

@section('content')

    <header class="header">
        <div class="container-fluid">
      <button type="button" class="nav-toggle"><i class="fa-solid fa-bars"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="{{ Request::is('#header') ? 'active' : '' }}"><a href="#header" class="scrollto">Home</a></li>
          <li class="{{ Request::is('#facility') ? 'active' : '' }}"><a href="#facility" class="scrollto">Facility</a></li>
          <li class="{{ Request::is('#testimonial') ? 'active' : '' }}"><a href="#testimonial" class="scrollto">Testimoni</a></li>
          <li class="{{ Request::is('#promo') ? 'active' : '' }}"><a href="#promo" class="scrollto">Promo</a></li>
        </ul>
      </nav><!-- .nav-menu -->

        </div>
    </header>

    <section id="header">   
        <div class="pt-5">
            <div class="row">
                <div class="col-lg-6" style="display: flex; flex-direction: column; justify-content: center; height: 100vh;">
                    <div class="logo">
                        <img src="{{ asset('storage/' . $header->logo) }}" width="150px" alt="">
                    </div>
                    <h6 class="my-3" style="color: #3CBD6D">Diskon {{ $header->diskon }} %</h6>
                    <div class="desc">
                        <h1 style="font-weight: 700" data-aos="fade-up" data-aos-once="true">{{ $header->heading }}</h1>
                    </div>
                    <div class="sub-dec mt-4">
                        <p style="font-size: 16px">{!! $header->subHeading !!}</p>
                    </div>
                    {{-- <div class="booking mt-5 pb-5">
                        <a href="#"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
                    </div> --}}
                    <div class="booking mt-5 pb-5">
                        <a class="btn btn-light px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px; " href="http://whatsapp.com" target="_blank"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-lg-5 villa">
                    <img class="img-fluid h-100" data-aos="fade-left" data-aos-once="true" src="{{ asset('storage/' . $header->image) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="question">
            <div class="row">
                <div class="solution col-md-3 p-5 d-flex align-items-center h-75"  data-aos="fade-up" data-aos-once="true" style="background-color: black">
                    <h3 style="color: #fff">"{{ $promosi->heading }}"</h3>
                </div>
                {{-- <div class="col-md-4 p-5 d-flex align-items-center h-75" style="background-color: black; position: absolute; top: 650px; left: 100px; z-index: 1;">
                    <h3 style="color: #fff" data-aos="fade-up" data-aos-once="true">"{{ $promosi->heading }}"</h3>
                  </div> --}}
                <div class="col"></div>
                <div class="col-lg-7 pt-5" style="background-color: #F8F6F3">
                    <div class="text">
                        {!! $promosi->text !!}
                    </div>
                </div>
                <div class="booking mt-2 pb-5 d-flex justify-content-center">
                    <a class="btn btn-dark px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px; " href="http://whatsapp.com" target="_blank"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
                </div>
        </div>
    </section>
    <section id="benefit" class="pt-4">
        <div class="row">
            <div class="text col-lg-6">
                <h1 class="mb-3" data-aos="fade-up" data-aos-once="true" style="font-weight: 500">{{ $benefit->heading }}</h1>
                <p class="sub-main">{{ $benefit->desc }}</p>
                @if ($daftars->count())
                    @foreach ($daftars as $daftar) 
                        <div class="row mt-4">
                            <div class="col-lg-2 mb-2">
                                <img class="img-fluid w-10" data-aos="fade-up" data-aos-once="true" src="{{ asset('storage/' . $daftar->image) }}" alt="">
                            </div>
                            <div class="col-lg-10">
                                <h6 data-aos="fade-up" data-aos-once="true" >{{ $daftar->title }}</h6>
                                <p data-aos="fade-up" data-aos-once="true">{{ $daftar->desc }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row mt-4">
                        <div class="col-lg-2 mb-2">
                            <img class="img-fluid" data-aos="fade-up" data-aos-once="true" src="/assets/img/tabungan.png" alt="">
                        </div>
                        <div class="col-lg-10">
                            <h6 data-aos="fade-up" data-aos-once="true" >Lorem ipsum dolor sit.</h6>
                            <p data-aos="fade-up" data-aos-once="true">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde praesentium fugiat optio corporis obcaecati molestias.</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-2 mb-2">
                            <img class="img-fluid" data-aos="fade-up" data-aos-once="true" src="/assets/img/tabungan.png" alt="">
                        </div>
                        <div class="col-lg-10">
                            <h6 data-aos="fade-up" data-aos-once="true" >Lorem ipsum dolor sit.</h6>
                            <p data-aos="fade-up" data-aos-once="true">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde praesentium fugiat optio corporis obcaecati molestias.</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-2 mb-2">
                            <img class="img-fluid" data-aos="fade-up" data-aos-once="true" src="/assets/img/tabungan.png" alt="">
                        </div>
                        <div class="col-lg-10">
                            <h6 data-aos="fade-up" data-aos-once="true" >Lorem ipsum dolor sit.</h6>
                            <p data-aos="fade-up" data-aos-once="true">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde praesentium fugiat optio corporis obcaecati molestias.</p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-6">
                <img class="img-fluid h-100" src="{{ asset('storage/' . $benefit->image) }}" alt="">
            </div>
        </div>
        <div class="booking mt-5 pb-5 d-flex justify-content-center">
            <a class="btn btn-dark px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px; " href="http://whatsapp.com" target="_blank"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
        </div>
    </section>
    <section id="facility">
        <h2 class="d-flex justify-content-center mb-4" data-aos="fade-up" data-aos-once="true" style="font-weight: 500; padding-top: 60px">Fasilitas Unggulan Villa Mountain Oasis</h2>
        <div class="row">
            @foreach ($facilities as $facility)   
            <div class="col-lg-3">
                <div class="box p-2" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
                    <img src="{{ asset('storage/' . $facility->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="mt-2">{{ $facility->name }}</h4>
                      <p class="card-text pb-5">{{ $facility->desc }}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </section>
    <section id="testimonial">
        <div class="ornament d-flex justify-content-end">
            <img src="/assets/img/ornament.png" alt="">
        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('storage/' . $testimonies[0]->foto) }}" style="max-height: 400px; min-height: 400px" class="d-block w-100" alt="...">
                    </div>
                    <div class="col"></div>
                    <div class="col-lg-6 py-5" style="color: rgba(6, 18, 18, 0.68); font-size: 1.3em; ">
                        <i class="fa-solid fa-quote-left mb-3" style="font-size: 60px"></i><br>
                        "{{ $testimonies[0]->opini }}"
                        <div class="identity mt-3">
                            <h6>{{ $testimonies[0]->name }}<br>
                            <span style="font-size: small; font-weight: 400">{{ $testimonies[0]->address }}</span>
                            </h6>
                        </div>
                    </div>
                </div>
              </div>
              @foreach ($testimonies->skip(1) as $testimoni)
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="{{ asset('storage/' . $testimoni->foto) }}" class="d-block w-100" alt="..." style="max-height: 400px; min-height: 400px">
                        </div>
                        <div class="col"></div>
                        <div class="col-lg-6 py-5">.
                            <i class="fa-solid fa-quote-left" style="font-size: 40px"></i><br>
                            {{ $testimoni->opini }}
                            <div class="identity mt-3">
                                <h6>{{ $testimoni->name }}<br>
                                <span style="font-size: small; font-weight: 400">{{ $testimoni->address }}</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section id="promo">
        <div class="row">
            <div class="col-lg-6">
                <h6 style="padding-top: 20px;">{{ $promo->offer }}</h6>
                <h2 style="font-weight: 700" data-aos="fade-up" data-aos-once="true">{{ $promo->heading }}</h2>
                <div class="row">
                    @if ($features->count())
                    <div class="col">
                        <ul class="list-unstyled">
                            @foreach ($features->take(10) as $feature)
                                <li><i class="fa-solid fa-{{ $feature->icon }} m-2"></i> {{ $feature->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-unstyled">
                            @foreach ($features->skip(10) as $feature)
                                <li><i class="fa-solid fa-{{ $feature->icon }} m-2"></i> {{ $feature->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                            <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                            <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                            <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                            <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                        </ul>
                    </div>
                    <div class="col">
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
                    <div class="price col-lg-6">
                        <small style="font-weight: 600">Harga</small>
                        <h3 style="font-weight: 700">Rp. {{ $promo->price }}</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="booking mt-4 pb-5 d-flex justify-content-center">
                            <a class="btn btn-dark px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px; " href="http://whatsapp.com" target="_blank"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-lg pb-3">
                    <span class="input-group-text p-4" style="background-color: #1A4543; color: #fff; font-size: 15px" id="inputGroup-sizing-lg">Diskon {{ $promo->diskon }} %</span>
                    <input type="text" class="form-control" style="font-size: 13px; text-align: center; background-color: #fff" value="{{ $promo->requirement }}" disabled>
                  </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid w-100" src="{{ asset('storage/' . $promo->image) }}" alt="">
                <div class="adress mt-2">
                    <div class="d-flex justify-content-center">{{ $promo->address }}</div>
                    <h4 class=" d-flex justify-content-center">{{ $promo->heading }}</h4>
                </div>
            </div>
        </div>
    </section> 
    <section id="footer">
        <div class="row footer-top" style="border-bottom: 1px solid #fff">
            <div class="col-md-6">
                <div class="text">
                    <h2 style="padding-top: 60px" class="heading" data-aos="fade-up" data-aos-once="true">{{ $footer->heading }}</h2>
                    <p class="desc pt-3">{{ $footer->subHeading }}</p>
                </div>
                <div class="booking pt-4 pb-5">
                    <a class="btn btn-light px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px; " href="http://whatsapp.com" target="_blank"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="overflow-hidden">
                    <img class="img-fluid" src="{{ asset('storage/' . $footer->image) }}" alt="">
                </div>
            </div>
        </div>
        
            <div class="empty" style="height: 150px; background-color: #001524; border-bottom: 1px solid #22313C">
            </div>
            <div class="footer-bottom">
                <div class="row p-3">
                    <div class="col-lg-10">
                        <p>Copyright © 
                            <script>
                                document.write(new Date().getFullYear());
                            </script> 
                            | {{ $footer->copyright }}
                        </p>
                    </div>
                    <div class="col-lg d-flex justify-content-center justify-content-lg-start">
                        <ul class="list-unstyled d-flex">
                            @foreach ($sosmeds as $sosmed)  
                                <li class="mx-2"><a style="color: #fff" href="{{ $sosmed->link }}" target="_blank"><i class="fa-brands fa-{{ $sosmed->name }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>            
    </section> 
@endsection