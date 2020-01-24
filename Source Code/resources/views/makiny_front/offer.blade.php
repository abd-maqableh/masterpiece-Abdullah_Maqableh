@extends('makiny_front.layout')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">

        <form method="post" action="{{route('offer.store')}}"  enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name-event">Name Event</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name of event" required>
            </div>
            <div class="form-group">
                <label for="des">Description</label>
                <input type="text" class="form-control" id="des" name="description" placeholder="Explain about your Event" required>
            </div>
            <div class="form-group">
                <label for="location">location of event</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter link for your Event location" required>
            </div>

            <div class="form-group">
                <label >date fo event</label>
                <input type="date" name="date" max="3000-12-31"
                       min="1000-01-01" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter the price of Event" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Attach a license</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <div class="form-group">
                <label for="category">select category</label>
                <select  class="form-control" id="category" name="category_id" required>
                    <option value="1">Family</option>
                    <option value="2">Sport</option>
                    <option value="3">Fashion</option>
                    <option value="4">Food</option>
                    <option value="5">Other...</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success btn-block btn-group-lg mb-5">Submit</button>
        </form>
    </div>


@endsection
