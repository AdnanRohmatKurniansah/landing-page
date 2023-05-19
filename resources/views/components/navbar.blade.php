<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/dashboard" class="app-brand-link">
        <span class="app-brand-logo demo">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M18.74 6c-.522 0-5.96.022-6.457.033c-.995 0-1.707-.01-.996.805c.402.445 12.559 14.245 12.856 14.57c.687.772 1.078.63 1.6.446c.164-.054 5.98-2.26 6.099-2.325c.414-.206-.083-.793-.367-1.119c-.107-.108-10.627-11.67-10.745-11.8c-.498-.577-.734-.61-1.99-.61zm-5.285 7s-.6.077-1.238.734C11.763 14.172.19 24.617.123 24.705c-.352.482.081.329.785.088c.034 0 4.742-1.482 4.742-1.482c.034-.033 0-.012.034-.034c-.022-.24-.034-1.246-.045-1.312c-.034-.252.103-.33.341-.428l5.536-1.955c.034-.033 4.405-3.44 4.484-3.518v-.054L13.455 13zm2.32 7c-.15.011-.486.045-.73.143c-.243.098-7.364 2.233-7.62 2.32c-.254.098-.58.174-.568.36c.012.12.106.131.245.175c.127.032 15.26 3.647 15.62 3.723c.79.152 1.949.5 2.714.076c.116-.055 6.286-4.074 6.39-4.139c.267-.196.22-.325-.094-.39A40.225 40.225 0 0 1 29.81 22s-5.834 2.329-5.963 2.383c-.811.349-1.369-.154-1.856-.7l-2.898-3.236c-.28-.043-3.062-.458-3.317-.447z"/></svg>
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ Request::is('dashboard') ? 'active' : ''}}">
        <a href="/dashboard" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pages</span>
      </li>
      <li class="menu-item {{ Request::is('dashboard/header*') ? 'active' : '' }}">
        <a href="/dashboard/header" class="menu-link">
          <i class='menu-icon tf-icons bx bxs-image'></i>
          <div data-i18n="Basic">Header</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('dashboard/promosi*') ? 'active' : '' }}">
        <a href="/dashboard/promosi" class="menu-link">
          <i class='menu-icon tf-icons bx bx-clipboard'></i>
          <div data-i18n="Basic">Promosi</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('dashboard/facility*') ? 'active' : '' }}">
        <a href="/dashboard/facility" class="menu-link">
          <i class='menu-icon tf-icons bx bxs-package'></i>
          <div data-i18n="Basic">Facility</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('dashboard/testimoni*') ? 'active' : '' }}">
        <a href="/dashboard/testimoni" class="menu-link">
          <i class='menu-icon tf-icons bx bx-group'></i>
          <div data-i18n="Basic">Testimoni</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('dashboard/footer*') || Request::is('dashboard/sosmed*') ? 'active' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Footer</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ Request::is('dashboard/footer*') ? 'active' : '' }}">
            <a href="/dashboard/footer" class="menu-link">
              <div data-i18n="Account">Manage Footer</div>
            </a>
          </li>
          <li class="menu-item {{ Request::is('dashboard/sosmed*')? 'active' : '' }}">
            <a href="/dashboard/sosmed" class="menu-link">
              <div data-i18n="Account">Footer's Sosmed</div>
            </a>
          </li>
        </ul>
      </li>
      
    </ul>
  </aside>