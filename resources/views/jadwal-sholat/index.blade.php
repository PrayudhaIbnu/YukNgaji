@extends('component/app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($response->lokasi as $kota)
        <tr>
            <th scope="row">1</th>
            <td>{{ $kota['lokasi'] }}</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
