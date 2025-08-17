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
                     <li class="nav-item"> <a class="nav-link" href="{{url('/progress-task')}}">In Progress</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{url('/submitted-task')}}">Submitted</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{url('/approved-task')}}">Approved</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{url('/rejected-task')}}">Rejected</a></li>
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
                     <li class="nav-item"><a class="nav-link" href="{{url('/earnings')}}">Earnings</a></li>
                     <li class="nav-item"><a class="nav-link" href="{{url('/withdraw')}}">Withdraw</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="{{url('/myprogress')}}">
                 <i class="fa fa-sitemap menu-icon"></i>
                 <span class="menu-title">Your Progress</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="{{url('/notifications')}}">
                 <i class="fa fa-bell menu-icon"></i>
                 <span class="menu-title">Notifications</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="{{url('/profile')}}">
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
                     <li class="nav-item"> <a class="nav-link" href="{{url('/ticket')}}">Submit a Ticket</a></li>
                 </ul>
             </div>
         </li>

         @if(Auth::user()->type == "Admin")
         <br>
         <br>
         <div class="nav-item text-center">Admin Settings</div>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#contr" aria-expanded="false" aria-controls="contr">
                 <i class="menu-icon fa fa-cog"></i>
                 <span class="menu-title">Control Center</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="contr">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{url('/tasks')}}">All Tasks</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{url('/biddings')}}">Biddings</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{url('/submitted-work')}}">Submitted Tasks</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{url('/approved-work')}}">Approved Tasks</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{url('/payments')}}">All Payments</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{url('/requests')}}">Withdrawal Requests</a></li>
                 </ul>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="{{url('/all_users')}}">
                 <i class="fa fa-users menu-icon"></i>
                 <span class="menu-title">All Users</span>
             </a>
         </li>

         @endif
         <li class="nav-item">
             <a class="nav-link" href="{{url('/logout')}}">
                 <i class="menu-icon fa fa-sign-out"></i>
                 <span class="menu-title">Sign Out</span>
             </a>
         </li>


     </ul>
 </nav>