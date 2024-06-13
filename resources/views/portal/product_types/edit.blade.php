@extends('layouts.admin.app')


@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="pull-left">
            <h2>Edit Product Type</h2>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
            <a class="btn btn-primary" href="{{ url('portal.product_types.index') }}"> Back</a>
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
<form action="{{ route('portal.product_types.update', $productType->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="col-xs-12 col-sm-12 col-md-11 mb-4">
                        <div class="form-group">
                            <strong>Product Type Name</strong>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $productType->name}}">
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