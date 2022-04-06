@extends('dashboard.app')
@section('styles')
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
        rel="stylesheet"
    />
@endsection
@section('content')
    @role('admin')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Mentors</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> User </th>
                            <th> Full name </th>
                            <th> Email </th>
                            <th> Amount </th>
                            <th> Deadline </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td class="py-1">
                                    <img src="{{ URL::asset('template/images/faces/face2.jpg') }}" alt="image"/>
                                </td>
                                <td> {{ $student->name }} </td>
                                <td> {{ $student->email }}</td>
                                <td>
                                    $ 77.99
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Attach
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endrole
@endsection
