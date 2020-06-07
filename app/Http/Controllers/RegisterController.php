<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Individual;
use App\Institution;
use App\OverIndividual;
use App\OverInstitution;


class RegisterController extends Controller
{
    public function individual(Request $request){

        $individual = new \App\Individual;

        $individual->fname = $request->get('fname');
        $individual->lname = $request->get('lname');
        $individual->gender = $request->get('gender');
        $individual->age = $request->get('age');
        $individual->experience = $request->get('experience');

        // $individual->work = $request->get('work');

        if(!empty($request->work)){
			$areas = $request->work;

			if(in_array("other",$areas)){
				array_push($areas,$request->otherwork);
			}
			
			$individual->work = implode(',',$areas);
        }
        
        $individual->qualification = $request->get('qualification');
        $individual->otherone = $request->get('otherone');

        if(!empty($request->qualificationaided)){
			$individual->qualificationaided = implode(',',$request->qualificationaided);
        }
        
        $individual->association = $request->get('association');
        $individual->associationone = $request->get('associationone');
        $individual->email = $request->get('email');
        $individual->mobile = $request->get('mobile');
        $individual->whatsapp = $request->get('whatsapp');
        $individual->res_addr = $request->get('res_addr');
        $individual->inst_addr = $request->get('inst_addr');
        $individual->state = $request->get('state');
        $individual->district = $request->get('district');
        $individual->pincode = $request->get('pincode');
        $individual->expectations = $request->get('expectations');
        $individual->receive = $request->get('receive');
        $individual->ind_password = Hash::make($request->ind_password);

        $individual->save();
        $inserted_id = $individual->id; // Use this id in all tables
        session(['autoid' => "001".str_pad($individual->id,2,"0",STR_PAD_LEFT), "id" => $individual->id, "type" => "indi"]);
        return redirect('register')->with('status','success');
    }

    public function overIndividual(Request $request){

        $overIndividual = new \App\OverIndividual;

        $overIndividual->title = $request->get('title');
        $overIndividual->fname = $request->get('fname');
        $overIndividual->lname = $request->get('lname');
        $overIndividual->gender = $request->get('gender');
        $overIndividual->age = $request->get('age');
        $overIndividual->experience = $request->get('experience');
        // $overIndividual->work = $request->get('work');

        if(!empty($request->work)){
			$areas = $request->work;

			if(in_array("other",$areas)){
				array_push($areas,$request->otherwork);
			}
			
			$overIndividual->work = implode(',',$areas);
        }
        
        // $overIndividual->qualification = $request->get('qualification');
        // $overIndividual->otherone = $request->get('otherone');

        // if(!empty($request->qualificationaided)){
		// 	$overIndividual->qualificationaided = implode(',',$request->qualificationaided);
        // }
        
        $overIndividual->association = $request->get('association');
        $overIndividual->associationone = $request->get('associationone');
        $overIndividual->email = $request->get('email');
        $overIndividual->mobile = $request->get('mobile');
        $overIndividual->whatsapp = $request->get('whatsapp');
        $overIndividual->res_addr = $request->get('res_addr');
        $overIndividual->inst_addr = $request->get('inst_addr');
        // $overIndividual->state = $request->get('state');
        // $overIndividual->district = $request->get('district');
        // $overIndividual->pincode = $request->get('pincode');
        $overIndividual->expectations = $request->get('expectations');
        $overIndividual->receive = $request->get('receive');
        $overIndividual->password = Hash::make($request->password);

        $overIndividual->save();
        session(['autoid' => "001".str_pad($overIndividual->id,2,"0",STR_PAD_LEFT), "id" => $overIndividual->id, "type" => "over_indi"]);
        return redirect('memb_type2')->with('status','success');
    }

    public function institution(Request $request){
        $institution = new \App\Institution;
        $institution->name = $request->get('name');
        $institution->type = $request->get('type');
        $institution->othertype = $request->get('othertype');
        $institution->address = $request->get('address');
        $institution->state = $request->get('state');
        $institution->district = $request->get('district');
        $institution->email = $request->get('email');
        $institution->website = $request->get('website');
        $institution->mobile = $request->get('mobile');
        $institution->person = $request->get('person');
        $institution->emailperson = $request->get('emailperson');
        $institution->mobileperson = $request->get('mobileperson');
        $institution->collaborate = $request->get('collaborate');
        $institution->expectations = $request->get('expectations');
        $institution->newsletter = $request->get('newsletter');
        $institution->password = Hash::make($request->password);
        $institution->save();

        session(['autoid' => "001".str_pad($institution->id,2,"0",STR_PAD_LEFT), "id" => $institution->id, "type" => "inst"]);

        return redirect('memb_type3')->with('status','success');
    }

    public function overInstitution(Request $request){
        $overInstitution = new \App\OverInstitution;
        $overInstitution->name = $request->get('name');
        $overInstitution->type = $request->get('type');
        $overInstitution->othertype = $request->get('othertype');
        $overInstitution->address = $request->get('address');
        // $overInstitution->state = $request->get('state');
        // $overInstitution->district = $request->get('district');
        $overInstitution->email = $request->get('email');
        $overInstitution->website = $request->get('website');
        $overInstitution->mobile = $request->get('mobile');
        $overInstitution->person = $request->get('person');
        $overInstitution->emailperson = $request->get('emailperson');
        $overInstitution->mobileperson = $request->get('mobileperson');
        $overInstitution->collaborate = $request->get('collaborate');
        $overInstitution->expectations = $request->get('expectations');
        $overInstitution->newsletter = $request->get('newsletter');
        $overInstitution->password = Hash::make($request->password);
        $overInstitution->save();

        session(['autoid' => "001".str_pad($overInstitution->id,2,"0",STR_PAD_LEFT), "id" => $overInstitution->id, "type" => "over_inst"]);

        return redirect('memb_type4')->with('status','success');
    }



    public function storedata(){

        $individual = new Individual();
        $institution = new Institution();
        $overindividual = new OverIndividual();
        $overinstitution = new OverInstitution();


       



    }
}





