<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?= url('formsubmit') ?>">
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        <label for="Uername">Uername</label>
        <input type="text" placeholder="Enter the user name" name="username">
        <br>
        <label for="Password">Password</label>
        <input type="password" name="userpassword" placeholder="Enter the password">
        <br>
        <input type="submit" value="submit">
    </form>
</body>

</html>
