@extends('layout.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-2">Manage Testimoni</h4>
        <div class="filter-bar col-lg-2 mb-3">
          <label for="filter-select">Filter:</label>
          <select id="filter-select" class="form-select">
            <option value="all">All</option>
            <option value="published">Published</option>
            <option value="notPublished">Not Published</option>
          </select>
        </div>
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Rating</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($testimonies as $testimoni) 
                  @php
                      $status = $testimoni->status;
                      $class = $status == 'published' ? 'bg-success' : 'bg-danger'
                  @endphp
                  <tr data-status="{{ $status }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $testimoni->name }}</td>
                    <td>{{ $testimoni->rate }} <i class="fa-solid fa-star text-warning"></i></td>
                    <td>{{ $testimoni->address }}</td>
                    <td class="text-white rounded-2 {{ $class }}">
                      {{ $testimoni->status }}
                    </td>
                    <td class=" d-flex p-2">
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
      </div>

      <script>
        document.getElementById('filter-select').addEventListener('change', function() {
          const selectedValue = this.value;
          const rows = document.querySelectorAll('tbody tr');

          rows.forEach(function(row) {
            const status = row.getAttribute('data-status');

            if (selectedValue === 'all' || selectedValue === status) {
              row.style.display = 'table-row';
            } else {
              row.style.display = 'none';
            }
          });
        });
      </script>
@endsection
