<form wire.change="save">
    <div class="card">
        <span class="drag">
        </span>
        <div class="card-body">
            <h5 class="card-title m-b-5 border-bottom text-center">Track #{{ $song->track_number }} - {{ $song->original_filename }}</h5>
            <div class="row p-l-10 p-r-10">
                <div class="col-md-6 form-group m-b-3">
                    <label class="m-b-0">Title</label>
                    <input wire:model="song.title" wire:change="save" class="form-control">
                </div>
                <div class="col-md-6 form-group m-b-3">
                    <label class="m-b-0">Artist</label>
                    <input wire:model="song.artist" wire:change="save" class="form-control">
                </div>
            </div>
            <div class="row p-l-10 p-r-10">
                <div class="col-md-6 form-group m-b-3">
                    <label class="m-b-0">Composer</label>
                    <input wire:model="song.composer" wire:change="save" class="form-control">
                </div>
                <div class="col-md-6 form-group m-b-3">
                    <label class="m-b-0">Lyrics</label>
                    <input wire:model="song.lyrics" wire:change="save" class="form-control">
                </div>
            </div>
            <div class="row p-l-10 p-r-10">
                <div class="col-md-6 form-group m-b-3">
                    <label class="m-b-0">Genre</label>
                    <input wire:model="song.genre" wire:change="save" class="form-control">
                </div>
                <div class="col-md-6 form-group m-b-3">
                    <label class="m-b-0">Language</label>
                    <input wire:model="song.language" wire:change="save" class="form-control">
                </div>
            </div>
            <div class="row p-l-10 p-r-10">
                <div class="col-md-3 form-group m-b-3">
                    <div class="custom-control custom-checkbox mb-3">
                        <input wire:model="song.explicit" wire:change="save" type="checkbox" class="custom-control-input" id="explicit-{{ $song->id }}">
                        <label class="custom-control-label" for="explicit-{{ $song->id }}">Explicit</label>
                    </div>
                </div>
                <div class="col-md-3 form-group m-b-3">
                    <div class="custom-control custom-checkbox mb-3">
                        <input wire:model="song.cover" wire:change="save" type="checkbox" class="custom-control-input" id="cover-{{ $song->id }}">
                        <label class="custom-control-label" for="cover-{{ $song->id }}">Cover</label>
                    </div>
                </div>
                <div class="col-md-3 form-group m-b-3">
                    <div class="custom-control custom-checkbox mb-3">
                        <input wire:model="song.instrumental" wire:change="save" type="checkbox" class="custom-control-input" id="instrumental-{{ $song->id }}">
                        <label class="custom-control-label" for="instrumental-{{ $song->id }}">Instrumental</label>
                    </div>
                </div>
                <div class="col-md-3 form-group m-b-3">
                    <div class="custom-control custom-checkbox mb-3">
                        <input wire:model="song.live" wire:change="save" type="checkbox" class="custom-control-input" id="live-{{ $song->id }}">
                        <label class="custom-control-label" for="live-{{ $song->id }}">Live</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
