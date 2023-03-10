<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Staff Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('staff.index') }}">
              <i class="bi bi-circle"></i><span>Staff Members</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Non Staff Members</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Reports</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
    </ul>
  </aside><!-- End Sidebar-->