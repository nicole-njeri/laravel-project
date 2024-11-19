<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="{{ route('users.store') }}" method="POST" class="form">
 @csrf
<label for="name">Name:</label>
            <input type="text" id="name" name="name" maxlength="255" required>

            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" maxlength="255" required>

           

           
            <input type="submit" value="submit">
</form>
</body>
</html>
