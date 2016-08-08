<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $user->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        {{--<!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>--}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">
                Главное меню
            </li>
            <li class="{{ Request::is('admin')  ? 'active' : null }}">
                <a href="{{ url('admin') }}">
                    <i class="fa fa-book"></i> <span>Главная</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/employees') or Request::is('admin/employees/*'))  ? 'active' : null }}">
                <a href="{{ admin_url('employees') }}">
                    <i class="fa fa-users"></i> <span>Сотрудники</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/orders') or Request::is('admin/orders/*'))  ? 'active' : null }}">
                <a href="{{ admin_url('orders') }}">
                    <i class="fa fa-shopping-bag"></i> <span>Заказы</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/clients') or Request::is('admin/clients/*'))  ? 'active' : null }}">
                <a href="{{ admin_url('clients') }}">
                    <i class="fa fa-user-md"></i> <span>Клиенты</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/product') or Request::is('admin/product/*'))  ? 'active' : null }}">
                <a href="{{ admin_url('product') }}">
                    <i class="fa fa-shopping-cart"></i> <span>Товары</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/category') or Request::is('admin/category/*'))  ? 'active' : null }}">
                <a href="{{ admin_url('category') }}">
                    <i class="fa fa-list-ul"></i> <span>Категории</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/properties') or Request::is('admin/properties/*'))  ? 'active' : null }}">
                <a href="{{ admin_url('properties') }}">
                    <i class="fa fa-list"></i> <span>Свойства товаров</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>