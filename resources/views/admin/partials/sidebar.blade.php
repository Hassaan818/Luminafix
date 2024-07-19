<div class="sidebar-wrapper" style="margin-top: 5px;">
   <div class="sidebar sidebar-collapse" id="sidebar">
      <div class="sidebar__menu-group">
         <ul class="sidebar_nav">
            <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
               <a href="{{ route('admin.dashboard') }}">
                  <span class="nav-icon uil uil-create-dashboard"></span>
                  <span class="menu-text">Dashboard</span>
               </a>
            </li>
            @php
            $about = App\Models\About::first();
            @endphp
            <li class="{{ (request()->is('admin/about*')) ? 'active' : '' }}">
               <a href="{{ route('admin.abouts.edit', [$about->id]) }}">
                  <span class="nav-icon uil uil-create-dashboard"></span>
                  <span class="menu-text">About Us</span>
               </a>
            </li>
            <li class="{{ (request()->is('admin/services*')) ? 'active' : '' }}">
               <a href="{{ route('admin.services.index') }}">
                  <span class="nav-icon fas fa-atom"></span>
                  <span class="menu-text">Services</span>
                  <!--  <span class="badge badge-info-10 menuItem rounded-pill">1.1.6</span> -->
               </a>
            </li>
            <li class="{{ (request()->is('admin/skills*')) ? 'active' : '' }}">
               <a href="{{ route('admin.skills.index') }}">
                  <span class="nav-icon fas fa-street-view"></span>
                  <span class="menu-text">Skills</span>
                  <!--  <span class="badge badge-info-10 menuItem rounded-pill">1.1.6</span> -->
               </a>
            </li>
            <li class="{{ (request()->is('admin/teams*')) ? 'active' : '' }}">
               <a href="{{ route('admin.teams.index') }}">
                  <span class="nav-icon fas fa-street-view"></span>
                  <span class="menu-text">Teams</span>
                  <!--  <span class="badge badge-info-10 menuItem rounded-pill">1.1.6</span> -->
               </a>
            </li>
            <li class="{{ (request()->is('admin/testimonial*')) ? 'active' : '' }}">
               <a href="{{ route('admin.testimonials.index') }}">
                  <span class="nav-icon fas fa-envelope-open-text"></span>
                  <span class="menu-text">Testimonials</span>
                  <!--  <span class="badge badge-info-10 menuItem rounded-pill">1.1.6</span> -->
               </a>
            </li>
            <li class="{{ (request()->is('admin/projects*')) ? 'active' : '' }}">
               <a href="{{ route('admin.projects.index') }}">
                  <span class="nav-icon fas fa-pen-square"></span>
                  <span class="menu-text">projects</span>
                  <!--  <span class="badge badge-info-10 menuItem rounded-pill">1.1.6</span> -->
               </a>
            </li>
            <li class="{{ (request()->is('admin/contacts*')) ? 'active' : '' }}">
               <a href="{{ route('admin.contacts.index') }}">
                  <span class="nav-icon fas fa-pen-square"></span>
                  <span class="menu-text">Contacts</span>
                  <!--  <span class="badge badge-info-10 menuItem rounded-pill">1.1.6</span> -->
               </a>
            </li>
            @php
            $setting = App\Models\Setting::first();
            @endphp
            <li class="{{ (request()->is('admin/settings*')) ? 'active' : '' }}">
               <a href="{{ route('admin.settings.edit', [$setting->id]) }}">
                  <span class="nav-icon uil uil-create-dashboard"></span>
                  <span class="menu-text">Settings</span>
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>