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
            <div class="card-header bg-danger text-white">
                <h5 class="card-title" id="exampleModalLabel">
                    <i class="fa fa-user"></i>
                    Add Products Vendor
                </h5>
            </div>
            <form class="" method="POST" action="{{route('store.vendor')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="">Vendor Name</label>
                    <input type="text" class="form-control" name="vendor_name" value="" placeholder="Enter vendor's name here..." required>
                    <small class="text-muted">Example: Anees Ahmad, Faisal Hayat or Shahzaib Khan etc</small><br>
                    </div>
                    <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" value="" placeholder="Enter vendor's phone number here...">
                    <small class="text-muted">Example: 555-665-123</small><br>
                    </div>
                    <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" class="form-control" name="email_add" value="" placeholder="Enter vendor's email here...">
                    <small class="text-muted">Example: ahmadanees02@gmail.com</small><br>
                    </div>
                    <div class="form-group">
                    <label for="">Description <small class="text-muted">(Optional)</small></label>
                    <textarea name="descript" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
                    </div>
                    <small class="text-muted"><em>Please double check information before submitting.</em></small>
                </div>
                <div class="modal-footer text-right">
                    <input type="submit" class="btn btn-primary" value="Add Vendor">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection