@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-8">
            @if (session('status') && session('status') === "success")
            <div class="card w3-border-orange">
                <div class="card-header w3-orange w3-border-orange">{{ __('DELEGATE REGISTRATION FORM') }}</div>
                <div class="card-body">
                    Thank you for your interest! We may contact you for more details, if necessary. Further
                    information will be sent to short-listed participants very soon
                    <h4>Your User Id Is {{ session('autoid') }}</h4>
                    <br /><a type="button" class="btn w3-orange" href="/">Go To Home</a>
                </div>

            </div>
            @else
            <div class="card w3-border-orange">
                <div class="card-header w3-orange w3-border-orange">{{ __('Become A Member') }}</div>

                <div class="card-body">
                    <ul class="nav nav-pills nav-stacked" style="border: 0px;">
                        <li class="nav-item">
                            <a href="#renew" class="nav-link active" data-toggle="tab">Renew</a>
                        </li>
                        <li class="nav-item">
                            <a href="#new" class="nav-link" data-toggle="tab">New</a>
                                                        {{-- <div class="subnav-content">

                            <a href="#new" class="nav-link" data-toggle="tab">New</a>
                            <a href="#new" class="nav-link" data-toggle="tab">New</a> --}}

                            {{-- <div class="subnav-content"> --}}
                                {{-- <a href="#company">Indian</a>
                                <a href="#team"></a> --}}
                                {{-- <a href="#careers">Careers</a> --}}
                              {{-- </div> --}}
                        </li>
                        
                     
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane container active" id="renew"></div>
                        <div class="tab-pane container fade" id="new">
                            <br>
                            <ul class="nav nav-tabs nav-stacked">
                                <li class="nav-item">
                                    <a href="#ind" class="nav-link active" data-toggle="tab">Individual</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#inst" class="nav-link" data-toggle="tab">Institutional</a>
                                </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane container active" id="ind">
                                    <form action="/register/new/individual" method="post">
                                        @csrf
                                        <br>
                                        <br>
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
                                                <input class="form-check-input" type="radio" name="gender" id="gender"
                                                    value="Never" > Male
                                            </label>
                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="gender" id="gender"
                                                    value="Participated"> Female
                                            </label>
                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="gender" id="gender"
                                                    value="Participated"> Transgender
                                            </label>

                                        </div>
                                        <div class="form-group">
                                            <b><label for="age">Age Group (years):</label><br></b>
                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="age" id="age"
                                                    value="Participated" > up to 25
                                            </label>
                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="age" id="age"
                                                    value="Participated"> 26-30
                                            </label>
                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="age" id="age"
                                                    value="Participated"> 31-35
                                            </label>
                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="age" id="age"
                                                    value="Participated"> 36-40
                                            </label>
                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="age" id="age"
                                                    value="Participated"> 41-45
                                            </label>

                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="age" id="age"
                                                    value="Participated"> 46-50
                                            </label>


                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="age" id="age"
                                                    value="Participated"> over 50
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <b><label for="experience">Teaching Experience (years):</label></b><br>

                                            <label class="form-check-label col-sm-3">
                                                <input class="form-check-input" type="radio" name="experience"
                                                    id="experience" value="0-5" > 0-5
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

                                            <input type="checkbox" name="work[]" value="Primary" >Primary School<br>
                                            <input type="checkbox" name="work[]" value="Secondary">Secondary School<br>
                                            <input type="checkbox" name="work[]" value="Junior">Junior College (+2)<br>
                                            <input type="checkbox" name="work[]" value="Senior">Senior College/
                                            University<br>
                                            <input type="checkbox" name="work[]" value="Education">Teacher Education<br>
                                            <input type="checkbox" name="work[]" value="other">Other<br>
                                        </div>
                                        <div class="form-group">
                                            <b><label for="other">Other:</label></b>
                                            <textarea name="otherwork" id="otherwork" class="form-control"
                                                placeholder="Enter Here"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <b><label for="qualification">Highest qualification:</label></b>
                                            <select name="qualification" id="qualification" class="form-control">
												<option value="selectrd" >....selected your qualification....</option>

                                                <option value="Bachelors" >Bachelors</option>
                                                <option value="Masters">Masters</option>
                                                <option value="MPhil">MPhil</option>
                                                <option value="PhD">PhD</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <b><label for="otherone">Other:</label></b>
                                            <textarea name="otherone" id="otherone" class="form-control"
                                                placeholder="Enter Here"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <b><label for="qualificationaided">Aided qualification :</label></b><br>

                                            <input type="checkbox" name="qualificationaided[]" value="None" >None<br>
                                            <input type="checkbox" name="qualificationaided[]" value="BEd">BEd<br>
                                            <input type="checkbox" name="qualificationaided[]" value="MEd">MEd<br>
                                            <input type="checkbox" name="qualificationaided[]" value="CELTA">CELTA<br>
                                            <input type="checkbox" name="qualificationaided[]" value="DELTA"> DELTA<br>
                                            <input type="checkbox" name="qualificationaided[]" value="PGCTE">PGCTE<br>
                                            <input type="checkbox" name="qualificationaided[]" value="PGDTE">PGDTE

                                            <br>

                                        </div>
                                        <div class="form-group">
                                            <b>Are you a member of any other English teachers’ association(s)?</b><br>
                                            <div class="form-check row">
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="association"
                                                        id="association" value="Yes"> YES
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="association"
                                                        id="association" value="No" > NO
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b><label for="associationone">If yes,the name of the
                                                    Association(s):</label></b>
                                            <textarea name="associationone" id="associationone" class="form-control"
                                                placeholder="Enter Here"></textarea>
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
                                                <option value="Andhra Pradesh">......Select your state......</option>

												
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
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
                                            <b><label for="expectations">Your expectations from AINET </label></b><br>
                                            <!-- <b><label for="City">City:</label></b> -->

                                            <textarea name="expectations" id="expectations" class="form-control"
                                                placeholder="Enter Here" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <b>Like to receive newsletter?</b><br>
                                            <div class="form-check row">
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="receive"
                                                        id="receive" value="Yes" > YES
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="receive"
                                                        id="receive" value="No"> NO
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="password">Password</label>
                                          <input type="password" class="form-control" name="password" id="password" placeholder="Enter Ypur Password" required>
                                        </div>
                                        <button type="submit" class="btn w3-orange btn-lg btn-block">Submit</button>

                                    </form>
                                </div>
                                <div class="tab-pane container fade" id="inst">
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
												 <option value="Governmentt" >.....Select your institution.....</option>

                                                <option value="Government" >Government</option>
                                                <option value="Government-aided"> Government-aided</option>
                                                <option value="Private"> Private</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <b><label for="othertype">Other:</label></b>
                                            <textarea name="othertype" id="othertype" class="form-control"
                                                placeholder="Enter Here"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <b><label for="address">Address</label></b><br>
                                            <textarea name="address" id="address" class="form-control"
                                                placeholder="Enter Here" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <b><label for="state">Select your state:</label></b>
                                            <select name="state" id="state" class="form-control">
												<option value="Andaman and Nicobar Islandsts" >......Selected your state........</option>

                                                <option value="Andaman and Nicobar Islands" >Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
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
                                                        id="collaborate" value="yes"> YES
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="collaborate"
                                                        id="collaborate" value="no"> NO
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b><label for="expectations">Your expectations from AINET</label></b><br>
                                            <textarea name="expectations" id="expectations" class="form-control"
                                                placeholder="Enter Here" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <b>Like to receive newsletter? </b><br>
                                            <div class="form-check row">
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="newsletter"
                                                        id="newsletter" value="Yes" > YES
                                                </label>
                                                <label class="form-check-label col-sm-3">
                                                    <input class="form-check-input" type="radio" name="newsletter"
                                                        id="newsletter" value="No"> NO
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="password">Password</label>
                                          <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                                        </div>
                                        <button type="submit" name="" id=""
                                            class="btn w3-orange btn-lg btn-block">Submit</button>

                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                    {{-- <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn w3-orange btn-block">
                                {{ __('Register For Membership') }}
                            </button>
                        </div>
                    </div>
                    </form> --}}
                    {{-- The Membership Area Is Launching On 5 August --}}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
