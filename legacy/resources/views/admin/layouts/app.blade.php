<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') — {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --admin-sidebar-bg: #0f1117;
            --admin-sidebar-surface: #151922;
            --admin-sidebar-border: rgba(255, 255, 255, 0.08);
            --admin-accent: #3d7eff;
            --admin-accent-hover: #5b91ff;
            --admin-accent-soft: rgba(61, 126, 255, 0.14);
            --admin-body-bg: #eef1f6;
            --admin-card-bg: #ffffff;
            --admin-card-border: #e7ebf2;
            --admin-heading: #0f172a;
            --admin-muted: #64748b;
            --admin-sidebar-width: 268px;
        }

        body.admin-app {
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
            background: var(--admin-body-bg);
            color: var(--admin-heading);
            min-height: 100vh;
            overflow: hidden;
        }

        .admin-sidebar {
            width: var(--admin-sidebar-width);
            min-height: 100vh;
            background: linear-gradient(180deg, var(--admin-sidebar-bg) 0%, #12151d 100%);
            border-right: 1px solid var(--admin-sidebar-border);
            position: sticky;
            top: 0;
            height: 100vh;
            overflow: hidden;
        }

        .admin-sidebar-logo-wrap {
            width: 2.5rem;
            height: 2.5rem;
            padding: 2px;
            background: rgba(0, 0, 0, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 0 0 3px rgba(61, 126, 255, 0.22);
        }

        .admin-sidebar-logo {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 0.25rem;
        }

        .admin-sidebar-nav .nav-link {
            color: rgba(255, 255, 255, 0.72);
            font-weight: 500;
            font-size: 0.9rem;
            padding: 0.55rem 0.85rem;
            border: 1px solid transparent;
        }

        .admin-sidebar-nav .nav-link:hover:not(.disabled-link) {
            color: #fff;
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(255, 255, 255, 0.06);
        }

        .admin-sidebar-nav .nav-link.active {
            color: #fff;
            background: var(--admin-accent-soft);
            border-color: rgba(61, 126, 255, 0.35);
            box-shadow: inset 0 0 0 1px rgba(61, 126, 255, 0.2);
        }

        .admin-sidebar-nav .nav-link .nav-icon {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .admin-sidebar-nav .disabled-link {
            pointer-events: none;
            opacity: 0.55;
        }

        .admin-main {
            min-width: 0;
            height: 100vh;
            overflow-y: auto;
        }

        .admin-topbar {
            min-height: 4rem;
            background: var(--admin-card-bg);
            box-shadow: 0 1px 0 var(--admin-card-border);
        }

        .admin-page-heading {
            color: var(--admin-heading);
        }

        .admin-user-name {
            color: var(--admin-heading);
        }

        .admin-content {
            background: var(--admin-body-bg);
        }

        .admin-stat-card {
            background: var(--admin-card-bg);
            border: 1px solid var(--admin-card-border);
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .admin-stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 36px rgba(15, 23, 42, 0.08);
        }

        .admin-stat-icon {
            width: 3rem;
            height: 3rem;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
        }

        .btn-icon {
            width: 2.5rem;
            height: 2.5rem;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .offcanvas.admin-offcanvas {
            background: linear-gradient(180deg, var(--admin-sidebar-bg) 0%, #12151d 100%);
            color: #fff;
            width: min(300px, 88vw);
        }

        .tracking-wide {
            letter-spacing: 0.06em;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 52px;
            height: 28px;
            vertical-align: middle;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #cbd5e1;
            transition: 0.2s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 22px;
            width: 22px;
            left: 3px;
            bottom: 3px;
            background-color: #fff;
            transition: 0.2s;
        }

        .switch input:checked + .slider {
            background-color: var(--admin-accent);
        }

        .switch input:focus + .slider {
            box-shadow: 0 0 0 0.2rem rgba(61, 126, 255, 0.25);
        }

        .switch input:checked + .slider:before {
            transform: translateX(24px);
        }

        .slider.round {
            border-radius: 999px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    @stack('styles')
</head>
<body class="admin-app">
    <div class="d-flex min-vh-100">
        <aside class="admin-sidebar d-none d-lg-flex flex-column flex-shrink-0">
            @include('admin.partials.sidebar')
        </aside>

        <div class="admin-main flex-grow-1 d-flex flex-column min-vh-100 min-w-0">
            @include('admin.partials.navbar')
            @if ($errors->any())
                <div class="alert alert-danger m-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <main class="admin-content flex-grow-1 p-3 p-lg-4">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show shadow-sm border-0" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show shadow-sm border-0" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>

    <div class="offcanvas offcanvas-start admin-offcanvas d-lg-none text-bg-dark" tabindex="-1" id="adminSidebarOffcanvas" aria-labelledby="adminSidebarOffcanvasLabel">
        <div class="offcanvas-header border-bottom border-white border-opacity-10">
            <h2 class="offcanvas-title h6 mb-0" id="adminSidebarOffcanvasLabel">Menu</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0 pt-2">
            @include('admin.partials.sidebar-nav')
        </div>
    </div>

    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <p class="mb-0 text-muted" id="confirmDeleteModalMessage">Are you sure you want to delete this item?</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteModalConfirm">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        (() => {
            const modalEl = document.getElementById('confirmDeleteModal');
            if (!modalEl) return;

            const modal = new bootstrap.Modal(modalEl);
            const titleEl = document.getElementById('confirmDeleteModalLabel');
            const messageEl = document.getElementById('confirmDeleteModalMessage');
            const confirmBtn = document.getElementById('confirmDeleteModalConfirm');

            let pendingForm = null;

            document.addEventListener('submit', (e) => {
                const form = e.target;
                if (!(form instanceof HTMLFormElement)) return;
                if (!form.classList.contains('js-confirm-delete')) return;

                const submitter = e.submitter;
                if (submitter instanceof HTMLButtonElement && submitter.disabled) return;

                e.preventDefault();
                pendingForm = form;

                const t = form.getAttribute('data-confirm-title') || 'Confirm delete';
                const m = form.getAttribute('data-confirm-message') || 'Are you sure you want to delete this item?';
                if (titleEl) titleEl.textContent = t;
                if (messageEl) messageEl.textContent = m;

                modal.show();
            });

            confirmBtn?.addEventListener('click', () => {
                if (!pendingForm) return;
                const form = pendingForm;
                pendingForm = null;
                modal.hide();
                form.submit();
            });
        })();
    </script>
    @stack('scripts')
</body>
</html>
