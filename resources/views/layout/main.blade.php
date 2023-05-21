<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage | Villa Mountain Oasis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    
    @yield('content')
    
    <a data-bs-toggle="popover" 
    data-bs-title="
        <div class='row bg-success p-3 text-light'>
            <div class='col-lg-4'>
                <i class='fa-brands fa-whatsapp'></i>
            </div>
            <div class='col-lg-8'>
                <h5>Booking sekarang</h5>
                <small>Hi! Pilih salah satu agen kami dibawah ini!</samll>
            </div>
        </div>"
    data-bs-content="<div class='content p-1'>
        <small>Kami akan membalas pesan Anda dalam beberapa menit.</small>
        <a class='text-decoration-none text-light' href='http://facebook.com' target='_blank' rel='noopener noreferrer'>
        <div class='row p-2 bg-dark'>
            <div class='col-md-3'>
                <img class='img-fluid rounded-circle' src='/assets/img/admin.png' alt=''>
            </div>
            <div class='col-md-9'>
                <div class='row'>
                    <div class='col-md-6'>
                        <b>Admin</b>
                        <p>Admin</p>
                    </div>
                    <div class='col-md-6'>
                        <i class='fa-brands fa-whatsapp'></i>
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
                icon.classList.add('fa-whatsapp');
            } else {
                icon.classList.remove('fa-whatsapp');
                icon.classList.add('fa-x');
            }
            isIconChanged = !isIconChanged;
            });
        });

        });

    </script>
</body>
</html>