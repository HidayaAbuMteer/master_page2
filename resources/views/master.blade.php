@include('includs.top')
@include('includs.header')
@yield('content')
@include('includs.footer')
@include('includs.down')
{{--
1- create ->master ->include (top & header & footer & down) & yield content
2- create ->component/header & footer & top & down
3- create ->component/about ->extend master & section about
4- create ->component/course ->extend master & section course
5- create routes for about & course
--}}
