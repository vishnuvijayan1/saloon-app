<!DOCTYPE html>
<html>
<head>
    <title>Expenses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-striped tbody tr:nth-child(odd) {
        background-color: #c9bebe;
    }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Expenses Report</h1>
    @if($fromDate && $toDate)
    <div style="text-align: center; margin-bottom: 20px;"> {{ $fromDate }} - {{ $toDate }} </div>
    @endif
    <table class="table-striped">
        <thead>
            <tr>
                <th>Sl.no</th>
                <th>{{ __('labels.expense_name') }}</th>
                <th>{{ __('labels.expense_type') }}</th>
                <th>{{ __('labels.expense_date') }}</th>
                <th>{{ __('labels.expense_amount') }}</th>
                <th>{{ __('labels.staff_name') }}</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1;
                $expense_total = 0;

            @endphp
            @foreach ($expenses as $expense)
            <tr>
                <td>{{ $counter++ }}</td>
                <td>{{ $expense->expense }}</td>
                <td>{{ $expense->expenseType->type }}</td>
                <td>{{ $expense->date }}</td>
                <td>{{ $expense->amount }}</td>
                <td>{{ $expense->staff->name ?? '' }}</td>
            </tr>
            @php
                $expense_total += $expense->amount;
            @endphp
            @endforeach
            @if($expense_total > 0)
            <tr>
                <td></td>
                <td></td>
                <td colspan="2" style="text-align: right"><b>Total Expense Amount</b></td>
                <td>{{ number_format($expense_total,3,'.','') }}</td>
                <td></td>
            </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
