@extends('master.masterpage')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Accounts</li>
        </ol>
        <!-- Page Content -->
        <!-- DataTables Example -->
        <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            <i class="fa fa-table"></i>
            Accounts
            <a href="#" class="text-white" data-toggle="modal" data-target="#addExpenseAccountModal">
            <span class="float-right">
                <i class="fa fa-plus"></i>
                Add New Expense Account
            </span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Acc#</th>
                    <th>Account Title</th>
                    <th>Amount</th>
                    <th>Transactions Made</th>
                    <th>Last updated</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Acc#</th>
                    <th>Account Title</th>
                    <th>Amount</th>
                    <th>Transactions Made</th>
                    <th>Last updated</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                <tr>
                    <td>9989846565546</td>
                    <td>Akhtar Hotel</td>
                    <td>Rs680</td>
                    <td>9</td>
                    <td>06/10/2018</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
@endsection