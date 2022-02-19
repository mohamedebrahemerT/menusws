<ul class="navbar-nav">
    @if(config('app.ordering'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
               <i class="fa fa-home" style="font-size:25px;color:#42d0d0"></i> {{ __('Dashboard') }}
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/live">
                <i class='fas fa-stream' style='font-size:25px;color:#42d0d0'></i> {{ __('Live Orders') }}<div class="blob red"></div>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route('orders.index') }}">
               <i class="fa fa-first-order" style="font-size:25px;color:#42d0d0"></i> {{ __('Orders') }}
            </a>
        </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.restaurants.edit',  auth()->user()->restorant->id) }}">
           <i class="fa fa-meetup" style="font-size:25px;color:#42d0d0"></i> {{ __('Restaurant') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('items.index') }}">
            <i class="fa fa-list" style="font-size:25px;color:#42d0d0"></i> {{ __('Menu') }}
        </a>
    </li>

    @if (config('app.isqrsaas') && (!config('settings.qrsaas_disable_odering') || config('settings.enable_guest_log')))
        @if(!config('settings.is_whatsapp_ordering_mode') || in_array("poscloud", config('global.modules',[]))  || in_array("deliveryqr", config('global.modules',[])) )
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.restaurant.tables.index') }}">
                   <i class="fa fa-table" style="font-size:25px;color:#42d0d0"></i> {{ __('Tables') }}
                </a>
            </li>
        @endif
    @elseif (config('app.isft') && in_array("poscloud", config('global.modules',[])) )
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.restaurant.tables.index') }}">
                <i class="ni ni-ungroup text-red"></i> {{ __('Tables') }}
            </a>
        </li>
    @endif

    @foreach (auth()->user()->getExtraMenus() as $menu)
            <li class="nav-item">
                <a class="nav-link" href="{{ route($menu['route'],isset($menu['params'])?$menu['params']:[]) }}">
                    <i class="{{ $menu['icon'] }}"></i> {{ __($menu['name']) }}
                </a>
        </li>
    @endforeach
    

    @if (config('app.isqrsaas')&&!config('settings.is_whatsapp_ordering_mode')&&!config('settings.is_pos_cloud_mode'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('qr') }}">
                <i class="fa fa-qrcode" style="font-size:25px;color:#42d0d0"></i> {{ __('QR Builder') }}
            </a>
        </li>
        @if(config('settings.enable_guest_log'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.restaurant.visits.index') }}">
                 <i class="fa fa-user" style="font-size:25px;color:#42d0d0"></i> {{ __('Customers log') }}
            </a>
        </li>
        @endif
    @endif

    @if (config('app.isqrsaas')&&(config('settings.is_whatsapp_ordering_mode') || in_array("poscloud", config('global.modules',[]))  ||  in_array("deliveryqr", config('global.modules',[]))  ))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.restaurant.simpledelivery.index') }}">
               <i class="fa fa-plan" style="font-size:25px;color:#42d0d0"></i> {{ __('Delivery areas') }}
            </a>
        </li>
    @endif

    @if(config('settings.enable_pricing'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('plans.current') }}">
            <i class="fa fa-paper-plane-o" style="font-size:25px;color:#42d0d0"></i> {{ __('Plan') }}
            </a>
        </li>
    @endif

        @if(config('app.ordering')&&config('settings.enable_finances_owner'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('finances.owner') }}">
                     <i class='fas fa-money-bill-wave-alt' style='font-size:25px;color:#42d0d0'></i> {{ __('Finances') }}
                </a>
            </li>
        @endif

      
        @if ( in_array("coupons", config('global.modules',[]))   )

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.restaurant.coupons.index') }}">
                    <i class="ni ni-tag text-pink"></i> {{ __('Coupons') }}
                </a>
            </li>
        @endif


    @if (!config('settings.is_pos_cloud_mode'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('share.menu') }}">
             <i class="fa fa-share" style="font-size:25px;color:#42d0d0"></i>{{ __('Share') }}
            </a>
        </li>
    @endif
    

</ul>
