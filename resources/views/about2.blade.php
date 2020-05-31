@extends('layouts.app1')
@section('content')
    
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">About
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        {{-- <div class="service-icon">
                            <i class="icon_cone_alt"></i>
                        </div> --}}
                        <h2>About AINET
                        </h2>
                        <p align=" justify">
                          AINET Association of English Teachers (AINET) is a registered English language teacher association in India.  It is an affiliate of IATEFL, UK.  The primary focus of the association is to create opportunities of professional learning for teachers and thereby strive towards quality English language education for students. It is community of people of interest in teaching and learning of English in India – teachers (working in public and private sectors), teacher trainers, teacher educators, publishers, policy makers, educational administrators, researchers, students, and freelancers. AINET welcomes anyone working to promote the growth of teachers and learning of English&nbsp; <a href="/new_about" class="read-more-btn"></a>
                        </p>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    html {
      box-sizing: border-box;
    }
    h6 {text-align: center;}
    p {text-align: center;}

    *, *:before, *:after {
      box-sizing: inherit;
    }
    
    .column {
      float: left;
      width: 16.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    
    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
    
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    
    .container {
      padding: 0 16px;
    }
    
    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }
    
    .title {
      color: grey;
    }
    
    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }
    
    .button:hover {
      background-color: #555;
    }
    </style>
    </head>
    <body>
    
    <h2 align="center">The AINET Team
    </h2>
    <br>
    
    <div class="row">
    <div class="container h-100">

      <div class="column">
        <div class="card">
          <img src="/images/Amol Sir 2.jpg" alt="Jane">
          <div class="container">
            <h6>Dr. Vivek Joshi
            </h6>
            <p class="title" >President
              Associate Professor
              Department of English
              Gondwana University, Gadchiroli </p>
            {{-- <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p> --}}
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="/images/Amol Sir 2.jpg" alt="Jane" >
          <div class="container">
            <h6>Amol Padwad</h6>
            <p class="title">Secretary
              Professor & Director
              Centre for English Language Education
              Ambedkar University, Delhi</p>
            {{-- <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p> --}}
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="/images/Nadeem Khan 2.jpg" alt="Jane" >
          <div class="container">
            <h6>Nadeem Khan</h6>
            <p class="title">Treasurer
              Junior College Teacher
              Nutan Kanya Jr. College, Bhandara
              </p>
            {{-- <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p> --}}
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="/images/Amol Sir 2.jpg" alt="Jane" >
          <div class="container">
            <h6>Dr. Krishna Dixit</h6>
            <p class="title">Jt. Secretary
              Professor
              Centre for English Language Education
              Ambedkar University, Delhi</p>
            {{-- <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p> --}}
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="/images/Amol Sir 2.jpg" alt="Jane" >
          <div class="container">
            <h6>Dr. Padmini Boruah
            </h6>
            <p class="title">Executive Member
              Professor
              Department of English Language Teaching
              Gauhati University, Guwahati</p>
            {{-- <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p> --}}
          </div>
        </div>
      </div>
    
      <div class="column">
        <div class="card">
          <img src="/images/Nadeem Khan 2.jpg" alt="Mike" >
          <div class="container">
            <h6>Milind Mane
            </h6>
            <p class="title">Executive Member
              Assistant Professor & Head
              Department of English
              SJGS Mahavidyalaya, Wardha</p>
            {{-- <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p> --}}
          </div>
        </div>
      </div>
    </div>
    </div>
    

  
    
    
                </div>
            </div>
        </section>
     
    
    </body>
    </html>
    
            
    @endsection

   