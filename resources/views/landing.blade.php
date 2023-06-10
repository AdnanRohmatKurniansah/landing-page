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
                    <h6 class="my-3" style="color: #3CBD6D">{{ $header->tagline }}</h6>
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
                        <a class="btn btn-light px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px; " href="{{ $whatsapp->link }}" target="_blank"><span><i style="margin-right: 10px" class="fa-brands fa-{{ $whatsapp->icon }}"></i> {{ $whatsapp->text }}</span></a>
                      </div>
                </div>
                <div class="col"></div>
                <div class="col-lg-5 villa">
                    <img class="img-fluid h-100" data-aos="fade-left" data-aos-once="true" src="{{ asset('storage/' . $header->image) }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 p-3 bg-black" style="border-bottom: 1px solid black" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"></div>
            </div>
        </div>
    </section>
    <section id="question">
        <div class="row">
            <div class="col-md-4 p-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-once="true" style="background-color: black;">
              <h3 class="pb-3" style="color: #fff; display: flex; flex-direction: column; justify-content: center; line-height: 1.2cm">"{{ $promosi->heading }}"</h3>
            </div>
            <div class="col"></div>
            <div class="col-lg-7 pt-5" style="background-color: #F8F6F3;">
              <div class="text">
                {!! $promosi->text !!}
              </div>
            </div>
            <div class="booking mt-5 pb-5 d-flex justify-content-center">
                <a class="btn btn-dark px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px; " href="{{ $whatsapp->link }}" target="_blank"><span><i style="margin-right: 10px" class="fa-brands fa-{{ $whatsapp->icon }}"></i> {{ $whatsapp->text }}</span></a>
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
            <a class="btn btn-dark px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px; " href="{{ $whatsapp->link }}" target="_blank"><span><i style="margin-right: 10px" class="fa-brands fa-{{ $whatsapp->icon }}"></i> {{ $whatsapp->text }}</span></a>
          </div>
    </section>
    <section id="facility">
        <div class="d-flex justify-content-center mb-4" data-aos="fade-up" data-aos-once="true" style="font-weight: 500; padding-top: 60px">{!! $heading->heading !!}</div>
        <div class="row">
            @foreach ($facilities as $facility)   
            <div class="col-lg-3 p-1">
                <div class="box p-2" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $facility->image) }}" class="img-fluid" alt="...">
                    </div>
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
        @if ($testimonies->count())    
        <div class="ornament d-flex justify-content-end">
            <img src="/assets/img/ornament.png" alt="">
        </div>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="imgDesktop w-100" src="{{ asset('storage/' . $testimonies[0]->foto) }}" style="max-height: 350px; min-height: 350px;"  alt="...">
                            </div>
                            <div class="col"></div>
                            <div class="col-lg-7 py-5" style="color: rgba(6, 18, 18, 0.68); font-size: 1.3em;">
                                <i class="fa-solid fa-quote-left mb-3" style="font-size: 60px"></i><br>
                                "{{ $testimonies[0]->opini }}"
                                <div class="identity mt-3">
                                    <img class="imgMobile mb-2 rounded-circle" width="70px" src="{{ asset('storage/' . $testimonies[0]->foto) }}">
                                    <div class="rate mb-2" style="font-size: 13px">
                                        @php
                                            $rate = $testimonies[0]->rate;
                                        @endphp
                                        @for ($i = 1; $i <= 5; $i++)   
                                            @if ($i <= $rate)
                                                <i class="fa-solid fa-star text-warning"></i>
                                            @else
                                                <i class="fa-regular fa-star text-warning"></i>
                                            @endif
                                        @endfor
                                    </div>
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
                            <div class="col-lg-4">
                                <img class="imgDesktop w-100" src="{{ asset('storage/' . $testimoni->foto) }}" alt="..." style="max-height: 350px; min-height: 350px">
                            </div>
                            <div class="col"></div>
                            <div class="col-lg-7 py-5" style="color: rgba(6, 18, 18, 0.68); font-size: 1.3em; ">
                                <i class="fa-solid fa-quote-left mb-3" style="font-size: 60px"></i><br>
                                {{ $testimoni->opini }}
                                <div class="identity mt-3">
                                    <img class="imgMobile mb-2 rounded-circle" width="70px" src="{{ asset('storage/' . $testimoni->foto) }}">
                                    <div class="rate mb-2" style="font-size: 13px">
                                        @php
                                            $rate = $testimoni->rate;
                                        @endphp
                                        @for ($i = 1; $i <= 5; $i++)   
                                            @if ($i <= $rate)
                                                <i class="fa-solid fa-star text-warning"></i>
                                            @else
                                                <i class="fa-regular fa-star text-warning"></i>
                                            @endif
                                        @endfor
                                    </div>
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
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                </button>
            </div>
        @else
            <h1 class="d-flex justify-content-center">No Testimony From Anyone <i class="fa-solid fa-face-dizzy m-1"></i></h1>
        @endif
        <div class="rate-me p-3" style="margin-top: 100px ;margin-bottom: 20px; border-radius: 10px; background-color: #fff; border: 1px solid whitesmoke; box-shadow: 20px 20px 20px rgb(243, 240, 240)">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="rateHead">Give Us Your Review</h2>
                        <div class="rate">
                            @php
                                $sum = \App\Models\Testimoni::where('status', 'published')->sum('rate');
                                $count = \App\Models\Testimoni::where('status', 'published')->count();
                                $average = $count > 0 ? $sum / $count : 0;
                            @endphp
                            <p>
                                <span>{{ number_format($average, 2) }}</span>
                                @for ($i = 1; $i <= 5; $i++)   
                                @if ($i <= $average)
                                    <i class="fa-solid fa-star text-warning"></i>
                                @else
                                    <i class="fa-regular fa-star text-warning"></i>
                                @endif
                            @endfor
                            </p>

                        </div>
                    </div>
                    <div class="col d-flex justify-content-center justify-content-lg-end">
                        <button class="btn btn-success text-white px-3 py-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><b>Write a Review <svg width="30px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 48 48" id="rating"><path fill="#4cb7d8" d="M45,9V32a4.98241,4.98241,0,0,1-5,5H23.81006a2.90725,2.90725,0,0,0-1.55.44,2.77494,2.77494,0,0,0-.7.58l-2.5,2.86-.79.9a2.99806,2.99806,0,0,1-2.25,1.03,2.82,2.82,0,0,1-.71-.09,2.98416,2.98416,0,0,1-2.21-2.19L12.79,39.27A2.99491,2.99491,0,0,0,9.87988,37H8a5.00181,5.00181,0,0,1-5-5V9A4.98228,4.98228,0,0,1,8,4H40A5.00181,5.00181,0,0,1,45,9Z"></path><path fill="#44cdf2" d="M45,9V32a5.00388,5.00388,0,0,1-.79,2.71,5.004,5.004,0,0,1-2.71.79H25.31006a2.99128,2.99128,0,0,0-2.25,1.02l-.8.92a2.77494,2.77494,0,0,0-.7.58l-2.5,2.86a3.008,3.008,0,0,1-1.54.43,2.82,2.82,0,0,1-.71-.09,2.98416,2.98416,0,0,1-2.21-2.19L14.29,37.77a2.99491,2.99491,0,0,0-2.91016-2.27H9.5a5.00181,5.00181,0,0,1-5-5V7.5a5.00424,5.00424,0,0,1,.79-2.71A5.004,5.004,0,0,1,8,4H40A5.00181,5.00181,0,0,1,45,9Z"></path><path fill="#f4ce2f" d="M20.80807 14.48436a1.06745 1.06745 0 01-.19319.24365l-.36956.36961-.84844.85679.56276 2.24286a1.401 1.401 0 010 .64684h-.00841a1.29136 1.29136 0 01-1.89006.798L16.12086 18.5333l-1.9321 1.10885a1.34246 1.34246 0 01-.63843.168 1.32239 1.32239 0 01-.78138-.26041 1.29852 1.29852 0 01-.47866-1.35248l.56275-2.24286L11.62663 14.728a1.294 1.294 0 01.5123-2.14212 1.26941 1.26941 0 01.4032-.06716h1.6214l.77276-1.79767a1.29492 1.29492 0 012.37734 0l.76435 1.79767h1.6212a1.291 1.291 0 011.20139.798A1.27433 1.27433 0 0120.80807 14.48436zM36.558 14.48438a.98255.98255 0 01-.18477.24363l-.378.378-.84841.84841.56273 2.24279a1.40094 1.40094 0 010 .64682 1.33509 1.33509 0 01-.47865.70563 1.30149 1.30149 0 01-1.41976.09238l-1.93205-1.1088L29.93884 19.642a1.34225 1.34225 0 01-.63841.168 1.29724 1.29724 0 01-1.26-1.61285l.56273-2.24279L27.3852 14.728a1.28826 1.28826 0 01.50388-2.142 1.364 1.364 0 01.4118-.06716H29.922l.76432-1.79762a1.29489 1.29489 0 012.37728 0l.77273 1.79762h1.62136A1.29092 1.29092 0 0136.558 14.48438z"></path><path fill="#fefefe" d="M36 26.25H12a1 1 0 010-2H36a1 1 0 010 2zM36 31.25H12a1 1 0 010-2H36a1 1 0 010 2z"></path><path fill="#232323" d="M16.0166,42.80566a3.00646,3.00646,0,0,1-2.91406-2.27343l-.31543-1.25977A2.99524,2.99524,0,0,0,9.877,37H8a5.00588,5.00588,0,0,1-5-5V9A5.00588,5.00588,0,0,1,8,4H40a5.00588,5.00588,0,0,1,5,5V32a5.00588,5.00588,0,0,1-5,5H23.81543a2.99825,2.99825,0,0,0-2.25781,1.02441l-3.28711,3.75586A2.9893,2.9893,0,0,1,16.0166,42.80566ZM8,6A3.00328,3.00328,0,0,0,5,9V32a3.00328,3.00328,0,0,0,3,3H9.877a4.9926,4.9926,0,0,1,4.85059,3.78809l.31543,1.25976a.99932.99932,0,0,0,1.72168.416L20.05176,36.708A5.001,5.001,0,0,1,23.81543,35H40a3.00328,3.00328,0,0,0,3-3V9a3.00328,3.00328,0,0,0-3-3Z"></path><path fill="#232323" d="M12.86719 20.749A1.57409 1.57409 0 0111.33984 18.794l.68457-2.73633-1.48828-1.48828a1.574 1.574 0 011.11231-2.68653h1.9707l.93457-2.17871v-.001a1.57387 1.57387 0 012.89258 0l.93457 2.17968h1.9707a1.574 1.574 0 011.11231 2.68653l-1.48828 1.48828.68359 2.73535a1.57321 1.57321 0 01-2.30762 1.748L16 19.19727 13.64746 20.541A1.56547 1.56547 0 0112.86719 20.749zm-.18946-6.86621l.93165.93164a1.57544 1.57544 0 01.4121 1.498l-.499 1.99609 1.69727-.96875a1.579 1.579 0 011.56152 0l1.69629.96875-.5-2.001a1.57263 1.57263 0 01.41309-1.49317l.93164-.93164H18.09863a1.56938 1.56938 0 01-1.44629-.956L16 11.40527l-.65332 1.52344a1.56828 1.56828 0 01-1.44531.9541zM12.083 15.82324l-.001.00293zm7.833-.00488l.001.00391zM16.3916 10.49219zM28.86719 20.749A1.57409 1.57409 0 0127.33984 18.794l.68457-2.73633-1.48828-1.48828a1.574 1.574 0 011.11231-2.68653h1.9707l.93457-2.17871v-.001a1.57387 1.57387 0 012.89258 0l.93457 2.17968h1.9707a1.574 1.574 0 011.11231 2.68653l-1.48828 1.48828.68359 2.73535a1.57321 1.57321 0 01-2.30762 1.748L32 19.19727 29.64746 20.541A1.56547 1.56547 0 0128.86719 20.749zm-.18946-6.86621l.93165.93164a1.57544 1.57544 0 01.4121 1.498l-.499 1.99609 1.69727-.96875a1.579 1.579 0 011.56152 0l1.69629.96875-.5-2.001a1.57263 1.57263 0 01.41309-1.49317l.93164-.93164H34.09863a1.56938 1.56938 0 01-1.44629-.956L32 11.40527l-.65332 1.52344a1.56828 1.56828 0 01-1.44531.9541zM28.083 15.82324l-.001.00293zm7.833-.00488l.001.00391zM32.3916 10.49219z"></path></svg></b></button>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <section id="promo">
        <div class="row">
            <div class="col-lg-6">
                <h6 style="padding-top: 20px;">{{ $promo->offer }}</h6>
                <h2 style="font-weight: 700" data-aos="fade-up" data-aos-once="true">{{ $promo->heading }}</h2>
                <div class="row">
                    @if ($features->count())
                    <div class="col-md-6">
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            @foreach ($features->take(10) as $feature)
                                <li><i class="fa-solid fa-{{ $feature->icon }} m-2"></i> {{ $feature->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            @foreach ($features->skip(10) as $feature)
                                <li><i class="fa-solid fa-{{ $feature->icon }} m-2"></i> {{ $feature->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                @else
                <div class="col-md-6">
                    <ul class="list-unstyled" style="margin-bottom: 0;">
                      <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                      <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                      <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                      <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                      <li><i class="fa-solid fa-square-minus m-2"></i> Lorem ipsum dolor sit.</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list-unstyled" style="margin-bottom: 0;">
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
                            <a class="btn btn-dark px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px; " href="{{ $whatsapp->link }}" target="_blank"><span><i style="margin-right: 10px" class="fa-brands fa-{{ $whatsapp->icon }}"></i> {{ $whatsapp->text }}</span></a>
                          </div>
                    </div>
                </div>
                <div class="input-group input-group-lg pb-3">
                    <span class="input-group-text p-4" style="background-color: #1A4543; color: #fff; font-size: 15px" id="inputGroup-sizing-lg">{{ $promo->promo }}</span>
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
            <div class="col-md-6" style="display: flex; flex-direction: column; justify-content: center;">
                <div class="text">
                    <h2 class="heading" data-aos="fade-up" data-aos-once="true">{{ $footer->heading }}</h2>
                    <p class="desc pt-3">{{ $footer->subHeading }}</p>
                </div>
                <div class="booking pt-4">
                    <a class="btn btn-light px-4 py-3 rounded-0" style="font-weight: 600; font-size: 18px;" href="{{ $whatsapp->link }}" target="_blank"><span><i style="margin-right: 10px" class="fa-brands fa-{{ $whatsapp->icon }}"></i> {{ $whatsapp->text }}</span></a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Write Your Review In Here</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    {{-- <div class="mb-3">
                        <label for="rate">Rating</label>
                        <select name="rate" class="form-control">
                          @php
                            $defaultRating = old('rate') ?? 1;
                          @endphp
                          @for ($i = 1; $i <= 5; $i++)
                            @if ($i == $defaultRating)
                              <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                              <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                          @endfor
                        </select>
                      </div> --}}
                      <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                          name="name" placeholder="Your Name..." required autofocus value="{{ old('name') }}">
                          @error('name')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                      <div class="">
                          <label for="address" class="form-label">Address</label>
                          <input type="text" placeholder="Your Address..." class="form-control @error('address') is-invalid @enderror" id="address" 
                          name="address" required autofocus value="{{ old('address') }}">
                          @error('address')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                </div>
                <div class="col">
                      <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                      <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto"
                        name="foto" onchange="previewFoto()">
                        <img class="foto-preview d-flex mx-auto img-fluid mt-3 col-sm-5 rounded-circle" style="max-height: 170px">
                      @error('foto')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                </div>
            </div>
            <div class="mt-3 mb-3">
                <label for="opini" class="form-label">Opini</label>
                <textarea class="form-control @error('opini') is-invalid @enderror" name="opini" id="opini" cols="30" rows="5" placeholder="Your Opinion..." required autofocus>{{ old('opini') }}</textarea>
                @error('opini')
                    <div class="invalid-feedback">  
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="rating mt-2 mb-3">
                <p for="">Rating</p>
                <input type="radio" id="star5" name="rate" value="5" />
                <label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label class="star" for="star4" title="Great" aria-hidden="true"></label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label class="star" for="star2" title="Good" aria-hidden="true"></label>
                <input type="radio" id="star1" name="rate" value="1" checked/>
                <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
              </div>
        </div>
        <div class="modal-footer d-flex justify-content-start">
            <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
        </div>
      </div>
    </div>
</div>

<script>
    function previewFoto() {
      const foto = document.querySelector('#foto');
      const fotoPreview = document.querySelector('.foto-preview');
      fotoPreview.style.display = 'block';
      const oFReader = new FileReader();
      oFReader.readAsDataURL(foto.files[0]);
      oFReader.onload = function(oFREvent) {
        fotoPreview.src = oFREvent.target.result;
      }
    }
</script>

@endsection