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
            <div class="card-header bg-info text-white">
                <h5 class="card-title" id="exampleModalLabel">
                    <i class="fa fa-industry"></i>
                    Add Product Brand
                </h5>
            </div>
            <form class="" action="{{route('store.brand')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="">Product Brand</label>
                    <input type="text" class="form-control" name="b_name" value="" placeholder="Enter brand name here..." required>
                    <small class="text-muted">Example: Nokia, AMB or MSI etc</small><br>
                    </div>
                    <div class="form-group">
                    <label for="">Description <small class="text-muted">(Optional)</small></label>
                    <textarea name="descript" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
                    </div>
                    <small class="text-muted"><em>Please double check information before submitting.</em></small>
                </div>
                <div class="modal-footer text-right">
                    <input type="submit" class="btn btn-primary" value="Add Brand">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection