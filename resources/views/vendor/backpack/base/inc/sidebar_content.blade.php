<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i>
        <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i>
        <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>


<!-- Athletes & Entraîneurs -->
<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Athlètes & Entraîneurs</span> <i
                class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='{{ backpack_url('athlete') }}'><i class='fa fa-user'></i> <span>Athlètes</span></a></li>
        <li><a href='{{ backpack_url('trainer') }}'><i class='fa fa-user'></i> <span>Entraîneurs</span></a></li>
        <li><a href='{{ backpack_url('discipline') }}'><i class='fa fa-list'></i> <span>Disciplines</span></a></li>
        <li><a href='{{ backpack_url('division') }}'><i class='fa fa-list'></i> <span>Divisions</span></a></li>
        <li><a href='{{ backpack_url('trophie') }}'><i class='fa fa-list'></i> <span>Trophées</span></a></li>
    </ul>
</li>

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
<li><a href='{{ backpack_url('internship') }}'><i class='fa fa-list'></i> <span>Stages</span></a></li>


<li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i>
        <span>Pages</span></a></li>
