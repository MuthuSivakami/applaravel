<div style="max-width: 800px; margin: 20px auto; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 20px;">
    
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="color: #333; margin: 0;">My Expenses</h2>
        <a href="{{ route('expenses.create') }}" style="background-color: #4f46e5; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: 0.3s;">
            + Add Expense
        </a>
    </div>

    <div style="background: white; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); overflow: hidden; border: 1px solid #e5e7eb;">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead style="background-color: #f9fafb; border-bottom: 1px solid #e5e7eb;">
                <tr>
                    <th style="padding: 15px; color: #6b7280; font-size: 0.85rem; text-transform: uppercase;">Date</th>
                    <th style="padding: 15px; color: #6b7280; font-size: 0.85rem; text-transform: uppercase;">Type</th>

                    <th style="padding: 15px; color: #6b7280; font-size: 0.85rem; text-transform: uppercase;">Title</th>
                    <th style="padding: 15px; color: #6b7280; font-size: 0.85rem; text-transform: uppercase; text-align: right;">Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expenses as $expense)
                <tr style="border-bottom: 1px solid #f3f4f6; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#f9fafb'" onmouseout="this.style.backgroundColor='transparent'">
                    <td style="padding: 15px; color: #4b5563; font-size: 0.95rem;">
                        {{ \Carbon\Carbon::parse($expense->expense_date)->format('M d, Y') }}
                    </td>
                    <td style="padding: 15px; font-weight: 500; color: #111827;">
                    {{ $expense->type == 1 ? 'Income' : 'Expense' }}
                    </td>
                    <td style="padding: 15px; font-weight: 500; color: #111827;">
                        {{ $expense->title }}
                    </td>
                    <td style="padding: 15px; text-align: right; font-weight: bold; color: #059669;">
                        ${{ number_format($expense->amount, 2) }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        @if($expenses->isEmpty())
            <div style="padding: 40px; text-align: center; color: #9ca3af;">
                No expenses found. Click "Add Expense" to get started!
            </div>
        @endif
        
    </div>
</div>