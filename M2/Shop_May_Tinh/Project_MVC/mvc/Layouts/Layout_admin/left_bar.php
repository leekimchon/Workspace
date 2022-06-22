<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php?url=admin/home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Catalog
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">blabla</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Dell</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Apple</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">HP</a>
                                </nav>
                            </div> -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Catalog
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseThinkpad" aria-expanded="false" aria-controls="pagesCollapseThinkpad">
                                        Thinkpad
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a> -->
                                    <!-- <div class="collapse" id="pagesCollapseThinkpad" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Thinkpad P Seri</a>
                                            <a class="nav-link" href="register.html">Thinkpad X Seri</a>
                                            <a class="nav-link" href="password.html">Thinkpad T Seri</a>
                                        </nav>
                                    </div> -->
                                    <?php 
                                    $arr_catalog_ID = $data_2;
                                    $arr_catalog_ID = array_unique($arr_catalog_ID);
                                    $arr_catalog_ID_PARENT = [];
                                    foreach($arr_catalog_ID as $key => $value){
                                        array_push($arr_catalog_ID_PARENT, $value);
                                    }
                                    ?>
                                    <a class="nav-link" href="index.php?url=admin/add_catalog">+</a>
                                    <?php $k = 0; for($i = 0; $i < count($data_1); $i++){?>
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse<?php echo $data_1[$i]; ?>" aria-expanded="false" aria-controls="pagesCollapse<?php echo $data_1[$i]; ?>">
                                            <?php echo $data_1[$i]; ?>
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapse<?php echo $data_1[$i]; ?>" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="index.php?url=admin/add_catalog_child/<?php echo $arr_catalog_ID_PARENT[$i]; ?>">+</a>
                                                <?php 
                                                for($j = $k; $j < count($data_2); $j++){ 
                                                ?>
                                                    <a class="nav-link" href="index.php?url=admin/catalog/<?php echo $data_4[$k]?>"><?php echo $data_3[$j] ?></a>
                                                    <a style="text-decoration: none;" href="index.php?url=admin/catalog/<?php echo $data_4[$k]?>"><i class="nav-link bi bi-trash"></i></a>
                                                    <?php 
                                                    $k++;
                                                    if(isset($data_2[$j + 1])){
                                                        if($data_2[$j] != $data_2[$j + 1]){
                                                            break;
                                                        }
                                                    }
                                                }
                                                ?>
                                            </nav>
                                        </div>
                                    <?php }?>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Orders
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">