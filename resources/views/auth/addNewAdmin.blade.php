@extends('layout.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-10 mb-4 order-0">
          <div class="header">
            <h3 class="fw-bold">Add New Admin</h3>
           </div>
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="/dashboard/add" method="post" enctype="multipart/form-data" class="m-3">
                            @csrf
                            <div class="mb-3">
                              <label for="username">Username</label>
                              <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required value="{{ old('username') }}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>            
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>            
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>            
                                @enderror
                              </div>
                            <button type="submit" class="btn btn-primary">Add New Admin</button>
                          </form> 
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection