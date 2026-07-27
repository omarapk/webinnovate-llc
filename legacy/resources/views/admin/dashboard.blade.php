@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page_kicker', 'Overview')
@section('page_title', 'Dashboard')

@section('content')
    <div class="mb-4">
        <h2 class="h4 fw-semibold mb-1">Welcome Boss!</h2>
        <p class="text-muted mb-0">Here is a snapshot of your content library.</p>
    </div>

    <div class="row g-3 g-xl-4">
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card p-4 h-100">
                <div class="d-flex align-items-start justify-content-between gap-3">
                    <div>
                        <div class="text-muted small fw-semibold text-uppercase mb-1" style="letter-spacing: 0.04em;">Total blog posts</div>
                        <div class="display-6 fw-bold lh-1" style="font-size: 2rem;">{{ number_format($totalBlogPosts) }}</div>
                    </div>
                    <div class="admin-stat-icon text-primary" style="background: var(--admin-accent-soft); color: var(--admin-accent);">
                        <i class="bi bi-journal-richtext"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card p-4 h-100">
                <div class="d-flex align-items-start justify-content-between gap-3">
                    <div>
                        <div class="text-muted small fw-semibold text-uppercase mb-1" style="letter-spacing: 0.04em;">Total doc articles</div>
                        <div class="display-6 fw-bold lh-1" style="font-size: 2rem;">{{ number_format($totalDocArticles) }}</div>
                    </div>
                    <div class="admin-stat-icon" style="background: rgba(124, 92, 255, 0.14); color: #7c5cff;">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card p-4 h-100">
                <div class="d-flex align-items-start justify-content-between gap-3">
                    <div>
                        <div class="text-muted small fw-semibold text-uppercase mb-1" style="letter-spacing: 0.04em;">Published posts</div>
                        <div class="display-6 fw-bold lh-1" style="font-size: 2rem;">{{ number_format($publishedBlogPosts) }}</div>
                    </div>
                    <div class="admin-stat-icon" style="background: rgba(16, 185, 129, 0.15); color: #10b981;">
                        <i class="bi bi-check-circle"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card p-4 h-100">
                <div class="d-flex align-items-start justify-content-between gap-3">
                    <div>
                        <div class="text-muted small fw-semibold text-uppercase mb-1" style="letter-spacing: 0.04em;">Draft posts</div>
                        <div class="display-6 fw-bold lh-1" style="font-size: 2rem;">{{ number_format($draftBlogPosts) }}</div>
                    </div>
                    <div class="admin-stat-icon" style="background: rgba(245, 158, 11, 0.16); color: #d97706;">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card p-4 h-100">
                <div class="d-flex align-items-start justify-content-between gap-3">
                    <div>
                        <div class="text-muted small fw-semibold text-uppercase mb-1" style="letter-spacing: 0.04em;">Doc categories</div>
                        <div class="display-6 fw-bold lh-1" style="font-size: 2rem;">{{ number_format($totalDocCategories) }}</div>
                    </div>
                    <div class="admin-stat-icon" style="background: rgba(99, 102, 241, 0.14); color: #6366f1;">
                        <i class="bi bi-folder2"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card p-4 h-100">
                <div class="d-flex align-items-start justify-content-between gap-3">
                    <div>
                        <div class="text-muted small fw-semibold text-uppercase mb-1" style="letter-spacing: 0.04em;">Published doc articles</div>
                        <div class="display-6 fw-bold lh-1" style="font-size: 2rem;">{{ number_format($publishedDocArticles) }}</div>
                    </div>
                    <div class="admin-stat-icon" style="background: rgba(16, 185, 129, 0.15); color: #059669;">
                        <i class="bi bi-file-earmark-check"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card p-4 h-100">
                <div class="d-flex align-items-start justify-content-between gap-3">
                    <div>
                        <div class="text-muted small fw-semibold text-uppercase mb-1" style="letter-spacing: 0.04em;">Draft doc articles</div>
                        <div class="display-6 fw-bold lh-1" style="font-size: 2rem;">{{ number_format($draftDocArticles) }}</div>
                    </div>
                    <div class="admin-stat-icon" style="background: rgba(251, 146, 60, 0.16); color: #ea580c;">
                        <i class="bi bi-file-earmark-diff"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
