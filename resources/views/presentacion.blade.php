<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>BodyArt</title>
    
    <link rel="stylesheet" href="{{ asset('css/fondovideo.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
</head>
<body>
    <video src="{{asset('img/video/videotattoo.mp4')}}" autoplay muted loop></video>
   <main>
        <h2>Body Art</h2>
        <p>Sumate a la experiencia del mundo del tattoo</p>
        <a href="{{ url('/inicio') }}">Ingresa al sitio</a>
   </main>
</body>
</html>