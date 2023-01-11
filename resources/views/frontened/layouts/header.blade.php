<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('Frontened/style.css')}}"/>
</head>
<body>
    <div class="navbar">

        <a class="btn btn-primary" href="{{url('/login')}}" role="button">login</a>
        <a class="btn btn-primary" href="{{url('/register')}}" role="button">register</a>
    </div>
    <header class="header">
        <div class="container container-nav">
            <div class="size-title">
                <h1>R&M Saloon</h1>
                <P class="subtitle">Getting your hair ready</P>
            </div>
            <nav>
               <ul>
                <li><a href="{{url('/')}}" >Home</a></li>
                <li><a href="{{url('/gallery')}}">Gallery</a></li>
                <li><a href="{{url('/team')}}">Team</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
               
            </nav>
        </div>
    </header>