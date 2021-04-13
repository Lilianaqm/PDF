<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
    table{
        font-family:arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        background-color: #1b2021;
    }
    td,th{
        border: 1px solid #132c33;
        text-aling: center;
        background-color: #91c788;
        padding: 8px;
    }
    tr:nth-child{
        background-color: #91c788;
    }
        </style>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
    <body>
    <table class="table table-striped">
    <thead class="thead-light">
            <tr>
            <th> Matrícula</th>
            <th> Nombre</th>
            <th> Dirección </th>
            <th> Sexo </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($estudiante as $estudiantes) 
        <tr>
        <td>{{$estudiantes->Matricula}}</td>
        <td>{{$estudiantes->Nombre}}</td>
        <td>{{$estudiantes->Direccion}}</td>
        <td>{{$estudiantes->Sexo}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </body>
</html>
