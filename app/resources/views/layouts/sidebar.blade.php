<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('membre.index') }}" class="brand-link">
        <span class="brand-text font-weight-light">Gestion des membres</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>