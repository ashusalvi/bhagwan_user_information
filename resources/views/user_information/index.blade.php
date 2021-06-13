@extends('layout.app')
@section('contain')
    <div class="flex-center position-ref full-height">
        <div class="content col-md-6" style="background: #b6b0b03d;    color: black;     padding: 30px;">
            <div class="title m-b-md">
                User information
            </div>

            <form method="post" action="{{ route('store_user_information',[$slug]) }}">
                @csrf
                <input type="hidden" name="id" value="{{$user_information->id}}"> 
                <div class="form-group">
                    <label for="form_name">Name</label>
                    <input type="text" name="name" class="form-control" id="form_name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="form_email">Email</label>
                    <input type="email" name="email" class="form-control" id="form_email" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                    <label for="form_phone">Phone Numbar</label>
                    <input type="number" name="number" class="form-control" id="form_phone" placeholder="Enter mobile number" required>
                </div>
                <div class="form-group">
                    <label for="form_education">Select Education</label>
                    <select class="form-control" id="form_education" name="degree" required>
                        <option value="graduate">graduate</option>
                        <option value="undergraduate">undergraduate</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection