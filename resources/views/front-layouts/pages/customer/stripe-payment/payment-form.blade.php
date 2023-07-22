@extends('front-layouts.master-user-layout')
@section('content')


    <div class="col-xl-9 col-md-8">
        <div class="row">
           <h3>Pay Now</h3>
         <p>Please enter Your carrd credentials for payment</p>

            <div class="col-lg-12">
                <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false"
                    data-stripe-publishable-key="pk_test_51LDUI4JHbj47Pk0aNwKtJ3UNoIGeVzsKn50AqwuERtxnQLRdEEgMZfeqacyJsJW6NZqbUzo3jZembGgOBT2wmWKe00i18Omh8o"
                    id="payment-form" method="post">
                    @csrf

                    <input class='form-control amount'
                    placeholder='YYYY' size='4' type='hidden' value="{{$orderDetail->amount ?? ""}}">

                    <div class='form-row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Card Holder Name</label> <input class='form-control'
                                size='4' type='text' placeholder="Enter Card Holder Name">
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label> <input autocomplete='off'
                                class='form-control card-number' size='20' type='text'
                                placeholder="Enter Card number">
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='CVV' size='4' type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'>Expiration</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'>YEAR</label> <input class='form-control card-expiry-year'
                                placeholder='YYYY' size='4' type='text'>
                        </div>
                    </div>
             
                    <div class='form-row'>
                        <div class='col-md-12 form-group'>
                            <button class='form-control btn btn-primary submit-button' type='submit'
                                style="margin-top: 10px;">Confirm</button>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.</div>
                        </div>
                    </div>
                </form>
                @if (Session::has('success-message'))
                    <div class="alert alert-success col-md-12">{{ Session::get('success-message') }}</div>
                    @endif @if (Session::has('fail-message'))
                        <div class="alert alert-danger col-md-12">{{ Session::get('fail-message') }}</div>
                    @endif
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"
    integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
</script>
<script>
    $(function() {
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(e.target).closest('form'),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;

            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault(); // cancel on first error
                }
            });
        });
    });

    $(function() {
        var $form = $("#payment-form");

        $form.on('submit', function(e) {
            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val(),
                   
                }, stripeResponseHandler);
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                var orderAmount = "{{ $orderDetail->amount ?? "" }}";
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.append("<input class='form-control amount' name='amount' type='hidden' value='" + orderAmount + "'/>");
                console.log(token);
                $form.get(0).submit();
            }
        }
    })
</script>
@endsection
