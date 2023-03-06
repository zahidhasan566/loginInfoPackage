<?php


namespace LoginInfo\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;


class LoginInfoController extends Controller
{
    public function index($id){
        //Current Date time
        $datetime = new DateTime();

        //whether ip is from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
//whether ip is from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
//whether ip is from remote address
        else
        {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        if($id){
            $user_update = User::findOrFail($id);
            $user_update->current_status = "Active";
            $user_update->last_login_at = $datetime;
            $user_update->last_login_ip = $ip_address;
            $user_update->save();
        }
    }
}
