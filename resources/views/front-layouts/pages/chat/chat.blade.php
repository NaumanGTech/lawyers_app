@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <Chat/>
            We are in chat file
        </div>
    </div>
</div>

<!-- Load the compiled Vue app JavaScript -->
<script type="module" src="{{ mix('/resources/js/app.js') }}"></script>
@endsection
