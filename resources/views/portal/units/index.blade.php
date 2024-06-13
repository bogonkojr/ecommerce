 @extends('layouts.admin.app')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Users Table</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                <a href="{{ route('portal.units.create')}}" class="btn btn-success rounded-pill">New Entry</a>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Abbreviation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         @if(isset($units) && $units)
                         @foreach($units as $unit)
                         <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$unit->name}}</td>
                            <td>{{$unit->abbreviation}}</td>
                            <td>
                                <div class="col-12 d-flex justify-content-end">
                                <!-- @if($unit->status)
                                <button class="btn btn-success toggle-status" data-id="{{$unit->id}}">Active</button>
                                @else
                                <button class="btn btn-danger toggle-status" data-id="{{$unit->id}}">Inactive</button>
                                @endif -->
                                <form action="{{ route('portal.units.destroy', $unit->id) }}" method="POST" action="{{ url('destroy')}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary btn-sm btn-block mb-6" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                </form>&nbsp;&nbsp;&nbsp;
                                <div><a href="{{ route('portal.units.edit', $unit->id) }}" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a></div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <p>No Users found.</p>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

</section>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.toggle-status');
        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const unitId = this.getAttribute('data-id');
                const status = this.textContent.trim() === 'Active' ? 0 : 1; // Toggle status

                // Send AJAX request
                fetch(`/units/${unitId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Assuming you're using Laravel CSRF protection
                    },
                    body: JSON.stringify({ status: status })
                })
                .then(response => response.json())
                .then(data => {
                    // Update button text and class based on the new status
                    if (data.status) {
                        button.textContent = 'Active';
                        button.classList.remove('btn-danger');
                        button.classList.add('btn-success');
                    } else {
                        button.textContent = 'Inactive';
                        button.classList.remove('btn-success');
                        button.classList.add('btn-danger');
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
