<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocCategory;
use App\Models\DocSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocCategoryController extends Controller
{
    public function index(): View
    {
        $categories = DocCategory::query()
            ->with('section')
            ->withCount('articles')
            ->orderBy('section_id')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.categories.index', compact('categories'));
    }

    public function create(): View
    {
        $category = new DocCategory([
            'sort_order' => 0,
            'is_visible' => true,
        ]);
        $sections = DocSection::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.categories.create', compact('category', 'sections'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'section_id' => ['required', 'exists:doc_sections,id'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);
        $validated['is_visible'] = $request->boolean('is_visible');

        DocCategory::create($validated);

        return redirect()->route('admin.docs.categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function edit(DocCategory $category): View
    {
        $sections = DocSection::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.docs.categories.edit', compact('category', 'sections'));
    }

    public function update(Request $request, DocCategory $category): RedirectResponse
    {
        $validated = $request->validate([
            'section_id' => ['required', 'exists:doc_sections,id'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);
        $validated['is_visible'] = $request->boolean('is_visible');

        $category->update($validated);

        return redirect()->route('admin.docs.categories.index')
            ->with('success', 'Category updated successfully.');
    }

    public function destroy(DocCategory $category): RedirectResponse
    {
        if ($category->articles()->exists()) {
            return redirect()->route('admin.docs.categories.index')
                ->with('error', 'Cannot delete this category because it has one or more articles.');
        }

        $category->delete();

        return redirect()->route('admin.docs.categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
