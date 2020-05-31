@extends('layouts.app1')
@section('content')
<script src="https://www.w3schools.com/lib/w3.js"></script>


<script language='javascript' type='text/javascript'>
    function show_hide(id2hide, id2show) {
        document.getElementById(id2hide).style.visibility = 'hidden';
        document.getElementById(id2show).style.visibility = 'visible';
    }

</script>

<style>
    #myP {
        display: none;
    }

</style>
<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Membership</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Membership</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-8">
            <br><br><br><br>
            @if (session('status') && session('status') === "success")
            <div class="card w3-border-orange">
                <div class="card-header w3-orange w3-border-orange">{{ __('DELEGATE REGISTRATION FORM') }}</div>
                <div class="card-body">
                    Thank you for your interest! Your membership is subject to successful payment. We will get back to
                    you with the membership details within 7 days of payment. For any queries releated to membership,
                    email us at <font size="3" color="red">theainet@gmail.com</font>
                    .
                    {{-- <h4>Your User Id Is {{ session('autoid') }}</h4> --}}
                    {{-- <br /><a type="button" class="btn w3-orange" href="https://imjo.in/4ZntZF"
                        style="background-color:#DF068C;padding:0px 10px 10px 10px;color:white;">Make A Payment</a> --}}
                    <a href="{{ url('print/form', []) }}" class="btn btn-primary">Continue</a>
                </div>

            </div>
            <br>
            <br>
            @else
            <div class="card w3-border-orange">
                <div class="card-header w3-orange w3-border-orange">{{ __('Become A Member') }}</div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#new">New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#renew">Renew</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-3">
                    <div class="tab-pane container fade" id="new">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item" id="indiaTab">
                                <a class="nav-link" data-toggle="tab" href="#india">India</a>
                            </li>
                            <li class="nav-item" id="overTab">
                                <a class="nav-link" data-toggle="tab" href="#over">Overseas</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane container" id="india">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#india_indi">Individual</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#india_inst">Institition</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane container fade" id="india_indi">
                                        <form action="/register/new/individual" method="post">
                                            @csrf
                                            <br>
                                            <br>
                                            <p>
                                                <span style="color:#FF0000">* All Field Mandatory</span>
                                            </p>
                                            <div class="form-group">
                                                <b><label for="fname">First Name :</label></b>
                                                <input type="text" class="form-control" name="fname" id="fname"
                                                    placeholder="Enter Your First Name" required>
                                            </div>

                                            <div class="form-group">
                                                <b><label for="lname">Last Name :</label></b>
                                                <input type="text" class="form-control" name="lname" id="lname"
                                                    placeholder="Enter Your Last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="gender">Gender:</label></b><br>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="gender" value="Male"> Male
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="gender" value="Female"> Female
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="gender" value="Transgender"> Transgender
                                                </label>

                                            </div>
                                            <div class="form-group">
                                                <b><label for="age">Age Group (years):</label><br></b>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="age" id="age"
                                                        value="up to 25"> up to 25
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="age" id="age"
                                                        value="26-30"> 26-30
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="age" id="age"
                                                        value="31-35"> 31-35
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="age" id="age"
                                                        value="36-40"> 36-40
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="age" id="age"
                                                        value="41-45"> 41-45
                                                </label>

                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="age" id="age"
                                                        value="46-50"> 46-50
                                                </label>


                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="age" id="age"
                                                        value="over 50"> over 50
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <b><label for="experience">Teaching Experience (years):</label></b><br>

                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="experience"
                                                        id="experience" value="0-5"> 0-5
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="experience"
                                                        id="experience" value="6-10"> 6-10
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="experience"
                                                        id="experience" value="11-15"> 11-15
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="experience"
                                                        id="experience" value="16-20"> 16-20
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="experience"
                                                        id="experience" value="21-25"> 21-25
                                                </label>

                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="experience"
                                                        id="experience" value="Over 25"> Over 25
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="work">Area(s) of your work:</label></b><br>

                                                <input type="checkbox" name="work[]" value="Primary">Primary School<br>
                                                <input type="checkbox" name="work[]" value="Secondary">Secondary
                                                School<br>
                                                <input type="checkbox" name="work[]" value="Junior">Junior College
                                                (+2)<br>
                                                <input type="checkbox" name="work[]" value="Senior">Senior College/
                                                University<br>
                                                <input type="checkbox" name="work[]" value="Education">Teacher
                                                Education<br>
                                                <input type="checkbox" name="work[]" value="other">Other<br>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="other">Other:</label></b>
                                                <textarea name="otherwork" id="otherwork" class="form-control"
                                                    placeholder="Enter Here(This Field Not Mandatory)"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="qualification">Highest qualification:</label></b>
                                                <select name="qualification" id="qualification" class="form-control">
                                                    <option value="selectrd">....selected your qualification....
                                                    </option>

                                                    <option value="Bachelors">Bachelors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="MPhil">MPhil</option>
                                                    <option value="PhD">PhD</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="otherone">Other:</label></b>
                                                <textarea name="otherone" id="otherone" class="form-control"
                                                    placeholder="Enter Here(This Field Not Mandatory)"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="qualificationaided">Added qualification :</label></b><br>

                                                <input type="checkbox" name="qualificationaided[]" value="None">None<br>
                                                <input type="checkbox" name="qualificationaided[]" value="BEd">BEd<br>
                                                <input type="checkbox" name="qualificationaided[]" value="MEd">MEd<br>
                                                <input type="checkbox" name="qualificationaided[]"
                                                    value="CELTA">CELTA<br>
                                                <input type="checkbox" name="qualificationaided[]" value="DELTA">
                                                DELTA<br>
                                                <input type="checkbox" name="qualificationaided[]"
                                                    value="PGCTE">PGCTE<br>
                                                <input type="checkbox" name="qualificationaided[]" value="PGDTE">PGDTE

                                                <br>

                                            </div>
                                            <div class="form-group">
                                                <b>Are you a member of any other English teachers’
                                                    association(s)?</b><br>
                                                <div class="form-check row">
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="association"
                                                            id="association" value="Yes"> YES
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="association"
                                                            id="association" value="No"> NO
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="associationone">If yes,the name of the
                                                        Association(s):</label></b>
                                                <textarea name="associationone" id="associationone" class="form-control"
                                                    placeholder="Enter Here (This Field Not Mandatory)"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="email">Email:</label></b>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Enter Your Email" required>
                                            </div>
                                            <div class="form-group">

                                                <b><label for="mobile">Contact No:</label></b>
                                                <!-- <option data-countryCode="" value="" Selected>Country Code</option> -->
                                                <input type="text" class="form-control" name="mobile" id="mobile"
                                                    placeholder="Enter Your Mobile No" required>
                                            </div>
                                            <div class="form-group">

                                                <b><label for="whatsapp">WhatsApp No:</label></b>
                                                <input type="text" class="form-control" name="whatsapp" id="whatsapp"
                                                    placeholder="Enter Your Whatsapp No" required>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="res_addr">Address (Residence)</label></b><br>

                                                <textarea name="res_addr" id="res_addr" class="form-control"
                                                    placeholder="Enter Here" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="inst_addr">Address (Institution)</label></b><br>
                                                <!-- <b><label for="City">City:</label></b> -->

                                                <textarea name="inst_addr" id="inst_addr" class="form-control"
                                                    placeholder="Enter Here" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="state">Select your state:</label></b>
                                                <select name="state" id="state" class="form-control">
                                                    <option value="Andhra Pradesh">......Select your state......
                                                    </option>


                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli
                                                    </option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Orissa">Orissa</option>
                                                    <option value="Pondicherry">Pondicherry</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttaranchal">Uttaranchal</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="district"> Enter your district:</label></b>

                                                <textarea name="district" id="district" class="form-control"
                                                    placeholder="Enter Your district" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="pincode">Pincode</label></b><br>
                                                <!-- <b><label for="City">City:</label></b> -->

                                                <textarea name="pincode" id="pincode" class="form-control"
                                                    placeholder="Enter Your Pincode" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="expectations">Your expectations from AINET
                                                    </label></b><br>
                                                <!-- <b><label for="City">City:</label></b> -->

                                                <textarea name="expectations" id="expectations" class="form-control"
                                                    placeholder="Enter Here" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b>Like to receive newsletter?</b><br>
                                                <div class="form-check row">
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="receive"
                                                            id="receive" value="Yes"> YES
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="receive"
                                                            id="receive" value="No"> NO
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    id="password" placeholder="Enter Ypur Password" required>
                                            </div>
                                            <button type="submit" class="btn w3-orange btn-lg btn-block"
                                                style="background-color:#DF068C;padding:0px 10px 10px 10px;color:white;">Save
                                                &
                                                Proceed</button>

                                        </form>
                                    </div>
                                    <div class="tab-pane container fade" id="india_inst">
                                        <form action="/register/new/institution" method="post">
                                            @csrf
                                            <br><br>
                                            <div class="form-group">
                                                <b><label for="name">Name of The Institution :</label></b>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Enter Name of the Institution" required>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="type">Type of institution:</label></b>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="Governmentt">.....Select your institution.....
                                                    </option>

                                                    <option value="Government">Government</option>
                                                    <option value="Government-aided"> Government-aided</option>
                                                    <option value="Private"> Private</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="othertype">Other:</label></b>
                                                <textarea name="othertype" id="othertype" class="form-control"
                                                    placeholder="Enter Here(This Field Not Mandatory)"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="address">Address</label></b><br>
                                                <textarea name="address" id="address" class="form-control"
                                                    placeholder="Enter Here" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="state">Select your state:</label></b>
                                                <select name="state" id="state" class="form-control">
                                                    <option value="Andaman and Nicobar Islandsts">......Selected your
                                                        state........</option>

                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar
                                                        Islands
                                                    </option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli
                                                    </option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Orissa">Orissa</option>
                                                    <option value="Pondicherry">Pondicherry</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttaranchal">Uttaranchal</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="district">Enter your district:</label></b>
                                                <textarea name="district" id="district" class="form-control"
                                                    placeholder="Enter your district" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="email">Email</label></b><br>
                                                <textarea name="email" id="email" class="form-control"
                                                    placeholder="Enter Your Email" required></textarea>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <b><label for="website">Website</label></b><br>
                                                <textarea name="website" id="website" class="form-control"
                                                    placeholder="Enter Your Website" required></textarea>
                                            </div>
                                            <div class="form-group">

                                                <b><label for="mobile">Contact No:</label></b>
                                                <input type="text" class="form-control" name="mobile" id="mobile"
                                                    placeholder="Enter Your Contact No" required>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="person">Name of the contact person :</label></b>
                                                <input type="text" class="form-control" name="person" id="person"
                                                    placeholder="Enter Name of the contact person" required>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="emailperson">Email</label></b><br>
                                                <textarea name="emailperson" id="emailperson" class="form-control"
                                                    placeholder="Enter Your Email" required></textarea>
                                            </div>
                                            <hr>
                                            <div class="form-group">

                                                <b><label for="mobileperson">Contact No:</label></b>
                                                <input type="mobileperson" class="form-control" name="mobileperson"
                                                    id="mobileperson" placeholder="Enter Your Mobile No" required>
                                            </div>
                                            <div class="form-group">
                                                <b>Would you like to host an event / collaborate with AINET
                                                    (Optional)?</b><br>
                                                <div class="form-check row">
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="collaborate"
                                                            id="collaborate" value="Yes"> YES
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="collaborate"
                                                            id="collaborate" value="No"> NO
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <b><label for="expectations">Your expectations from
                                                        AINET</label></b><br>
                                                <textarea name="expectations" id="expectations" class="form-control"
                                                    placeholder="Enter Here" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <b>Like to receive newsletter? </b><br>
                                                <div class="form-check row">
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="newsletter"
                                                            id="newsletter" value="Yes"> YES
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="newsletter"
                                                            id="newsletter" value="No"> NO
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    id="password" placeholder="Enter Password" required>
                                            </div>
                                            <button type="submit" name="" id="" class="btn w3-orange btn-lg btn-block"
                                                style="background-color:#DF068C;padding:0px 10px 10px 10px;color:white;">Save
                                                &
                                                Proceed</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container fade" id="over">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#over_indi">Individual</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#over_inst">Institition</a>
                                        </li>
                                    </ul>
    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane container fade" id="over_indi">
                                            <form action="/register/over/new/individual" method="post">
                                                @csrf
                                                <br>
                                                <br>
                                                <p>
                                                    <span style="color:#FF0000">* All Field Mandatory</span>
                                                </p>
                                                <div class="form-group">
                                                    <b><label for="title">Title :</label></b>
                                                    <select name="title" id="title" class="form-control">
                                                        <option value="Mr">Mr</option>
                                                        <option value="Ms">Ms</option>
                                                        <option value="Dr">Dr</option>
                                                        <option value="Prof">Prof</option>
                                                        <option value="None">None</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="fname">First Name :</label></b>
                                                    <input type="text" class="form-control" name="fname" id="fname"
                                                        placeholder="Enter Your First Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="lname">Last Name :</label></b>
                                                    <input type="text" class="form-control" name="lname" id="lname"
                                                        placeholder="Enter Your Last Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="gender">Gender:</label></b><br>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender" value="Male"> Male
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender" value="Female"> Female
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender" value="Other"> Other
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="age">Age Group (years):</label><br></b>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="age" id="age"
                                                            value="Up to 25"> up to 25
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="age" id="age"
                                                            value="26-30"> 26-30
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="age" id="age"
                                                            value="31-35"> 31-35
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="age" id="age"
                                                            value="36-40"> 36-40
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="age" id="age"
                                                            value="41-45"> 41-45
                                                    </label>
    
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="age" id="age"
                                                            value="46-50"> 46-50
                                                    </label>
    
    
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="age" id="age"
                                                            value="Over 50"> over 50
                                                    </label>
                                                </div>
    
                                                <div class="form-group">
                                                    <b><label for="experience">Teaching Experience (years):</label></b><br>
    
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="experience"
                                                            id="experience" value="1-5"> 1-5
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="experience"
                                                            id="experience" value="6-10"> 6-10
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="experience"
                                                            id="experience" value="11-15"> 11-15
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="experience"
                                                            id="experience" value="16-20"> 16-20
                                                    </label>
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="experience"
                                                            id="experience" value="21-25"> 21-25
                                                    </label>
    
                                                    <label class="form-check-label col-sm-3">
                                                        <input class="form-check-input" type="radio" name="experience"
                                                            id="experience" value="Over 25"> Over 25
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="work">Level of Teaching:</label></b><br>
    
                                                    <input type="checkbox" name="work[]" value="Primary">Primary School<br>
                                                    <input type="checkbox" name="work[]" value="Secondary">Secondary
                                                    School<br>
                                                    <input type="checkbox" name="work[]" value="Junior">Junior College
                                                    (+2)<br>
                                                    <input type="checkbox" name="work[]" value="Senior">Senior College/
                                                    University<br>
                                                    <input type="checkbox" name="work[]" value="Education">Teacher
                                                    Education<br>
                                                    <input type="checkbox" name="work[]" value="Other">Other<br>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="other">Other:</label></b>
                                                    <textarea name="otherwork" id="otherwork" class="form-control"
                                                        placeholder="Enter Here(This Field Not Mandatory)"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b>Are you a member of any other English teachers’
                                                        association(s)?</b><br>
                                                    <div class="form-check row">
                                                        <label class="form-check-label col-sm-3">
                                                            <input class="form-check-input" type="radio" name="association"
                                                                id="association" value="Yes"> YES
                                                        </label>
                                                        <label class="form-check-label col-sm-3">
                                                            <input class="form-check-input" type="radio" name="association"
                                                                id="association" value="No"> NO
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="associationone">If yes,the name of the
                                                            Association(s):</label></b>
                                                    <textarea name="associationone" id="associationone" class="form-control"
                                                        placeholder="Enter Here (This Field Not Mandatory)"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="email">Email:</label></b>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Enter Your Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="mobile">Contact No:</label></b>
                                                    <!-- <option data-countryCode="" value="" Selected>Country Code</option> -->
                                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                                        placeholder="Enter Your Mobile No" required>
                                                </div>
                                                <div class="form-group">
    
                                                    <b><label for="whatsapp">WhatsApp No:</label></b>
                                                    <input type="text" class="form-control" name="whatsapp" id="whatsapp"
                                                        placeholder="Enter Your Whatsapp No">
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="res_addr">Address (Residence)</label></b><br>
    
                                                    <textarea name="res_addr" id="res_addr" class="form-control"
                                                        placeholder="Enter Here" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="inst_addr">Address (Institution)</label></b><br>
                                                    <!-- <b><label for="City">City:</label></b> -->
    
                                                    <textarea name="inst_addr" id="inst_addr" class="form-control"
                                                        placeholder="Enter Here" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="expectations">Your expectations from AINET
                                                        </label></b><br>
                                                    <!-- <b><label for="City">City:</label></b> -->
    
                                                    <textarea name="expectations" id="expectations" class="form-control"
                                                        placeholder="Enter Here" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b>Like to receive newsletter?</b><br>
                                                    <div class="form-check row">
                                                        <label class="form-check-label col-sm-3">
                                                            <input class="form-check-input" type="radio" name="receive"
                                                                id="receive" value="Yes"> YES
                                                        </label>
                                                        <label class="form-check-label col-sm-3">
                                                            <input class="form-check-input" type="radio" name="receive"
                                                                id="receive" value="No"> NO
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" placeholder="Enter Ypur Password" required>
                                                </div>
                                                <button type="submit" class="btn w3-orange btn-lg btn-block"
                                                    style="background-color:#DF068C;padding:0px 10px 10px 10px;color:white;">Save
                                                    &
                                                    Proceed</button>
    
                                            </form>
                                        </div>
                                        <div class="tab-pane container fade" id="over_inst">
                                            <form action="/register/over/new/institution" method="post">
                                                @csrf
                                                <br><br>
                                                <div class="form-group">
                                                    <b><label for="name">Name of The Institution :</label></b>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Enter Name of the Institution" required>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="type">Type of institution:</label></b>
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="Governmentt">.....Select your institution.....
                                                        </option>
    
                                                        <option value="School">School</option>
                                                        <option value="College"> College</option>
                                                        <option value="University Department"> University Department</option>
                                                        <option value="University"> University</option>
                                                        <option value="Commercial Educational enterprise"> Commercial Educational enterprise</option>
                                                        <option value="Publishing House"> Publishing House</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="othertype">Other:</label></b>
                                                    <textarea name="othertype" id="othertype" class="form-control"
                                                        placeholder="Enter Here(This Field Not Mandatory)"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="address">Address</label></b><br>
                                                    <textarea name="address" id="address" class="form-control"
                                                        placeholder="Enter Here" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="email">Email</label></b><br>
                                                    <textarea name="email" id="email" class="form-control"
                                                        placeholder="Enter Your Email" required></textarea>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <b><label for="website">Website</label></b><br>
                                                    <textarea name="website" id="website" class="form-control"
                                                        placeholder="Enter Your Website" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="mobile">Contact No:</label></b>
                                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                                        placeholder="Enter Your Contact No" required>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="person">Name of the contact person :</label></b>
                                                    <input type="text" class="form-control" name="person" id="person"
                                                        placeholder="Enter Name of the contact person" required>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="emailperson">Email</label></b><br>
                                                    <textarea name="emailperson" id="emailperson" class="form-control"
                                                        placeholder="Enter Your Email" required></textarea>
                                                </div>
                                                <hr>
                                                <div class="form-group">
    
                                                    <b><label for="mobileperson">Contact No:</label></b>
                                                    <input type="mobileperson" class="form-control" name="mobileperson"
                                                        id="mobileperson" placeholder="Enter Your Mobile No" required>
                                                </div>
                                                <div class="form-group">
                                                    <b>Would you like to host an event / collaborate with AINET
                                                        (Optional)?</b><br>
                                                    <div class="form-check row">
                                                        <label class="form-check-label col-sm-3">
                                                            <input class="form-check-input" type="radio" name="collaborate"
                                                                id="collaborate" value="yes"> YES
                                                        </label>
                                                        <label class="form-check-label col-sm-3">
                                                            <input class="form-check-input" type="radio" name="collaborate"
                                                                id="collaborate" value="no"> NO
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <b><label for="expectations">Your expectations from
                                                            AINET</label></b><br>
                                                    <textarea name="expectations" id="expectations" class="form-control"
                                                        placeholder="Enter Here" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b>Like to receive newsletter? </b><br>
                                                    <div class="form-check row">
                                                        <label class="form-check-label col-sm-3">
                                                            <input class="form-check-input" type="radio" name="newsletter"
                                                                id="newsletter" value="Yes"> YES
                                                        </label>
                                                        <label class="form-check-label col-sm-3">
                                                            <input class="form-check-input" type="radio" name="newsletter"
                                                                id="newsletter" value="No"> NO
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" placeholder="Enter Password" required>
                                                </div>
                                                <button type="submit" name="" id="" class="btn w3-orange btn-lg btn-block"
                                                    style="background-color:#DF068C;padding:0px 10px 10px 10px;color:white;">Save
                                                    &
                                                    Proceed</button>
    
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="renew">

                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('.nav-tabs a[href="#india"]').click(function(){
                // alert('on');
                $("#overTab").css('display','none');
                $(this).tab("show")
            });

            $('.nav-tabs a[href="#over"]').click(function(){
                $("#indiaTab").css('display','none');
                $(this).tab("show")
            });
        });
    </script>
@endsection
