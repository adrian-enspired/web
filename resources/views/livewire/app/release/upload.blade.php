<div class="container-fluid">
    <form wire:submit.prevent="save">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Upload Release</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fas fa-save"></i> Save</button>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-6">
                <div class="upload-artwork">
                    <input type="file" name="cover_artwork" id="cover_artwork" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="card m-b-0">
                    <div class="card-body">
                        <div class="form-body">
                            <h3 class="card-title">Release Info</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Release Title">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">Artist(s)</label>
                                        <input type="text" id="artist" name="artist" class="form-control" placeholder="Artist(s)">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row p-t-30">
        <div class="col-md-12">
            <div class="card">
                <form id="upload-song" method="POST" action="{{ route('song.upload') }}" class="dropzone">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("livewire:load", function (evt) {
            $('#cover_artwork').dropify({
                'messages': {
                    'default': 'Drag and drop cover artwork or click here'
                }
            });
            Dropzone.options.uploadSong = {
                createImageThumbnails: false,
                acceptedFiles: '.mp3, .ogg, .wav',
                dictDefaultMessage: 'Drop songs here to add to this release'
            };
        });
    </script>
</div>
