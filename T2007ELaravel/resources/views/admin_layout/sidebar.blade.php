<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ url('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('category') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý danh mục
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('book') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý sách
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
      </ul>
      