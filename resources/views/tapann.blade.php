@extends('layouts.app')
@section('content')

<div class="all-title-box" style="background: url('images/ainet-logo-fb.png');background-size: contain;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="container text-center">
    </div>
</div>
<div id="overviews" class="section lb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="images/announcement-page-001.jpg" class="img-thumbnail" alt="" data-toggle="modal"
                    data-target="#announ-model-one" style="cursor:zoom-in">
                <!-- Modal -->
                <div class="modal fade" id="announ-model-one" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true" style="cursor:zoom-out">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-body">
                            <img src="images/announcement-page-001.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <img src="images/announcement-page-002.jpg" class="img-thumbnail" alt="" data-toggle="modal"
                    data-target="#announ-model-two" style="cursor:zoom-in">
                <!-- Modal -->
                <div class="modal fade" id="announ-model-two" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true" style="cursor:zoom-out">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-body">
                            <img src="images/announcement-page-002.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
			<hr>
            <div class="col-md-12">
                <img src="images/announcement-page-003.jpg" class="img-thumbnail" alt="" data-toggle="modal"
                    data-target="#announ-model-three" style="cursor:zoom-in">
                <!-- Modal -->
                <div class="modal fade" id="announ-model-three" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true" style="cursor:zoom-out">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-body">
                            <img src="images/announcement-page-003.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <a href="files/ainet-hornby-trust-ta-project-announcement.pdf" target="_blank" class="btn w3-btn w3-border w3-border-orange">Download PDF of Announcement</a>
        </div>
    </div><!-- end col -->
</div>
@endsection
