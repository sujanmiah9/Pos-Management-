@extends('master.masterpage')
@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                    <i class="fa fa-table"></i>
                        {{$brnd->b_name}}
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sr#</th>
                                <th>Product Name</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php ($i=1)
                            @foreach ($brands as $brand)
                                @foreach ($brand->product as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->stock}}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                            <tr>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td><strong>{{$brands}}</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
        </div>
    </div>
@endsection