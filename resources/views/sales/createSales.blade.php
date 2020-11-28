@extends('master.masterpage')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach    
        </ul>    
    </div>    
@endif
@if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card mb-5">
            <div class="card-header text-white bg-primary">
                <h5 class="card-title" id="exampleModalLabel">
                    <i class="fa fa-money"></i>
                    Add New Sale
                </h5>
            </div>
        <form class="" action="{{route('store.sale')}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label>Select Product</label>
                    <select class="form-control text-primary" name="product_id" >
                        <option disabled selected><sub>Please select a product</sub></option>
                        @foreach ($product as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        
                    </select>
                    <small class="float-right">Product not listed here? <a href="#" data-toggle="modal" data-target="#addProductModal">Add new</a> </small>
                    </div>
                    <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="number" class="form-control" name="price" value="" placeholder="Enter product price here..." >
                    </div>
                    <div class="form-group">
                    <label for="">Description <small class="text-muted">(Optional)</small></label>
                    <textarea name="descript" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this sale..."></textarea>
                    </div>
                    <small class="text-muted"><em>Please double check information before submitting.</em></small>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" class="btn btn-primary" value="Add Sale">
                </div>
                </form>
        </div>
    </div>
</div>
@endsection