@extends('layouts.mainlayout')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@1.0.4/dist/css/dropify.min.css">

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">

                    <?php
                    $update_id = 0;
                    
                    if (isset($obj->id) && !empty($obj->id)) {
                        $update_id = $obj->id;
                    }
                    ?>

                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Add service</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form class="" action="{{ route('service.store', $update_id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>service Name</label>
                                    <input type="text" name="title"
                                        value="<?= isset($obj->title) && !empty($obj->title) ? $obj->title : '' ?>"
                                        class="form-control" required placeholder="Type something" />
                                </div>
                                <div class="form-group">
                                    <label>service Image</label>
                                    <?php $image = isset($obj->image) && !empty($obj->image) ? $obj->image : ''; ?>
                                    <input name="image" data-default-file="<?= $image ?>" type="file" class="dropify"
                                        data-height="100" />
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Add service</button>
                                    <a href="categories.html" class="btn btn-link">Cancel</a>
                                </div>
                            </form>
                            <!-- Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@1.0.4/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endsection
