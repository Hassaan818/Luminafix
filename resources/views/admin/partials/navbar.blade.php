<header class="header-top">
      <nav class="navbar navbar-light">
         <div class="navbar-left">
            <div class="logo-area">
               <a class="navbar-brand" href="{{ route('admin.dashboard')}}">
                  <img class="dark"  style="width: 50px; height:70px;" src="{{ asset('backend/img/LuminaFix.png') }}" alt="logo">
                  <img class="light" style="width: 50px; height:100px;" src="{{ asset('backend/img/LuminaFixlight.png') }}" alt="logo">
               </a>
               <a href="#" class="sidebar-toggle">
                  <img class="svg" src="{{ asset('backend/img/svg/align-center-alt.svg') }}" alt="img"></a>
            </div>
          </div>
         <!-- ends: navbar-left -->
         <div class="navbar-right">
            <ul class="navbar-right__menu">
               <!-- <li class="nav-search">
                  <a href="#" class="search-toggle">
                     <i class="uil uil-search"></i>
                     <i class="uil uil-times"></i>
                  </a>
                  <form action="/" class="search-form-topMenu">
                     <span class="search-icon uil uil-search"></span>
                     <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
                  </form>
               </li> -->
               <!-- <li class="nav-message">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg"  src="{{ asset('img/svg/message.svg') }}" alt="img">
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <h2 class="dropdown-wrapper__title">Messages <span class="badge-circle badge-success ms-1">2</span></h2>
                           <ul>
                              <li class="author-online has-new-message">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                       <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-offline has-new-message">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                       <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-online has-new-message">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                       <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-offline">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-offline">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                    </p>
                                 </div>
                              </li>
                           </ul>
                           <a href="" class="dropdown-wrapper__more">See All Message</a>
                        </div>
                     </div>
                  </div>
               </li> -->
               <!-- ends: nav-message -->
              <!--  <li class="nav-notification">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg"  src="{{ asset('img/svg/alarm.svg') }}" alt="img">
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <h2 class="dropdown-wrapper__title">Notifications <span class="badge-circle badge-warning ms-1">4</span></h2>
                           <ul>
                              <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--primary">
                                    <img class="svg"  src="{{ asset('img/svg/inbox.svg') }}" alt="inbox">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--secondary">
                                    <img class="svg"  src="{{ asset('img/svg/upload.svg') }}" alt="upload">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--success">
                                    <img class="svg"  src="{{ asset('img/svg/log-in.svg') }}" alt="log-in">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--info">
                                    <img class="svg"  src="{{ asset('img/svg/at-sign.svg') }}" alt="at-sign">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--danger">
                                    <img  src="{{ asset('img/svg/heart.svg') }}" alt="heart" class="svg">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                           </ul>
                           <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                        </div>
                     </div>
                  </div>
               </li> -->
               <!-- ends: .nav-notification -->
              <!--  <li class="nav-settings">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle">
                        <img src="img/setting.png" alt="setting">
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper dropdown-wrapper--large">
                           <ul class="list-settings">
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/mail.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">All Features</a>
                                    </h6>
                                    <p>Introducing Increment subscriptions </p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/color-palette.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Themes</a>
                                    </h6>
                                    <p>Third party themes that are compatible</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/home.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Payments</a>
                                    </h6>
                                    <p>We handle billions of dollars</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/video-camera.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Design Mockups</a>
                                    </h6>
                                    <p>Share planning visuals with clients</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/document.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Content Planner</a>
                                    </h6>
                                    <p>Centralize content gethering and editing</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/microphone.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Diagram Maker</a>
                                    </h6>
                                    <p>Plan user flows & test scenarios</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li> -->
               <!-- ends: .nav-support -->
               <!-- <li class="nav-flag-select">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle"><img src="img/flag.png" alt="" class="rounded-circle"></a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper dropdown-wrapper--small">
                           <a href=""><img src="img/eng.png" alt=""> English</a>
                           <a href=""><img src="img/ger.png" alt=""> German</a>
                           <a href=""><img src="img/spa.png" alt=""> Spanish</a>
                           <a href=""><img src="img/tur.png" alt=""> Turkish</a>
                           <a href=""><img src="img/iraq.png" alt=""> Arabic</a>
                        </div>
                     </div>

                  </div>
               </li> -->
               <!-- ends: .nav-flag-select -->
               <li class="nav-author">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('backend/img/author-nav.jpg') }}" alt="" class="rounded-circle">
                        <span class="nav-item__title">{{ Auth::user()->name }}<i class="las la-angle-down nav-item__arrow"></i></span>
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <div class="nav-author__info">
                              <div class="author-img">
                                 <img src="{{ asset('backend/img/author-nav.jpg') }}" alt="" class="rounded-circle">
                              </div>
                              <div>
                                 <h6>{{ Auth::user()->name }}</h6>
                                 <span>Admin</span>
                              </div>
                           </div>
                           <div class="nav-author__options">
                             <!--  <ul>
                                 <li>
                                    <a href="">
                                       <i class="uil uil-setting"></i>
                                       Settings</a>
                                 </li>
                              </ul> -->
                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf 
                                  <a href="route('logout')" class="nav-author__signout"
                                    onclick="event.preventDefault();
                                                      this.closest('form').submit();">
                                 <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                              </form>
                              
                              
                           </div>
                        </div>
                        <!-- ends: .dropdown-wrapper -->
                     </div>
                  </div>
               </li>
               <!-- ends: .nav-author -->
            </ul>
            <!-- ends: .navbar-right__menu -->
            <div class="navbar-right__mobileAction d-md-none">
               <a href="#" class="btn-search">
                  <img  src="{{ asset('img/svg/search.svg') }}" alt="search" class="svg feather-search">
                  <img  src="{{ asset('img/svg/x.svg') }}" alt="x" class="svg feather-x"></a>
               <a href="#" class="btn-author-action">
                  <img class="svg" src="{{ asset('img/svg/more-vertical.svg') }}" alt="more-vertical"></a>
            </div>
         </div>
         <!-- ends: .navbar-right -->
      </nav>
   </header>