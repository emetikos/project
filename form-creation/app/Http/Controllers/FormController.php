<?php

namespace App\Http\Controllers;

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
    public function create($formHash) {

        $form = new FormManager();
        return $form->loadForm($formHash);
    }

    /**
     * @param $formHash
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($formHash){

        $form = new FormManager();
        return $form->showUserForm($formHash);

    }

    /**
     * @param Request $request
     * @return string
     */
    public function store(Request $request){

        $form = new FormManager();
        return $form->saveUserInformation($request);
    }

    public function update($hash){

        $form = new FormManager();
        return $form->updateUserForm($hash);
    }



}
