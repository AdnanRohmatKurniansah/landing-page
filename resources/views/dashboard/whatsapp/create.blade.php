@extends('layout.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-10 mb-4 order-0">
          <div class="header">
            <h3 class="fw-bold">Create Whatsapp</h3>
           </div>
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="/dashboard/whatsapp" method="post" enctype="multipart/form-data" class="m-3">
                            @csrf
                            <div class="mb-3">
                              <label for="text" class="form-label">Text</label>
                              <input type="text" class="form-control @error('text') is-invalid @enderror" id="text" name="text" required autofocus value="{{ old('text') }}">
                              @error('text')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="icon" class="form-label">Icon</label>
                              <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" required autofocus value="{{ old('icon') }}" oninput="previewIcon(this.value)">
                              @error('icon')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">Preview Icon</label>
                              <div class="previewIcon" style="font-size: 33px"></div>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" 
                                name="link" required autofocus value="{{ old('link') }}">
                                @error('link')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <button type="submit" class="btn btn-primary">Add Whatsapp</button>
                          </form> 
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  function previewIcon(name) {
    var iconName = name.trim().toLowerCase().replace(/\s+/g, '-');
    var previewElement = document.querySelector('.previewIcon');
    previewElement.innerHTML = '<i class="fa-brands fa-' + iconName + '"></i>';
  }
</script>

@endsection