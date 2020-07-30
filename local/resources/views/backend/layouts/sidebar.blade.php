<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style='background-image: url("backend/images/003.png");'>

    <div data-simplebar class="h-100" >

        <!--- Sidemenu -->
        <div id="sidebar-menu"  >
            <!-- Left Menu Start  style="background-color: #003300;" -->
            <ul class="metismenu list-unstyled" id="side-menu" > 
                <!-- <li class="menu-title">Menu</li> -->
      <!--            <li>
                    <a href="backend" class=" waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                </li>  -->
                @php
                if(!empty(Auth::user())){
                  $Menu = new \App\Models\Backend\Menu;
                  echo $Menu->setMenu(Request::path());
                }
                @endphp


        <!--          <li class="menu-title" style="margin-top: 150px;">Template Layout </li>
                <li>
                    <a href="backend/template" class=" waves-effect">
                        <i class="bx bx-file"></i>
                        <span>Admin Template</span>
                    </a>
                </li>  -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
