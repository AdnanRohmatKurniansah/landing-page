@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-2">Manage Testimoni</h4>

        <!-- Basic Bootstrap Table -->
        <a class="btn btn-primary mb-3" href="/dashboard/testimoni/create">Create</a>
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Rating</th>
                  <th>Address</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($testimonies as $testimoni) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $testimoni->name }}</td>
                    <td>{{ $testimoni->rate }} <i class="fa-solid fa-star text-warning"></i></td>
                    <td>{{ $testimoni->address }}</td>
                    <td class="d-flex p-2">
                        <a href="/dashboard/testimoni/{{ $testimoni->id }}/edit" class="badge bg-success" style="font-size: 18px; margin-right: 5px"><i class="bx bx-edit-alt me-1"></i></a>
                        <form action="/dashboard/testimoni/{{ $testimoni->id }}" method="post">
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
        <!--/ Basic Bootstrap Table -->
      </div>
@endsection