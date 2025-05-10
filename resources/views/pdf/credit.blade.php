<!DOCTYPE html>
<html>
<head>
    <title>Credit Report</title>
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
    <h1>Credit Report</h1>
    <table class="table-striped">
        <thead>
            <tr>
                <th>Sl.no</th>
                <th>Customer Name</th>
                <th>Sales Manager</th>
                <th>Total Amount</th>
                <th>Paid Amount</th>
                <th>Due Amount</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1;
                $total_amount = 0;
                $total_amount_paid = 0;
                $total_balance = 0;
            @endphp
            @foreach ($credits as $credit)
            <tr>
                <td>{{ $counter++ }}</td>
                <td>{{ $credit->client->name }}</td>
                <td>{{ $credit->staff->name }}</td>
                <td>{{ $credit->total_amount }}</td>
                <td>{{ $credit->amount_paid }}</td>
                <td>{{ $credit->total_amount - $credit->amount_paid }}</td>
            </tr>
            @php
                $total_amount += $credit->total_amount;
                $total_amount_paid += $credit->amount_paid;
                $total_balance += ($credit->total_amount - $credit->amount_paid);
            @endphp
            @endforeach
            @if($total_amount > 0)
            <tr>
                <td></td>
                <td colspan="2" style="text-align: right"><b>Totals</b> </td>
                <td>{{ number_format($total_amount,3,'.','') }}</td>
                <td>{{ number_format($total_amount_paid,3,'.','') }}</td>
                <td>{{ number_format($total_balance,3,'.','') }}</td>
            </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
