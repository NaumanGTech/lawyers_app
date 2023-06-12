@extends('layouts.mainlayout')
@section('content')
    <div class="chat">
        <div class="top">
            <img src="{{asset('front')}}/assets/img/customer/user-05.jpg" alt="" srcset="">
            <div>
                <p>Ross Edlin</p>
                <small>Online</small>
            </div>
        </div>

        <div class="messages">
            @include('front-layouts.pages.chat.receive', ['message' => "Hey! How may I help you?"])
        </div>

        <div class="bottom">
            <form action="">
                <input type="text" id="message" name="message" placeholder="Enter Message Here:">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/chat.css">
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
        const pusher = new Pusher('{{config('broadcasting.connections.pusher.key')}}', {cluster: 'mt1'});
        const channel = pusher.subscribe('public');

        // Receive Messages
        channel.bind('chat', function(data)){
            $.post("/receive", {
                _token: '{{csrf_token()}}',
                message: data.message,
            }).done(function(res){
                $(".messages > .message").last().after(res);
                $(document).scrollTop($(document).height());
            })
        }

        // Broadcast messages
        $(".form").submit(function(event){
            event.preventDefault();

            $.ajax({
                url: "/broadcast",
                method: 'POST',
                headers: {
                    'X-Socket-Id' : pusher.connections.socket_id
                },
                data: {
                    _token: '{{csrf_token()}}',
                    message: $("form #message").val(),
                }
            }).done(function (res){
                $(".messages > .message").last().after(res);
                $("form #message").val("");
                $(document).scrollTop($(document).height());
            });
        });
    </script>
@endsection
