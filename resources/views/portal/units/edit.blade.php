 @extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="pull-left">
            <h2>Edit Unnit</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('portal.units.index') }}"> Back</a>
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

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Unit</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('portal.units.update', $unit->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control" name="name" value="{{ $unit->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="abbreviation">Email</label>
                                        <input type="text" id="abbreviation" class="form-control" name="abbreviation" value="{{ $unit->abbreviation }}">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <a href="{{ route('portal.units.index') }}" class="btn btn-primary">Cancel</a>
                                    <button type="submit" class="btn btn-primary ml-1">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
