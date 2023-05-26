@extends('layout.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-10 mb-4 order-0">
          <div class="header">
            <h3 class="fw-bold">Edit Testimoni</h3>
           </div>
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="/dashboard/testimoni/{{ $testimoni->id }}" method="post" enctype="multipart/form-data" class="m-3">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                              <label for="rate">Rating</label>
                              <select name="rate" class="form-control">
                                  @for ($i = 1; $i <= 5; $i ++)
                                      @if (old('rate', $testimoni->rate) == $i) 
                                          <option value="{{ $i }}" selected>{{ $i }}</option>
                                      @else
                                          <option value="{{ $i }}">{{ $i }}</option>
                                      @endif
                                  @endfor
                              </select>
                          </div>  
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                                name="name" required autofocus value="{{ old('name', $testimoni->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" 
                                name="address" required autofocus value="{{ old('address', $testimoni->address) }}">
                                @error('address')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="opini" class="form-label">Opini</label>
                                <textarea class="form-control @error('opini') is-invalid @enderror" name="opini" id="opini" cols="30" rows="5" required autofocus>{{ old('opini', $testimoni->opini) }}</textarea>
                                @error('opini')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="hidden" name="oldFoto" value="{{ $testimoni->foto }}">
                                @if ($testimoni->foto)
                                    <img src="{{ asset('storage/' . $testimoni->foto) }}" class="foto-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="foto-preview img-fluid mb-3 col-sm-5">
                                @endif
                              <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto"
                                name="foto" onchange="previewFoto()">
                              @error('foto')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Testimoni</button>
                          </form> 
                    </div>
                </div>
                </div>
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