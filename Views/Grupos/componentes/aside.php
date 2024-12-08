<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <img src="../../assets/images/logos/logo-sena.png" width="70" alt="" /> <h3>Proyectos</h3>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="../../index.php" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Bienvenidos</span>
                </a>
            </li>
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">GRUPOS</span>
            </li>

            <?php
                $query_proyectos = "SELECT * FROM proyectos";
                $data_proyectos = $cxion->consultar($query_proyectos);

                foreach($data_proyectos as $fila){
                    $name_proyecto = $fila['nombre'];
                    $ruta = str_replace(" ", "", $name_proyecto);

                    echo  "<li class='sidebar-item'>
                            <a class='sidebar-link' href='".strtolower($ruta).".php' aria-expanded='false'>
                            <span>
                                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-users-group'>
                                <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                <path d='M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0' />
                                <path d='M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1' />
                                <path d='M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0' />
                                <path d='M17 10h2a2 2 0 0 1 2 2v1' />
                                <path d='M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0' />
                                <path d='M3 13v-1a2 2 0 0 1 2 -2h2' />
                                </svg>
                            </span>
                            <span class='hide-menu'>".$name_proyecto."</span>
                            </a>
                        </li>";
                }

            ?>
        </ul>

        
    </nav>
    <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>