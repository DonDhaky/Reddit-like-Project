<!-- In resources/views/users/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<body>
    <ul>
        @foreach($users as $user)
            <li>{{ $user['id'] }}: {{ $user['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>
