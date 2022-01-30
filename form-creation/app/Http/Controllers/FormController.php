<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormFieldsRequest;
use App\Models\Form;
use App\Models\Helper;
use App\Services\FormManager;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    /**
     * @param $formHash
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create($hash) {

        $form = new FormManager();
        return $form->loadForm($hash);
    }

    /**
     * @param $formHash
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($formHash,$userHash){

        $form = new FormManager();
        return $form->showUserForm($formHash,$userHash);

    }

    /**
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $form = new FormManager();
        return $form->saveUserInformation($request);
    }

    public function update($hash,$userHash)
    {

        $form = new FormManager();
        return $form->loadFormToUpdate($hash,$userHash);
    }

    public function storeUpdated(Request $request){

        $form = new FormManager();
        return $form->updateUserInformation($request);
    }



}
