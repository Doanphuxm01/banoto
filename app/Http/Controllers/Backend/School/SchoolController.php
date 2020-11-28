<?php

namespace App\Http\Controllers\Backend\School;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\School\School;
use App\Elibs\eView;
use App\Http\Requests\School\FormSchool;
use Request;
class SchoolController extends Controller
{
    protected $school;
    protected $eview;

    public function __construct(School $school ,eView $eview){
        $this->school = $school;
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
        $school = $this->school->getData();
        $tpl['school'] = $school;
        return eView::getInstance()->setView(__DIR__, 'index', $tpl);
    }

    public function input(){
       
        $id = Request::capture()->input('id', 0);
        $obj = Request::capture()->input('obj', 0);
        $school = [];
        if($id) {
            $school = $this->school->getDetaiByidSchool($id);
            $school->tuitionFee    = \json_decode($school->tuitionFee);
            $school->accommodation = \json_decode($school->accommodation);
            $school->address       = \json_decode($school->address);
            $school->job           = \json_decode($school->job);
            $school->website       = \json_decode($school->website);
            $school->cover         = \json_decode($school->cover);
            $school->iMap          = \json_decode($school->iMap);
            // dump($school);
        }else {
            return eView::getInstance()->setView(__DIR__, 'add');
        }
        $tpl = [];
        $tpl['obj'] = $school;
        // dd($tpl);
        return eView::getInstance()->setView(__DIR__, 'input', $tpl);
    }

    public function popup_preview() {
        $id = Request::capture()->input('id', 0);
        if($id) {
            $school = $this->school->getDetaiByidSchool($id);
            $school->tuitionFee = \json_decode($school->tuitionFee);
            $school->accommodation = \json_decode($school->accommodation);
            $tpl['obj'] = $school;
            echo eView::getInstance()->setView(__DIR__, 'include.preview', $tpl);die;
        }
        
    }

    public function _save() {
        $request = new FormSchool;
        $id = Request::capture()->input('id', 0);
        $obj = request('obj');
        if($id) {
            $this->check($obj);
            $this->school->updateSchool($id,$obj);
            $ret = ['redirect'=>admin_link('school?page=?')];
            return eView::getInstance()->getJsonSuccess('edit thành công', $ret,2);
        }
        else{
            if(isset($obj)){
                // dd($obj);
                $this->check($obj);
                $this->school->saveSchool($obj);
                $ret = ['redirect'=>admin_link('school?page=?')];
                return eView::getInstance()->getJsonSuccess('thêm thành công ', $ret,2);
            }
        }
    }
    public function _delete(){
        $obj   = Request::capture()->input('id',[]);
        $school = School::find($obj);
        $school->delete();
        return back()->with('status','bạn đã xóa thành công');
    }
    /**
     * @school
     * check validator @school
     */
    public function check($obj){
        if($obj['source']== null){
            $this->eview->getJsonSuccess('trường source không được bỏ trống',true,'error');
        }
        if($obj['enName']== null){
            $this->eview->getJsonSuccess('trường enName không được bỏ trống',true,'error');
        }
        if($obj['jpName']== null){
            $this->eview->getJsonSuccess('trường jpName không được bỏ trống',true,'error');
        }
        if(isset($obj['address'])){
            foreach($obj['address'] as $key => $value ){
                if($value== null){
                    $this->eview->getJsonSuccess('trường address không được bỏ trống',true,'error');
                }
            }
            
        }
        
    }
}
