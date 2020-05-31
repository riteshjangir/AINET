@extends('layouts.app')
@section('content')
<div class="all-title-box" style="background: url('images/ainet-logo-fb.png');background-size: contain;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="container text-center">
	
    </div>
</div>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
    .accordion .fa{
        margin-right: 0.5rem;
    }
</style>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
<div id="overviews" class="section lb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h4>FREQUENTLY ASKED QUESTIONS</h4>
                <!-- <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p> -->
            </div>
        </div><!-- end title -->

       <div class="bs-example">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i> WHAT IS AINET?</button>									
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <p>
AINET IS AN ONLINE PAN-INDIA COMMUNITY OF PEOPLE INTERESTED IN THE TEACHING AND LEARNING OF ENGLISH IN INDIA – TEACHERS, TRAINERS, TEACHER EDUCATORS, PUBLISHERS, POLICY MAKERS, EDUCATIONAL AUTHORITIES, RESEARCHERS, STUDENTS, PRIVATE TUTORS AND FREE-LANCERS.

WE WELCOME ANYONE WHO WISHES TO PROMOTE THE GROWTH OF THE TEACHERS AND LEARNERS OF ENGLISH, INCLUDING THEIR OWN, TO BE A PART OF THIS COMMUNITY.

AINET IS AN ASSOCIATE OF THE INTERNATIONAL ASSOCIATION OF TEACHERS OF ENGLISH AS A FOREIGN LANGUAGE (IATEFL), UK. AINET EVOLVED OUT OF A HORNBY ALUMNI PROJECT UNDERTAKEN BY DR. AMOL PADWAD (AMOLPADWAD@GMAIL.COM) AND KRISHNA DIXIT (KRISHNAKDIXIT@GMAIL.COM). </p>
                </div>
            </div>
        </div>
    <div class="accordion" id="accordionExample">
       <div class="card">
            <div class="card-header" id="headingOneone">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOneone"><i class="fa fa-plus"></i> WHY AINET?</button>									
                </h2>
            </div>

            <div id="collapseOneone" class="collapse" aria-labelledby="headingOneone" data-parent="#accordionExample">
                <div class="card-body">
                    <p>
AINET OFFERS AN EFFECTIVE AVENUE FOR PROFESSIONAL NETWORKING AND GROWTH FOR A GEOGRAPHICALLY VAST AND DIVERSE COUNTRY LIKE INDIA WITH THE ADVANTAGE OF HIGH SPEED AT LOW COSTS.



AINET BRINGS YOU RESOURCES, INFORMATION, SUPPORT AND PROFESSIONAL NETWORKING, WHICH WILL ENABLE YOU TO GROW AND TO TAKE YOUR CAREER/ INTEREST TO GREATER HEIGHT AND DEPTH. </p>
                </div>
            </div>
    <div class="accordion" id="accordionExample">
        
 
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i> WHAT DOES AINET OFFER?</button>                     
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p>REGULAR NEWSLETTERS,
INFORMATION ON EVENTS, COURSES, SCHOLARSHIPS, PUBLICATIONS, JOB OPPORTUNITIES,
DISCUSSION FORUMS,
HELP IN RESEARCH AND PUBLICATION,
JOURNALS AND PUBLICATIONS,
ONLINE RESOURCES FOR TEACHING-LEARNING ENGLISH,
SUPPORT FOR ORGANISING ACADEMIC (ELT) EVENTS,
ONLINE HELP TO IMPROVE YOUR ENGLISH AND YOUR TEACHING </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="accordion" id="accordionExample">
        
 
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-plus"></i> WHO CAN JOIN AINET?</button>                     
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <p>AINET IS OPEN TO EVERYONE CONCERNED/RELATED WITH TEACHING AND LEARNING OF ENGLISH – TEACHERS OF ENGLISH AT ALL LEVELS, TEACHER EDUCATORS, MATERIALS WRITERS, TRAINERS AND CONSULTANTS, FREE-LANCE PRACTITIONERS, EDUCATIONAL AUTHORITIES ASSOCIATED WITH ELT, INSTITUTIONS AND BODIES, PUBLISHERS, ELT SERVICE PROVIDERS AND EVEN LAY PERSONS. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="accordionExample">
        
 
        <div class="card">
            <div class="card-header" id="headingFourone">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourone"><i class="fa fa-plus"></i> HOW DO I JOIN AINET?</button>                     
                </h2>
            </div>
            <div id="collapseFourone" class="collapse" aria-labelledby="headingFourone" data-parent="#accordionExample">
                <div class="card-body">
                    <p>AT THE MOMENT AINET DOES NOT HAVE ANY FORMAL MEMBERSHIP. WE WILL UPDATE THIS SPACE AND ALSO ON PUBLIC FORUMS WHEN WE LAUNCH OUR MEMBERSHIP.


TO JOIN US PLEASE REGISTER YOUR EMAIL ID WITH US (LINK ON HOME PAGE) AND ALSO LIKE OUR FACEBOOK PAGE. </p>
                </div>
            </div>
        </div>
    </div>
</div>                </div><!-- end media -->
            </div><!-- end col -->
        </div>
        
@endsection