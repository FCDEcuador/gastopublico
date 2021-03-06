        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li class="user-profile">
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                @if(Auth::user()->avatar != '')
                                    @if($env == 'production')
                                        <img src="{!! asset($oStorage->url(Auth::user()->avatar)) !!}" alt="{!! Auth::user()->name !!} {!! Auth::user()->lastname !!}" class="profile-pic" />
                                    @else
                                        <img src="{!! asset('public'.$oStorage->url(Auth::user()->avatar)) !!}" alt="user" class="profile-pic" />
                                    @endif
                                @else
                                    <img src="{!! asset('public/backend/assets/images/default-user.png') !!}" alt="{!! Auth::user()->name !!} {!! Auth::user()->lastname !!}" class="profile-pic" />
                                @endif
                                <span class="hide-menu">{!! substr(Auth::user()->name,0,1) !!}. {!! Auth::user()->lastname !!}</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{!! route('backend.profile') !!}">Mi Perfil </a></li>
                                <li><a href="javascript:void()">Inbox</a></li>
                                <li><a href="{!! route('backend.logout') !!}">Logout</a></li>
                            </ul>
                        </li>

                        <li class="nav-devider"></li>

                        <li class="nav-small-cap">ADMINISTRACION</li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-settings"></i>
                                <span class="hide-menu">
                                    Parametrizacion 
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                @can('backend_edit_configurations')
                                    <li>
                                        <a href="{!! route('backend.parametrization.configuration') !!}">
                                            Configuracion
                                        </a>
                                    </li>
                                @endcan
                                @can('backend_view_metatags')
                                    <li>
                                        <a href="{!! route('backend.parametrization.meta-tags.list') !!}">
                                            Meta Tags
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>

                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-account-key"></i>
                                <span class="hide-menu">
                                    Seguridades
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                @can('backend_view_users')
                                    <li>
                                        <a href="{!! route('backend.auth.users.list') !!}">
                                            Usuarios
                                        </a>
                                    </li>
                                @endcan
                                @can('backend_view_roles')
                                    <li>
                                        <a href="{!! route('backend.auth.roles.list') !!}">
                                            Roles
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>

                        <li class="nav-devider"></li>

                        <li class="nav-small-cap">CONTENIDO</li>
                        
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-book-open-variant"></i>
                                <span class="hide-menu">
                                    Catalogos 
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                @can('backend_view_provinces')
                                    <li>
                                        <a href="{!! route('backend.parametrization.catalogues.provinces.list') !!}">
                                            Provincias
                                        </a>
                                    </li>
                                @endcan
                                
                            </ul>
                        </li>
                        

                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-clipboard-text"></i>
                                <span class="hide-menu">
                                    Contenido 
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                @can('backend_view_indicators')
                                    <li>
                                        <a href="{!! route('backend.content.indicators.list') !!}">
                                            Indicadores
                                        </a>
                                    </li>
                                @endcan

                                @can('backend_view_contentcategories')
                                    <li>
                                        <a href="{!! route('backend.content.content-categories.list') !!}">
                                            Categorías de Contenido
                                        </a>
                                    </li>
                                @endcan

                                @can('backend_view_contentarticles')
                                    <li>
                                        <a href="{!! route('backend.content.content-articles.list') !!}">
                                            Artículos de Contenido
                                        </a>
                                    </li>
                                @endcan

                                @can('backend_view_menuitems')
                                    <li>
                                        <a href="{!! route('backend.content.menu-items.list') !!}">
                                            Items de Menú
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>