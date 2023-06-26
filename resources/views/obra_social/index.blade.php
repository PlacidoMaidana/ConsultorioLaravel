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
   
   <a href="{{url("/obra_social/nuevo")}}" class="btn btn-primary"  >Nuevo</a> 

<table class="table table-light">
    <tbody>
        @foreach ($todas as $item)
       
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['nombreOSocial']}}</td>
            <td>
                <a href="{{url("/obra_social/editar/".$item['id'])}}" class="btn btn-primary"  >Edit</a> 
                <a href="{{url("/obra_social/eliminar/".$item['id'])}}" class="btn btn-primary"  >Delete</a> 

            
            </td>
   

   
        </tr>

        @endforeach
       
    </tbody>
</table>





</body>
</html>