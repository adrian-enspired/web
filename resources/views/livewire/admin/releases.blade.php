<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">All Releases</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body space-y-4">
                    <h5 class="card-title m-b-20">Releases</h5>
                    <div>
                        <div class="w-1/4">
                            <x-input.text wire:model="search" placeholder="Search Titles..." />
                        </div>
                    </div>
                    <div class="flex-column space-y-4">
                        <x-table>
                            <x-slot name="head">
                                <x-table.heading/>
                                <x-table.heading sortable wire:click="sortBy('title')" :direction="$sortField === 'title' ? $sortDirection : null">Title</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('artist')" :direction="$sortField === 'artist' ? $sortDirection : null">Artist</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('user_id')" :direction="$sortField === 'user_id' ? $sortDirection : null">User</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('status')" :direction="$sortField === 'status' ? $sortDirection : null">Status</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('updated_at')" :direction="$sortField === 'updated_at' ? $sortDirection : null">Updated On</x-table.heading>
                                <x-table.heading/>
                            </x-slot>
                            <x-slot name="body">
                                @forelse ($releases as $release)
                                    <x-table.row wire:loading.class.delay="opacity-50" class="{{ $release->featured ? 'bg-lightyellow' : '' }}">
                                        <x-table.cell class="inline-flex">
                                            <a href="/admin/release/{{ $release->id }}">
                                                <img class="tbl-cover-art" src="{{ $release->release_artwork_url }}">
                                            </a>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <a href="/admin/release/{{ $release->id }}" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <p class="text-cool-gray-800 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    <strong>{{ $release->title }}</strong>
                                                </p>
                                            </a>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <span class="inline-flex space-x-2 truncate text-sn leading-5">
                                                <p class="text-cool-gray-600 truncate">
                                                    {{ $release->artist }}
                                                </p>
                                            </span>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <span class="inline-flex space-x-2 truncate text-sn leading-5">
                                                <p class="text-cool-gray-600 truncate">
                                                    <a href="/admin/user/{{ $release->user->id }}" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                        <p class="text-cool-gray-800 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                            <strong>{{ $release->user->name }}</strong>
                                                        </p>
                                                    </a>
                                                </p>
                                            </span>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <span class="inline-flex items-center px-2.5 rounded-full text-xs font-medium leading-4 bg-{{ $release->status_color }}-100 text-{{ $release->status_color }}-800 capitalize">
                                                {{ $release->status }}
                                            </span>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <span class="inline-flex space-x-2 truncate text-sn leading-5">
                                                <p class="text-cool-gray-600 truncate">
                                                    {{ $release->updated_at->format('M, d Y H:m:s') }}
                                                </p>
                                            </span>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <x-button.link wire:click="edit({{ $release->id }})" class="fas fa-edit"></x-button.link>
                                        </x-table.cell>
                                    </x-table.row>
                                @empty
                                    <x-table.row>
                                        <x-table.cell colspan="6">
                                            <div class="flex justify-center items-center">
                                                <span class="py-8 font-medium text-cool-gray-300 text-xl">No releases found.</span>
                                            </div>
                                        </x-table-cell>
                                    </x-table.row>
                                @endforelse
                            </x-slot>
                        </x-table>
                        <div>
                            {{ $releases->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Edit Release</x-slot>
            <x-slot name="content">
                <x-input.group for="title" label="Title" :error="$errors->first('editing.title')">
                    <x-input.text wire:model.defer="editing.title" id="title" />
                </x-input.group>
                <x-input.group for="artist" label="Artist" :error="$errors->first('editing.artist')">
                    <x-input.text wire:model.defer="editing.artist" id="artist" />
                </x-input.group>
                <x-input.group for="status" label="Status" :error="$errors->first('editing.status')">
                    <x-input.select name="status">
                        @foreach ($release_status as $status)
                            <option value="{{ $status }}" {{ $status === $editing->status ? 'selected' : '' }}>{{ $status }}</option>
                        @endforeach
                    </x-input.select>
                </x-input.group>
                <x-input.group for="featured" label="Featured" :error="$errors->first('editing.featured')">
                    <x-input.checkbox wire:model.defer="editing.featured" id="featured" />
                </x-input.group>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>
                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
