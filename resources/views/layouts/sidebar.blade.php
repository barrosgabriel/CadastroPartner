<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

               

                <li class="nav-item {{ (request()->Is('/')) ? 'active' : '' }}" class="sr-only">
                    <a href="/">
                        <i class="fas fa-home"></i>
                        <p>Menu Inicial</p>
                    </a>
                </li>
                <li class="nav-item {{-- (request()->routeIs('cadastro.show')) || (request()->is('cadastro.create'))  ? 'active' : '' --}}">
                    <a data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne" href="#base">
                        <i class="fas fa-bars"></i>
                        <p>Menu</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse {{ (request()->routeIs('cadastro.create')) || (request()->routeIs('cadastro.show')) || (request()->routeIs('pdf')) ? 'show' : '' }}"
                        aria-controls="collapseOne" id="base">
                        <ul class="nav nav-collapse ">
                            <li class="{{ (request()->routeIs('cadastro.create')) ? 'active' : '' }}">
                                <a href="{{ route('cadastro.create') }}">
                                    <span class="sub-item">Cadastro</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('cadastro.show')) ? 'active' : '' }}">
                                <a href="{{ route('cadastro.show') }}">
                                    <span class="sub-item">Listagem</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a data-toggle="collapse" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Sair</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
