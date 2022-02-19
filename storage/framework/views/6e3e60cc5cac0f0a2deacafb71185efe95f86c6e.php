<!-- BEGIN CONTAINER -->
<div class="page-container">


    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <!-- END SIDEBAR TOGGLER BUTTON -->

            
                    <li class="nav-item 
<?php echo e(request()->is('dashboard*') ? 'active' : ''); ?>

                    ">
                        <a href="<?php echo e(url('/')); ?>/dashboard" class="nav-link ">
                            <i class="icon-home"></i>
                            <span class="title"><?php echo e(trans('trans.Dashboard')); ?></span>
                        </a>
                    </li>
                 
  

            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->


    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
         <div class="theme-panel hidden-xs hidden-sm">
                            <div class="toggler" style="display: block;"> </div>
                            <div class="toggler-close" style="display: none;"> </div>
                            <div class="theme-options" style="display: none;">
                                <div class="theme-option theme-colors clearfix">
                                    <span> <?php echo e(trans('trans.THEME COLOR')); ?> </span>
                                    <ul>
                                        <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                        <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                        <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                        <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                        <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                        <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                    </ul>
                                </div>
                                <div class="theme-option">
                                    <span><?php echo e(trans('trans.Layout')); ?> </span>
                                    <select class="layout-option form-control input-sm">
                                        <option value="fluid" selected="selected"><?php echo e(trans('trans.Fluid')); ?> </option>
                                        <option value="boxed"><?php echo e(trans('trans.Boxed')); ?></option>
                                    </select>
                                </div>
                               
                                <div class="theme-option">
                                    <span><?php echo e(trans('trans.Sidebar Style')); ?> </span>
                                    <select class="sidebar-style-option form-control input-sm">
                                        <option value="default" selected="selected"><?php echo e(trans('trans.Default')); ?></option>
                                        <option value="light"><?php echo e(trans('trans.Light')); ?></option>
                                    </select>
                                </div>
                                 
                                <div class="theme-option">
                                    <span><?php echo e(trans('trans.Footer')); ?>  </span>
                                    <select class="page-footer-option form-control input-sm">
                                        <option value="fixed"><?php echo e(trans('trans.Fixed')); ?> </option>
                                        <option value="default" selected="selected"><?php echo e(trans('trans.Default')); ?></option>
                                    </select>
                                </div>
                            </div>
                        </div><?php /**PATH C:\xampp\htdocs\dashboard\menusws\resources\views/admin/layouts/menue.blade.php ENDPATH**/ ?>