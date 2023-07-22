@extends('/component/app')

<body class="bg-light">
    @section('content')
    <nav class="navbar navbar-expand-lg border-3 border-bottom border-seccondary">
        <div class="container-fluid text-center">
            <a href="/" class="navbar-brand fs-6 text-seccondary"><i class="fa-solid fa-chevron-left"></i>
                Kembali</a>
            <a class="navbar-brand " href="#">
                <img src="{{ asset('img/equran_logo.png') }}" width="25%" alt="">
            </a>
        </div>
    </nav>
        <div class="row">
            <div class="col py-3 px-2 ">
                <br>
                <table class="table table-hover table-light align-middle mb-0 table-striped" id="">
                    <thead class="text-center">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($response->data as $dataSurat)
                            <tr>
                                <th scope="row">{{ $dataSurat->nomor }}</th>
                                <td class=" text-opacity-75" style="font-family: 'Nunito', sans-serif;">
                                    <span class="fw-semibold">{{ $dataSurat->namaLatin }} </span> <br>
                                    <p class="fs-6 fw-lighter"> {{ $dataSurat->tempatTurun }} | {{ $dataSurat->jumlahAyat }}</p>
                                </td>
                                <td class="fs-4 text-prymar text-opacity-50"
                                    style="font-family: 'Noto Naskh Arabic', serif;">{{ $dataSurat->nama }}</td>
                                <td>
                                    <a href="surat/{{ $dataSurat->nomor }}">
                                        <button type="button" class="btn btn-success btn-floating"><i
                                                class="fa-brands fa-readme"></i></button>
                                    </a>
                                    <button type="button" class="btn btn-success btn-floating"><i
                                            class="fa-solid fa-play"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <audio class="bg-light" src="{{ $dataSurat['audio'] }}" controls>
    </audio> --}}
    @endsection
</body>
