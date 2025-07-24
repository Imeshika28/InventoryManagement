@extends('layouts.admin-master')
@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Manage Events</h2>
            <a href="{{url('/events/create')}}" class="btn btn-success mb-3">Create New Event</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Importance</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Sample Event</td>
                    <td>This is a sample event description.</td>
                    <td>High</td>
                    <td>2025-08-10</td>
                    <td>
                        <a href="edit_event.html" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
