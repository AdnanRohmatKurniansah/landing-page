<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage | Villa Mountain Oasis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css?v=4">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
    .animated {
        animation-duration: 1s;
        animation-fill-mode: both;
    }
    .animate {
        animation-duration: 1s;
        animation-fill-mode: both;
    }

    @keyframes rotate {
    0% {
        transform: rotate(0deg) scale(1);
    }
    50% {
        transform: rotate(180deg) scale(0.5);
    }
    100% {
        transform: rotate(360deg) scale(1);
    }
    }

    @keyframes back {
        0% { transform: rotate(360deg); }
        100% { transform: rotate(0deg); }
    }

    .fa-x.animated {
        animation-name: rotate;
    }

    .fa-whatsapp.animate {
        animation-name: back;
    }

    </style>
</head>
<body>
    
    @include('sweetalert::alert')
    @yield('content')
    
    @php
        $wa = \App\Models\Whatsapp::first()
    @endphp
    <a data-bs-toggle="popover" 
    data-bs-title="
        <div class='row bg-success p-3 text-light'>
            <div class='col'>
                <img class='img-fluid rounded-circle' src='/assets/img/whatsapp.png' alt=''>
            </div>
            <div class='col'>
                <h5>Booking sekarang</h5>
            </div>
        </div>"
        data-bs-content="
        <div class='content p-1'>
            <small>Kami akan membalas pesan Anda dalam beberapa menit.</small>
            <a class='text-decoration-none text-black' href='{{ $wa->link }}' target='_blank' rel='noopener noreferrer'>
                <div class='row p-2 bg-gray d-flex align-items-center'>
                    <div class='col-4'>
                        <img class='img-fluid rounded-circle'src='/assets/img/admin.png' alt=''>
                    </div>
                    <div class='col mt-3'>
                        <div class='row'>
                            <div class='col'>
                                <b>Admin</b>
                                <p>Admin</p>
                            </div>
                            <div class='col'>
                                <img class='img-fluid rounded-circle d-flex' width='40px' src='/assets/img/wa.png' alt=''>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>"
    
    data-bs-html="true" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-brands fa-whatsapp" style="font-size: 33px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/assets/script.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

        popoverTriggerList.forEach(popoverTrigger => {
            const icon = popoverTrigger.querySelector('i.fa-whatsapp');
            let isIconChanged = false;

            popoverTrigger.addEventListener('click', function() {
            if (isIconChanged) {
                icon.classList.remove('fa-x');
                icon.classList.add('fa-whatsapp', 'animate');
            } else {
                icon.classList.remove('fa-whatsapp');
                icon.classList.add('fa-x', 'animated');
            }
            isIconChanged = !isIconChanged;
            });
        });

        });

    </script>
</body>
</html>