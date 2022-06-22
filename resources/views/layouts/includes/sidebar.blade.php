<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{asset('/index.html')}}" class="brand-link logo-switch">
    <img src="{{asset('/assets/img/logo-xs.png')}}" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">
    <img src="{{asset('/assets/img/logo-xl.png')}}" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl" style="left: 12px">
  </a>
  <div class="sidebar">
    <div class="form-inline mt-2">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
          <li class="nav-item menu-open">

            <a href="" class="nav-link active">
              <i class="nav-icon "></i>
              <p>
                Catalog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('company.index')}}" class="nav-link {{ \Request::routeIs('company.index') ? 'active' : '' }}">
                    <i class="far fa-user nav-icon"></i>
                    Company
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('employee.index')}}" class="nav-link {{ \Request::routeIs('employee.index') ? 'active' : '' }}">
                    <i class="far fa-user nav-icon"></i>
                    Employee
                  </a>
                </li>
              </ul>
          </li>
      </ul>
    </nav>
  </div>
</aside>
