@extends('layouts.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">




            <div class="row">
                <div class="col-md-12 d-flex">

                    <!-- Payments -->
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Transaction Detail</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center">
                                    <thead>
                                        <tr>
                                            <th>Order Id</th>
                                            <th>User Id</th>
                                            <th>Payment Id</th>
                                            <th>Transaction Type</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td>{{ $transaction->order_id }}</td>
                                            <td>{{ $transaction->user_id }}</td>
                                            <td>{{ $transaction->payment_id }}</td>
                                            <td>{{ $transaction->transaction_type }}</td>
                                            <td>{{ $transaction->amount }}</td>
                                            <td>{{ $transaction->date }}</td>
                                            <td>{{ $transaction->status }}</td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Payments -->
                </div>
            </div>
        </div>
    </div>
@endsection
