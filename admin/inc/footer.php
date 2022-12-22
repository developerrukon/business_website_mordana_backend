<?php
if (!isset($_SESSION['info'])) {
   header("location:auth/login_email_view.php");
}
?>

</div>
<!-- // END drawer-layout__content -->
<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
   <div class="mdk-drawer__content">
      <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
         <div class="sidebar-heading">Menu</div>
         <ul class="sidebar-menu">
            <li class="sidebar-menu-item active">
               <a class="sidebar-menu-button" href="<?= admin_url() ?>/index.php">
                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                  <span class="sidebar-menu-text">Dashboards</span>
               </a>
            </li>


    
         <!--banners start-->
         <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#Bannars">
                           <i class="sidebar-menu-icon sidebar-menu-icon--right material-icons">assignment</i>
                           <span class="sidebar-menu-text">Banners</span>
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show " id="Bannars">
                           <li class="sidebar-menu-item ">
                              <a class="sidebar-menu-button" href="<?= admin_url() ?>/banners/all_banners_view.php">

                                 <span class="sidebar-menu-text"><i class=" material-icons">view_list</i> All Banners</span>
                              </a>
                           </li>
                           <li class="sidebar-menu-item active">
                              <a class="sidebar-menu-button" href="<?= admin_url() ?>/banners/add_banner_view.php
                                             ">
                                 <span class="sidebar-menu-text"><i class=" material-icons">add_circle</i> Add Banner</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!--banners end-->
                     <!--services start-->
                     <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#services">
                           <i class="sidebar-menu-icon sidebar-menu-icon--right material-icons">business</i>
                           <span class="sidebar-menu-text">Services</span>
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show " id="services">
                           <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="<?= admin_url() ?>/services/all_services_view.php">
                                 <span class="sidebar-menu-text"><i class=" material-icons">view_list</i> All Services</span>
                              </a>
                           </li>
                           <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="<?= admin_url() ?>/services/add_service_view.php">
                                 <span class="sidebar-menu-text"><i class=" material-icons">add_circle</i> Add Service</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!--services end-->
                     <!--why us start-->
                     <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button" href="<?= admin_url() ?>/why-us/why_us_view.php">
                           <i class="sidebar-menu-icon sidebar-menu-icon--right material-icons">aspect_ratio</i>
                           <span class="sidebar-menu-text">Why Us</span>
                        </a>
                     </li>
                     <!--why us end-->

                     <!--features start-->
                     <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#features">
                           <i class="sidebar-menu-icon sidebar-menu-icon--right material-icons">sort</i>
                           <span class="sidebar-menu-text">Features</span>
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show " id="features">
                           <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="<?= admin_url() ?>/features/all_features_view.php">
                                 <span class="sidebar-menu-text"><i class=" material-icons">view_list</i> All Features</span>
                              </a>
                           </li>
                           <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="<?= admin_url() ?>/features/add_feature_view.php">

                                 <span class="sidebar-menu-text"><i class=" material-icons">add_circle</i> Add Feature</span>
                              </a>
                           </li>
                        </ul>
                     </li>

                     <!--features end-->


            <!--about end-->
            <li class="sidebar-menu-item active">
               <a class="sidebar-menu-button" href="<?= admin_url() ?>/about/details_about_view.php">
                  <i class="sidebar-menu-icon sidebar-menu-icon--right material-icons">info</i>
                  <span class="sidebar-menu-text">About</span>
               </a>
            </li>
            <!--about end-->
            <!--facts start-->
            <li class="sidebar-menu-item">
               <a class="sidebar-menu-button" data-toggle="collapse" href="#facts">
                  <i class="sidebar-menu-icon sidebar-menu-icon--right material-icons">donut_large</i>
                  <span class="sidebar-menu-text">Facts</span>
                  <span class="ml-auto sidebar-menu-toggle-icon"></span>
               </a>
               <ul class="sidebar-submenu collapse show " id="facts">
                  <li class="sidebar-menu-item">
                     <a class="sidebar-menu-button" href="<?= admin_url() ?>/facts/all_facts_view.php">
                        <span class="sidebar-menu-text"><i class=" material-icons">view_list</i> All Facts</span>
                     </a>
                  </li>
                  <li class="sidebar-menu-item">
                     <a class="sidebar-menu-button" href="<?= admin_url() ?>/facts/add_fact_view.php">
                        <span class="sidebar-menu-text"><i class=" material-icons">add_circle</i> Add Facts</span>
                     </a>
                  </li>
               </ul>
            </li>
            <!--facts end-->

            <!--skills start-->
                        <li class="sidebar-menu-item">
               <a class="sidebar-menu-button" data-toggle="collapse" href="#skills">
                  <i class="sidebar-menu-icon sidebar-menu-icon--right material-icons">layers</i>
                  <span class="sidebar-menu-text">Skills</span>
                  <span class="ml-auto sidebar-menu-toggle-icon"></span>
               </a>
               <ul class="sidebar-submenu collapse show " id="skills">
                  <li class="sidebar-menu-item">
                     <a class="sidebar-menu-button" href="<?= admin_url() ?>/skills/all_skills_view.php">
                        <span class="sidebar-menu-text"><i class=" material-icons">view_list</i> All Skills</span>
                     </a>
                  </li>
                  <li class="sidebar-menu-item">
                     <a class="sidebar-menu-button" href="<?= admin_url() ?>/skills/add_skill_view.php">
                        <span class="sidebar-menu-text"><i class=" material-icons">add_circle</i> Add Skill</span>
                     </a>
                  </li>
               </ul>
            </li>
            <!--skill end-->

            <!--testimonials start-->
                        <li class="sidebar-menu-item">
               <a class="sidebar-menu-button" data-toggle="collapse" href="#testimonials">
                  <i class="sidebar-menu-icon sidebar-menu-icon--right material-icons">cast</i>
                  <span class="sidebar-menu-text">Testimonials</span>
                  <span class="ml-auto sidebar-menu-toggle-icon"></span>
               </a>
               <ul class="sidebar-submenu collapse show " id="testimonials">
                  <li class="sidebar-menu-item">
                     <a class="sidebar-menu-button" href="<?= admin_url() ?>/testimonials/all_testimonials_view.php">
                        <span class="sidebar-menu-text"><i class=" material-icons">view_list</i> All Facts</span>
                     </a>
                  </li>
                  <li class="sidebar-menu-item">
                     <a class="sidebar-menu-button" href="<?= admin_url() ?>/testimonials/add_testimonial_view.php">
                        <span class="sidebar-menu-text"><i class=" material-icons">add_circle</i> Add Facts</span>
                     </a>
                  </li>
               </ul>
            </li>
            <!--testimonials end-->







































         </ul>
         <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
            <a href="<?= admin_url() ?>/auth/profile_view.php" class="flex d-flex align-items-center text-underline-0 text-body">
               <span class="avatar avatar-sm mr-2">
                  <img src="<?= admin_url() ?>/images/<?= ($_SESSION['info']['photo']) ?>" class="rounded-circle" width="32" alt="Frontted">
               </span>
               <span class="flex d-flex flex-column">
                  <span class="text-light"><?= ($_SESSION['info']['name']) ?></span>
                  <small class="text-muted text-uppercase">Site Manager</small>
               </span>
            </a>
            <div class="dropdown ml-auto">
               <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-item-text dropdown-item-text--lh">
                     <div><strong><?= ($_SESSION['info']['name']) ?></strong></div>
                     <div><?= ($_SESSION['info']['email']) ?></div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item active" href="<?= admin_url() ?>"><i class="material-icons">dvr</i> Dashboard</a>
                  <a class="dropdown-item" href="<?= admin_url() ?>/auth/profile_view.php"><i class="material-icons">account_circle</i> My profile</a>
                  <a class="dropdown-item" href="<?= admin_url() ?>/auth/edit_profile_view.php"><i class="material-icons">edit</i> Edit account</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= admin_url() ?>/auth/logout.php"><i class="material-icons">exit_to_app</i> Logout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- // END drawer-layout -->
</div>
<!-- // END header-layout__content -->
</div>
<!-- // END header-layout -->
<!-- App Settings FAB -->
<div id="app-settings">
   <app-settings layout-active="default" :layout-location="{
            'default': 'index.html',
            'fixed': 'fixed-dashboard.html',
            'fluid': 'fluid-dashboard.html',
            'mini': 'mini-dashboard.html'
            }"></app-settings>
</div>
<!-- jQuery -->
<script src="<?= admin_url() ?>/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= admin_url() ?>/js/popper.min.js"></script>
<script src="<?= admin_url() ?>/js/bootstrap.min.js"></script>
<!-- Perfect Scrollbar -->
<script src="<?= admin_url() ?>/js/perfect-scrollbar.min.js"></script>
<!-- DOM Factory -->
<script src="<?= admin_url() ?>/js/dom-factory.js"></script>
<!-- MDK -->
<script src="<?= admin_url() ?>/js/material-design-kit.js"></script>
<!-- App -->
<script src="<?= admin_url() ?>/js/toggle-check-all.js"></script>
<script src="<?= admin_url() ?>/js/check-selected-row.js"></script>
<script src="<?= admin_url() ?>/js/dropdown.js"></script>
<script src="<?= admin_url() ?>/js/sidebar-mini.js"></script>
<script src="<?= admin_url() ?>/js/app.js"></script>
<!-- App Settings (safe to remove) -->
<script src="<?= admin_url() ?>/js/app-settings.js"></script>
</body>

</html>