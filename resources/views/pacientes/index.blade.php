<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>aqui pondremos la tabla del paciente</h1>
   
    <table class="table table-light">
        <tbody>

            @foreach ($pacientes as $item)
                
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['apellido']}}</td>
                <td>{{$item['nombre']}}</td>
                <td>{{$item['direccion']}}</td>
                <td>{{$item['telefono']}}</td>
                <td>{{$item['email']}}</td>
            </tr>

            @endforeach


            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>






</body>
</html>