<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DHMSys</title>
    @extends('template.header')
</head>
<body>
    @extends('template.navbar')
    @extends('template.sidebar')
    @yeild('content')
   @extends('template.footer') 
</body>
</html>