<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Lawyer Verification</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('front') }}/assets/img/favicon.png">

    <link href="../css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/style.css">

    <style>
        .preview-image {
            display: inline-block;
            width: 100px;
            /* Adjust the width as per your requirements */
            height: 100px;
            /* Adjust the height as per your requirements */
            margin-right: 10px;
            /* Adjust the spacing between images as per your requirements */
        }

        /* Reduce the font size of the default text */
        .dropify-infos-message {
            font-size: 5px !important;
        }

        /* Make the remove button, error message, and replace button visible */
        .dropify-wrapper .dropify-clear {
            display: block;
            color: black !important;
        }

        .dropify-wrapper .dropify-error {
            display: block;
            color: black !important;
        }

        .dropify-wrapper .dropify-replace {
            display: block;
            color: black !important;
        }
    </style>
</head>

<body>

    <div class="main-wrapper">

        <!-- Header -->
        <header class="header">
            <nav class="navbar navbar-expand-lg header-nav">
                <h3 class="text-light">Account Verification</h3>
                <ul class="nav header-navbar-rht ms-auto">
                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow logged-item">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="user-img">
                                <img class="rounded-circle"
                                    src="{{ asset('front') }}/assets/img/provider/provider-01.jpg" alt=""
                                    width="31">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!-- /User Menu -->

                </ul>

            </nav>
        </header>
        <!-- /Header -->

        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2>Please Add The Required Documents</h2>
                            <p>After that you can start providing your services</p>
                        </div>
                        <form method="POST" action="{{ route('lawyer.documents.submit') }}"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <input type="file" name="images[]" class="dropify" multiple>
                                </div>
                            </div>
                            <div id="preview-images-container"></div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('front') }}/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('front') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('front') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('front') }}/assets/js/script.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.dropify').dropify({
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


    <script>
        $(document).ready(function() {
            $('.dropify').dropify({
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

            $('.dropify').on('change', function() {
                var files = $(this).get(0).files;
                var imagesContainer = $('.dropify-wrapper').find('.dropify-preview');

                imagesContainer.empty();
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = $('<img>').addClass('preview-image').attr('src', e.target.result);
                        imagesContainer.append(img);
                    };

                    reader.readAsDataURL(file);
                }
            });
        });
    </script>


</body>

</html>
