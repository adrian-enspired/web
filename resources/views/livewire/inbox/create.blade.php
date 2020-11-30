<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-lg-12 align-self-center">
            <h4 class="text-themecolor">Compose New Message</h4>
        </div>
    </div>
    <form wire:submit.prevent="send">
        <div class="row">
            <div class="col-lg-12 bg-light">
                <div class="card-body">
                    <div class="form-group">
                        <select class="selectpicker show-tick" title="Select Recipient(s)" type="text" id="recipients" wire:model.defer="draft.recipients" data-live-search="true" data-show-subtext="true" data-style="btn-info" data-width="100%" required multiple>
                            @foreach($recipients as $user)
                                <option value="{{ $user->id }}" data-subtext="{{ $user->company }}">
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Subject:" wire:model.defer="draft.subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" wire:model.defer="draft.body" rows="15" placeholder="Enter text ..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success m-t-20"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.addEventListener("livewire:load", function (evt) {
            var editor = new wysihtml5.Editor('body');
            $('.textarea_editor').wysihtml5();
            $('.selectpicker').selectpicker();
        });
    </script>
</div>
