<!-- Bootstrap Core JS -->
<script src="{{ asset('admin') }}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('admin') }}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('admin') }}/assets/js/admin.js"></script>

@yield('injected-scripts')

<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').parsley();
        $('.dropify').dropify();
    });
</script>
