<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::latest()->get();
        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function save(Request $request)
    {
        Expense::create($request->all());
        return redirect()->route('expenses.index');
    }
}
