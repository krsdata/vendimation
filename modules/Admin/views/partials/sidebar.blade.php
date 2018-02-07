<<<<<<< HEAD
<div class="col-sm-2 main-menu">
<div class="left-navigation">
    <ul>

        <li class="active"><a href="{{url('admin/account/profile')}}"><i class="fa fa-list" aria-hidden="true"></i> Dashboard</a></li>
        <li class="active"><a href="{{route('funnels')}}"><i class="fa fa-list" aria-hidden="true"></i> Funnels</a></li>
        <li><a href="{{route('contacts')}}"><i class="fa fa-address-book-o" aria-hidden="true"></i> My Contact</a></li>
        <li><a href="{{route('consumer')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Consumer</a></li>
        <li><a href="{{route('sales-funnel')}}"><i class="fa fa-line-chart" aria-hidden="true"></i> Sales Funnel</a></li>
    </ul>
    <p class="graps-head"><span>Graps Tips</span></p>
    <ul class="grap-list">
        <li><a href="#"><img src="{{ asset('assets/img/grap-1.jpg') }}"> Unstarted</a></li>
        <li><a href="#"><img src="{{ asset('assets/img/grap-2.jpg') }}"> Step 1</a></li>
        <li><a href="#"><img src="{{ asset('assets/img/grap-3.jpg') }}"> Step 2</a></li>
        <li><a href="#"><img src="{{ asset('assets/img/grap-4.jpg') }}"> Step 3</a></li>
        <li><a href="#"><img src="{{ asset('assets/img/grap-5.jpg') }}"> Step 4</a></li>
        <li><a href="#"><img src="{{ asset('assets/img/grap-6.jpg') }}"> Closed : Won</a></li>
        <li><a href="#"><img src="{{ asset('assets/img/grap-7.jpg') }}"> Closed : Lost</a></li>
    </ul>
    <div class="last-logo">
        <img src="{{ asset('assets/img/footer-logo.jpg')}}">
    </div>
</div>
</div>
=======
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
<div class="page-container">
         
 <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR --> 
                <div class="page-sidebar navbar-collapse collapse">
                   
                    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start active open">
                                    <a href="{{ url('/')}}" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Dashboard</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>



                        
                        

                         <li class="nav-item  start active  {{ (isset($page_title) && $page_title=='Category')?'open':'' }}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                 <i class="glyphicon glyphicon-user"></i>
                                <span class="title">Manage User</span>
                                <span class="arrow {{ (isset($page_title) && $page_title=='User')?'open':'' }}"></span>
                            </a>

                           <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='User')?'block':'none' }}">

                                <li class="nav-item  {{ (isset($page_title) && $page_title=='User')?'open':'' }}">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">Manage User</span>
                                    <span class="arrow {{ (isset($page_title) && $page_title=='User')?'open':'' }}"></span>
                                </a>
                                    <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='User')?'block':'none' }}">
                                        <li class="nav-item  {{ (isset($page_title) && $page_action=='Create User')?'active':'' }}">
                                            <a href="{{ route('user.create') }}" class="nav-link ">
                                                <i class="glyphicon glyphicon-plus-sign"></i> 
                                                <span class="title">
                                                    Create User
                                                </span>
                                            </a>
                                        </li>

                                        <li class="nav-item  {{ (isset($page_title) && $page_action=='View User')?'active':'' }}">
                                            <a href="{{ route('user') }}" class="nav-link ">
                                                 <i class="glyphicon glyphicon-eye-open"></i> 
                                                <span class="title">
                                                    View Users
                                                </span>
                                            </a>
                                        </li>
                                      
                                     
                                    </ul>
                                </li>
                            </ul>  
                        </li>

                        
                         <li class="nav-item start active">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-globe"></i>
                                <span class="title"> Manage Contact </span>
                                <span class=""></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='Contact')?'block':'none' }}">
                                 <li class="nav-item  {{ (isset($page_title) && $page_title=='Contact')?'open':'' }}">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-user"></i>
                                        <span class="title">Contacts</span>
                                        <span class="arrow {{ (isset($page_title) && $page_title=='User')?'open':'' }}"></span>
                                    </a>
                                    <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='Contact')?'block':'none' }}">
                                        <li class="nav-item  {{ (isset($page_title) && $page_action=='Create Contact')?'active':'' }}">
                                            <a href="{{ route('contact.create') }}" class="nav-link ">
                                                 <i class="glyphicon glyphicon-plus-sign"></i> 
                                                <span class="title">
                                                    Create Contact
                                                </span>
                                            </a>
                                        </li>

                                        <li class="nav-item  {{ (isset($page_title) && $page_action=='View Contact')?'active':'' }}">
                                            <a href="{{ route('contact') }}" class="nav-link ">
                                              <i class="glyphicon glyphicon-eye-open"></i> 
                                                <span class="title">
                                                    View Contacts
                                                </span>
                                            </a>
                                        </li> 
                                    </ul>
                                </li> 
                                <li class="nav-item  {{ (isset($page_title) && $page_title=='User')?'open':'' }}">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="glyphicon glyphicon-th"></i>
                                        <span class="title">Group Contact</span>
                                        <span class="arrow {{ (isset($page_title) && $page_title=='contactGroup')?'open':'' }}"></span>
                                    </a>
                                    <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='contactGroup')?'block':'none' }}">
                                        <li class="nav-item  {{ (isset($page_title) && $page_action=='Create contactGroup')?'active':'' }}">
                                            <a href="{{ route('contactGroup.create') }}" class="nav-link ">
                                                 <i class="glyphicon glyphicon-plus-sign"></i> 
                                                <span class="title">
                                                    Create Group 
                                                </span>
                                            </a>
                                        </li>

                                        <li class="nav-item  {{ (isset($page_title) && $page_action=='View User')?'active':'' }}">
                                            <a href="{{ route('contactGroup') }}" class="nav-link ">
                                               <i class="glyphicon glyphicon-eye-open"></i> 
                                                <span class="title">
                                                    View Group 
                                                </span>
                                            </a>
                                        </li> 
                                     
                                    </ul>
                                </li> 
                            </ul>
                        </li>
 
                      <!-- 
                         <li class="nav-item  start active {{ (isset($page_title) && $page_title=='Category')?'open':'' }}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-folder-open-o"></i>
                                <span class="title">Manage Category</span>
                                <span class="arrow {{ (isset($page_title) && $page_title=='Category')?'open':'' }}"></span>
                            </a>
                            <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='Category')?'block':'none' }}">
                                
                                <li class="nav-item  {{ (isset($sub_page_title) && $sub_page_title=='Group Category')?'open':'' }}">

                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="title">Group Category</span>
                                        <span class="arrow {{ (isset($sub_page_title) && $sub_page_title=='Group Category')?'open':'' }}"></span>
                                    </a>
                                    <ul class="sub-menu" style="display: {{ (isset($sub_page_title) && $sub_page_title=='Group Category')?'block':'' }}">
                                        <li class="nav-item {{ (isset($page_action) && $page_action=='Create Group Category')?'open':'' }}">
                                            <a href="{{ route('category.create') }}" class="nav-link "  > 

                                            <i class="glyphicon glyphicon-plus-sign"></i> 
                                                <span class="title">
                                                  Create Group 
                                                </span> 
                                            </a>
                                        </li>
                                        <li class="nav-item {{ (isset($page_action) && $page_action=='View Group Category')?'open':'' }}">
                                            <a href="{{ route('category') }}" class="nav-link " >
                                                <i class="glyphicon glyphicon-eye-open"></i> 
                                                <span class="title">
                                                 View Group 
                                                </span> 
                                            </a> 
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item  {{ (isset($sub_page_title) && $sub_page_title=='Sub Category')?'open':'' }}">

                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="title">Category</span>
                                        <span class="arrow {{ (isset($sub_page_title) && $sub_page_title=='Sub Category')?'open':'' }}"></span>
                                    </a>
                                    <ul class="sub-menu"  style="display: {{ (isset($sub_page_title) && $sub_page_title=='Sub Category')?'block':'' }}">
                                        <li class="nav-item {{ (isset($page_action) && $page_action=='Create Sub Category')?'open':'' }}">
                                            <a href="{{ route('sub-category.create') }}" class="nav-link " > Create Category</a>
                                        </li>
                                        <li class="nav-item {{ (isset($page_action) && $page_action=='View Sub Category')?'open':'' }}">
                                            <a href="{{ route('sub-category') }}" class="nav-link "  >View Category</a>
                                        </li>
                                        
                                    </ul>
                                </li>

                                <li class="nav-item  {{ (isset($sub_page_title) && $sub_page_title=='Category Dashboard')?'open':'' }}">

                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="title">Category Dashboard</span>
                                        <span class="arrow {{ (isset($sub_page_title) && $sub_page_title=='Category Dashboard')?'open':'' }}"></span>
                                    </a>
                                    <ul class="sub-menu"  style="display: {{ (isset($sub_page_title) && $sub_page_title=='Category Dashboard')?'block':'' }}">
                                        <li class="nav-item {{ (isset($page_action) && $page_action=='Category Dashboard')?'open':'' }}">
                                            <a href="{{ route('category-dashboard') }}" class="nav-link "  >Category Dashboard</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                        -->
                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
>>>>>>> 749be5ae7e09c2da741080e084a373208e43fcf9
