<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{'../assets/img/sedi.png'}}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Admin</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('sediadministrador.index') }}" >
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
                <li>
                    <a href="{{ route('sediadministrador.tags.index') }}" >
                    <div class="parent-icon"><i class='bx bx-purchase-tag'></i></div>
                        <div class="menu-title">Listado de tags</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-key'></i>
                        </div>
                        <div class="menu-title">Roles</div>
                    </a>

                    <ul>
                        <li> <a href="{{ route('sediadministrador.roles.index') }}"><i class="bx bx-right-arrow-alt"></i>Todos los roles</a>
                        </li>
                        <li> <a href="{{ route('sediadministrador.roles.create') }}"><i class="bx bx-right-arrow-alt"></i>Agregar nuevo rol</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-user'></i>
                        </div>
                        <div class="menu-title">Usuarios</div>
                    </a>

                    <ul>
                        <li> <a href="{{ route('sediadministrador.users.index') }}"><i class="bx bx-right-arrow-alt"></i>Todos los usuarios</a>
                        </li>
                        <li> <a href="{{ route('sediadministrador.users.create') }}"><i class="bx bx-right-arrow-alt"></i>Agregar nuevo usuario</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="{{ route('sediadministrador.get-list') }}" >
                    <div class="parent-icon"><i class='bx bx-phone-outgoing'></i></div>
                        <div class="menu-title">Listado de Contactos</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->