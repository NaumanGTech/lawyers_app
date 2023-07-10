<!-- jQuery -->
<script data-cfasync="false" src="{{ asset('front') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
</script>
<script src="{{ asset('front') }}/assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('front') }}/assets/js/popper.min.js"></script>
<script src="{{ asset('front') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Owl JS -->
<script src="{{ asset('front') }}/assets/plugins/owlcarousel/owl.carousel.min.js"></script>

<!-- Aos -->
<script src="{{ asset('front') }}/assets/plugins/aos/aos.js"></script>

<!-- Custom JS -->
<script src="{{ asset('front') }}/assets/js/script.js"></script>

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

<script src="{{ asset('front') }}/assets/plugins/dist/js/bs-dropzone.js"></script>

<script>
    $(document).ready(function() {
        $('.degree-dropify').dropify({
            messages: {
                default: 'Upload Document',
                replace: 'Drag and drop or click to replace',
                remove: 'Remove',
                error: 'Error while uploading file',
            },
            error: {
                fileSize: 'The file size is too big.',
                fileExtension: 'The selected file format is not allowed.',
            },
        });
    });
</script>

@yield('injected-scripts')
