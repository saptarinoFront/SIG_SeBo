<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.core._head')
</head>

<body>

    @include('inc.core._navbar')
    <main>
        @include('inc.home._home')
        @include('inc.home._school')
        @include('inc.home._category')
        @include('inc.home._map')
    </main>
    @include('inc.core._footer')

    @stack('script')
</body>

</html>
