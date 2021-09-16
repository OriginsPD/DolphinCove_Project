<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <nav>
        <ul>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('admin-panel') }}">Admin-Panel</a>
            <a href="{{ route('programs.index') }}">Programs</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
        </ul>
    </nav>

    <section>
        <div>
            <h1>WELCOME TO DOLPHIN COVE</h1>
        </div>
    </section>
</body>

</html>
