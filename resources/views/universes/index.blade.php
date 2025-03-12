<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universes</title>
</head>
<body>
    <h1>Universes<h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Size</th>
                <th>Actions</th>
            </tr>
        </thead>
         
        <tbody>
            @foreach($universes as $universe)
                <tr>
                    <td>{{ $universe->name }}</td>
                    <td>{{ $universe->age }}</td>
                    <td>{{ $universe->size }}</td>
                    <td> 
                </tr>
                    @endforeach
        </tbody>
        </table>
</body>
</html>
