
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/61b10549df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>
<body style=" background-color:#373b3e">
    <nav class="navbar navbar-dark bg-dark sticky-top border-success border-bottom border-3">
        <div class="container-fluid">
            <a href="/" class="navbar-brand fs-6 text-success"><i class="fa-solid fa-chevron-left"></i> Kembali</a>
            <a class="navbar-brand text-light fs-6"><i class="fa-solid fa-robot bg-success p-2 rounded-circle"></i> <span class="text-success">Pak Ustadz Robot</span></a>
        </div>
      </nav>
    <div class="" >
        <div class="container-fluid p-2 overflow-y-auto" id="content-box" style="height: calc(89vh - 40px);">
            <div class="text-center mt-4 lh-sm">
                <p class="fw-lighter" style="color: #90a7a7;">Kamu bisa bertanya apa saja kepada Pak Ustadz Robot ini</p>
                <p class="fw-bolder" style="color: #90a7a7;">Tetap gunakan bahasa yang mudah di pahami ya...</p>
            </div>
        </div>
        <div class="container-fluid w-100 px-3 py-2 d-flex sticky-bottom" style="height: 64px; background-color:#373b3e">
            <input id="input" type="text" name="input" class="form-control mt-1 text-light border-2 border-success rounded-pill" style="background-color: #323537;">&nbsp;&nbsp;
            <button for="index" id="submit" onclick="submit()" type="submit"  class="btn btn-success rounded-circle mt-1"><i class="fa-solid fa-paper-plane"></i></button>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
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
    $('#submit').on('click', function(){
        $value = $('#input').val();
        $('#content-box').append('<div class="m-3"></div><div class="float-end d-inline-flex p-2 bg-success rounded text-dark m-4" style="margin: 0, 0, 0, 20">'+$value+'</div></div><br><br><br>');

            $.ajax({
                type: 'post',
                url: '{{ url('send') }}',
                data: {
                    'input': $value
                },
                success: function(data) {
                    $('#content-box').append('<div class="d-flex m-3"><div class="mr-5 w-45 h-45 p-2 rounded text-warning" ><i class="fa-solid fa-robot"></i></div><div class="float-start px-4 text-success d-inline-flex p-2 bg-dark rounded"><p>'+data+'</p></div></div>')
                    $value = $('#input').val();
                }
            });
    })
</script>
</body>
</html>
