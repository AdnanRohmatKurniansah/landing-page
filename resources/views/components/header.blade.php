<ul class="navbar-nav flex-row align-items-center ms-auto">
    <!-- Place this tag where you want the button to render. -->
    <!-- User -->
    <li class="nav-item navbar-dropdown dropdown-user dropdown">
      <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
          <img src="/assets/img/admin.png" alt class="w-px-40 h-auto rounded-circle" />
        </div>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li>
          <a class="dropdown-item" href="#">
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <div class="avatar avatar-online">
                  <img src="/assets/img/admin.png" alt class="w-px-40 h-auto rounded-circle" />
                </div>
              </div>
              <div class="flex-grow-1 mt-2" >
                <span class="fw-semibold d-block">{{ auth()->user()->username }}</span>
              </div>
            </div>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <a class="dropdown-item" href="/dashboard/add">
            <i class="bx bx-user me-2"></i>
            <span class="align-middle">Add New Admin</span>
          </a>
        </li>
        <li>
          <a class="dropdown-item" href="/dashboard/updatePass">
            <i class="bx bx-cog me-2"></i>
            <span class="align-middle">Change Password</span>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <form class="dropdown-item" action="/logout" method="post">
            @csrf
            <button class="align-middle border-0" onmouseover="this.style.background-color='white'" onmouseout="this.style.background-color='white'" style="background-color: white" type="submit">
              <i class="bx bx-power-off me-2"></i>
              <span class="align-middle">Log Out</span>
            </button>
          </form>
          {{-- <a class="dropdown-item" href="auth-login-basic.html">
            <i class="bx bx-power-off me-2"></i>
            <span class="align-middle">Log Out</span>
          </a> --}}
        </li>
      </ul>
    </li>
    <!--/ User -->
  </ul>