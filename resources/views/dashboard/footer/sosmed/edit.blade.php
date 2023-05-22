@extends('layout.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-10 mb-4 order-0">
          <div class="header">
            <h3 class="fw-bold">Edit Sosmed</h3>
           </div>
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="/dashboard/sosmed/{{ $sosmed->id }}" method="post" enctype="multipart/form-data" class="m-3">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                                name="name" required autofocus value="{{ old('name', $sosmed->name) }}" oninput="previewIcon(this.value)">
                                @error('name')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Preview</label>
                                <div class="previewIcon" style="font-size: 33px">
                                  @if (old('name'))
                                    <i class="fa-brands fa-{{ Str::slug(old('name')) }}"></i>
                                  @else
                                    <i class="fa-brands fa-{{ Str::slug($sosmed->name) }}"></i>
                                  @endif
                                </div>
                              </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" 
                                name="link" required autofocus value="{{ old('link', $sosmed->link) }}">
                                @error('link')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <button type="submit" class="btn btn-primary">Edit Sosmed</button>
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
    if (name) {
      previewElement.innerHTML = '<i class="fa-brands fa-' + iconName + '"></i>';
    } else {
      var previousIcon = '{{ Str::slug($sosmed->name) }}';
      previewElement.innerHTML = '<i class="fa-brands fa-' + previousIcon + '"></i>';
    }
  }
</script>

@endsection

