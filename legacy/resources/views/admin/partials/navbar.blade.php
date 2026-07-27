<header class="admin-topbar border-bottom d-flex align-items-center justify-content-between px-3 px-lg-4 flex-shrink-0">
    <div class="d-flex align-items-center gap-2 gap-lg-3 min-w-0">
        <button class="btn btn-light btn-icon d-lg-none border" type="button" data-bs-toggle="offcanvas" data-bs-target="#adminSidebarOffcanvas" aria-controls="adminSidebarOffcanvas" aria-label="Open menu">
            <i class="bi bi-list fs-5"></i>
        </button>
        <div class="min-w-0">
            <div class="text-uppercase text-muted fw-semibold small d-none d-sm-block" style="font-size: 0.65rem; letter-spacing: 0.08em;">@yield('page_kicker', 'Workspace')</div>
            <h1 class="h5 mb-0 text-truncate fw-semibold admin-page-heading">@yield('page_title', 'Dashboard')</h1>
        </div>
    </div>
    <div class="d-flex align-items-center gap-2 gap-md-3 flex-shrink-0">
        <div class="text-end d-none d-sm-block">
            <div class="small fw-semibold admin-user-name">{{ auth()->user()->name }}</div>
            <div class="small text-muted text-truncate" style="max-width: 10rem;">{{ auth()->user()->email }}</div>
        </div>
        <form method="post" action="{{ route('admin.logout') }}" class="m-0">
            @csrf
            <button type="submit" class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-1">
                <i class="bi bi-box-arrow-right"></i>
                <span class="d-none d-md-inline">Log out</span>
            </button>
        </form>
    </div>
</header>
