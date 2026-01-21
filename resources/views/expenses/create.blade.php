<div style="max-width: 500px; margin: 40px auto; font-family: 'Segoe UI', sans-serif; background: #ffffff; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: 1px solid #f0f0f0;">
    
    <h2 style="margin-top: 0; margin-bottom: 20px; color: #1a1a1a; font-size: 1.5rem; text-align: center;">Add New Expense</h2>

    <form method="POST" action="{{ route('expenses.save') }}">
        @csrf

        <div style="margin-bottom: 18px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #4b5563; font-size: 0.9rem;">Date</label>
            <input type="date" name="expense_date" required style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 1rem; outline: none; transition: border-color 0.2s;" onfocus="this.style.borderColor='#4f46e5'">
        </div>

        <div style="margin-bottom: 18px;">
    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #4b5563; font-size: 0.9rem;">
        Type
    </label>

    <select name="type" required
        style="width: 100%; padding: 12px; border: 1px solid #d1d5db;
               border-radius: 8px; font-size: 1rem; outline: none; background: #fff;"
        onfocus="this.style.borderColor='#4f46e5'">

        <option value="">-- Select --</option>
        <option value="1">Income</option>
        <option value="2">Expense</option>
    </select>
</div>


        <div style="margin-bottom: 18px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #4b5563; font-size: 0.9rem;">Title / Description</label>
            <input type="text" name="title" placeholder="e.g. Weekly Groceries" required style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 1rem; outline: none;" onfocus="this.style.borderColor='#4f46e5'">
        </div>

        <div style="margin-bottom: 18px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #4b5563; font-size: 0.9rem;">Amount</label>
            <div style="position: relative;">
                <span style="position: absolute; left: 12px; top: 12px; color: #9ca3af;">$</span>
                <input type="number" step="0.01" name="amount" placeholder="0.00" required style="width: 100%; padding: 12px 12px 12px 30px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 1rem; outline: none;" onfocus="this.style.borderColor='#4f46e5'">
            </div>
        </div>

        <div style="margin-bottom: 25px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #4b5563; font-size: 0.9rem;">Additional Notes (Optional)</label>
            <textarea name="note" rows="3" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 1rem; outline: none; resize: vertical;" onfocus="this.style.borderColor='#4f46e5'"></textarea>
        </div>

        <button type="submit" style="width: 100%; background-color: #4f46e5; color: white; border: none; padding: 14px; border-radius: 8px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#4338ca'" onmouseout="this.style.backgroundColor='#4f46e5'">
            Save Expense
        </button>

        <a href="{{ route('expenses.index') }}" style="display: block; text-align: center; margin-top: 15px; color: #6b7280; text-decoration: none; font-size: 0.9rem;">Cancel and Go Back</a>
    </form>
</div>