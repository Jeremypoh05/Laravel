@extends('layout')
@section('content')

<div class="row">
<div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
        <h1> My Order </h1>
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Date Time</td>
                        <td>Amount</td>
                        <td>Payment Status</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->created_at->format('d M Y - H:i:s') }}</td> <!--<td>{{$order->created_at}}</td>-->
                        <td>{{$order->amount}}</td>
                        <td>{{$order->paymentStatus}}</td>
                        <td style="width:150px"><i class="fas fa-check-square"></i></
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <a href="{{route('pdfReport')}}" class="btn btn-info btn-xs">Download Report</a> 
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection