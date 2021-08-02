<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ORMController extends Controller
{
    
    public function orm()
    {   
        //save data into table
        
        $std = new Student();
        /*
        $std->name="tariq";
        $std->class="9th";
        $std->roll_no="php-09";
        $is_save = $std->save();
        if($is_save)
        {
            echo "Student Saved";
        }
        else
        {
            echo "Student not saved";
        }
        */

        /*
        //update //
        $obj = $std->where("id","1")->first();
        if(!empty($obj))
        {
            $obj->name="tariq updated";
            $obj->class="10th";

            $is_update = $obj->save();
            if($is_update)
            {
                echo "Student updated";
            }
            else
            {
                echo "Student not updated";
            }
        }
        */

        //Delete//
        /*
        $obj = $std->where("id",1)->first();

        if(!empty($obj))
        {
            $is_deleted = $obj->delete();
            if($is_deleted)
            {
                echo "Student deleted";
            }
            else
            {
                echo "Student not deleted";
            }
        }*/


        //fetch all records;


        //it will get all records
       // $list = $std->get();
        //it will filter record by where condition
        $list = $std->where("class","11th")->get();
        //dd($list);
        foreach($list as $row)
        {
            echo $row->name . " : " . $row->roll_no ."<br/>";
        }
        



    }
}
