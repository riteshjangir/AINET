
   @extends('layouts.app1')
   @section('content')
       
   
   
   <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

    <!-- ***** Contact Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4>Thank you for your interest. <br>Please fill out the form below to inquire about our work in AINET.</h4>
                        </div>
                        
                {{-- <!-- Single Contact Card -->
                <div class="col-12 col-lg-3">
                    <div class="contact-sidebar-area mb-80">
                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>Contact Us</h4>
                            <h3>(+65) 1234 5678</h3>
                            <h6>hello.colorlib@gmail.com</h6>
                            <h6>Mon - Fri: 9:00 - 19:00 <br>Closed on Weekends</h6>
                        </div>

                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>London</h4>
                            <h3>(+65) 2222 5678</h3>
                            <h6>49 Charing Cross Rd, London, UK <br>hello.colorlib@gmail.com</h6>
                        </div>

                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>New York</h4>
                            <h3>(+65) 6666 5678</h3>
                            <h6>40 Baria Sreet 13/2 NY City, US <br>hello.colorlib@gmail.com</h6>
                        </div> --}}
                    </div>
                </div>
            </div>
            <form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
                <script type="text/javascript">
                function ValidateForm(frm) {
                if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
                if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
                if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
                if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
                return true; }
                </script>
                <table style="width:550px;border:0;" cellpadding="8" cellspacing="0">
                <tr> <td>
                <label for="Name">Name*:</label>
                </td> <td>
                <input name="Name" type="text" maxlength="60" style="width:250px;" />
                </td> </tr> <tr> <td>
                <label for="PhoneNumber">Phone number:</label>
                </td> <td>
                <input name="PhoneNumber" type="text" maxlength="43" style="width:250px;" />
                </td> </tr> <tr> <td>
                <label for="FromEmailAddress">Email address*:</label>
                </td> <td>
                <input name="FromEmailAddress" type="text" maxlength="90" style="width:250px;" />
                </td> </tr> <tr> <td>
                <label for="Comments">Comments*:</label>
                </td> <td>
                <textarea name="Comments" rows="7" cols="40" style="width:350px;"></textarea>
                </td> </tr> <tr> <td>
                
                </td> <td>
                <div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email"></a></div>
                <input name="skip_Submit" type="submit" value="Submit" />
                <script src="https://www.100forms.com/js/FORMKEY:WCDBM8GDPJPN" type="text/javascript"></script>
                </td> </tr>
                </table>
                </form>
                </div>
                

            <div class="row">
                <!-- Google Maps -->
                <div class="col-12">
                    <div style="margin:0 auto;width:600%;text-align:left">

                        <img src="images/slider/sl5.JPG"  display="block"
                   margin-left= "auto"
                   margin-right= "auto"
                   width="17%">
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

    @endsection
