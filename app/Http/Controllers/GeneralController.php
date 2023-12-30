<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class GeneralController extends Controller
{

    public function selLogin(Request $request)
    {

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

        $userId = $request->userId;
        $userPwd = $request->userPwd;

        $results = DB::table('coa_mst_user')->where([
            ['userNm', $userId], ['userPwd', $userPwd]
        ])->first();
        if (!$results) {
            $results = array("sts" => "N", "desc" => "User Id / Password Salah ", "msg" => "Harap Gunakan User Id /Password Yang Lain");
        }
        return response()->json($results);
    }

    public function logOut(Request $request, $cmd)
    {
        session_unset();
        session_destroy();
        $resutlMsg = array("sts" => "Y", "desc" => "", "msg" => "");
        echo json_encode($resutlMsg);
    }

    //ini cara Update,Insert,Delete
    public function delUser(Request $request, $cmd)
    {
        $userId = $_POST["userId"];
        $sql = " DELETE FROM  coa_mst_user  WHERE userid=?  ";
        $results = DB::delete($sql, [$userId]);

        if ($results > 0) {
            $resutlMsg = array("sts" => "OK", "desc" => " Delete Success !", "msg" => "");
        } else {
            $resutlMsg = array("sts" => "N", "desc" => " Delete Failed !", "msg" => $results);
        }
        return json_encode($resutlMsg);
    }
}
