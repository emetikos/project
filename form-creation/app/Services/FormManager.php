<?php

namespace App\Services;

use App\Models\Form;
use App\Models\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormManager
{
    public function __construct() {
        return "construct function was initialized.";
    }

    /**
     * Loads a generic registration form
     * @param $hash
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function loadForm($hash) {

        //        form_id = 6bKzL8RDM85XOM8p2GRxHzZ9CCyQ3mCCy9JAd4WMHeQS
        $error = "Page not found";

        if (Helper::where('formId', $hash)->value('formId')) {

            $config = DB::table('helpers')->where('formId', $hash)->first();
            $fields = json_decode($config->inputValues,true);
            $name = $config->formName;

            return view('pages.createForm',[
                'fields' => $fields,
                'name' => $name
            ]);
        }
        else{
            return view('pages.createForm',['error' => $error]);
        }
    }

    /**
     *
     * @param $hash
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showUserForm($hash) {

        $error = "Form not found";

        if (Form::where('form_id', $hash)->value('form_id')) {
            $config = DB::table('helpers')->where('formId', $hash)->first();
            $name = $config->formName;


            $allData = DB::table('forms')->where('form_id', $hash)->first();

            $formData = json_decode($allData->form_data, true);


            return view('pages.showForm', [
                'formData' => $formData,
                'formName' => $name
            ]);
        }else{
            return view('pages.showForm',['error' => $error]);
        }

    }

    public function updateUserForm($hash){

//        $error = "Form not found";
//
//        if (Form::where('form_id', $hash)->value('form_id')) {
//            $config = DB::table('helpers')->where('formId', $hash)->first();
//            $name = $config->formName;
//
//
//            $allData = DB::table('forms')->where('form_id', $hash)->first();
//
//            $formData = json_decode($allData->form_data, true);
//
//
//            return view('pages.updateForm', [
//                'formData' => $formData,
//                'formName' => $name
//            ]);
//        }else{
//            return view('pages.updateForm',['error' => $error]);
//        }
//


    }

    /**
     * Retrieve form information and stores attributes with user's information
     *
     * @param $request
     * @return string
     */
    public function saveUserInformation($request) {
        $data = [];
        $allData = [];

        $user_hash = 'cd5e1fbbc0b9b23333f1b68b2922254671391140';
        $formId = $request['formId'];

        $formExists = Form::where('form_id',$formId)->first();

        $formAttributes = DB::table('helpers')->where('formId', $formId)->first();
        $formAttributes = json_decode($formAttributes->inputValues,true);

        $formData = $request->request;
        foreach ($formData as $key => $value){
            $data[$key] = $value;
        };

        foreach ($formAttributes as $attribute){
            foreach ($attribute as $key => $value){
                if ($key === 'name'){
                    foreach ($data as $dataKey => $dataValue){
                        if ($value === $dataKey){
                            $attribute['userValue'] = $dataValue;
                            $allData[] = $attribute;
                        }
                    }
                }
            }
        }

        if (!$formExists){
            $newFormInput = new Form([
                'form_id'=> $request['formId'],
                'user_id' => $user_hash,
                'form_data' => json_encode($allData),
            ]);
            $newFormInput->save();
            return 'Form successfully submitted';
        }else{
            return 'This form is already been submitted';
        }

    }
}
