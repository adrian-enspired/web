<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">{{ $user->name }}</h4>
        </div>
    </div>
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="{{ $user->profile_photo_url }}" class="img-circle" width="150">
                        <h4 class="card-title m-t-10">{{ $user->name }}</h4>
                        <h6 class="card-subtitle">{{ $user->company }}</h6>
                        <h6 class="card-subtitle">{{ $user->address }}</h6>
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-muted">Email Address </small>
                            <h6 class="p-b-20">{{ $user->email }}</h6>
                            <small class="text-muted p-t-30 db">Phone</small>
                            <h6 class="p-b-20">{{ $user->phone }}</h6>
                        </div>
                        <div class="col-md-6">
                            <small class="text-muted">PayPal Address </small>
                            <h6 class="p-b-20">{{ $user->paypal_email }}</h6>
                            <small class="text-muted p-t-30 db">Bank Account Info</small>
                            <h6 class="p-b-20">{{ $user->bank_account_info }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
            </div>
        </div>
    </div>
</div>
