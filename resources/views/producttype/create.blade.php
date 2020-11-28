@extends('master.masterpage')
@section('content')
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
<div class="row mb-5">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-tags"></i>
                    Add Product Type
                </h5>
            </div>
            <form class="" action="{{route('store.producttype')}}">
                <div class="card-body">
                    <div class="form-group">
                    <label for="">Product Type</label>
                    <input type="text" class="form-control" name="p_typeName" value="" placeholder="Enter product type..." required>
                    <small class="text-muted">Example: Mousepads, Headphones or Keyboards etc</small>
                    </div>
                    <div class="form-group">
                    <label for="">Description <small class="text-muted">(Optional)</small></label>
                    <textarea name="descript" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this product type..."></textarea>
                    </div>
                    <small class="text-muted"><em>Please double check information before submitting.</em></small>
                </div>
                <div class="modal-footer text-right">
                    <input type="submit" class="btn btn-primary" value="Add Product Type">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection