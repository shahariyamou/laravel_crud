@extends('back.master')

@section('title', 'Manage Teacher')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Teacher</h3>
                        </div>
                        <div class="card-body">
                            <table class="table baseDataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teacher)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->user->email }}</td>
                                        <td>{{ $teacher->phone }}</td>
                                        <td>{{ $teacher->addressd }}</td>
                                        <td>{{ $teacher->image }}</td>
                                        <td>{{ $teacher->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a><a href="" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
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
    </section>
@endsection
