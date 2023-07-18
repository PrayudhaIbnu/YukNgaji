<!DOCTYPE html>
<html lang="en">
<head>
    @include('/component/header2')
</head>
<body>

    @include('/component/navbar')
    <section class="content">
        <div class="container-fluid">
          @yield('content')
        </div><!-- /.container-fluid -->
    </section>

    @include('/component/footer')
</body>
</html>
