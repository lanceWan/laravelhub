<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	/**
	 * 用户首页
	 * @author 晚黎
	 * @date   2017-06-05
	 * @return [type]     [description]
	 */
    public function home()
    {
    	return view('front.user.home');
    }

    /**
     * 用户中心
     * @author 晚黎
     * @date   2017-06-05
     * @return [type]     [description]
     */
    public function center()
    {
    	return view('front.user.center');
    }
    /**
     * 用户设置
     * @author 晚黎
     * @date   2017-06-05
     * @return [type]     [description]
     */
    public function setting()
    {
    	return view('front.user.setting');
    }
}
