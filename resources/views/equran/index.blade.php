@extends('/component/app')

<body class="bg-light">
@section('content')
    <div class="row">
        <div class="col py-3 px-2 ">
            <br>
            <table class="table table-hover align-middle mb-0 table-striped" id="">
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
                            <span class="fw-semibold">{{ $dataSurat->namaLatin }}   </span> <br>
                            <p class="fs-6 fw-lighter" > {{ $dataSurat->tempatTurun }} | {{ $dataSurat->jumlahAyat }}</p>
                        </td>
                        <td class="fs-4 text-prymar text-opacity-50" style="font-family: 'Noto Naskh Arabic', serif;">{{ $dataSurat->nama }}</td>
                        <td>
                            <a href="surat/{{ $dataSurat->nomor }}">
                                <button type="button" class="btn btn-outline rounded-circle p-3 btn-sm m-2"><i class="fa-brands fa-readme"></i></button>
                            </a>
                            <button type="button" class="btn btn-outline-warning rounded-circle p-3 btn-sm m-2"><i class="fa-solid fa-play"></i></button>
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



