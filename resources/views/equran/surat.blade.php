@extends('component/app')

<body class="bg-light">
    @section('content')
        <h1 class="
        text-center
        bg-dark
        bg-opacity-25
        p-3
        rounded-top
        rounded-circle
        border-5
        border-bottom
        border-success"
            style="font-family: 'Noto Sans Indic Siyaq Numbers', sans-serif;">بِسْمِ اللّٰهِ الرَّحْمٰنِالرَّحِيْمِ</h1>

        <a href="/E-quran" class="navbar-brand fs-6 text-seccondary float-start">
            <i class="fa-solid fa-chevron-left"></i>
            Kembali
        </a>
        <table class="table table-striped align-middle mb-0 mt-2 table-light">
            <thead>
                <tr class="text-center">
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <audio id="myAudio">
                    {{-- <source src="horse.ogg" type="audio/ogg"> --}}
                    {{-- <source src="{{ $surat['audio'] }}" type="audio/mpeg"> --}}
                    Your browser does not support the audio element.
                </audio>

                @foreach ($response->ayat as $surat)
                    <tr>
                        <th scope="row" class="text-center">{{ $surat->nomor }}. &nbsp;&nbsp;</th>
                        <td class="fs-6 text-opacity-50">{{ $surat->idn }}</td>
                        <td></td>
                        <td colspan="1">
                            <p class=" fw-bolder fs-5">{{ $surat->ar }} <br>
                                <span
                                    class="fs-6 fst-italic fw-light text-seccondary text-opacity-50">{{ $surat->tr }}</span>
                            </p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @foreach ($response as $surat)
            <div class="accordion accordion-flush sticky-bottom" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Selengkapnya
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
</body>
