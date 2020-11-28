<?php

namespace App\Http\Controllers\Backend\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Elibs\eView;
use Carbon\Carbon;
class HomeController extends Controller
{
    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }
    public function index()
    {
        $time = Carbon::now()->format('d-m-Y');
        $today_date = $this->user->countUser($time);
        $tpl['home'] =  $today_date;
        echo eView::getInstance()->setView(__DIR__, 'home.dashboard', $tpl);die;
    }
}
