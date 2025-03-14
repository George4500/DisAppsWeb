<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear Superheroe</h1>

    <form action="#" method="post">
        @csrf
        <label for="">Gender</label>
        <select name="gender_id">
            @foreach ($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                @endforeach
            <option value="1">Name</option>
        </select>

        <br><br>

       <label for="">Real Name</label> 
       <input type="text" name="real_name">

        <input type="submit" value="Create">
    </form>    
</body>
</html>