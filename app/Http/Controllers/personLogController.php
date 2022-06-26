<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personLogController extends Controller
{
    public function index(Request $request)
    {
        // $user = $request->user();

        // $role = Role::where('id', '=', $user->role_id)->first();

        // if ($role->isHasPermission(LogOpPermissions::Get_Logs)) {

            // $logs = Log::query();

            // if (isset($request->title)) {
            //     $logs->where('title', $request->title);
            // }

            // if (isset($request->user_id)) {
                // $logs->where('user_id', $request->user_id);
            // }

            // if (isset($request->first_date) && isset($request->second_date)) {
                // $logs->whereBetween('logged_date', [$request->first_date, $request->second_date]);
            // }

            // $data = [ 'Logs' => $logs->get()];

            // return $this->okResponse($data, 'Data Retrieved Successfully');
        // }

        // Log::addLog($user->id, LogTitles::Get_Logs, "تمت رفض الوصول");

        // return $this->forbiddenResponse('Access Denied');
    }
}
