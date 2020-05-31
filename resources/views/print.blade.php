@extends('layouts.app1')
@section('content')
<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Your Informatioin</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-8">
            <table class="table">
                <tbody>
                    @if (isset($inst) && $inst != null)
                    <tr>
                        <td style="width: 150px"><strong>Institution Name</strong></td>
                        <td>{{ $inst->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Institution Type</strong></td>
                        <td>{{ $inst->type == null ? $inst->othertype : $inst->type }}</td>
                    </tr>
                    <tr>
                        <td><strong>Institution Email</strong></td>
                        <td>{{ $inst->email }}</td>
                    </tr>
                    <tr>
                        <td><strong>Institution Website</strong></td>
                        <td>{{ $inst->website }}</td>
                    </tr>
                    <tr>
                        <td><strong>Institution Mobile</strong></td>
                        <td>{{ $inst->mobile }}</td>
                    </tr>
                    <tr>
                        <td><strong>Contact Person</strong></td>
                        <td>{{ $inst->person }}</td>
                    </tr>
                    <tr>
                        <td><strong>Contact Person Email</strong></td>
                        <td>{{ $inst->emailperson }}</td>
                    </tr>
                    <tr>
                        <td><strong>Contact Person Mobile</strong></td>
                        <td>{{ $inst->mobileperson }}</td>
                    </tr>
                    <tr>
                        <td><strong>Collaborate</strong></td>
                        <td>{{ $inst->collaborate }}</td>
                    </tr>
                    <tr>
                        <td><strong>Expectations</strong></td>
                        <td>{{ $inst->expectations }}</td>
                    </tr>
                    @else
                    <tr>
                        <td style="width: 150px"><strong>Full Name</strong></td>
                        <td>{{ $indi->title.'' }} {{ $indi->fname }} {{ $indi->lname }}</td>
                    </tr>
                    <tr>
                        <td><strong>Gender</strong></td>
                        <td>{{ $indi->gender }}</td>
                    </tr>
                    <tr>
                        <td><strong>Age Group</strong></td>
                        <td>{{ $indi->age }}</td>
                    </tr>
                    <tr>
                        <td><strong>Experience</strong></td>
                        <td>{{ $indi->experience }}</td>
                    </tr>
                    <tr>
                        <td><strong>Work</strong></td>
                        <td>{{ $indi->work }}</td>
                    </tr>
                    <tr>
                        <td><strong>Association</strong></td>
                        <td>{{ $indi->association }}</td>
                    </tr>
                    <tr>
                        <td><strong>Association With</strong></td>
                        <td>{{ $indi->associationone }}</td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td>{{ $indi->email }}</td>
                    </tr>
                    <tr>
                        <td><strong>Mobile</strong></td>
                        <td>{{ $indi->mobile }}</td>
                    </tr>
                    <tr>
                        <td><strong>Whatsapp No</strong></td>
                        <td>{{ $indi->whatsapp }}</td>
                    </tr>
                    <tr>
                        <td><strong>Res. Address</strong></td>
                        <td>{{ $indi->res_addr }}</td>
                    </tr>
                    <tr>
                        <td><strong>Inst. Address</strong></td>
                        <td>{{ $indi->inst_addr }}</td>
                    </tr>
                    <tr>
                        <td><strong>Expectations</strong></td>
                        <td>{{ $indi->expectations }}</td>
                    </tr>
                    @endif

                </tbody>
            </table>
            <a type="button" class="btn w3-orange" href="https://imjo.in/4ZntZF"
                        style="background-color:#DF068C;padding:0px 10px 10px 10px;color:white;">Accept And Make A Payment</a>
        </div>
    </div>
</div>

@endsection
