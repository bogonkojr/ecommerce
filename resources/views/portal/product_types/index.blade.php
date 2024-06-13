@extends('layouts.admin.app')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Items List</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Items</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Minimal jQuery Datatable start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Items
                </h5>
            </div>
            <div class="col-md-4 text-center pl-3">
                <a href="{{ route('portal.product_types.create')}}" class="btn btn-success rounded-pill">New Entry</a>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($product_types) && $product_types)
                            @foreach($product_types as $product_type)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $product_type->name}}</td>
                                <td>
                                    <div class="col-12 d-flex justify-content-end">
                                        <form action="{{ route('portal.product_types.destroy', $product_type->id) }}" method="POST" action="{{ url('destroy')}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary btn-sm btn-block mb-6" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                        </form>&nbsp;&nbsp;&nbsp;
                                        <div><a href="{{ route('portal.product_types.edit', $product_type->id) }}" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <p> {{ $product_type->name}} Empty.</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
</div>



@endsection