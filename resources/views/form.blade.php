<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!-- <form action="/sapa">
        <input type="text" name="nama">
        <input type="submit" value="masuk">
    </form> -->
    <form action="/sapa" method="POST">
        @csrf
        <input type="text" name="nama">
        <input type="submit" value="masuk">
    </form>
</body>
</html>