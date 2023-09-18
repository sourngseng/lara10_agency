<div class="left-side-bar">
  <div class="brand-logo">
    <a href="{{route('admin.home')}}">
      <img src="{{asset('backend')}}/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
      <img
        src="{{asset('backend')}}/vendors/images/deskapp-logo-white.svg"
        alt=""
        class="light-logo"
      />
    </a>
    <div class="close-sidebar" data-toggle="left-sidebar-close">
      <i class="ion-close-round"></i>
    </div>
  </div>
  <div class="menu-block customscroll">
    <div class="sidebar-menu">
      <ul id="accordion-menu">
        <li>
          <a href="{{route('admin.home')}}" class="dropdown-toggle no-arrow">
            <span class="micon bi bi-house"></span
            ><span class="mtext">Home</span>
          </a>
        </li>

        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon bi bi-textarea-resize"></span
            ><span class="mtext">Manage Services</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('services.create')}}">Create Service</a></li>
            <li>
              <a href="{{route('services.index')}}">All Services</a>
            </li>
            <li><a href="{{route('services.index')}}">Deleted Services</a></li>
          </ul>
        </li>
{{-- Teams --}}
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon bi bi-textarea-resize"></span
            ><span class="mtext">Manage Teams</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('teams.create')}}">Create team</a></li>
            <li>
              <a href="{{route('teams.index')}}">All teams</a>
            </li>
            <li><a href="{{route('teams.index')}}">Deleted teams</a></li>
          </ul>
        </li>
{{-- Abouts --}}
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon bi bi-textarea-resize"></span
            ><span class="mtext">Manage Abouts</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('abouts.create')}}">Create about</a></li>
            <li>
              <a href="{{route('abouts.index')}}">All abouts</a>
            </li>
            <li><a href="{{route('abouts.index')}}">Deleted abouts</a></li>
          </ul>
        </li>



        {{-- <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon bi bi-table"></span
            ><span class="mtext">Tables</span>
          </a>
          <ul class="submenu">
            <li><a href="basic-table.html">Basic Tables</a></li>
            <li><a href="datatable.html">DataTables</a></li>
          </ul>
        </li>
        <li>
          <a href="calendar.html" class="dropdown-toggle no-arrow">
            <span class="micon bi bi-calendar4-week"></span
            ><span class="mtext">Calendar</span>
          </a>
        </li> --}}

      </ul>
    </div>
  </div>
</div>
