@extends('dashboard.app')

@section('content')
    @role('admin')
        @include('admin.dashboard')
    @endrole
@endsection
