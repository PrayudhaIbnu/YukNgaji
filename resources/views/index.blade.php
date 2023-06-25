@extends('/component/app')

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
    {{-- <div class="col-md-4">
        <div class="chat_window">
            <div class="top_menu">
                <div class="buttons">
                    <div class="button close"></div>
                    <div class="button minimize"></div>
                    <div class="button maximize"></div>
                </div>
                <div class="title">Chat</div>
            </div>
            <ul class="messages"></ul>
            <div class="bottom_wrapper clearfix">
                <div class="message_input_wrapper">
                    <input class="message_input" placeholder="Type your message here..." />
                </div>
                <div class="send_message">
                    <div class="icon"></div>
                    <div class="text">Send</div>
                </div>
            </div>
        </div>
        <div class="message_template">
            <li class="message">
                <div class="avatar"></div>
                <div class="text_wrapper">
                    <div class="text"></div>
                </div>
            </li>
        </div>
    </div> --}}
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
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{-- <script type="text/javascript">
(function () {
    var Message;
          Message = function (arg) {
              this.text = arg.text, this.message_side = arg.message_side;
              this.draw = function (_this) {
                  return function () {
                      var $message;
                      $message = $($('.message_template').clone().html());
                      $message.addClass(_this.message_side).find('.text').html(_this.text);
                      $('.messages').append($message);
                      return setTimeout(function () {
                          return $message.addClass('appeared');
                        }, 0);
                    };
                }(this);
                return this;
            };
            $(function () {
              var getMessageText, message_side, sendMessage;
              message_side = 'right';
              getMessageText = function () {
                  var $message_input;
                  $message_input = $('.message_input');
                  return $message_input.val();
              };
              sendMessage = function (text) {
                  var $messages, message;
                  if (text.trim() === '') {
                      return;
                  }
                  $('.message_input').val('');
                  $messages = $('.messages');
                  message_side = message_side === 'left' ? 'right' : 'left';
                  message = new Message({
                      text: text,
                      message_side: message_side
                  });
                  message.draw();
                  return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);
              };
              $('.send_message').click(function (e) {
                  return sendMessage(getMessageText());
              });
              $('.message_input').keyup(function (e) {
                  if (e.which === 13) {
                      return sendMessage(getMessageText());
                  }
              });
              sendMessage('Hello Philip! :)');
              setTimeout(function () {
                  return sendMessage('Hi Sandy! How are you?');
              }, 1000);
              return setTimeout(function () {
                  return sendMessage('I\'m fine, thank you!');
              }, 2000);
          });
      }.call(this));
</script> --}}



