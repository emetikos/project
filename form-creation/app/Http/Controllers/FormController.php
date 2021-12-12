<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function generic($form_id) {

        $registration = "7bKzL8RDM85XOM8p2GRxHzZ9CCyQ3mCCy9JAd4WMHeQS";
        $generic = "6bKzL8RDM85XOM8p2GRxHzZ9CCyQ3mCCy9JAd4WMHeQS";

        $config = Helper::where('form_id', $form_id)->first();


        $fields = json_decode($config,true );


        $values = json_decode($fields['input_values'], true);


        $form_idd = $fields['form_id'];


        return view('pages.generic', [
            'values' => $values,
            'form_id' => $form_id
        ]);
    }
    public function show_form(){

    }

    public function registration() {
        $config = Helper::find(9);


        $fields = json_decode($config, true);

        $values =json_decode($fields['input_values'],true) ;
        $form_id = $fields['form_id'];


//
        return view('pages.formRegistration', [
            'values' => $values,
            'form_id' => $form_id
        ]);
    }
    public function info() {
        return view('pages.formInformation');
    }

    public function getForm(Request $request){

        $user_hash = 'cd5e1fbbc0b9b23333f1b68b2922254671391140';

        $test = $request->all();


        $data = [
            'formId' => $request['formId'],
            'userId' => $user_hash,
            'name' => $request['name'],
            'surname' => $request['surname'],
            'address' => $request['address']
        ];


        $newFormInput = new Form([
            'form_id'=> $request['formId'],
            'user_id' => $user_hash,
            'form_data' => json_encode($data)
        ]);
//
        $newFormInput->save();

    }

    public function getData()
    {


        $config = Helper::find(9);
        $fields = json_decode($config, true);
        $values =json_decode($fields['input_values'],true) ;
        $form_id = $fields['form_id'];



        $info = Form::find(7);
        $rows = json_decode($info,true);
        $data = json_decode($rows['form_data']);




        return view('pages.formData',[
            'data' => $data,
            'values' => $values,
            'form_id' => $form_id
        ]);


    }


}
