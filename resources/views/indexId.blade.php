@extends('component/app')

@section('content')

<h1 class="text-center bg-warning bg-opacity-25 p-3 rounded-top rounded-circle border-5

r border-bottom border-warning" style="font-family: 'Noto Sans Indic Siyaq Numbers', sans-serif; color: rgb(253, 219, 173)" >بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>

<table class="table table-striped align-middle mb-0 mt-2 table-dark">
    <thead>
      <tr class="text-center">
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach($response->ayat as $surat)
        <audio id="myAudio">
            {{-- <source src="horse.ogg" type="audio/ogg"> --}}
            <source src="{{ $surat['audio'] }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <tr>
            <th scope="row" class=" text-white text-center" >{{ $surat->nomor }}. &nbsp;&nbsp;</th>
            <td class="fs-6 text-light text-opacity-50">{{ $surat->idn }}</td>
            <td></td>
            <td colspan="1">
                <p class=" fw-bolder fs-5" style="color: rgb(253, 219, 173);" >{{ $surat->ar }} <br>
                    <span class="fs-6 fst-italic fw-light text-opacity-50 text-light">{{ $surat->tr }}</span>
                </p>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
