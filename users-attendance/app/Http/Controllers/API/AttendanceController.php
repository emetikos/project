<?php

namespace App\Http\Controllers\API;

use App\Classes\AttendanceFunctions;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        $attendance = new AttendanceFunctions;
        return $attendance->displayAll();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id) {
        $attendance = new AttendanceFunctions;
        return $attendance->displayById($id);
    }

    /**
     * Create a new entry
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store(Request $request) {
        $attendance = new AttendanceFunctions;
        return $attendance->createNew($request);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(Request $request, $id) {
        $attendance = new AttendanceFunctions;
        return $attendance->update($request, $id);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id) {
        $attendance = new AttendanceFunctions;
        return $attendance->delete($id);
    }
}
