<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('component.header')

    @yield('about')
    @yield('course')


    @include('component.footer')
</body>
{{--
1- create ->master ->include header and footer & yield about & course
2- create ->component/header & footer
3- create ->component/about ->extend master & section about
4- create ->component/course ->extend master & section course
5- create routes for about & course
--}}

</html>
