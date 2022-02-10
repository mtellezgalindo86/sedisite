<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{asset('admin_dashboard/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">MYBLOG</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ url('index') }}" target="_blank">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class="menu-title">Posts</div>
                    </a>

                    <ul>
                        <li> <a href="{{ route('sediadministrador.posts.index') }}"><i class="bx bx-right-arrow-alt"></i>Todos los Posts</a>
                        </li>
                        <li> <a href="{{ route('sediadministrador.posts.create') }}"><i class="bx bx-right-arrow-alt"></i>Nuevo Post</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-menu'></i>
                        </div>
                        <div class="menu-title">Categorias</div>
                    </a>

                    <ul>
                        <li> <a href="{{ route('sediadministrador.categories.index') }}"><i class="bx bx-right-arrow-alt"></i>Todas las Categorias</a>
                        </li>
                        <li> <a href="{{ route('sediadministrador.categories.create') }}"><i class="bx bx-right-arrow-alt"></i>Nueva Categoria</a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->