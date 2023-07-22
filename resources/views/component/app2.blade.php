<!DOCTYPE html>
<html lang="en">

<head>
    @include('/component/header2')
</head>

<body style="background-image: linear-gradient(#d5e3fa, #f3f5f7, #f3f5f7);">
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div><!-- /.container-fluid -->
    </section>
    @include('component/footer')
</body>

</html>
