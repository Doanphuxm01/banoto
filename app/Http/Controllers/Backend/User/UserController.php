<?php

namespace App\Http\Controllers\Backend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Elibs\eView;
class UserController extends Controller
{
    protected $user;

    public   function __Construct(User $user,eView $eview){
        $this->user = $user;
        $this->eview = $eview;
    }

    public function index($action = '')
    {
        $action = str_replace('-', '_', $action);
        if (method_exists($this, $action)) {
            return $this->$action();
        } else {
            return $this->list();
        }
    }

    public function list(){
        $user = $this->user->getData();
        $tpl['user'] = $user;
        return eView::getInstance()->setView(__DIR__, 'index', $tpl);
    }
    public function input(){
       
        $id = Request::capture()->input('id', 0);
        $obj = Request::capture()->input('obj', 0);
        $user = [];
        if($id) {
            $user = $this->user->getDetaiByidUser($id);
            $user->fullName    = ($user->fullName);
            $user->username = ($user->username);
            $user->email        = ($user->email );
            $user->password           = ($user->password);
            $user->phone           = ($user->phone);
            $user->status           = ($user->status);
            $user->password           = ($user->password);
        }else {
            return eView::getInstance()->setView(__DIR__, 'add');
        }
        $tpl = [];
        $tpl['obj'] = $user;
        // dd($tpl);
        return eView::getInstance()->setView(__DIR__, 'edit', $tpl);
    }
    public function _delete(){
        $obj   = Request::capture()->input('id',[]);
        $school = User::find($obj);
        $school->delete();
        return back()->with('user-status','bạn đã xóa thành công');
    }
}
