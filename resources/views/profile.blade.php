<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Prelim</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="text-center">
        <nav class="nav justify-content-center">
            <a href="{{url('/')}}" class="nav-link">Home</a>
            <a href="{{url('/about')}}" class="nav-link">About Us</a>
            <a href="{{url('/profile')}}" class="nav-link">Company Profile</a>
        </nav>
        <h1>Company Profile</h1>

        <div class="card shadow-sm mx-auto" style="width: 500px">
            <div class="card-body">
                <div class="card-title">Company Profile</div>
                <p>
                SM Supermalls is owned by SM Prime Holdings, Inc., a publicly-listed company and is one of the largest integrated property developers in Southeast Asia. SM Supermalls aims to become Asia's most popular mall chain through constant innovation and partnership with the world's best retailers.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
