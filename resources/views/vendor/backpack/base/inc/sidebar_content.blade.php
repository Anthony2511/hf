<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i>
        <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
@if(backpack_user()->hasRole('administrateur'))
    <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i>
            <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
@endif


<!-- Athletes & Entraîneurs -->
<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Athlètes & Entraîneurs</span> <i
                class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='{{ backpack_url('athlete') }}'><i class='fa fa-user'></i> <span>Athlètes</span></a></li>
        @if(backpack_user()->hasRole('administrateur') || backpack_user()->hasRole('entraineur'))
            <li><a href='{{ backpack_url('trainer') }}'><i class='fa fa-user'></i> <span>Entraîneurs</span></a></li>
            <li><a href='{{ backpack_url('discipline') }}'><i class='fa fa-list'></i> <span>Disciplines</span></a></li>
            <li><a href='{{ backpack_url('division') }}'><i class='fa fa-list'></i> <span>Divisions</span></a></li>
        @endif
        <li><a href='{{ backpack_url('trophie') }}'><i class='fa fa-list'></i> <span>Trophées</span></a></li>
    </ul>
</li>

@if(backpack_user()->hasRole('administrateur') || backpack_user()->hasRole('entraineur'))
    <!-- Agenda -->
    <li class="treeview">
        <a href="#"><i class="fa fa-calendar"></i> <span>Entraînements</span>
            <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href='{{ backpack_url('training') }}'><i class='fa fa-list'></i> <span>Entraînements</span></a></li>
            <li><a href='{{ backpack_url('place') }}'><i class='fa fa-map-marker'></i> <span>Lieux</span></a></li>
            <li><a href='{{ backpack_url('type') }}'><i class='fa fa-list'></i> <span>Types</span></a></li>
        </ul>
    </li>
@endif

@if(backpack_user()->hasRole('administrateur'))
    <!-- Actualités -->
    <li class="treeview">
        <a href="#"><i class="fa fa-calendar"></i> <span>Actualités</span>
            <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href='{{ backpack_url('article') }}'><i class='fa fa-list'></i> <span>Actualités</span></a></li>
            <li><a href='{{ backpack_url('comment') }}'><i class='fa fa-list'></i> <span>Commentaires</span></a></li>
            <li><a href='{{ backpack_url('author') }}'><i class='fa fa-calendar'></i> <span>Auteurs</span></a></li>
        </ul>
    </li>
@endif

@if(backpack_user()->hasRole('administrateur'))
    <!-- Équipements -->
    <li class="treeview">
        <a href="#"><i class="fa fa-calendar"></i> <span>Équipements</span>
            <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href='{{ backpack_url('amenitie') }}'><i class='fa fa-list'></i> <span>Équipements</span></a></li>
            <li><a href='{{ backpack_url('size') }}'><i class='fa fa-calendar'></i> <span>Tailles</span></a></li>
        </ul>
    </li>
@endif

@if(backpack_user()->hasRole('administrateur') || backpack_user()->hasRole('entraineur'))
    <li><a href='{{ backpack_url('internship') }}'><i class='fa fa-list'></i> <span>Stages</span></a></li>
@endif

@if(backpack_user()->hasRole('administrateur'))
    <li><a href='{{ backpack_url('competition') }}'><i class='fa fa-calendar'></i> <span>Compétitions</span></a></li>

    <li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i>
            <span>Pages</span></a></li>

    <!-- Users, Roles Permissions -->
    <li class="treeview">
        <a href="#"><i class="fa fa-group"></i> <span>Utilisateurs</span> <i
                    class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Utilisateurs</span></a></li>
            <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Rôles</span></a></li>
            <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
        </ul>
    </li>
@endif