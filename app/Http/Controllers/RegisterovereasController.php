<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterovereasController extends Controller
{
    //
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
        $individual->password = Hash::make($request->password);

        $individual->save();
        session(['autoid' => "001".str_pad($individual->id,2,"0",STR_PAD_LEFT)]);
        return redirect('register')->with('status','success');
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

        session(['autoid' => "001".str_pad($institution->id,2,"0",STR_PAD_LEFT)]);

        return redirect('register')->with('status','success');
    }
}
