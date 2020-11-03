<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">All Users</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <x-button.primary wire:click="create"><x-icon.plus />Create User</x-button.primary>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body space-y-4">
                    <h5 class="card-title m-b-20">Users</h5>
                    <div>
                        <div class="w-1/4">
                            <x-input.text wire:model="search" placeholder="Search Names..." />
                        </div>
                    </div>
                    <div class="flex-column space-y-4">
                        <x-table>
                            <x-slot name="head">
                                <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField === 'name' ? $sortDirection : null">Name</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('email')" :direction="$sortField === 'email' ? $sortDirection : null">Email</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('company')" :direction="$sortField === 'company' ? $sortDirection : null">Company</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('updated_at')" :direction="$sortField === 'updated_at' ? $sortDirection : null">Updated On</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('admin')" :direction="$sortField === 'admin' ? $sortDirection : null">Admin</x-table.heading>
                                <x-table.heading/>
                            </x-slot>
                            <x-slot name="body">
                                @forelse ($users as $user)
                                    <x-table.row wire:loading.class.delay="opacity-50">
                                        <x-table.cell>
                                            <span class="inline-flex space-x-2 truncate text-sn leading-5">
                                                <p class="text-cool-gray-600 truncate">
                                                    {{ $user->name }}
                                                </p>
                                            </span>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <span class="inline-flex space-x-2 truncate text-sn leading-5">
                                                <p class="text-cool-gray-600 truncate">
                                                    {{ $user->email }}
                                                </p>
                                            </span>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <span class="inline-flex space-x-2 truncate text-sn leading-5">
                                                <p class="text-cool-gray-600 truncate">
                                                    {{ $user->company }}
                                                </p>
                                            </span>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <span class="inline-flex space-x-2 truncate text-sn leading-5">
                                                <p class="text-cool-gray-600 truncate">
                                                    {{ $user->updated_at->format('M, d Y H:m:s') }}
                                                </p>
                                            </span>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <span class="inline-flex items-center px-2.5 rounded-full text-xs font-medium leading-4 bg-{{ $user->admin_color }}-100 text-{{ $user->admin_color }}-800 capitalize">
                                                {{ $user->admin ? 'Yes' : 'No' }}
                                            </span>
                                        </x-table.cell>
                                        <x-table.cell>
                                            <x-button.link wire:click="edit({{ $user->id }})" class="fas fa-edit"></x-button.link>
                                        </x-table.cell>
                                    </x-table.row>
                                @empty
                                    <x-table.row>
                                        <x-table.cell colspan="6">
                                            <div class="flex justify-center items-center">
                                                <span class="py-8 font-medium text-cool-gray-300 text-xl">No users found.</span>
                                            </div>
                                        </x-table-cell>
                                    </x-table.row>
                                @endforelse
                            </x-slot>
                        </x-table>
                        <div>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Edit User</x-slot>
            <x-slot name="content">
                <x-input.group for="name" label="Name" :error="$errors->first('editing.name')">
                    <x-input.text wire:model.defer="editing.name" id="name" />
                </x-input.group>
                <x-input.group for="email" label="Email" :error="$errors->first('editing.email')">
                    <x-input.text wire:model.defer="editing.email" id="email" />
                </x-input.group>
                @unless($editing->id)
                    <x-input.group for="password" label="Password" :error="$errors->first('editing.password')">
                        <x-input.password wire:model.defer="editing.password" id="password" />
                    </x-input.group>
                @endunless
                <x-input.group for="company" label="Company" :error="$errors->first('editing.company')">
                    <x-input.text wire:model.defer="editing.company" id="company" />
                </x-input.group>
                <x-input.group for="phone" label="Phone" :error="$errors->first('editing.phone')">
                    <x-input.text wire:model.defer="editing.phone" id="phone" />
                </x-input.group>
                <x-input.group for="admin" label="Administrator" :error="$errors->first('editing.admin')">
                    <x-input.checkbox wire:model.defer="editing.admin" id="admin" />
                </x-input.group>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>
                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
