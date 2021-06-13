@extends('layout.app')
@section('css-contain')
<style>
    img{
        width: 200px;
        height: auto;
    }
</style>
@endsection
@section('contain')
        <div class="flex-center position-ref full-height">
            <div class="content col-md-6" style="background: #b6b0b03d;    color: black;     padding: 30px;">
                <div class="title m-b-md">
                    User information
                </div>
                {{-- {{ dd($user_information) }} --}}
                <form method="post" action="{{ route('store_user_review',[$slug]) }}">
                    @csrf

                    <div class="">
                        <p>
                            <b> Name : </b><span>{{$user_information->name}}</span>
                        </p>
                        <p>
                            <b> Email : </b><span>{{$user_information->email}}</span>
                        </p>
                        <p>
                            <b> Mobile Number : </b><span>{{$user_information->phone}}</span>
                        </p>
                        <p>
                            <b> Degree : </b><span>{{$user_information->degree}}</span>
                        </p>
                        <p>
                            <b> Image 01 : </b>
                            <span>
                                <img src="{{ url('storage/user_information/'.$user_information->image01) }}" alt="" srcset="">
                            </span>
                        </p>
                        <p>
                            <b> Image 02  : </b>
                            <span>
                                <img src="{{ url('storage/user_information/'.$user_information->image02) }}" alt="" srcset="">
                            </span>
                        </p>
                    </div>

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
