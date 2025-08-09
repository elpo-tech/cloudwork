 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
         <li class="nav-item">
             <a class="nav-link" href="{{url('/dashboard')}}">
                 <i class="mdi mdi-grid-large menu-icon"></i>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="{{url('/training-center')}}">
                 <i class="fa fa-leanpub menu-icon"></i>
                 <span class="menu-title">Training Center</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="{{url('/available-task')}}">
                 <i class="fa fa-file-text menu-icon"></i>
                 <span class="menu-title">Available Tasks</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                 <i class="menu-icon fa fa-tasks"></i>
                 <span class="menu-title">My Tasks</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="ui-basic">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="#">In Progress</a></li>
                     <li class="nav-item"> <a class="nav-link" href="#">Submitted</a></li>
                     <li class="nav-item"> <a class="nav-link" href="#">Approved</a></li>
                     <li class="nav-item"> <a class="nav-link" href="#">Rejected</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                 <i class="menu-icon fa fa-money"></i>
                 <span class="menu-title">Earnings</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="form-elements">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="#">Task Earnings History</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Withdrawal Options</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="fa fa-sitemap menu-icon"></i>
                 <span class="menu-title">Your Progress</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="fa fa-bell menu-icon"></i>
                 <span class="menu-title">Notifications</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="fa fa-cog menu-icon"></i>
                 <span class="menu-title">Account Settings</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                 <i class="menu-icon fa fa-question-circle"></i>
                 <span class="menu-title">Help & Support</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="charts">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="#">FAQs</a></li>
                     <li class="nav-item"> <a class="nav-link" href="#">Submit a Ticket</a></li>
                 </ul>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="{{url('/logout')}}">
                 <i class="menu-icon fa fa-sign-out"></i>
                 <span class="menu-title">Sign Out</span>
             </a>
         </li>
     </ul>
 </nav>