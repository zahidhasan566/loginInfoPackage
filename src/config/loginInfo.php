<?php
use Illuminate\Support\Facades\Auth;
$user =  Auth::user();
return[
    'user'=> $user
];
