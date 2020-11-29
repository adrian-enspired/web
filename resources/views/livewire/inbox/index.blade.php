<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-lg-5 align-self-center">
            <h4 class="text-themecolor">Messages</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <x-button.primary wire:click="create"><x-icon.plus />Create Message</x-button.primary>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="col-lg-12 col-md-8 bg-light">
                <div class="card-body p-t-0">
                    <div class="card b-all shadow-none">
                        <div class="inbox-center table-responsive">
                            <table class="table table-hover no-wrap">
                                <tbody>
                                    @forelse($threads as $thread)
                                        <tr class="{{ $thread->isUnread() ? 'unread' : '' }}">
                                            <td class="hidden-xs-down">{{ $thread->user->name }}</td>
                                            <td class="max-texts">{{ $thread->subject }}</td>
                                            <td class="text-right">{{ $thread->updated_at->diffForHumans() }}</td>
                                        </tr>
                                    @empty
                                        <div class="list-group-item p-5">
                                            <h3 class="text-center font-weight-bold">There are no messages</h3>
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
