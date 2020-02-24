@php($role = auth()->user()->role)
<header>
    <div class="side-menus">
        <div class="side-header">
            <div class="logo"><a title="" href="/"><img alt="" src="images/logo2.png"></a></div>
            <nav class="slide-menu">
                <span>Navigation <i class="ti-layout"></i></span>
                <ul class="parent-menu">
                    <li class="menu-item-has-children {{App\Setting::is_active('/')}}"> <a title="#"><i
                                class="fa fa-dashboard"></i><span>Dashboard</span></a>
                        <ul class="mega">
                            <li><a class="{{App\Setting::is_active('/')}}" href='{{ url("$role") }}' title="">Dashboard 1</a></li>
                            <li><a href="index2.html" title="">Dashboard 2</a></li>
                            <li><a href="index3.html" title="">Dashboard 3</a></li>
                            <li><a href="index4.html" title="">Dashboard 4</a></li>
                            <li><a href="index5.html" title="">Dashboard 5</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children {{App\Setting::is_active('products')}}"> <a title=""><i
                                class="fa fa-shopping-cart"></i><span>Products</span></a>
                        <ul class="mega">
                            <li><a href='{{ url("$role/products") }}' title="">product</a></li>
                            <li><a href="/product">product-detail</a></li>
                            <li><a href="/orders">product-order</a></li>
                            <li><a href='{{ url("$role/products/create") }}'>add product</a></li>
                            <li><a href='{{ url("cart") }}'>product cart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children {{App\Setting::is_active('users')}}"> <a title="Users"><i class="fa fa-group"></i><span>Users</span></a>
                        <ul class="mega">
                            <li><a href='{{ url("customers") }}' title="Customers Listing">Customers</a></li>
                            <li><a href='{{ url("merchants") }}' title="">Merchants</a></li>
                            <li><a href='{{ url("admins") }}' title="">Adminstrators</a></li>
                        </ul>
                    </li>

                    <li><a href='{{ url("$role/inbox") }}' title=""><i class="fa fa-inbox"></i><span>inbox</span><ins>5</ins></a></li>
                    <li><a href="table.html" title=""><i class="fa fa-table"></i><span>table</span></a></li>
                    <li><a href='{{ url("$role/invoice") }}' title=""><i class="fa fa-bar-chart"></i><span>invoice</span></a></li>
                    <li><a href='{{ url("$role/payments") }}' title=""><i class="fa fa-bar-chart"></i><span>payments</span></a></li>
                    <li><a href='{{ url("$role/shops") }}' title=""><i class="fa fa-bar-chart"></i><span>shops</span></a></li>
                    <li><a href='{{ url("$role/reports") }}' title=""><i class="fa fa-bar-chart"></i><span>reports & analytics</span></a></li>


                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- side header -->
