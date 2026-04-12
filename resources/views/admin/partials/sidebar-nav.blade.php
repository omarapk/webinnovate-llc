<ul class="nav flex-column gap-1 admin-sidebar-nav px-3 pb-4">
    <li class="nav-item">
        <a href="{{ route('admin.dashboard') }}" class="nav-link d-flex align-items-center gap-2 rounded-3 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2 nav-icon"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.blog.posts.index') }}" class="nav-link d-flex align-items-center gap-2 rounded-3 {{ request()->routeIs('admin.blog.posts.*') ? 'active' : '' }}">
            <i class="bi bi-newspaper nav-icon"></i>
            <span>Blog Posts</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.blog.categories.index') }}" class="nav-link d-flex align-items-center gap-2 rounded-3 {{ request()->routeIs('admin.blog.categories.*') ? 'active' : '' }}">
            <i class="bi bi-bookmarks nav-icon"></i>
            <span>Blog Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.docs.sections.index') }}" class="nav-link d-flex align-items-center gap-2 rounded-3 {{ request()->routeIs('admin.docs.sections.*') ? 'active' : '' }}">
            <i class="bi bi-layers nav-icon"></i>
            <span>Doc Sections</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.docs.categories.index') }}" class="nav-link d-flex align-items-center gap-2 rounded-3 {{ request()->routeIs('admin.docs.categories.*') ? 'active' : '' }}">
            <i class="bi bi-folder2 nav-icon"></i>
            <span>Doc Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.docs.articles.index') }}" class="nav-link d-flex align-items-center gap-2 rounded-3 {{ request()->routeIs('admin.docs.articles.*') ? 'active' : '' }}">
            <i class="bi bi-file-earmark-text nav-icon"></i>
            <span>Doc Articles</span>
        </a>
    </li>
</ul>
