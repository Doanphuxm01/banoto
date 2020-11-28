<?php

namespace App\Http\Controllers\Backend\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Elibs\eView;
use App\Traits\UploadTrait;
use App\Models\Admins\Admin;
class AdminProfileController extends Controller
{
    use UploadTrait;

   public function index(){
       $admin =  Auth::guard('admin')->user();
       $tpl['admin'] = $admin;
       echo eView::getInstance()->setView(__DIR__, 'admin.profile', $tpl);die;
    //    $view = view('backend.admin.profile');
    //    $view->with('admin',$admin);
    //    return $view;
   }

   public function update(Request $request ,$id){
    
    // $request->validate([
    //     'email'         => 'required|email',
    //     'name'          => 'required|min:2',
    //     'password'      => 'required|min:6',
    //     'avatar'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);
    // $admin = Auth::guard('admin')->user()->id;
    // $data = $request->all();
    $article = Admin::find($id);
    if ($request->has('avatar')) {
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $save = request()->image->move(public_path('backend/images'), $imageName);
        dd($save);
    }
    $user->save();
    return back()
        ->with('success','You have successfully upload image.');
   }
}
