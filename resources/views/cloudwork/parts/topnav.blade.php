 <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
     <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
         <div class="me-3">
             <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                 <span class="icon-menu"></span>
             </button>
         </div>
         <div>
             <a href="index.html">
                 <img src="/assets/images/logo.png" width="70%" alt="logo" />
             </a>

         </div>
     </div>
     <div class="navbar-menu-wrapper d-flex align-items-top">
         <ul class="navbar-nav">
             <li class="nav-item fw-semibold d-none d-lg-block ms-0">
                 <h1 class="welcome-text"><span id="greeting"></span> <span class="text-black fw-bold">{{ Auth::user()->fname }}</span></h1>

             </li>
         </ul>
         <ul class="navbar-nav ms-auto">

             <li class="nav-item d-none d-lg-block">
                 <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                     <span class="input-group-addon input-group-prepend border-right">
                         <span class="icon-calendar input-group-text calendar-icon"></span>
                     </span>
                     <input type="text" class="form-control">
                 </div>
             </li>
             <li class="nav-item">
                 <form class="search-form" action="#">
                     <i class="icon-search"></i>
                     <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                 </form>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                     <i class="icon-bell"></i>
                     <span class="count"></span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                     <a class="dropdown-item py-3 border-bottom">
                         <p class="mb-0 fw-medium float-start">You have 4 new notifications </p>
                         <span class="badge badge-pill badge-primary float-end">View all</span>
                     </a>
                     <a class="dropdown-item preview-item py-3">
                         <div class="preview-thumbnail">
                             <i class="mdi mdi-alert m-auto text-primary"></i>
                         </div>
                         <div class="preview-item-content">
                             <h6 class="preview-subject fw-normal text-dark mb-1">Training</h6>
                             <p class="fw-light small-text mb-0"> Get Training on Tasks</p>
                         </div>
                     </a>
                     <a class="dropdown-item preview-item py-3">
                         <div class="preview-thumbnail">
                             <i class="mdi mdi-lock-outline m-auto text-primary"></i>
                         </div>
                         <div class="preview-item-content">
                             <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                             <p class="fw-light small-text mb-0"> Private message </p>
                         </div>
                     </a>
                     <a class="dropdown-item preview-item py-3">
                         <div class="preview-thumbnail">
                             <i class="mdi mdi-airballoon m-auto text-primary"></i>
                         </div>
                         <div class="preview-item-content">
                             <h6 class="preview-subject fw-normal text-dark mb-1">Welcome to cloudworkly</h6>
                             <p class="fw-light small-text mb-0"> Complete Task To Earn </p>
                         </div>
                     </a>
                 </div>
             </li>

             <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                 <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                     <img class="img-xs rounded-circle" src="{{ asset('assets/profiles/' . Auth::user()->foth1) }}" alt="Profile image"> </a>
                 <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                     <div class="dropdown-header text-center">
                         <img class="img-md rounded-circle" src="{{ asset('assets/profiles/' . Auth::user()->foth1) }}" width="40%" alt="Profile image">
                         <p class="mb-1 mt-3 fw-semibold">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</p>
                         <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
                     </div>
                     <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile </a>
                     <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Notifications <span class="badge badge-pill badge-danger">3</span></a>

                     <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                     <a class="dropdown-item" href="{{url('/logout')}}""><i class=" dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                 </div>
             </li>
         </ul>
         <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
             <span class="mdi mdi-menu"></span>
         </button>
     </div>
 </nav>