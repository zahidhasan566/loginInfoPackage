<?php


namespace LoginInfo\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;


class LoginInfoController extends Controller
{
    public function index(Request $request){
        $datetime = new DateTime();
        $user = config('loginInfo');
        $user_update = $user->id;
        $user_update->current_status = "Active";
        $user_update->last_login_at = $datetime;
        $user_update->last_login_ip = $request->getClientIp();
        $user_update->save();
        return back();
    }
}
