@extends('layout.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-9 mb-4 order-0">
          <div class="header">
            <h3 class="fw-bold">Edit Testimoni</h3>
           </div>
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="/dashboard/testimoni/{{ $testimoni->id }}/edit" method="post" enctype="multipart/form-data" class="m-3">
                            @method('PUT')
                            @csrf
                            <div class="row">
                              <div class="col">
                                <div class="mb-3">
                                  <label for="" style="font-size: 18px; font-weight: 700">- Name</label>
                                  <p>{{ $testimoni->name }}</p>
                                </div>
                                <div class="mb-3">
                                  <label for="" style="font-size: 18px; font-weight: 700">- Address</label>
                                  <p>{{ $testimoni->address }}</p>
                                </div>
                                <div class="mb-3">
                                  <label for="" style="font-size: 18px; font-weight: 700">- Rating</label>
                                  <p>{{ $testimoni->rate }}</p>
                                </div>
                              </div>
                              <div class="col">
                                <img style="border: 1px solid rgb(194, 193, 193); border-radius: 5px; max-height: 200px" class="img-fluid col-sm-7" src="{{ asset('storage/' . $testimoni->foto) }}" alt="">
                              </div>
                              <div class="mb-3">
                                <label for="" style="font-size: 18px; font-weight: 700">- Opini</label>
                                <p>{{ $testimoni->opini }}</p>
                              </div>
                            </div>
                            {{-- <div class="mb-3">
                              <label for="rate">Rating</label>
                              <select name="rate" class="form-control" disabled>
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
                                name="name" required autofocus value="{{ old('name', $testimoni->name) }}" disabled>
                                @error('name')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" 
                                name="address" required autofocus value="{{ old('address', $testimoni->address) }}" disabled>
                                @error('address')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="opini" class="form-label">Opini</label>
                                <textarea class="form-control @error('opini') is-invalid @enderror" name="opini" id="opini" cols="30" rows="5" disabled required autofocus>{{ old('opini', $testimoni->opini) }}</textarea>
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
                              <input class="form-control @error('foto') is-invalid @enderror" disabled  type="file" id="foto"
                                name="foto" onchange="previewFoto()">
                              @error('foto')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div> --}}
                            <div class="mb-3">
                              <label for="status" style="font-size: 18px; font-weight: 700">- Status</label>
                              <select name="status" class="form-control">
                                  <option value="published" {{ old('status', $testimoni->status) === 'published' ? 'selected' : '' }}>Published</option>
                                  <option value="notPublished" {{ old('status', $testimoni->status) === 'notPublished' ? 'selected' : '' }}>Not Published</option>
                              </select>
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