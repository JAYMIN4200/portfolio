<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $query = Faq::query();

        if ($search = $request->input('search')) {
            $query->where('question', 'like', "%{$search}%");
        }

        $faqs = $query->ordered()->paginate(10);

        if ($request->ajax()) {
            return view('admin.faqs.partials.list', compact('faqs'))->render();
        }

        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(FaqRequest $request)
    {
        $data = $request->validated();
        $data['is_visible'] = $request->boolean('is_visible');

        Faq::create($data);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ added successfully.');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(FaqRequest $request, Faq $faq)
    {
        $data = $request->validated();
        $data['is_visible'] = $request->boolean('is_visible');

        $faq->update($data);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
