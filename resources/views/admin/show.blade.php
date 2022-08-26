@extends('layouts.admin')

@yield('content')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">Taxi Clients</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                             @foreach ($users as $user)
                             <tr>
                                 <td>{{ $user->name }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                 <td>
                                     <a href="#" class="btn btn-success">EDIT</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger">DELTETE</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')


@endsection
