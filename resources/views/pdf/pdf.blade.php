<!DOCTYPE html>
<html>

<head>
    <title>Invoices</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 20px;
            font-size: 14px;
            padding-bottom: 30px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            /* background-color: #f2f2f2; */
        }


        .head {
            display: inline;
            margin: 30px 0 15px 0;
        }

        p {
            margin: 0;
            font-size: 12px;
        }

        .border {
            border-bottom: 5px solid #1d3261;
            padding: 10px 0;
            height: 90px;
            margin-bottom: 10px;
        }

        .bottom__nav {
            background-color: #1d3261;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px 20px;
        }

        .bottom__nav p {
            margin: 0;
            padding: 0;
            color: #fff;
            font-size: 14px;
        }

    </style>
</head>

<body>
    <div class="border">
        <div class="head" style="text-align: left; margin-bottom: 10px;" class="">
            <div style="text-align: center; display: inline-block; ">
                <h1 style="margin-bottom: 5px; font-size: 36px; text-align: left; color: #1d3261;">Mazoon Alrabi</h1>
                <h6 style="font-size: 18px; margin:0px; font-weight:300;">Customs Clearence <br> Transportation Services
                </h6>
            </div>
            <div class="" style="margin-right: 10px; float: right;">
                <img src="{{ asset('assets/images/logo-sm.png') }}" width="90" alt="">
            </div>
        </div>
    </div>

    <h4 style="text-align: center; font-size: 24px; padding-bottom: 10px; text-transform: uppercase;">Invoice</h4>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <th rowspan="3" colspan="3" style="font-size: 14px;">
                    Mazoon Al Rabi Trading LOC0073 <br>
                    Office # 12, Noor Building,<br>
                    Po 225, PC 111, Ghala Ind Est, Muscat<br>
                    Tel : +968 91166672
                </th>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Invoice No</div>
                    <p><b>{{ isset($invoices->invoice_no) ? $invoices->invoice_no : '' }}</b></p>
                </td>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Dated</div>
                    <p><b>{{ isset($invoices->invoice_date) ? $invoices->invoice_date : '' }}</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Terms of Payment :</div>
                    <p>
                        @if (isset($invoices->is_credit_payment))
                            @if ($invoices->is_credit_payment == 1)
                                <b>Credit</b>
                            @else
                                <b>Cash</b>
                            @endif
                        @endif
                    </p>
                </td>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Comod :</div>
                    <p><b>General Cargo</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Weight :</div>
                    <p><b>{{ isset($invoices->weight) ? $invoices->weight : '' }}</b></p>
                </td>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Vehicle :</div>
                    <p><b>{{ isset($invoices->truck_number) ? $invoices->truck_number : '' }}</b></p>
                </td>
            </tr>
            <tr>
                <th colspan="3" rowspan="4" style="font-size: 14px;">
                    BUYER
                    <br>
                    {{ isset($invoices->client) ? $invoices->client->name : '' }}
                    <br>
                    {{ isset($invoices->client) ? $invoices->client->address : '' }}
                </th>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Volume</div>
                    <p><b>{{ isset($invoices->volume) ? $invoices->volume : '' }}</b></p>
                </td>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Pkgs</div>
                    <p><b>{{ isset($invoices->pkgs) ? $invoices->pkgs : '' }}</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">MB/L</div>
                    <p><b>{{ isset($invoices->mbl) ? $invoices->mbl : '' }}</b></p>
                </td>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Reference // Job No</div>
                    <p><b>{{ isset($invoices->job_no) ? $invoices->job_no : '' }}</b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Origin</div>
                    <p><b>{{ isset($invoices->origin) ? $invoices->origin : '' }}</b></p>
                </td>
                <td>
                    <div style="font-size: 14px; margin-bottom: 10px;">Destination</div>
                    <p><b>{{ isset($invoices->destination) ? $invoices->destination : '' }}</b></p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Terms of Delivery</p>
                    <div><b>Wajajah Land Border(ALSARRAY Global LLC)</b></div>
                </td>
            </tr>
        </tbody>
    </table>

    <table style="width: 100%; margin-top: 10px;">
        <thead>
            <tr>
                <th>SI</th>
                <th>Perticulers</th>
                <th>Price</th>
                <th>Unit</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices->items as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->particular->particular ?? '' }}</td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->total_amount }}</td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td style="text-align: right; font-size: 16px;"><b>Total (in OMR)</b> </td>
                <td></td>
                <td style="font-size: 16px;"> <b>{{ $invoices->total_amount }}</b> </td>
            </tr>
        </tbody>
        @php
        $totalAmountInWords = strtoupper(convertNumber($invoices->total_amount));

        @endphp

        <tr style="">
            <th colspan="2" rowspan="2">
                <div style="padding-bottom: 20px;">
                    <div style="font-size: 12px; font-weight: 400;">Amount Chargeable (in words) </div>
                    <div><b>{{ $totalAmountInWords }}</b></div>
                    <div style="font-size: 12px; font-weight: 400;">Rremarks</div>
                </div>
                <div>
                    <p style="font-size: 12px; font-weight: 400; margin: 0;"> Bank A/c Details</p>
                    <p>Account Name: MAZOON AL RABI TRADING <br>
                        Account Number: 0387065255440017 <br>
                        Bank: Bank Muscat</p>
                </div>
            </th>
            <td colspan="3">E &O E</td>
        </tr>
        <tr>
            <td colspan="3">E &O E</td>
        </tr>
    </table>

    <p style="text-align: center; padding: 10px 0;">This is computer generated no need signature</p>

    <div class="bottom__nav">
        <p style="display: inline-block;">CR : 100087,P,O.BOX 16,PC:512, OMAN </p>
        <p style="float: right;">+968 9656947</p>
    </div>
</body>

</html>
