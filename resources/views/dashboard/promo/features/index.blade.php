@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-2">Manage Feature</h4>

        <!-- Basic Bootstrap Table -->
        <div class="row">
          <div class="col">
            <a class="btn btn-primary mb-3" href="/dashboard/features/create">Create</a>
          </div>
          <div class="col d-flex justify-content-end">
            <button type="button" class="btn btn-success mb-3 " data-bs-toggle="modal" data-bs-target="#exampleModal">
              How it works
            </button>
          </div>
        </div>
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Icon</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($features as $feature) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $feature->name }}</td>
                    <td><i class="fa-solid fa-{{ $feature->icon }}" style="font-size: 40px" ></i></td>
                    <td class="d-flex p-2">
                        <a href="/dashboard/features/{{ $feature->id }}/edit" class="badge bg-success" style="font-size: 18px; margin-right: 5px"><i class="bx bx-edit-alt me-1"></i></a>
                        <form action="/dashboard/features/{{ $feature->id }}" method="post">
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

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">How it works</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <ol>
                <li>Before adding or editing you should read the documentation of <a target="_blank" href="https://fontawesome.com/">fontawesome</a></li>
                <li>Take the last name of the icon</li>
                <span>Example: </span>
                <img class="img-fluid" src="/assets/img/ex.png" alt="">
                <li>Then just input</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

@endsection