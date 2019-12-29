

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="{{ url('/mainhome')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/category/save')}}">Category Entry</a>
                                </li>
                                <li>
                                    <a href="{{ url('/category/manage')}}">Category Manage</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Item Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/item/entry')}}">Item Entry</a>
                                </li>
                                <li>
                                    <a href="{{ url('/item/manage')}}">Item Manage</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Staff Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/staff/entry')}}">Staff Entry</a>
                                </li>
                                <li>
                                    <a href="{{ url('/staff/manage')}}">Staff Manage</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Exhibition Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/exhi/entry')}}">Exhibition  Entry</a>
                                </li>
                                <li>
                                    <a href="{{ url('/exhi/manage')}}">Exhibition  Manage</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-envelope"></i> Messages <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/showMsg')}}">Unread Messages</a>
                                </li>                               
                                <li>
                                    <a href="{{ url('/readMsg')}}">Read Messages</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="glyphicon glyphicon-erase"></i>Contact Info <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                                               
                                <li>
                                    <a href="info2">Contact</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-erase"></i> About <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/about/entry')}}">About Entry</a>
                                </li>                               
                                <li>
                                    <a href="{{ url('/about/manage')}}">About Manage</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
