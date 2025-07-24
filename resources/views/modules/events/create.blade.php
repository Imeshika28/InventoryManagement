@extends('layouts.admin-master')
@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Create Event</h2>
            <form>
                <div class="form-group mb-3">
                    <label for="eventName">Event Name</label>
                    <input type="text" class="form-control" id="eventName" placeholder="Enter event name">
                </div>
                <div class="form-group mb-3">
                    <label for="eventDescription">Event Description</label>
                    <textarea class="form-control" id="eventDescription" rows="3"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="eventImportance">Event Importance</label>
                    <select class="form-control" id="eventImportance">
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="eventDate">Event Date</label>
                    <input type="date" class="form-control" id="eventDate">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
