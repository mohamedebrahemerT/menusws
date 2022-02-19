<ul class="navbar-nav">
    <?php if(config('app.ordering')): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('home')); ?>">
               <i class="fa fa-home" style="font-size:25px;color:#42d0d0"></i> <?php echo e(__('Dashboard')); ?>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/live">
                <i class='fas fa-stream' style='font-size:25px;color:#42d0d0'></i> <?php echo e(__('Live Orders')); ?><div class="blob red"></div>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('orders.index')); ?>">
               <i class="fa fa-first-order" style="font-size:25px;color:#42d0d0"></i> <?php echo e(__('Orders')); ?>

            </a>
        </li>
    <?php endif; ?>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin.restaurants.edit',  auth()->user()->restorant->id)); ?>">
           <i class="fa fa-meetup" style="font-size:25px;color:#42d0d0"></i> <?php echo e(__('Restaurant')); ?>

        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('items.index')); ?>">
            <i class="fa fa-list" style="font-size:25px;color:#42d0d0"></i> <?php echo e(__('Menu')); ?>

        </a>
    </li>

    <?php if(config('app.isqrsaas') && (!config('settings.qrsaas_disable_odering') || config('settings.enable_guest_log'))): ?>
        <?php if(!config('settings.is_whatsapp_ordering_mode') || in_array("poscloud", config('global.modules',[]))  || in_array("deliveryqr", config('global.modules',[])) ): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.restaurant.tables.index')); ?>">
                   <i class="fa fa-table" style="font-size:25px;color:#42d0d0"></i> <?php echo e(__('Tables')); ?>

                </a>
            </li>
        <?php endif; ?>
    <?php elseif(config('app.isft') && in_array("poscloud", config('global.modules',[])) ): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.restaurant.tables.index')); ?>">
                <i class="ni ni-ungroup text-red"></i> <?php echo e(__('Tables')); ?>

            </a>
        </li>
    <?php endif; ?>

    <?php $__currentLoopData = auth()->user()->getExtraMenus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route($menu['route'],isset($menu['params'])?$menu['params']:[])); ?>">
                    <i class="<?php echo e($menu['icon']); ?>"></i> <?php echo e(__($menu['name'])); ?>

                </a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

    <?php if(config('app.isqrsaas')&&!config('settings.is_whatsapp_ordering_mode')&&!config('settings.is_pos_cloud_mode')): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('qr')); ?>">
                <i class="fa fa-qrcode" style="font-size:25px;color:#42d0d0"></i> <?php echo e(__('QR Builder')); ?>

            </a>
        </li>
        <?php if(config('settings.enable_guest_log')): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.restaurant.visits.index')); ?>">
                 <i class="fa fa-user" style="font-size:25px;color:#42d0d0"></i> <?php echo e(__('Customers log')); ?>

            </a>
        </li>
        <?php endif; ?>
    <?php endif; ?>

    <?php if(config('app.isqrsaas')&&(config('settings.is_whatsapp_ordering_mode') || in_array("poscloud", config('global.modules',[]))  ||  in_array("deliveryqr", config('global.modules',[]))  )): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.restaurant.simpledelivery.index')); ?>">
               <i class="fa fa-plan" style="font-size:25px;color:#42d0d0"></i> <?php echo e(__('Delivery areas')); ?>

            </a>
        </li>
    <?php endif; ?>

    <?php if(config('settings.enable_pricing')): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('plans.current')); ?>">
            <i class="fa fa-paper-plane-o" style="font-size:25px;color:#42d0d0"></i> <?php echo e(__('Plan')); ?>

            </a>
        </li>
    <?php endif; ?>

        <?php if(config('app.ordering')&&config('settings.enable_finances_owner')): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('finances.owner')); ?>">
                     <i class='fas fa-money-bill-wave-alt' style='font-size:25px;color:#42d0d0'></i> <?php echo e(__('Finances')); ?>

                </a>
            </li>
        <?php endif; ?>

      
        <?php if( in_array("coupons", config('global.modules',[]))   ): ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.restaurant.coupons.index')); ?>">
                    <i class="ni ni-tag text-pink"></i> <?php echo e(__('Coupons')); ?>

                </a>
            </li>
        <?php endif; ?>


    <?php if(!config('settings.is_pos_cloud_mode')): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('share.menu')); ?>">
             <i class="fa fa-share" style="font-size:25px;color:#42d0d0"></i><?php echo e(__('Share')); ?>

            </a>
        </li>
    <?php endif; ?>
    

</ul>
<?php /**PATH C:\xampp\htdocs\dashboard\menusws\resources\views/layouts/navbars/menus/owner.blade.php ENDPATH**/ ?>