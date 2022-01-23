<?php

namespace App\Services;

use App\Models\Form;
use App\Models\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use function PHPUnit\Framework\fileExists;

class FormManager
{
    const CUSTOM_TEMPLATES = '/var/www/form-creation/templates/';
//    USERS FOR TESTING
    const USER_1 = 'gd5e1fbbc0b9b23333f1b68b2922254671391140';
    const USER_2 = 'cd5e1fbbc0b9b23333f1b68b2922254671391140';


    public function __construct() {
        return "construct function was initialized.";
    }

    /**
     * Loads a generic registration form
     * @param $hash
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View | string
     */
    public function loadForm($hash) {

        $error = "page not found";

        $template_path = self::CUSTOM_TEMPLATES.$hash.'/'.$hash;

        if (file_exists($template_path)){

            return File::get($template_path.'.html');
        }
        if (Helper::where('formId', $hash)->value('formId')) {

            $config = Helper::where('formId', $hash)->first();
            $fields = json_decode($config->inputValues,true);
            $name = $config->formName;

            return view('pages.createForm',[
                'fields' => $fields,
                'name' => $name
            ]);
        }else{
            return view('pages.createForm',['error' => $error]);
        }
    }

    /**
     *
     * @param $hash
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showUserForm($hash,$userHash) {

        $error = "Form not found";


        if (Form::where('form_id', $hash)->value('form_id')) {
            $config = Helper::where('formId', $hash)->latest()->first();
            $name = $config->formName;


            $allData = Form::where('form_id', $hash)
                            ->where('user_id', $userHash)
                            ->latest()
                            ->first();

            $formData = json_decode($allData->form_data, true);


            return view('pages.showForm', [
                'formData' => $formData,
                'formName' => $name
            ]);
        }else{
            return view('pages.showForm',['error' => $error]);
        }

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



        $user_hash = 'gd5e1fbbc0b9b23333f1b68b2922254671391140';
        $formId = $request['formId'];
//      dd($request);

        $formExists = Form::where('user_id',$user_hash )->first();

        $formAttributes = Helper::where('formId', $formId)->first();
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
                'version' => 1
            ]);
            $newFormInput->save();
            return 'Form successfully submitted';
        }else{
            return 'This form is already been submitted';
        }

    }

    /**
     * @param $hash
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function loadFormToUpdate($hash,$userHash){

        $error = "Form not found";


        if (Form::where('form_id', $hash)->value('form_id')) {
            $config = Helper::where('formId', $hash)->first();
            $name = $config->formName;


            $allData = Form::where('form_id', $hash)
                            ->where('user_id',$userHash)
                            ->latest()
                            ->first();


            $formData = json_decode($allData->form_data, true);


            return view('pages.updateForm', [
                'formData' => $formData,
                'formName' => $name
            ]);
        }else{
            return view('pages.updateForm',['error' => $error]);
        }
    }

    public function updateUserInformation($request){
        $user_hash = 'gd5e1fbbc0b9b23333f1b68b2922254671391140';
        $form_hash = $request['formId'];
        $allData = [];
        $data = [];


            $config = Form::where('form_id', $form_hash)
                            ->where('user_id', $user_hash)
                            ->latest()
                            ->first();


            $formAttributes = json_decode($config->form_data,true);
            $formVersion = $config->version;



        $formData = $request->request;
        foreach ($formData as $key => $value){
                $data[$key] = $value;
        };


        foreach ($formAttributes as $attribute){
            foreach ($attribute as $key => $value){
                if ($key === 'name'){
                    foreach ($data as $dataKey => $dataValue){
                        if ($value === $dataKey){
                            if ($dataValue != null){
                                $attribute['userValue'] = $dataValue;
                            }
                            $allData[] = $attribute;
                        }
                    }
                }
            }
        }

        $newFormInput = new Form([
            'form_id'=> $request['formId'],
            'user_id' => $user_hash,
            'form_data' => json_encode($allData),
            'version' => ++$formVersion
        ]);
        $newFormInput->save();
        return 'Form successfully submitted';
    }
}
