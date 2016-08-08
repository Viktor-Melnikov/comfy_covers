<ul class="nav nav-tabs">
    <li class="{{ Request::is('admin/clients') ? 'active' : null }}">
        <a href="{{ admin_url('clients') }}">
            <i class="fa fa-list-alt"></i> Клиенты
        </a>
    </li>
    <li class="{{ Request::is('admin/clients/add') ? 'active' : null }}">
        <a href="{{ admin_url('clients/add') }}">
            <i class="fa fa-plus"></i> Добавить
        </a>
    </li>
    <li class="{{ Request::is('admin/clients/archive') ? 'active' : null }}">
        <a href="{{ admin_url('clients/archive') }}">
            <i class="fa fa-archive"></i> Архив
        </a>
    </li>
</ul>