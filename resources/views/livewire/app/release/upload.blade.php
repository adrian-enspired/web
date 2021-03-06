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
        <div class="row">
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
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">Label</label>
                                        <input type="text" id="label" name="label" class="form-control" placeholder="Label">
                                    </div>
                                </div>
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
                <form id="upload-song" action="#" class="song-dropzone">
                    @csrf
                    <div class="dropify-wrapper">
                        <div class="dropify-message">
                            <span class="file-icon"></span>
                            <p>Drag and drop songs or click here</p>
                        </div>
                        <div class="dropify-loader"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Song List <span class="note">(type to change titles,  drag and drop to re-order)</span></h3>
                    <hr>
                    <ul id="songs">
                        @foreach ($songs as $song)
                            <li class="song-li" data-song-id="{{ $song['id'] }}">
                                @livewire('app.release.song', ['song' => $song], key($song['id']))
                            </li>
                        @endforeach
                    </ul>
                </div>
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

            var updateTrackNumbers = () => {
                //document.querySelectorAll('li.song-li').forEach((li) => {})
                //
                //[...document.querySelectorAll('li.song-li')]
                //    .map((li) => li.dataset.songId)
                //    .join(',');
            };

            var dz = new Dropzone('#upload-song', {
                createImageThumbnails: false,
                autoProcessQueue: false,
                uploadMultiple: true,
                acceptedFiles: '.mp3, .ogg, .wav',
                clickable: ['.song-dropzone', '#upload-song > .dropify-wrapper']
            });
            dz.on('addedfiles', function (files) {
                @this.uploadMultiple('new_songs', files, (filename) => {
                    console.log('upload success', filename);
                    updateTrackNumbers();
                }, (error) => {
                    console.log('upload error', error)
                }, (event) => {
                    console.log('upload progress', event);
                });
                dz.removeAllFiles();
            });

            new Sortable($('#songs')[0],{
                animation: 150,
                onUpdate: updateTrackNumbers
            });
        });
    </script>
</div>
