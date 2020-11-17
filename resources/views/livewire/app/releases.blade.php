<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">All Releases</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <a href="/app/release/upload" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Upload Release</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row el-element-overlay">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Releases</h5>
                    <div class="row m-t-30">
                        @forelse ($releases as $release)
                            <div class="col-lg-2 col-md-3">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1">
                                        <img src="{{ $release->release_artwork_url }}" />
                                        <span class="release-status-overlay label label-{{ $release->status_color }}">{{ $release->status }}</span>
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li>
                                                    <a class="img-circle font-20" href="/app/release/{{ $release->id }}"><i class="fas fa-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content text-left">
                                        <h5 class="card-title m-b-0">{{ $release->title }}</h5>
                                        <small class="text-muted">{{ $release->artist }}</small>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h3>No Releases</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
