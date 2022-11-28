<!DOCTYPE html>
<html>
<head>
    <title>Testing Email address</title>
    <style>
    .logo {
        padding: 20px;
        background: darkolivegreen;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="logo">
        <img src="{{asset('images/logo.png')}}" alt="profile Pic" height="100" width="100">
    </div>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
   
    <p>Thank you</p>
</body>
</html>
