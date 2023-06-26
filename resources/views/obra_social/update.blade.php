<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
   
    <form method="POST" action="{{url("/obra_social/guardar_cambios")}}">
        @csrf

      
        <div class="input-group">
            <input class="form-control" type="text" name="id" placeholder="id"  @readonly(true) value="{{$os['id']}}">
            <div class="input-group-append">
                <span class="input-group-text" id="id">id ObraSocial</span>
            </div>
        </div>
        <div class="input-group">
            <input class="form-control" type="text" name="nombreOSocial" placeholder="nombre obra social" value="{{$os['nombreOSocial']}}">
            <div class="input-group-append">
                <span class="input-group-text" id="nombreOSocial">Nombre ObraSocial</span>
            </div>
        </div>
        <input type="submit" value="Aceptar">
        
    </form>

    
</body>
</html>