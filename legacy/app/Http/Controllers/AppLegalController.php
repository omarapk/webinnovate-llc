<?php

namespace App\Http\Controllers;

use App\Support\AppCatalog;
use Illuminate\View\View;

/**
 * Shared legal pages (privacy / terms / refund) for WEBI apps.
 * LeadForm keeps its original standalone legal views; the other apps
 * are rendered from the shared templates in resources/views/apps/legal.
 */
class AppLegalController extends Controller
{
    public function privacy(string $app): View
    {
        return $this->render($app, 'apps.legal.privacy');
    }

    public function terms(string $app): View
    {
        return $this->render($app, 'apps.legal.terms');
    }

    public function refund(string $app): View
    {
        return $this->render($app, 'apps.legal.refund');
    }

    protected function render(string $slug, string $view): View
    {
        $app = AppCatalog::find($slug);
        abort_if($app === null, 404);

        return view($view, compact('app'));
    }
}
