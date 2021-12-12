@extends('pages.layouts.app')

@section('content')
<div class="container">
    <h1> Information </h1>

    <form method="GET" action="{{url('form-display')}}">
        <div class="form-group">
            <label for="firstname">Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter your Name" name="name">
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" placeholder="Enter your surname" name="surname">
        </div>
        <div class="form-group">
            <label for="address">Description</label>
            <textarea class="form-control" id="address" placeholder="Describe yourself" name="textarea"></textarea>
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control" name="formId" value="7bKzL8RDM83XOM8p2GRxHzZ9CCyQ3mCCy9JAd4WMHeQS">
        </div>
        <button type="submit" class="btn btn-primary" name="description">Submit</button>
    </form>
</div>

@endsection

