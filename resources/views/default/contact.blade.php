@extends('default.layouts.layout')

@section('content')
    <div class="col-md-9">
        <div class="">
            <h2>Contact us!</h2>
        </div>


    <p>
        This is a template for a simple marketing or informational website. It includes a large
    </p>

    <form method="post" action="{{ route('contact') }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="text">Site</label>
            <input type="text" class="form-control" id="site" name="site" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" id="text" name="text" rows="3">Some Text</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
