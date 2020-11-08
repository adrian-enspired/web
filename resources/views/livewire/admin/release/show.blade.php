<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-lg-12 align-self-center">
            <h4 class="text-themecolor">{{ $release->title }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="user-bg"> <img width="100%" src="{{ $release->release_artwork_url }}"> </div>
                <div class="card-body">
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12 border-bottom m-b-20 p-b-20">
                            <h5 class="card-title">{{ $release->title }}</h5>
                            <h6>{{ $release->artist }}</h6>
                        </div>
                        <div class="col-md-6 border-right">
                            <strong>Created</strong>
                            <p>{{ $release->created_at }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Updated</strong>
                            <p>{{ $release->updated_at }}</p>
                        </div>
                    </div>
                    <hr>
                    <!-- /.row -->
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-6 border-right">
                            <strong>Songs</strong>
                            <p>{{ $release->songs->count() }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Status</strong>
                            <p>
                                <span class="items-center px-6 rounded-full text-xs font-medium leading-4 bg-{{ $release->status_color }}-100 text-{{ $release->status_color }}-800 capitalize">
                                    {{ $release->status }}
                                </span>
                            </p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Songs</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Artist</th>
                                    <th>Genre</th>
                                    <th>Duration</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($release->songs as $song)
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);" class="group inline-flex space-x-2 truncate text-sm leading-5" wire:click="showSong({{ $song->id }})">
                                                <p class="text-cool-gray-800 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    {{ $song->title }}
                                                </p>
                                            </a>
                                        </td>
                                        <td>{{ $song->artist }}</td>
                                        <td>{{ $song->genre }}</td>
                                        <td>2:58</td>
                                        <td class="text-nowrap">
                                            {{-- @TODO Add this later --}}
                                            {{-- <a href="" data-toggle="tooltip" data-original-title="Play" class="link"> <i class="fa fa-play m-r-10"></i> </a> --}}
                                            <a href="{{ $song->song_url }}" data-toggle="tooltip" data-original-title="Download" class="link" download> <i class="fa fa-download m-r-10"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modal.dialog wire:model.defer="showSongModal">
        <x-slot name="title">{{ $song->title }}</x-slot>
        <x-slot name="content">
            <div class="card">
                <div class="row text-center m-t-10 border-top">
                    <div class="col-md-6 border-right">
                        <strong>Title</strong>
                        <p>{{ $song->title }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Artist</strong>
                        <p>{{ $song->artist }}</p>
                    </div>
                </div>
                <div class="row text-center m-t-10 border-top">
                    <div class="col-md-6 border-right">
                        <strong>Composer</strong>
                        <p>{{ $song->composer }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Lyrics</strong>
                        <p>{{ $song->lyrics }}</p>
                    </div>
                </div>
                <div class="row text-center m-t-10 border-top">
                    <div class="col-md-6 border-right">
                        <strong>Genre</strong>
                        <p>{{ $song->genre }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Language</strong>
                        <p>{{ $song->language }}</p>
                    </div>
                </div>
                <div class="row text-center m-t-10 border-top">
                    <div class="col-md-6 border-right">
                        <strong>Instrumental</strong>
                        <p>{{ $song->instrumental ? 'Yes' : 'No' }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Explicit</strong>
                        <p>{{ $song->explicit ? 'Yes' : 'No' }}</p>
                    </div>
                </div>
                <div class="row text-center m-t-10 border-top">
                    <div class="col-md-6 border-right">
                        <strong>Created On</strong>
                        <p>{{ $song->created_at }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Updated On</strong>
                        <p>{{ $song->updated_at }}</p>
                    </div>
                </div>
                <div class="row text-center m-t-10">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 m-t-25 m-b-0 p-b-0 h-10">
                        {{-- @TODO: make this better --}}
                        <audio controls>
                            <source src="{{ $song->song_url }}" />
                        </audio>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
        </x-slot>
    </x-modal.dialog>
</div>
