<?php

namespace App\Classes;


    use App\Models\Attendance;
    use GuzzleHttp\Client as GuzzleClient;
    use GuzzleHttp\Psr7\Request;
    use Illuminate\Database\Eloquent\Model;

    class AttendanceFunctions {

        public function __construct() {
            return "construct function was initialized.";
        }

        /**
         * Function to display all attendances
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function displayAll() {

            $attendance = Attendance::all();
            return response()->json($attendance);

        }

        /**
         * Function to display attendance by id
         *
         * @param $id
         * @return \Illuminate\Http\JsonResponse
         */
        public function displayById($id) {

            $attendance= Attendance::findOrFail($id);
            return response()->json($attendance);

        }

        /**
         * Function to create a new attendance
         *
         * @param $request
         * @return \Illuminate\Http\JsonResponse
         * @throws \GuzzleHttp\Exception\GuzzleException
         */
        public function createNew($request) {

            $userHash = $request->get('user_hash');
            $hapHash = $request->get('hap_hash');


            $client = new GuzzleClient();
            $response = $client->request('GET', 'http://users-info-api.local/api/user/'.$userHash);
            $returnedUser = json_decode($response->getBody()->getContents(),true);


            $client = new GuzzleClient();
            $response = $client->request('GET', 'http://hap-info-api.local/api/hap/'.$hapHash);
            $returnedHapDataArray = json_decode($response->getBody()->getContents(), true);

            $newAttendance = new Attendance([
                'hap_hash' => $hapHash,
                'user_hash' => $userHash,
                'attended' => true,
                'hapData' => implode('-',$returnedHapDataArray),
                'hapName' => $returnedHapDataArray['module'],
                'userName' => $returnedUser['fistName'],
                'userSurname' => $returnedUser['lastName'],
                'hapStarted' => $returnedHapDataArray['created']
            ]);

            $newAttendance->save();

            return response()->json($newAttendance);
        }

        /**
         * Function to update an existing attendance
         *
         * @param $request
         * @param $id
         * @return \Illuminate\Http\JsonResponse
         * @throws \GuzzleHttp\Exception\GuzzleException
         */
        public function update($request, $id) {

            $userHash = $request->get('user_hash');
            $hapHash = $request->get('hap_hash');

            $client = new GuzzleClient();
            $response = $client->request('GET', 'http://users-info-api.local/api/user/'.$userHash);
            $returnedUser = json_decode($response->getBody()->getContents(),true);


            $client = new GuzzleClient();
            $response = $client->request('GET', 'http://hap-info-api.local/api/hap/'.$hapHash);
            $returnedHapDataArray = json_decode($response->getBody()->getContents(), true);


            if(Attendance::where('id', $id)->exists()){

                Attendance::where('id', $id)->update([
                    'hap_hash' => $hapHash,
                    'user_hash' => $userHash,
                    'attended' => true,
                    'hapData' => implode('-',$returnedHapDataArray),
                    'hapName' => $returnedHapDataArray['module'],
                    'userName' => $returnedUser['fistName'],
                    'userSurname' => $returnedUser['lastName'],
                    'hapStarted' => $returnedHapDataArray['created']
                ]);
                return response()->json([
                    'message' => 'Attendance updated Successfully'
                ],202);
            } else {
                return response()->json([
                    'message' => 'Id does not exist'
                ],404);
            }
        }

        /**
         * Function to delete an attendance
         *
         * @param $id
         * @return \Illuminate\Http\JsonResponse
         */
        public function delete($id) {

            if(Attendance::where('id', $id)->exists()){
                $entry = Attendance::find($id);
                $entry->delete();

                return response()->json([
                    'message' => 'Attendance deleted'
                ],202);
            } else {
                return response()->json([
                    'message' => 'Entry not Found'
                ],404);
            }
        }
    }
