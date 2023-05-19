@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-2">Manage List of Benefits</h4>
        <!-- Basic Bootstrap Table -->
        <a class="btn btn-primary mb-3" href="/dashboard/daftar/create">Create</a>
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($daftars as $daftar) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $daftar->title }}</td>
                    <td><img class="img-fluid" width="50" src="{{ asset('storage/' . $daftar->image) }}" alt=""></td>
                    <td class="d-flex p-2">
                        <a href="/dashboard/daftar/{{ $daftar->id }}/edit" class="badge bg-success" style="font-size: 18px; margin-right: 5px"><i class="bx bx-edit-alt me-1"></i></a>
                        <form action="/dashboard/daftar/{{ $daftar->id }}" method="post">
                          @method('delete')
                          @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')" style="font-size: 18px" type="submit"><i class="bx bx-trash me-1"></i></button>
                        </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection