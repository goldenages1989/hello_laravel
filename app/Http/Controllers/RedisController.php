<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedisController extends Controller
{
    //
public function setInfo()
{
    Redis::set("name", "GeekGhc");

    dd(Redis::get("name"));
}
}
