<ul class="nav nav-tabs">
    <li class="{{ Request::is('admin/product') ? 'active' : null }}">
        <a href="{{ admin_url('product') }}">
            <i class="fa fa-list-alt"></i> Список
        </a>
    </li>
    <li class="{{ Request::is('admin/product/add') ? 'active' : null }}">
        <a href="{{ admin_url('product/add') }}">
            <i class="fa fa-plus"></i> Добавить
        </a>
    </li>
</ul>