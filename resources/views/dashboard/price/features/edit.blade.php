@extends('layout.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-10 mb-4 order-0">
          <div class="header">
            <h3 class="fw-bold">Edit Feature</h3>
           </div>
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="/dashboard/features/{{ $feature->id }}" method="post" enctype="multipart/form-data" class="m-3">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                                name="name" required autofocus value="{{ old('name', $feature->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon</label>
                                <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" 
                                name="icon" required autofocus value="{{ old('icon', $feature->icon) }}" oninput="previewIcon(this.value)">
                                @error('icon')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Preview</label>
                                <div class="previewIcon" style="font-size: 33px">
                                  @if (old('icon'))
                                    <i class="fa-solid fa-{{ Str::slug(old('icon')) }}"></i>
                                  @else
                                    <i class="fa-solid fa-{{ Str::slug($feature->icon) }}"></i>
                                  @endif
                                </div>
                              </div>
                            <button type="submit" class="btn btn-primary">Edit Feature</button>
                          </form> 
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  function previewIcon(icon) {
    var iconName = icon.trim().toLowerCase().replace(/\s+/g, '-');
    var previewElement = document.querySelector('.previewIcon');
    if (icon) {
      previewElement.innerHTML = '<i class="fa-solid fa-' + iconName + '"></i>';
    } else {
      var previousIcon = '{{ Str::slug($feature->icon) }}';
      previewElement.innerHTML = '<i class="fa-solid fa-' + previousIcon + '"></i>';
    }
  }
</script>

@endsection