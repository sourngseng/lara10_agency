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
            <li><a href="form-basic.html">Create Service</a></li>
            <li>
              <a href="advanced-components.html">All Services</a>
            </li>
            <li><a href="form-wizard.html">Deleted Services</a></li>
          </ul>
        </li>
        <li class="dropdown">
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
        </li>

      </ul>
    </div>
  </div>
</div>
