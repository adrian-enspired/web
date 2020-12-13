<div class="container-fluid">
    <div class="row">
        <div wire:click="edit({{ $song->id }})" class="col-md-1 edit-handle">
            <i class="fas fa-edit"></i>
        </div>
        <div class="col-md-11">
            <h2 class="song-title">{{ $song->title }}</h2>
            <p>{{ $song->artist }}</p>
        </div>
    </div>

    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Edit User</x-slot>
            <x-slot name="content">
                <h3>{{ $song->title }}</h3>
                <x-input.group for="title" label="Title" :error="$errors->first('song.title')">
                    <x-input.text wire:model.defer="song.title" id="title" value="{{ $song->title }}" />
                </x-input.group>
                <x-input.group for="artist" label="Artist" :error="$errors->first('song.artist')">
                    <x-input.text wire:model.defer="song.artist" id="artist" value="{{ $song->artist }}" />
                </x-input.group>
                <x-input.group for="composer" label="Composer" :error="$errors->first('song.composer')">
                    <x-input.text wire:model.defer="song.composer" id="composer" value="{{ $song->composer }}" />
                </x-input.group>
                <x-input.group for="genre" label="Genre" :error="$errors->first('song.genre')">
                    <x-input.text wire:model.defer="song.genre" id="genre" value="{{ $song->genre }}" />
                </x-input.group>
                <x-input.group for="language" label="Language" :error="$errors->first('song.language')">
                    <x-input.text wire:model.defer="song.language" id="language" value="{{ $song->language }}" />
                </x-input.group>
                <x-input.group for="lyrics" label="Lyrics" :error="$errors->first('song.lyrics')">
                    <x-input.textarea wire:model.defer="song.lyrics" id="lyrics" :value="$song->lyrics" />
                </x-input.group>
                <div class="row">
                    <div class="col-md-3">
                        <x-input.group for="instrumental" label="Instrumental" :inline=true :error="$errors->first('song.instrumental')">
                            <x-input.checkbox wire:model.defer="song.instrumental" id="instrumental" :checked="$song->instrumental"/>
                        </x-input.group>
                    </div>
                    <div class="col-md-3">
                        <x-input.group for="explicit" label="Explicit" :inline=true :error="$errors->first('song.explicit')">
                            <x-input.checkbox wire:model.defer="song.explicit" id="explicit" :checked="$song->explicit" />
                        </x-input.group>
                    </div>
                    <div class="col-md-3">
                        <x-input.group for="live" label="Live" :inline=true :error="$errors->first('song.live')">
                            <x-input.checkbox wire:model.defer="song.live" id="live" :checked="$song->live"/>
                        </x-input.group>
                    </div>
                    <div class="col-md-3">
                        <x-input.group for="cover" label="Cover" :inline=true :error="$errors->first('song.cover')">
                            <x-input.checkbox wire:model.defer="song.cover" id="cover" :checked="$song->cover"/>
                        </x-input.group>
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>
                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
