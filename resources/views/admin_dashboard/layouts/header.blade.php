<!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative search-bar-box">
                            
                        </div>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="#">   <i class='bx bx-search'></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                               
                                <div class="dropdown-menu dropdown-menu-end">
                                    
                                    <div class="header-notifications-list">
                                        
                                        
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                
                                <div class="dropdown-menu dropdown-menu-end">
                                    
                                    <div class="header-message-list">
                                        
                                    </div>
                                   
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">{{ Auth::user()->name}}</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->