<!DOCTYPE html>
<html>

<head>
    <title>Invoices</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 20px;
            font-size: 13px;
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
            padding: 3px;
            text-align: left;

        }

        /* th {
            background-color: #f2f2f2;
        } */


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
            padding: 5px 0;
            height: 12px;
            margin-bottom: 10px;
        }

        .border_2 {
            border: 2px solid #000;
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

        .border_2 {
            padding: 5px;
        }

        .table__custome td {
            border: none;
            padding: 3px;
        }

        .custome__table th {
            border: 2px solid #000;
        }

        .custome__table td {
            border: 2px solid #000;
        }

        .wrap__t_l {
            height: 65px;
            width: 47%;
            display: inline-block;
        }

        .wrap__t_r {
            height: 65px;
            width: 47%;
            float: right;
        }

        .wrap__t {}
    </style>
</head>

<body>
    <div>
        <div class="head" style="text-align: left; margin-bottom: 0px;" class="">
            <div style="text-align: center; display: inline-block; ">
                <h1 style="margin-bottom: 5px; font-size: 36px; text-align: left; color: #1d3261;">Mazoon Al Rabi</h1>
                <h6 style="font-size: 18px; margin:0px; text-align: left; font-weight:600;">Customs Clearance &
                    Transportation Services
                </h6>
                <div style="text-align: left;">
                    <p style="font-size: 12px; margin-top: 5px; line-height: 1.4;">Mazoon Al Rabi Trading
                        Office # 12, Noor Building,<br>
                        Po 225, PC 111, Ghala Ind Est, Muscat
                        Tel : +968 91166672</p>
                </div>
            </div>

            <div class="" style=" float: right; text-align: right;  margin-bottom: 0px;" class="text-right">
                <img src="{{ asset('assets/images/logo-sm.png') }}" style="padding-bottom: 10px;"  width="70" alt="">
                <div>
                    {!! $barcode !!}
                </div>
            </div>
        </div>
    </div>
    <div class="border">
    </div>

    <h4 style="text-align: center; font-size: 18px; padding-bottom: 10px; text-transform: uppercase;">Invoice</h4>
    <div class="wrap__t">

        <div class="wrap__t_l border_2">
            <h4 style="">Bill To : <br> <span style="margin-left: 10px;"> {{ isset($invoices->client->name) ? $invoices->client->name : '' }}</span></h4>
            <div style="margin-left: 10px;">{{ isset($invoices->client->address) ? $invoices->client->address : '' }}

            </div>
        </div>

        <div class="wrap__t_r border_2">
            <table class="table__custome">
                <tr>
                    <td><b>Invoice No:</b> </td>
                    <td>{{ $invoices->invoice_no ?? '' }}</td>
                </tr>
                <tr>
                    <td><b>Date:</b> </td>
                    <td>{{ date('d M Y', strtotime($invoices->invoice_date)) }}</td>
                </tr>
                 <tr>
                    <td><b> Border Name:</b></td>
                    <td>{{ isset($invoices->port->port_name) ? $invoices->port->port_name : "" }}</td>
                </tr>
            </table>
        </div>

    </div>
    </div>

    <div class="" style="margin-top: 20px; border: 2px solid #000;">
        <h2 style=" font-size: 12px; border-bottom: 2px solid #000; padding: 5px 3px; width:100%; font-weight: 300;">Service
            Detail
            About sale</h2>

        <table class="table__custome">
            @if(isset($invoices->port_type))
            @if ($invoices->port_type == '3')
            <tr>
                <td><b>Truck Number </b></td>
                <td>{{$invoices->truck_number ?? '--' }}</td>
                <td><b>Declaration</b> </td>
                <td>{{$invoices->bayan ?? '--' }}</td>
            </tr>
            <tr>
                <td><b>Driver Name </b></td>
                <td>{{$invoices->truck_driver_name ?? '--' }}</td>
                <td><b>Driver Number</b> </td>
                <td>{{$invoices->truck_driver_number ?? '--' }}</td>
            </tr>
            <tr>
                <td><b>Consignee</b> </td>
                <td>{{ $invoices->border_consignee ?? '--' }}</td>
            </tr>
            @else
            <tr>
                <td><b>Origin</b></td>
                <td>{{$invoices->invoice_service->origin ?? '--' }}</td>
                <td><b>Shipper</b> </td>
                <td>{{$invoices->invoice_service->shipper ?? '--' }}</td>
            </tr>
            <tr>
                <td><b>Destination</b></td>
                <td>{{$invoices->invoice_service->destination ?? '--' }}</td>
                <td><b>Consignee</b> </td>
                <td>{{ $invoices->invoice_service->consignee ?? '--' }}</td>
            </tr>
            <tr>
                <td><b>Carrier/Vessel</b></td>
                <td>{{$invoices->invoice_service->carrier_vessel ?? '--' }}</td>
                <td><b>Notify</b> </td>
                <td>{{$invoices->invoice_service->notify ?? '--' }}</td>
            </tr>
            <tr>
                <td><b>Commodity</b></td>
                <td>{{$invoices->invoice_service->commodity ?? '--' }}</td>
                <td><b>ETD/ETA</b> </td>
                <td></td>
            </tr>
            <tr>
                <td><b>Master Doc No:</b></td>
                <td>{{$invoices->invoice_service->master_doc_no ?? '--' }}</td>
                <td><b>House Doc Num</b> </td>
                <td>{{ $invoices->invoice_service->house_doc_no ?? '--' }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>Customer declaration No: </b> </td>
                <td>{{ $invoices->bayan ?? '--' }}</td>
            </tr>
            @endif
            <tr>
                <td><b>Service Type :</b></td>
                <td>{{ ($invoices->type == 'import') ? 'Import' : 'Export' }}</td>
                <td><b>Payment Terms :</b> </td>
                <td>{{ ($invoices->is_credit_payment == 1) ? 'Credit' : 'Cash' }}</td>
            </tr>
            <tr>
                <td><b>Sales Manager:</b> </td>
                <td>{{ isset($invoices->client->salesOwner->name) ? $invoices->client->salesOwner->name : '--' }}</td>
            </tr>
            @endif
        </table>
    </div>
    @if($invoices->port_type == '1' || $invoices->port_type == '2')

    {{-- <table style="margin-top: 20px; margin-bottom: 10px;" class="custome__table">
        <thead>
            <th>Container No</th>
            <th>Type</th>
            <th>No of Pcs</th>
            <th>Gross Weight</th>
            <th>Net Weight</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$invoices->container_pcs_no ?? '--' }}</td>
                <td>{{$invoices->container_type ?? '--' }}</td>
                <td>{{$invoices->container_pcs_no ?? '--' }}</td>
                <td>{{$invoices->container_gross_weight ?? '--' }}</td>
                <td>{{$invoices->container_net_weight ?? '--' }}</td>

            </tr>
        </tbody>
    </table> --}}
    @endif


    <table class="custome__table" style="margin-top: 20px; width: 100%; ">
        <thead>
            <th>Sr</th>
            <th>Service Type</th>
            <th>Qty</th>
            <th>Unit</th>
            <th>Amount</th>
            <th>Vat %</th>
            <th>Vat Amt</th>
            <th>Net Amt</th>
        </thead>
        <tbody>
            @foreach ($invoices->items as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->particular->particular ?? '' }}</td>
                <td>{{ $item->quantity }}</td>
                <td>NOS</td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->tax_perc ?? "0.000" }}</td>
                <td>{{ $item->tax_amount}}</td>
                <td>{{ number_format($item->total_amount, 3) }}</td>
            </tr>
            @endforeach
            @if($invoices->service_charge > 0)
            <tr>
                <td colspan="5" style="text-align: right; font-weight: 600; font-size: 16px;">Service Charge</td>
                <td colspan="3" style="text-align: right;"><b> {{ number_format($invoices->service_charge, 3) }} OMR </b></td>
            </tr>
            @endif
            @if($invoices->credit_advance > 0)
            <tr>
                <td colspan="5" style="text-align: right; font-weight: 600; font-size: 16px;">Advance Received</td>
                <td colspan="3" style="text-align: right;"><b> {{ number_format($invoices->credit_advance, 3) }} OMR </b></td>
            </tr>
            @endif
            <tr>
                <td colspan="5" style="text-align: right; font-weight: 600; font-size: 16px;">Total</td>
                <td colspan="3" style="text-align: right;"><b>@if($invoices->total_amount > 0) {{
                        number_format($invoices->total_amount, 3) }} OMR @else 0.000 OMR  @endif</b></td>
            </tr>

            <tr>
                @php
                $totalAmountInWords = strtoupper(convertNumber($invoices->total_amount));

                @endphp
                <th colspan="5" rowspan="2"> <b>RO.(in words)</b>
                    {{-- <p>Words</p> --}}
                    @if($invoices->total_amount != 0)
                    <div style=""><b>{{ $totalAmountInWords }} @if(isset($totalAmountInWords)) OMANI RIAL ONLY
                            @endif</b></div>
                    @else
                    <div style=""><b></b></div>
                    @endif
                </th>
                <td colspan="3">
                    <div>
                        <div style="display: inline;">Sub Total <div style="text-align: right;"><b>
                                    @if($invoices->total_amount > 0) {{number_format($invoices->total_amount, 3)}} OMR  @else 0.000 OMR @endif</b></div>
                        </div>

                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <div>
                        <div style="display: inline;">Grand Total <div style="text-align: right;"><b>
                                    @if($invoices->total_amount > 0) {{number_format($invoices->total_amount, 3)}} OMR @else 0.000 OMR @endif</b></div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="custome__table" style="width: 100%; margin-top: 20px;">
        <tbody>
            <tr>
                <td>
                    <p>
                    <div>
                        <h4 style="margin-bottom: 5px;"> Bank A/c Details</h4>
                        <p style="font-size: 14px;">
                             <span style="width: 150px; display: inline-block;">Company Name: </span> <b style="font-size: 12px;">MAZOON AL RABI TRADING</b> <br>
                             <span style="width: 150px; display: inline-block;">Bank Name: </span> <b style="font-size: 12px;">BANK MUSCAT</b> <br>
                             <span style="width: 150px; display: inline-block;">Branch: </span> <b style="font-size: 12px;">AL-BURAIMI</b> <br>
                             <span style="width: 150px; display: inline-block;">Currency: </span> <b style="font-size: 12px;">OMR</b> <br>
                             <span style="width: 150px; display: inline-block;">Account Number:</span> <b style="font-size: 12px;">0387065255440017</b> <br>
                             <span style="width: 150px; display: inline-block;">Swift Code: </span> <b style="font-size: 12px;">BMUSONMRXXXX</b></p>
                    </div>
                    </p>
                </td>
            </tr>
            <!-- <tr>
                <td >
                    <div>
                        <h4> General Terms:-</h4>
                        <ol style="">
                            <li>If there is any dispute, you have to report to us within 3 days of the receipt of the invoice in writing, failing which the invoice stands payable in full.</li>
                            <li>Discrepancies do not include any kind of claim.</li>
                            <li>Claims if any would not be adjusted against the payable invoices. Invoices shall be settled in full.</li>
                            <li>Cheques (Crossed) should be in favor of "MAZOON AL RABI TRADING"</li>
                            <li>(E&OE)</li>
                        </ol>
                    </div>
                </td>
            </tr> -->
            <tr>
                <td>
                    <p style="padding: 10px 0px;">This is computer generated no need signature</p>
                </td>
            </tr>
        </tbody>
    </table>


    <div class="bottom__nav">
        <p style="display: inline-block;">CR : 100087,P,O.BOX 16,PC:512, OMAN </p>
        <p style="float: right;">+968 9656947</p>
    </div>
</body>

</html>
