<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-lg-5 align-self-center">
            <h4 class="text-themecolor"><strong>{{ $thread->subject }}</strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="col-lg-12 col-md-8 bg-light">
                    <div class="card-body p-t-0">
                        <div class="card b-all shadow-none">
                            <div class="card-body">
                                <div class="row border-bottom">
                                    <div class="col-md-1 border-right">
                                        <strong>From</strong>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="d-flex m-b-40">
                                            <div>
                                                <img src="{{ $thread->user->profile_photo_url }}" alt="user" width="40" class="img-circle" />
                                            </div>
                                            <div class="p-l-10">
                                                <h4 class="m-b-0">{{ $thread->user->name }}</h4>
                                                <small class="text-muted">{{ $thread->user->company }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($admin)
                                    <div class="row border-bottom p-t-15">
                                        <div class="col-md-1 border-right">
                                            <strong>Recipients</strong>
                                        </div>
                                        <div class="col-md-11 d-flex flex-wrap">
                                            @foreach ($thread->recipients as $recipient)
                                                <div class="d-flex w-60 m-b-40">
                                                    <div>
                                                        <img src="{{ $recipient->profile_photo_url }}" alt="user" width="40" class="img-circle" />
                                                    </div>
                                                    <div class="p-l-10">
                                                        <h4 class="m-b-0">{{ $recipient->name }}</h4>
                                                        <small class="text-muted">{{ $recipient->company }}</small>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <hr class="m-t-0">
                            </div>
                            @foreach ($messages as $message)
                                <div class="card-body">
                                    <div class="d-flex m-b-40">
                                        <div>
                                            <a href="javascript:void(0)"><img src="{{ $message->user->profile_photo_url }}" alt="user" width="40" class="img-circle" /></a>
                                        </div>
                                        <div class="p-l-10">
                                            <h4 class="m-b-0">{{ $message->user->name }}</h4>
                                            <small class="text-muted">{{ $message->user->company }}</small>
                                        </div>
                                    </div>
                                    <p>{{ $message->body }}</p>
                                </div>
                                <div>
                                    <hr class="m-t-0">
                                </div>
                            @endforeach
                            <div class="card-body">
                                <div class="b-all m-t-20 p-20">
                                    <p class="p-b-20">click here to <a href="javascript:void(0)">Reply</a> or <a href="javascript:void(0)">Forward</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
