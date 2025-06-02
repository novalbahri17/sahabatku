<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Menu</span>
                </li>
                {{-- Dashboard Link --}}
                <li class="{{ Request::is('dashboard') ? 'sidebar-item-active-main' : '' }}">
                    <a href="{{ url('/dashboard') }}">
                        <img src="{{ asset('assets/img/icons/dashboard.svg') }}" alt="Dasbor">
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="menu-title">
                    <span>Master</span>
                </li>
                {{-- Product Submenu --}}
                <li class="submenu {{ Request::is('product/*') ? 'sidebar-item-active-main sidebar-open' : '' }}">
                    <a href="javascript:void(0);" class="{{ Request::is('product/*') ? 'sidebar-link-subdrop' : '' }}">
                        <img src="{{ asset('assets/img/icons/product.svg') }}" alt="Produk">
                        <span>Product</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ Request::is('product/*') ? 'block' : 'none' }};">
                        <li><a class="{{ Request::is('product/list') ? 'sidebar-subitem-active' : '' }}" href="{{ url('product/list') }}">Product List</a></li>
                        <li><a class="{{ Request::is('product/add') ? 'sidebar-subitem-active' : '' }}" href="{{ url('product/add') }}">Add Product</a></li>
                    </ul>
                </li>
                
                {{-- Purchase Submenu --}}
                <li class="submenu {{ Request::is('transaksi/*') ? 'sidebar-item-active-main sidebar-open' : '' }}">
                    <a href="javascript:void(0);" class="{{ Request::is('transaksi/*') ? 'sidebar-link-subdrop' : '' }}">
                        <img src="{{ asset('assets/img/icons/purchase1.svg') }}" alt="Pembelian">
                        <span>Purchase</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ Request::is('transaksi/*') ? 'block' : 'none' }};">
                        <li><a class="{{ Request::is('transaksi/purchase-list') ? 'sidebar-subitem-active' : '' }}" href="{{ url('transaksi/purchase-list') }}">Purchase List</a></li>
                    </ul>
                </li>
                
                <li class="menu-title">
                    <span>Auth</span>
                </li>
                {{-- Users Submenu --}}
                <li class="submenu {{ Request::is('newuser') || Request::is('userlists') ? 'sidebar-item-active-main sidebar-open' : '' }}">
                    <a href="javascript:void(0);" class="{{ Request::is('newuser') || Request::is('userlists') ? 'sidebar-link-subdrop' : '' }}">
                        <img src="{{ asset('assets/img/icons/users1.svg') }}" alt="Pengguna">
                        <span>Users</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ Request::is('newuser') || Request::is('userlists') ? 'block' : 'none' }};">
                        <li><a class="{{ Request::is('newuser') ? 'sidebar-subitem-active' : '' }}" href="{{ url('newuser') }}">New User</a></li>
                        <li><a class="{{ Request::is('userlists') ? 'sidebar-subitem-active' : '' }}" href="{{ url('userlists') }}">Users List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>