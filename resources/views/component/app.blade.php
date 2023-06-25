<!DOCTYPE html>
<html lang="en">
<head>
    @include('/component/header')
</head>
<body>

    @include('/component/navbar')
    <section class="content">
        <div class="container-fluid">
          @yield('content')
        </div><!-- /.container-fluid -->
    </section>

</body>
</html>
