@extends('/component/app')
<style>

</style>
@section('content')
<div class="row">
    <div class="col-8">
        <table class="table text-center ">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Diturunkan</th>
                    <th scope="col">Ayat</th>
                    <th scope="col">
                        <form action="/quran" method="GET">
                            <div class="form-outline">
                                <input type="search" name="search" id="form1" class="form-control" placeholder="Cari Surat" aria-label="Search" />
                            </div>
                        </form>
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dataSurat)
                  <tr>
                    <th scope="row">{{ $dataSurat['nomor'] }}</th>
                    <td>{{ $dataSurat['nama_latin'] }} {{ $dataSurat['nama'] }}</td>
                    <td>{{ $dataSurat['tempat_turun'] }}</td>
                    <td>{{ $dataSurat['jumlah_ayat'] }}</td>
                    <td>
                        {{-- <audio class="bg-light" src="{{ $dataSurat['audio'] }}" controls>
                        </audio> --}}
                    </td>
                    <td><a href="./{{ $dataSurat['nomor'] }}">lihat</a></td>
                  </tr>
                @endforeach
                </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <div class="card mt-5" id="content-box" style="width: 25rem; height: 30rem; background-color:azure">
            <div class="card-body">
                <div class="d-flex mb-2 mt-3">
                    <div class="mr-5 w-45 h-45 p-2 rounded-circle text-warning" >
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <div class="text-white px-4 py-2 bg-warning rounded-pill">
                        Hallo saya bot
                    </div>
                </div>
            </div>
            <div class="container-fluid w-100 px-6 py-2 d-flex">
                <input id="input" type="text" name="input" class="float-end text-success p-2 border border-success rounded-pill">
                <button id="submit" type="button" class="btn btn-success rounded-circle "><i class="fa-solid fa-paper-plane"></i></button>
            </div>

            </div>
          </div>
    </div>
</div>

      @endsection
      {{-- <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12">
              <div class="card mb-4">
                  <div class="card-body">
                      <h5 class="float-start ">{{ $dataSurat['nomor'] }} . &nbsp;</h5>
                      <div class="row">
                          <div class="col-md">
                              <h6 class="card-title fw-bold">{{ $dataSurat['nama'] }}</h5>
                          </div>
                          <div class="col-md">
                              <h6 class=" float-end card-subtitle mb-2 text-body-secondary">{{ $dataSurat['asma'] }}</h6>
                          </div>
                      </div>
                      <p class="card-text">Diturunkan di kota <span class="fw-bold">{{ $dataSurat['type'] }}</span></p>
                      <button type="button" class="btn btn-outline-success btn-sm float-end">
                          Baca Surat
                      </button>
                      <a href="#" class="card-link">Another link</a>
                  </div>
              </div>
          </div>
      </div> --}}
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').atts('content');
        }
    })
    $('#submit').on('click', function(){
        alert("bisa")
        // $value = $('#input').val();
        // $('#content-box').append('<div class="mb-2"><div class="float-right px-3 py-2 bg-success rounded-pill text-white">+$value+</div></div>')
    });
</script>



