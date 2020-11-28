@extends('master.masterpage')
@section('content')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">Product Brands</li>
  </ol>
  <!-- Page Content -->
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header bg-primary text-white">
      <i class="fa fa-table"></i>
      Product Brands
      <a href="#" class="text-white" data-toggle="modal" data-target="#addProductBrandModal">
        <span class="float-right">
          <i class="fa fa-plus"></i>
          Add New Brand
        </span>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Sr#</th>
              <th>Brand Name</th>
              <th>Products</th>
              <th>Total Products Qty</th>
              <th>Revenue Generated</th>
              <th>Inventory Worth</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Sr#</th>
              <th>Brand Name</th>
              <th>Products</th>
              <th>Total Products Qty</th>
              <th>Revenue Generated</th>
              <th>Inventory Worth</th>
            </tr>
          </tfoot>
          <tbody>
           
            @foreach ($brands as $key=>$brand)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$brand->b_name}}</td>
              <td></td>
                <td>21</td>
                <td>Rs9310</td>
                <td>Rs16000</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>
  
@endsection