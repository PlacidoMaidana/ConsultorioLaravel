<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        .col {
    background-color: cadetblue;
    flex: 1 0 0%;
}
    </style>

</head>
<body>

<div class="container">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">

    <div class="card">
     <div class="card-body">
         @for ($i = 1; $i <=10; $i++)
    
           <h3>  {{ $i }} | {{ $i }} X 2 =|{{ $i * 2}}   </h3>
       
           @endfor
     </div>
    </div>
   
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>


    
</body>
</html>