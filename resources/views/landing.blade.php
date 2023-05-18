@extends('layout.main')

@section('content')

    <header class="header">
        <div class="container-fluid">
      <button type="button" class="nav-toggle"><i class="fa-solid fa-bars"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#header" class="scrollto">Home</a></li>
          <li><a href="#about" class="scrollto">About Us</a></li>
          <li><a href="#why-us" class="scrollto">Why Us</a></li>
          <li><a href="#contact" class="scrollto">Contact Us</a></li>
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
                    <div class="booking mt-5 pb-5">
                        <a href="#"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
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
                <div class="col-lg-4 p-5 d-flex align-items-center" style="background-color: black">
                    <h3 style="color: #fff" data-aos="fade-up" data-aos-once="true">"{{ $promosi->heading }}"</h3>
                </div>
                <div class="col"></div>
                <div class="col-lg-7 pt-5">
                    <div class="text">
                        {!! $promosi->text !!}
                    </div>
                </div>
                <div class="booking mt-2 pb-5 d-flex justify-content-center">
                    <a href="#"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
                </div>
        </div>
    </section>
    <section id="benefit">
        <div class="row">
            <div class="text col-lg-6">
                <h1 class="mb-3" data-aos="fade-up" data-aos-once="true" style="font-weight: 500">Benefit saat Menyewa Vila</h1>
                <p class="sub-main">Terletak di Batu, Jawa Timur Kami menyajikan Banyak sekali keuntungan yang bisa Anda dapatkan jika Anda menginap di Vila Mountain Oasis.  Seperti hal-hal berikut ini :</p>
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
            <div class="col-lg-6">
                <img class="img-fluid h-100" src="/assets/img/villa.jpg" alt="">
            </div>
        </div>
        <div class="booking mt-5 pb-5 d-flex justify-content-center">
            <a href="#"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
        </div>
    </section>
    <section id="facility">
        <h2 class="d-flex justify-content-center mb-4" data-aos="fade-up" data-aos-once="true" style="font-weight: 500; margin-top: 60px">Fasilitas Unggulan Villa Mountain Oasis</h2>
        <div class="row">
            @foreach ($facilities as $facility)   
            <div class="col-lg-3">
                <div class="box p-2" data-aos="fade-up" data-aos-once="true" data-aos-duration="3000">
                    <img src="{{ asset('storage/' . $facility->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4>{{ $facility->name }}</h4>
                      <p class="card-text">{{ $facility->desc }}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </section>
    <section id="testimonial">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="http://via.placeholder.com/1200x800" class="d-block w-100" alt="...">
                    </div>
                    <div class="col"></div>
                    <div class="col-lg-6 py-5">.
                        <i class="fa-solid fa-quote-left" style="font-size: 40px"></i><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id excepturi quaerat quae omnis qui harum, voluptas tenetur accusantium dignissimos vel inventore pariatur eaque ipsum tempora doloribus am nulla asperiores sapiente earum laboriosam blanditiis t
                        <div class="identity mt-3">
                            <h6>Dessy<br>
                            <span style="font-size: small; font-weight: 400">Jakarta</span>
                            </h6>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="http://via.placeholder.com/1200x800" class="d-block w-100" alt="...">
                    </div>
                    <div class="col"></div>
                    <div class="col-lg-6 py-5">.
                        <i class="fa-solid fa-quote-left" style="font-size: 40px"></i><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id excepturi quaerat quae omnis qui harum, voluptas tenetur accusantium dignissimos vel inventore pariatur eaque ipsum tempora doloribus am nulla asperiores sapiente earum laboriosam blanditiis t
                        <div class="identity mt-3">
                            <h6>Dessy<br>
                            <span style="font-size: small; font-weight: 400">Jakarta</span>
                            </h6>
                        </div>
                    </div>
                </div>
              </div>
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
                <h6 style="padding-top: 20px;">DAPATKAN HARGA SPECIAL SEKARANG</h6>
                <h2 style="font-weight: 700" data-aos="fade-up" data-aos-once="true">Vila Mountain Oasis 10 Orang</h2>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-bed m-2"></i> 4 buah kamar tidur</li>
                            <li><i class="fa-solid fa-bath m-2"></i> 4 buah kamar mandi</li>
                            <li><i class="fa-solid fa-couch m-2"></i> Ruang tamu luas</li>
                            <li><i class="fa-solid fa-bath m-2"></i> 4 buah kamar mandi</li>
                            <li><i class="fa-solid fa-couch m-2"></i> Ruang tamu luas</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-bed m-2"></i> 4 buah kamar tidur</li>
                            <li><i class="fa-solid fa-bath m-2"></i> 4 buah kamar mandi</li>
                            <li><i class="fa-solid fa-couch m-2"></i> Ruang tamu luas</li>
                            <li><i class="fa-solid fa-bath m-2"></i> 4 buah kamar mandi</li>
                            <li><i class="fa-solid fa-couch m-2"></i> Ruang tamu luas</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="price col-lg-6">
                        <small>Harga</small>
                        <h3 style="font-weight: 700">Rp. 2.000.000,-</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="booking mt-4 pb-5 d-flex justify-content-center">
                            <a href="#"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-lg pb-3">
                    <span class="input-group-text p-4" style="background-color: #1A4543; color: #fff; font-size: 15px" id="inputGroup-sizing-lg">Diskon 10%</span>
                    <input type="text" class="form-control" style="font-size: 13px; text-align: center; background-color: #fff" value="Buat Anda yang menyewa lebih dari seminggu" disabled>
                  </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid w-100" src="/assets/img/villa2.png" alt="">
                <div class="adress mt-2">
                    <div class="d-flex justify-content-center">Batu, Jawa Timur</div>
                    <h4 class=" d-flex justify-content-center">Vila Mountain Oasis 10 Orang</h4>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="row footer-top"  style="border-bottom: 1px solid #fff">
            <div class="col-lg-6">
                <div class="text">
                    <h2 style="padding-top: 40px" class="heading" data-aos="fade-up" data-aos-once="true">Dapatkan pengalaman liburan yang istimewa di Vila Kota Batu</h2>
                    <p class="desc pt-3">Nikmati liburan yang istimewa bersama keluarga Anda di Vila Mountain Oasis. Anda juga bisa mendapatkan diskon 50% untuk kunjungan berikutnya ketika memesan Vila Mountain Oasis sekarang juga!</p>
                </div>
                    <div class="booking pt-4 pb-5">
                        <a href="#"><i style="margin-right: 10px" class="fa-brands fa-whatsapp"></i> Booking Sekarang</a>
                   </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="/assets/img/footer-img.png" alt="">
            </div>
        </div>
            <div class="empty" style="height: 150px; background-color: #001524; border-bottom: 1px solid #22313C">
            </div>
            <div class="footer-bottom">
                <div class="row p-3">
                    <div class="col-lg-10">
                        <p>Copyright © 2023 | Vila Mountain Oasis</p>
                    </div>
                    <div class="col-lg d-flex justify-content-center justify-content-lg-start">
                        <ul class="list-unstyled d-flex">
                            <li class="mx-2"><i class="fa-brands fa-twitter"></i></li>
                            <li class="mx-2"><i class="fa-brands fa-facebook"></i></li>
                            <li class="mx-2"><i class="fa-brands fa-instagram"></i></li>
                        </ul>
                    </div>
                </div>
            </div>            
    </section>
@endsection