@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="managae-heading mb-5">
        <h4 class="fw-bold py-3 mb-2">Facility Heading</h4>
        @if ($title !== null)
            <a class="btn btn-primary mb-3" href="/dashboard/heading/1/edit">Edit</a> 
        @else
            <a class="btn btn-success mb-3" href="/dashboard/heading/create">Create</a>
        @endif
        <h4 class="mt-3 d-flex justify-content-center">
          @if ($title !== null)
            {!! $title->heading !!}
          @else
            <span class="text-danger">Heading masih kosong</span>
          @endif
        </h4>
      </div>
        
        <h4 class="fw-bold py-3 mb-2">Manage Facility</h4>

        <!-- Basic Bootstrap Table -->
        <a class="btn btn-primary mb-3" href="/dashboard/facility/create">Create</a>
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($facilities as $facility) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $facility->name }}</td>
                    <td><img src="{{ asset('storage/' . $facility->image) }}" width="50px"></td>
                    <td class="d-flex p-2">
                        <a href="/dashboard/facility/{{ $facility->id }}/edit" class="badge bg-success" style="font-size: 18px; margin-right: 5px"><i class="bx bx-edit-alt me-1"></i></a>
                        <form action="/dashboard/facility/{{ $facility->id }}" method="post">
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