@extends('layout.app')

@section('title', 'About Me')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3">
                <img src="{{asset('images/lorem.jpeg') }}" alt="User Profile Image" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Rangga Arya Gardika</h5>
                    <p class="card-text">2111500035</p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Contact Info</h5>
                    <p class="card-text">Email: <a href="https://youtu.be/GQnieLU0-B0">ranggaaryag24@gmail.com</a></p>
                    <p class="card-text">Instagram: <a href="https://www.instagram.com/ranggaarg/">@ranggaarg</a></p>
                    <p class="card-text">Phone: +62 (0821) 22863045</p>
                </div>
            </div>
           

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
@endsection