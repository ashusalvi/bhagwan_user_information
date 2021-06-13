@extends('layout.app')
@section('contain')
        <div class="flex-center position-ref full-height">
            <div class="content col-md-6" style="background: #b6b0b03d;    color: black;     padding: 30px;">
                <div class="title m-b-md">
                    User information
                </div>

                <form method="post" action="{{ route('store_user_review',[$slug]) }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$user_information->id}}"> 
                    <div class="form-group">
                        <label for="form_review">Review</label>
                        <input type="text" name="review" class="form-control" id="form_review" placeholder="Enter review" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
