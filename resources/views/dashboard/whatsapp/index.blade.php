@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-2">Manage Whatsapp</h4>

        <!-- Basic Bootstrap Table -->
        <div class="row">
          <div class="col">
            @if ($whatsapp === null)
                <a class="btn btn-primary mb-3" href="/dashboard/whatsapp/create">Create</a>
            @endif
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
                  <th>Text</th>
                  <th>Icon</th>
                  <th>Link</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0"> 
                  <tr>
                    <td>{{ $whatsapp->id }}</td>
                    <td>{{ $whatsapp->text }}</td>
                    <td><i style="font-size: 40px" class="fa-brands fa-{{ $whatsapp->icon }}"></i></td>
                    <td>{{ $whatsapp->link }}</td>
                    <td class="d-flex p-2">
                        <a href="/dashboard/whatsapp/{{ $whatsapp->id }}/edit" class="badge bg-success" style="font-size: 18px; margin-right: 5px"><i class="bx bx-edit-alt me-1"></i></a>
                    </td>
                  </tr>
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
                <li>Before adding or editing you should read the documentation of <a target="_blank" href="https://fontawesome.com/search?q=bed&o=r">fontawesome</a></li>
                <li>Take the last name of the icon</li>
                <span>Example: </span>
                <img class="img-fluid" src="/assets/img/ex.png" alt="">
                <li>Then just input</li>
                <li>If the preview doesn't appear, it's possible that the word is written incorrectly or it's not found in the fontawesome documentation</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

@endsection