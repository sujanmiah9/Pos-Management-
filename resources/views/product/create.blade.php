@extends('master.masterpage')
@section('content')
{{-- Success Alert Show --}}
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-tag"></i>
                    Add New Product
                </h5>
            </div>
        <form class="" action="{{route('store.product')}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label>Product Type</label>
                    <select class="form-control text-primary" name="product_type_id" required>
                        <option disabled selected><sub>Please select a product type</sub></option>
                        @foreach ($productType as $item)
                            <option value="{{$item->id}}">{{$item->p_typeName}}</option>
                        @endforeach
                    </select>
                    <small class="float-right">Product type not listed here? <a href="#"data-toggle="modal" data-target="#addProductTypeModal">Add new</a> </small>
                    </div>
                    <div class="form-group">
                    <label>Product Brand</label>
                    <select class="form-control text-primary" name="brand_id" required>
                            <option disabled selected><sub>Please select a product brand</sub></option>
                        @foreach ($brand as $item)
                            <option value="{{$item->id}}">{{$item->b_name}}</option>
                        @endforeach
                    </select>
                    <small class="float-right">Products brand not listed here? <a href="#"data-toggle="modal" data-target="#addProductBrandModal">Add new</a> </small>
                    </div>
                    <div class="form-group">
                    <label>Product Vendor</label>
                    <select class="form-control text-primary" name="vendor_id" required>
                        <option disabled selected><sub>Please select a product vendor</sub></option>
                        @foreach ($vendor as $item)
                    <option value="{{$item->id}}">{{$item->vendor_name}}</option>
                        @endforeach
                    </select>
                    <small class="float-right">Product vendor not listed here? <a href="#"data-toggle="modal" data-target="#addProductVendorModal">Add new</a> </small>
                    </div>
                    <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="name" value="" placeholder="Enter product name..." >
                    <small class="text-muted">Be more specific with product names. Make sure its unique.</small>
                    </div>
                    <div class="form-group">
                    <label for="">Product Price <small class="text-muted">(cost/item)</small> </label>
                    <input type="number" class="form-control" name="price" value="" placeholder="Enter cost of product per item..." >
                    </div>
                    <div class="form-group">
                    <label for="">Product Stock <small>(How many products are you adding in stock?)</small> </label>
                    <input type="number" class="form-control" name="stock" value="" placeholder="Enter number of items..." >
                    <small class="text-muted">This will be used as product quantity in stock keeping unit.</small>
                    </div>
                    How are you paying for this product?
                    <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Store Account" checked>
                        Store Account
                    </label>
                    </div>
                    <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Others">
                        Other. I don't want to record this epxense.
                    </label>
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="">Description <small class="text-muted">(Optional)</small></label>
                    <textarea name="descript" class="form-control" cols="80" placeholder="Add some note or description about this product..."></textarea>
                    </div>
                    <small class="text-muted"><em>Please double check information before submitting.</em></small>
                </div>
                <div class="modal-footer text-right">
                    <input type="submit" class="btn btn-primary" value="Add Product">
                </div>
                </form>
        </div>
    </div>
</div>
@endsection