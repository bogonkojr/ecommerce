@extends('layouts.admin.app')


@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="pull-left">
            <h2>Add New Product Type</h2>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
            <a class="btn btn-primary" href="{{ url('portal.categories.index') }}"> Back</a>
        </div>
    </div>
</div>


@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('portal.categories.store') }}" method="POST">
   @csrf

   <div class="card-body">
    <div class="row">
        <div class="col-md-6">

          <div class="col-xs-12 col-sm-12 col-md-11 mb-4">
              <div class="form-group">
                  <strong>Category Name</strong>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-11">
          <div class="form-group">
            <label for="product_type_id">Categories:</label>
            <select name="product_type_id" id="product_type_id" class="form-select col-md-12 round">
                <option value="" disabled selected>Select Product Type</option>
                @foreach($product_types as $product_type)
                <option value="{{ $product_type->id }}">{{ $product_type->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</div>
</div>
</form>
@endsection