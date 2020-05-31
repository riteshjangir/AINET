@extends('layouts.app1')
@section('content')

<style>
    /* btn */
   
/* 
    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    } */

    /* .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    } */
/* 
    .button:hover span {
        padding-right: 25px;
    } */

    /* .button:hover span:after {
        opacity: 1;
        right: 0;
    } */

    /* btn */
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Float four columns side by side */
    .column {
        float: left;
        width: 25%;
        padding: 0 10px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #E51284;
        color: aliceblue;

    }

    .card-one {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #E51284;
        color: #9400d3;

    }

    h3 {
        color: aliceblue;
    }

    .inv {
        color: #004798;

    }

    .wh {
        color: #FFFFFF;
    }

    .wh1 {
        color: #e7f2fd;
    }

</style>
{{-- <link rel="stylesheet" type="text/css" href="register.css" /> --}}

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
<div class="container h-100">
    <h2>Membership privileges:</h2>
    <h4>As an AINET member, you will</h4>
    <ul>
        <li><i class='fa fa-angle-double-right' style='font-size:28px;color:#DF068C;'></i>&nbsp;&nbsp;<b
                style='font-size:18px'>Become part of a large and vibrant ELE community in India and globally.</b></li>
        <br>
        <li><i class='fa fa-angle-double-right' style='font-size:28px;color:#DF068C;'></i>&nbsp;&nbsp;<b
                style='font-size:18px'>Get regular information about AINET events, activities and offerings.</b></li>
        <br>
        <li><i class='fa fa-angle-double-right' style='font-size:28px;color:#DF068C;'></i>&nbsp;&nbsp;<b
                style='font-size:18px'>Get membership discounts and benefits at AINET events and other collaborative
                events.</b></li><br>
        <li><i class='fa fa-angle-double-right' style='font-size:28px;color:#DF068C;'></i>&nbsp;&nbsp;<b
                style='font-size:18px'>Receive AINET publications, newsletters and other products free or at discounted
                prices.</b></li><br>
        <li><i class='fa fa-angle-double-right' style='font-size:28px;color:#DF068C;'></i>&nbsp;&nbsp;<b
                style='font-size:18px'>Have access to the Member's Area with special services and resources available
                for members only.</b></li><br>
        <li><i class='fa fa-angle-double-right' style='font-size:28px;color:#DF068C;'></i>&nbsp;&nbsp;<b
                style='font-size:18px'>Be eligible to join IATEFL at heavily discounted rate under the Wider Membership
                Scheme.</b></li><br>
        <li><i class='fa fa-angle-double-right' style='font-size:28px;color:#DF068C;'></i>&nbsp;&nbsp;<b
                style='font-size:18px'>Be eligible to apply for various AINET scholarships, travel grants and other
                kinds of support.</b></li><br>
    </ul>
</div>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 70%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
      background-color:#ecfcff;

    }
    
    th{
        background-color: #3e64ff;
        text-align: center


    }
    tr:nth-child(even) {
      background-color: #e7f2fd;
    }
    .one{
        background-color: #5edfff;
        text-align: center



    }
    .two{
        background-color: #b2fcff;
        text-align: center

    }
    .three{
        background-color: #ecfcff;
        text-align: center

    }
    </style>

 <div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
<h2>Membership Type : Individual</h2>

<table>
  <tr>
    <th >Category</th>
    <th>Duration</th>
    <th>Fees</th>
  </tr>
  <tr>
    <td class="one">Annual</td>
    <td class="one">1 Year</td>
    <td class="one">INR 500</td>
  </tr>
  <tr>
    <td class="two">Long Term</td>
    <td class="two">3 Year</td>
    <td class="two">INR 1200</td>
  </tr>
  <tr>
    <td class="three">Overseas</td>
    <td class="three">1 Year</td>
    <td class="three">USD 20 (INR 1500)</td>
  </tr>
 
</table>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
<h2>Membership Type : Institutional</h2>

<table>
  <tr>
    <th >Category</th>
    <th >Duration</th>
    <th >Fees</th>
  </tr>
  <tr>
    <td class="one">Annual</td>
    <td class="one">1 Year</td>
    <td class="one">INR 1000</td>
  </tr>
  <tr>
    <td class="two">Long Term</td>
    <td class="two">3 Year</td>
    <td class="two">INR 2500</td>
  </tr>
  <tr>
    <td class="three">Overseas</td>
    <td class="three">1 Year</td>
    <td class="three">USD 30 (INR 2500)</td>
  </tr>
 
</table>
            </div>
        </div>
    </div>
</div>


    <p>
            <div class="breadcrumb-area">
                    <div class="container h-100">
                        <div class="row h-100 align-items-end">
                            <div class="col-12">
        <a href="/register" class="btn uza-btn btn-3">CLICK HERE to join
            AINET today!</a>
    </div>
</div>
</div>
</div>
    </p>

@endsection
