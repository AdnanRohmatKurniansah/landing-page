@extends('layout.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-10 mb-4 order-0">
          <div class="header">
            <h3 class="fw-bold">Edit Header</h3>
           </div>
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="/dashboard/header/{{ $header->id }}" method="post" enctype="multipart/form-data" class="m-3">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input type="hidden" name="oldLogo" value="{{ $header->logo }}">
                                @if ($header->logo)
                                    <img src="{{ asset('storage/' . $header->logo) }}" class="logo-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="logo-preview img-fluid mb-3 col-sm-5">
                                @endif
                                <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo"
                                name="logo" onchange="previewLogo()">
                              @error('logo')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                                <label for="diskon" class="form-label">Diskon</label>
                                <input type="text" class="form-control @error('diskon') is-invalid @enderror" id="diskon" 
                                name="diskon" required autofocus value="{{ old('diskon', $header->diskon) }}">
                                @error('diskon')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="heading" class="form-label">Heading</label>
                                <input type="text" class="form-control @error('heading') is-invalid @enderror" id="heading" 
                                name="heading" required autofocus value="{{ old('heading', $header->heading) }}">
                                @error('heading')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="subHeading" class="form-label">subHeading</label>
                                <textarea class="form-control @error('subHeading') is-invalid @enderror" name="subHeading" id="subHeading" cols="30" rows="5" required autofocus>{{ old('subHeading', $header->subHeading) }}</textarea>
                                @error('subHeading')
                                    <div class="invalid-feedback">  
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="image" class="form-label">Image Primary</label>
                                <input type="hidden" name="oldImage" value="{{ $header->image }}">
                                @if ($header->image)
                                    <img src="{{ asset('storage/' . $header->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                @endif
                              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                name="image" onchange="previewImage()">
                              @error('image')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Header</button>
                          </form> 
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     $('.summernote').summernote({
        placeholder: 'Write Here...',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ], 
        callbacks: {
            onEnterFullscreen: function () {
            $('.note-editor').addClass('fullscreen');
            },
            onExitFullscreen: function () {
            $('.note-editor').removeClass('fullscreen');
            }
        }
      });

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');
      imgPreview.style.display = 'block';
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }

    function previewLogo() {
      const logo = document.querySelector('#logo');
      const logoPreview = document.querySelector('.logo-preview');
      logoPreview.style.display = 'block';
      const oFReader = new FileReader();
      oFReader.readAsDataURL(logo.files[0]);
      oFReader.onload = function(oFREvent) {
        logoPreview.src = oFREvent.target.result;
      }
    }
    </script>
@endsection