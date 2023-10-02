<div class="left-side-bar">
  <div class="brand-logo">
    <a href="index.html">
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
          <a href="javascript:;" class="dropdown-toggle no-arrow">
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
            {{-- <li><a href="{{route('services.create')}}">Create Service</a></li> --}}
            <li>
              <a href="{{route('services.index')}}">All Services</a>
            </li>
            <li><a href="{{route('services.index')}}">Deleted Services</a></li>
          </ul>
        </li>       
        <li>
          <a href="{{route('abouts.index')}}" class="dropdown-toggle no-arrow">
            <span class="micon bi bi-info"></span
            ><span class="mtext">About</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>
