<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function store(Request $request){
        $interest = new \App\Interest;

        $interest->name = $request->name;
        $interest->name_of_institution = $request->name_of_institution;
        $interest->classes = $request->classes;
        $interest->qualification = $request->qualification;
        $interest->teaching_experience = $request->teaching_experience;
        $interest->email = $request->email;
        $interest->mobile_no = $request->mobile_no;
        $interest->whatsapp_no = $request->whatsapp_no;
        $interest->twitter_handle = $request->twitter_handle;
        $interest->que_one = $request->que_one;
        $interest->que_two = $request->que_two;
        $interest->que_three = $request->que_three;
        $interest->que_four = $request->que_four;
        $interest->que_five = $request->que_five;
        $interest->que_six = $request->que_six;
        $interest->que_seven = $request->que_seven;
        $interest->que_eight = $request->que_eight;
        $interest->que_nine_a = $request->que_nine_a;
        $interest->que_nine_b = $request->que_nine_b;
        $interest->que_nine_c = $request->que_nine_c;
        $interest->que_nine_d = $request->que_nine_d;
        $interest->que_nine_e = $request->que_nine_e;
        $interest->que_nine_f = $request->que_nine_f;
        $interest->que_ten = $request->que_ten;

        $interest->save();

        return redirect('announcementtwo')->with('status','success');
    }

    public function storePpfs(Request $request){

        $ppf = new \App\Ppf;

        $ppf->pr1_name = $request->pr1_name;
        $ppf->pr1_work = $request->pr1_work;
		$ppf->pr1_country_code = $request->pr1_country_code;
        $ppf->pr1_phone = $request->pr1_phone;
        $ppf->pr1_email = $request->pr1_email;
        $ppf->pr2_name = $request->pr2_name;
        $ppf->pr2_work = $request->pr2_work;
		$ppf->pr2_country_code = $request->pr2_country_code;
        $ppf->pr2_phone = $request->pr2_phone;
        $ppf->pr2_email = $request->pr2_email;
        $ppf->pr3_name = $request->pr3_name;
		$ppf->pr3_country_code = $request->pr3_country_code;
        $ppf->pr3_work = $request->pr3_work;
        $ppf->pr3_phone = $request->pr3_phone;
        $ppf->pr3_email = $request->pr3_email;
		
		if(!empty($request->pr_area)){
			$areas = $request->pr_area;

			if(in_array("other",$areas)){
				array_push($areas,$request->pr_area_specify);
			}
			
			$ppf->pr_area = implode(',',$areas);
		}
		
		if(!empty($request->pr_nature)){
			$ppf->pr_nature = implode(',',$request->pr_nature);
		}
		
        $ppf->pr_title = $request->pr_title;
        $ppf->pr_abstract = $request->pr_abstract;
        $ppf->pr1_bio = $request->pr1_bio;
        $ppf->pr2_bio = $request->pr2_bio;
        $ppf->pr3_bio = $request->pr3_bio;

        $ppf->save();

        return redirect('ainet2020ppf')->with('status','success');
    }

    public function storeDrfs(Request $request){

        $drf = new \App\Drf;

        $drf->member = $request->member;
        $drf->name = $request->name;
        $drf->gender = $request->gender;
        $drf->age = $request->age;
        $drf->institution = $request->institution;
        $drf->address = $request->address;
        $drf->city = $request->city;
        $drf->pincode = $request->pincode;
        $drf->state = $request->state;
		$drf->country_code = $request->country_code;
        $drf->phone_no = $request->phone_no;
        $drf->email = $request->email;
		
		if(!empty($request->areas)){
			$areas = $request->areas;

			if(in_array("Other",$areas)){
				array_push($areas,$request->other);
			}

			$drf->areas = implode(',',$areas);
		}
		
        $drf->experience = $request->experience;
		
		if($request->conference === "Yes"){
			$drf->conference = implode(',',$request->types);
		}else{
			$drf->conference = $request->conference;
		}

        $drf->save();
        return redirect('ainet2020drf')->with('status','success');
    }
}


