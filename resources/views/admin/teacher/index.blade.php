@extends('dashboard.app')

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
                        @foreach($teachers as $teacher)
                            <tr>
                                <td class="py-1">
                                    <img src="{{ URL::asset('template/images/faces/face1.jpg') }}" alt="image"/>
                                </td>
                                <td> {{ $teacher->name }} </td>
                                <td> {{ $teacher->email }}</td>
                                <td>
                                    $ 77.99
                                </td>
                                <td>
                                    May 15, 2015
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
