<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="archivo" id="">
        <input type="submit" value="Subir archivo">
    </form>
    
    <hr>

    <form action="{{ route('file.download', 'imagenes/example') }}" method="GET">
        @csrf
        <input type="submit" value="Descargar archivo">
    </form>    
</body>
</html>
