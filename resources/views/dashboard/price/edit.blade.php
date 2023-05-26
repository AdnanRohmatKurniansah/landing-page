@extends('layout.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-10 mb-4 order-0">
          <div class="header">
            <h3 class="fw-bold">Edit Price</h3>
           </div>
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="/dashboard/price/{{ $price->id }}" method="post" enctype="multipart/form-data" class="m-3">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="offer" class="form-label">Offer</label>
                                <input type="text" class="form-control @error('offer') is-invalid @enderror" id="offer" 
                                name="offer" required autofocus value="{{ old('offer', $price->offer) }}">
                                @error('offer')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="heading" class="form-label">Heading</label>
                                <input type="text" class="form-control @error('heading') is-invalid @enderror" id="heading" 
                                name="heading" required autofocus value="{{ old('heading', $price->heading) }}">
                                @error('heading')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" 
                                name="price" required autofocus value="{{ old('price', $price->price) }}">
                                @error('price')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="promo" class="form-label">Promo</label>
                                <input type="text" class="form-control @error('promo') is-invalid @enderror" id="promo" 
                                name="promo" required autofocus value="{{ old('promo', $price->promo) }}">
                                @error('promo')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="requirement" class="form-label">Requirement</label>
                                <input type="text" class="form-control @error('requirement') is-invalid @enderror" id="requirement" 
                                name="requirement" required autofocus value="{{ old('requirement', $price->requirement) }}">
                                @error('requirement')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="hidden" name="oldImage" value="{{ $price->image }}">
                                @if ($price->image)
                                    <img src="{{ asset('storage/' . $price->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" 
                                name="address" required autofocus value="{{ old('address', $price->address) }}">
                                @error('address')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <button type="submit" class="btn btn-primary">Edit Price</button>
                          </form> 
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

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

    </script>
@endsection