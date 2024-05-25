<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>
<body>
    <h1>Selamat Datang {{ $fname }} {{ $lname }}</h1>
    
    <h2>You {{ $gender }}  berbangsa {{ $nasional }} dan berbahasa yang satu {{ implode(', ', $bahasa) }}</h2>
    
    <h3>Bio: {{ $bio }}</h3>
</body>
</html>
 