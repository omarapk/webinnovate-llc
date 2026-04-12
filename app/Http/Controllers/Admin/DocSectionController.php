<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocSectionController extends Controller
{
    public function index(): View
    {
        $sections = DocSection::query()
            ->withCount('categories')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.sections.index', compact('sections'));
    }

    public function create(): View
    {
        $section = new DocSection([
            'sort_order' => 0,
            'is_visible' => true,
        ]);

        return view('admin.docs.sections.create', compact('section'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);
        $validated['is_visible'] = $request->boolean('is_visible');

        DocSection::create($validated);

        return redirect()->route('admin.docs.sections.index')
            ->with('success', 'Section created successfully.');
    }

    public function edit(DocSection $section): View
    {
        return view('admin.docs.sections.edit', compact('section'));
    }

    public function update(Request $request, DocSection $section): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);
        $validated['is_visible'] = $request->boolean('is_visible');

        $section->update($validated);

        return redirect()->route('admin.docs.sections.index')
            ->with('success', 'Section updated successfully.');
    }

    public function destroy(DocSection $section): RedirectResponse
    {
        if ($section->categories()->exists()) {
            return redirect()->route('admin.docs.sections.index')
                ->with('error', 'Cannot delete this section because it has one or more categories.');
        }

        $section->delete();

        return redirect()->route('admin.docs.sections.index')
            ->with('success', 'Section deleted successfully.');
    }
}
