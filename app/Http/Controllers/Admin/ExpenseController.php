<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpenseRequest;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(Request $request)
    {
        $query = Expense::query();

        if ($search = $request->input('search')) {
            $query->where('title', 'like', "%{$search}%");
        }

        $query->category($request->input('category'));

        $total = (clone $query)->sum('amount');
        $expenses = $query->latest('expense_date')->paginate(10);

        if ($request->ajax()) {
            return view('admin.expenses.partials.list', compact('expenses', 'total'))->render();
        }

        return view('admin.expenses.index', compact('expenses', 'total'));
    }

    public function create()
    {
        return view('admin.expenses.create');
    }

    public function store(ExpenseRequest $request)
    {
        Expense::create($request->validated());

        return redirect()->route('admin.expenses.index')->with('success', 'Expense added successfully.');
    }

    public function edit(Expense $expense)
    {
        return view('admin.expenses.edit', compact('expense'));
    }

    public function update(ExpenseRequest $request, Expense $expense)
    {
        $expense->update($request->validated());

        return redirect()->route('admin.expenses.index')->with('success', 'Expense updated successfully.');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('admin.expenses.index')->with('success', 'Expense deleted successfully.');
    }
}