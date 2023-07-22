<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/style_chatbot.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/pakrobot_icon.png') }}" type="image/x-icon">

</head>

<body style="bg-light bg-image">
    <nav class="navbar navbar-expand-lg border-3 border-bottom border-seccondary">
        <div class="container-fluid text-center">
            <a href="/" class="navbar-brand fs-6 text-seccondary"><i class="fa-solid fa-chevron-left"></i>
                Kembali</a>
        </div>
    </nav>
    <div class="">
        <div class="container-fluid p-2 overflow-y-auto" id="content-box" style="height: calc(89vh - 40px);">
            <div class="text-center mt-4 lh-sm">
                <p class="fw-lighter" style="color: #90a7a7;">Kamu bisa bertanya apa saja kepada Pak Ustadz Robot ini
                </p>
                <p class="fw-bolder" style="color: #90a7a7;">Tetap gunakan bahasa yang mudah di pahami ya...</p>
                <img class="opacity-25 mt-5" src="{{ asset('img/pakrobot_logo.png') }}" width="20%" style="z-index: 999;">
            </div>
        </div>
        <div class="container-fluid w-100 px-3 py-2 d-flex sticky-bottom" style="height: 64px;">
            <input id="input" type="text" name="input"
                class="form-control mt-1 text-light border-2 border-primary bg-primary opacity-50 rounded-pill">&nbsp;&nbsp;
            <button for="index" id="submit" onclick="submit()" type="submit"
                class="btn btn-primary rounded-circle mt-1"><i class="fa-solid fa-paper-plane"></i></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/61b10549df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        // function submit() {
        //     alert("Hello! I am an alert box!");
        // }
        $('#submit').on('click', function() {
            $value = $('#input').val();
            $('#content-box').append(
                '<div class="m-3"></div><div class="float-end d-inline-flex p-2 bg-primary rounded text-light m-4" style="margin: 0, 0, 0, 20">' +
                $value + '</div></div><br><br><br>');

            $.ajax({
                type: 'post',
                url: '{{ url('send') }}',
                data: {
                    'input': $value
                },
                primary: function(data) {
                    $('#content-box').append(
                        '<div class="d-flex m-3"><div class="mr-5 w-45 h-45 p-2 rounded text-warning" ><i class="fa-solid fa-robot"></i></div><div class="float-start px-4 text-primary d-inline-flex p-2 bg-light rounded"><p>' +
                        data + '</p></div></div>')
                    $value = $('#input').val();
                }
            });
        })
    </script>
</body>

</html>
