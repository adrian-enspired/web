<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-lg-12 align-self-center">
            <h4 class="text-themecolor">Compose New Message</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 bg-light">
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control" placeholder="To:">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Subject:">
                </div>
                <div class="form-group">
                    <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                </div>
                <button type="submit" class="btn btn-success m-t-20"><i class="fa fa-envelope-o"></i> Send</button>
                <button class="btn btn-dark m-t-20"><i class="fa fa-times"></i> Discard</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("livewire:load", function (evt) {
            $('.textarea_editor').wysihtml5();
        });
    </script>
</div>
