<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school';
    protected $guarded = ['id']; 
    public $timestamps = false;
    protected $filltable = [
        'source','status','enName','jpName','type',
        'conditions','tuitionFee','accommodation',
        'address','job','website','cover','iMap'
    ];
    public  function getData($paginate = 10){
        return self::select("*")->orderBy('id','desc')->paginate($paginate);
    }

    public function getDetaiByidSchool($id){
        return self::find($id);
    }
    public function deleteData($id=0){
        return self::where('id',$id)->delete();
    }

    public function getDateSchool(){
        $todayOrder = $self::select('id', 'created', 'status', 'price_total')->get()->groupBy(function($date) {
            return Carbon::parse($date->created)->format('d');
        });
    }

    public function updateSchool($id,$obj){
        if($id){
            $school['source']           = $obj['source'];
            $school['status']           = $obj['status'];
            $school['enName']           = $obj['enName'];
            $school['jpName']           = $obj['jpName'];
            $school['type']             = $obj['type'];
            $school['conditions']       = $obj['conditions'];
            $school['tuitionFee']       = ($obj['tuitionFee'] == [null]) ? '' :\json_encode($obj['tuitionFee']);
            $school['accommodation']    = ($obj['accommodation'] == [null]) ? '' :\json_encode($obj['accommodation']);
            $school['address']          = ($obj['address'] == [null]) ? '' :\json_encode($obj['address']);
            if(isset($obj['job'])){
                $school['job']          = \json_encode($obj['job']) ;
            }
            $school['website']          = ($obj['website'] == [null]) ? '' : \json_encode($obj['website']);
            if(isset($obj['cover'])){
                $school['cover']            =($obj['cover'] == [null]) ? '' :  \json_encode($obj['cover']);
            }
            $school['iMap']             = ($obj['iMap'] == [null]) ? '' :\json_encode($obj['iMap']);
            $update = $this->where('id', $id)->update($school);
            return true;
        }
            return false;
    }

    public function saveSchool($obj){
        $school['source']           = $obj['source'];
        $school['status']           = $obj['status'];
        $school['enName']           = $obj['enName'];
        $school['jpName']           = $obj['jpName'];
        $school['type']             = $obj['type'];
        $school['conditions']       = $obj['conditions'];
        $school['tuitionFee']       = \json_encode($obj['tuitionFee']);
        $school['accommodation']    = \json_encode($obj['accommodation']);
        $school['address']          = \json_encode($obj['address']);
        if(isset($obj['job'])){
            $school['job']          = \json_encode($obj['job']) ;
        }
        $school['website']          = ($obj['website'] == [null]) ? '' : \json_encode($obj['website']);
        if(isset($obj['cover'])){
            $school['cover']        = \json_encode($obj['cover']);
        }
        $school['cover']            = \json_encode($obj['iMap']);
        // dd($school['website']);
        $db = new School ;
        $db->source = $school['source'];
        $db->enName = $school['enName'];
        $db->jpName = $school['jpName'];
        $db->status = $school['status'];
        $db->address = $school['address'];
        $db->conditions = $school['conditions'];
        $db->tuitionFee = $school['tuitionFee'];
        $db->accommodation = $school['accommodation'];
        $db->job = $school['job'];
        $db->website = $school['website'];
        $db->cover = $school['cover'];
        $db->cover = $school['cover'];
        $db->save();
        return true;
    }
}
