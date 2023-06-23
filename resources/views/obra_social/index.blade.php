<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    

<table class="table table-light">
    <tbody>
        @foreach ($todas as $item)
       
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['nombreOSocial']}}</td>
        </tr>

        @endforeach
       
    </tbody>
</table>





</body>
</html>