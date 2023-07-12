<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('projects.index') }}" class="nav-link {{ Request::is('projects') ? 'active' : '' }}">

        <i class="nav-icon fas fa-folder"></i>

        <p>Projects</p>
    </a>
</li>


@access('read','ComplexityItem')
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas  fa-cogs"></i>
        <p>
            Configurations
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('messagesMails.index') }}"
                class="nav-link {{ Request::is('messagesMails') ? 'active' : '' }}">
                <i class="nav-icon fas fa-envelope"></i>
                <p>Mails</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>Listes des Utilisateurs</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('jalons.index') }}" class="nav-link {{ Request::is('jalons') ? 'active' : '' }}">
                <i class="nav-icon fas fa-history"></i>
                <p>Jalon</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('directions.index') }}"
                class="nav-link {{ Request::is('directions') ? 'active' : '' }}">
                <i class="nav-icon fas fa-address-book"></i>
                <p>Directions</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('optionsttm.index') }}"
                class="nav-link {{ Request::is('optionsttm') ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>Option Ttm</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles') ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>Roles</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('writelist.index') }}" class="nav-link {{ Request::is('writes') ? 'active' : '' }}">
                <i class="nav-icon fas fa-history"></i>
                <p>Write list</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('projectType.index') }}"
                class="nav-link {{ Request::is('projectType') ? 'active' : '' }}">
                <i class="nav-icon fas fa-square"></i>
                <p>Types de projet</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('ComplexityItem.index') }}"
                class="nav-link {{ Request::is('ComplexityItem') ? 'active' : '' }}">
                <i class="nav-icon fas fa-square"></i>
                <p>Points de complexités</p>
            </a>
        </li>
    </ul>
</li>
@endaccess

