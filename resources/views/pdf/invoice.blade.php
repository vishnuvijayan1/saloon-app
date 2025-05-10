<!DOCTYPE html>
<html>
<head>
    <title>Invoices</title>
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
    <h1>Invoices</h1>
    <table class="table-striped">
        <thead>
            <tr>
                <th>Sl.no</th>
                <th>Invoice Number</th>
                <th>Date</th>
                <th>Customer Name</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1;
                $invoice_total = 0;

            @endphp
            @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $counter++ }}</td>
                <td>{{ $invoice->invoice_no }}</td>
                <td>{{ $invoice->invoice_date }}</td>
                <td>{{ $invoice->client->name }}</td>
                <td>{{ $invoice->total_amount }}</td>
            </tr>
            @php
                $invoice_total += $invoice->total_amount;
            @endphp
            @endforeach
            @if($invoice_total > 0)
            <tr>
                <td></td>
                <td></td>
                <td colspan="2"style="text-align: right"><b>Total Invoice Amount</b></td>
                <td>{{ number_format($invoice_total,3,".","") }}</td>
            </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
