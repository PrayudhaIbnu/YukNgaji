<!DOCTYPE html>
<html lang="en">
<head>
    @include('/component/header')
</head>
<body class="bg-dark text-white ">

    @include('/component/navbar')
    <section class="content">
        <div class="container-fluid">
          @yield('content')
        </div><!-- /.container-fluid -->
    </section>

    @include('/component/footer')
</body>
</html>
