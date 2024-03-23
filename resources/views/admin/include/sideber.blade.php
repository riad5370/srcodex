<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script> 
    <ul class="nav nav-list">
        <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
            <b class="arrow"></b>
        </li>
        
       
        
        {{-- product section --}}
        <li class="{{ request()->routeIs('categories.index') || request()->routeIs('products.index') ? 'active' : '' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-shopping-cart"></i>
                <span class="menu-text">
                    Product Area
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="{{ request()->routeIs('categories.index') ? 'active' : '' }}">
                    <a href="{{route('categories.index')}}">
                        Category
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="{{ request()->routeIs('products.index') ? 'active' : '' }}">
                    <a href="{{route('products.index')}}">
                        Product Info
                    </a>
                </li>
            </ul>
        </li>
        
       
    </ul>
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>






