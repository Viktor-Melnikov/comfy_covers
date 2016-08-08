<ul class="nav nav-tabs">
    <li class="{{ Request::is('admin/category') ? 'active' : null }}">
        <a href="{{ admin_url('category') }}">
            <i class="fa fa-list-alt"></i> Список
        </a>
    </li>
    <li class="{{ Request::is('admin/category/add') ? 'active' : null }}">
        <a href="{{ admin_url('category/add') }}">
            <i class="fa fa-plus"></i> Добавить
        </a>
    </li>
</ul>