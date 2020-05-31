@extends('layouts.app')
@section('content')
<div class="all-title-box" style="background: url('images/ainet-logo-fb.png');background-size: contain;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="container text-center">
        <h1 class="tai-mt-0"><span class="m_1"></span></h1>
    </div>
</div>
<div id="overviews" class="section lb">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="images/ann1.JPG" class="img-thumbnail" alt="" data-toggle="modal"
                    data-target="#announ-model-one" style="cursor:zoom-in">
                <!-- Modal -->
                <div class="modal fade" id="announ-model-one" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true" style="cursor:zoom-out">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-body">
                            <img src="images/ann1.JPG" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/ann2.JPG" class="img-thumbnail" alt="" data-toggle="modal"
                    data-target="#announ-model-two" style="cursor:zoom-in">
                <!-- Modal -->
                <div class="modal fade" id="announ-model-two" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true" style="cursor:zoom-out">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-body">
                            <img src="images/ann2.JPG" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/ann3.JPG" class="img-thumbnail" alt="" data-toggle="modal"
                    data-target="#announ-model-three" style="cursor:zoom-in">
                <!-- Modal -->
                <div class="modal fade" id="announ-model-three" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true" style="cursor:zoom-out">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-body">
                            <img src="images/ann3.JPG" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center ">
         
			                        <li><a class="btn btn-lg w3-orange" href="images/AINET 2020 Announcement.pdf"><span>Download PDF copy of Announcement</span></a></li>

        </div>
    </div><!-- end col -->
</div>
@endsection