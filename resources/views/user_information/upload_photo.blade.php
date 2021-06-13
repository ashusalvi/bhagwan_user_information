@extends('layout.app')
@section('css-contain')
    <style>
        input[type="file"]{
            position: absolute;
            left: 0;
            opacity: 0;
        }
    </style>
@endsection
@section('contain')
    <div class="flex-center position-ref full-height">
        <div class="content col-md-6" style="background: #b6b0b03d;    color: black;     padding: 30px;">
            <div class="title m-b-md">
                User information
            </div>

            <form method="post" action="{{ route('store_user_image',[$slug]) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$user_information->id}}" required> 
                <div class="form-group">
                    <label for="form_name">Upload Image 1</label>
                    <br>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3.2"/>
                        <path d="M9 2l-1.83 2h-3.17c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-12c0-1.1-.9-2-2-2h-3.17l-1.83-2h-6zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                        <path d="M0 0h24v24h-24z" fill="none"/>
                        </svg>
                    </span>
                    <input type="file" name="input_image01" id="input_image01" accept="image/*" capture="camera" required>
                    <canvas id="image01" style="width:200px; height:200px; display:none;"></canvas>
                </div>
                <div class="form-group">
                    <label for="form_name">Upload Image 2</label>
                    <br>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3.2"/>
                        <path d="M9 2l-1.83 2h-3.17c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-12c0-1.1-.9-2-2-2h-3.17l-1.83-2h-6zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                        <path d="M0 0h24v24h-24z" fill="none"/>
                        </svg>
                    </span>
                    <input type="file" name="input_image02" id="input_image02" accept="image/*" capture="camera" required>
                    <canvas id="image02" style="width:200px; height:200px; display:none;"></canvas>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js-contain')
     <script>
        var input = document.querySelector('input[id=input_image01]'); 
        input.onchange = function () {
            var file = input.files[0];
            drawOnCanvas(file);
        };

        function drawOnCanvas(file) {
            $('#image01').css('display', 'block');
            var reader = new FileReader();
            reader.onload = function (e) {
            var dataURL = e.target.result,
                c = document.querySelector('#image01'), // see Example 4
                ctx = c.getContext('2d'),
                img = new Image();
        
            img.onload = function() {
                c.width = img.width;
                c.height = img.height;
                ctx.drawImage(img, 0, 0);
            };
        
            img.src = dataURL;
            };
        
            reader.readAsDataURL(file);
        }

        var input2 = document.querySelector('input[id=input_image02]'); 
        input2.onchange = function () {
            var file = input2.files[0];
            drawOnCanvas2(file);
        };

        function drawOnCanvas2(file) {
            $('#image02').css('display', 'block');
            var reader = new FileReader();
            reader.onload = function (e) {
            var dataURL = e.target.result,
                c = document.querySelector('#image02'), // see Example 4
                ctx = c.getContext('2d'),
                img = new Image();
        
            img.onload = function() {
                c.width = img.width;
                c.height = img.height;
                ctx.drawImage(img, 0, 0);
            };
        
            img.src = dataURL;
            };
        
            reader.readAsDataURL(file);
        }
    </script>
@endsection
        