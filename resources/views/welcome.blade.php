<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CITATION</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  {{-- style --}}
  <style>
      body, html {
      height: 100%;
      font-family: 'Sofia';font-size: 22px;
    }

    * {
      box-sizing: border-box;
    }

    .bg {
      /* The image used */
      background-image: url("https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?cs=srgb&dl=daylight-environment-forest-459225.jpg&fm=jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    /* Position text in the middle of the page/image */
    .bg-text {
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
      color: white;
      font-weight: bold;
      border: 3px solid #f1f1f1;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 85%;
      padding: 120px;
      text-align: center;
      font-family: "Sofia",sans-serif;
      font-size: 50px;
      border-radius: 17em;
    }

    .btn {
    border: 2px solid black;
    background-color: white;
    color: black;
    padding: 14px 28px;
    font-size: 36px;
    cursor: pointer;
    font-family: "Sofia",sans-serif;
   }
   /* Blue */
    .info {
    border-color: #2196F3;
    color: dodgerblue
    }

   .info:hover {
   background: #2196F3;
   color: white;
  }

  </style>




















</head>   
  <center><h1>CITATION</h1></center>
<body class="bg"></div>
  <center>
      
  <div class="bg-text">
     {{ $cittation_r->random()->cittation }}
    
    <form action= "{{route('afficher_cittation')}}" method="post">
        {{ csrf_field() }}
        <br>
        
        <button class="btn info">Générer</button>
    </form>
  </div>  
  </center>      
        
        







</body>
</html>
