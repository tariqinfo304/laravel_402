<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Address;
use App\Models\Product;

class ORMController extends Controller
{   

    public function create()
    {
        $std = new Customer();
        $std->name="tariq";
        $std->salary=3000;
        $is_save = $std->save();
        if($is_save)
        {
            echo "Customer Saved";
        }
        else
        {
            echo "Customer not saved";
        }
    }
    
    public function orm()
    {   
        //save data into table
            
        $std = new Customer();
        /*
        
        
        $std->name="tariq";
        $std->salary=3000;
        $is_save = $std->save();
        if($is_save)
        {
            echo "Customer Saved";
        }
        else
        {
            echo "Customer not saved";
        }
        */
        

        /*
        //update //
        $obj = $std->where("id","1")->first();
        if(!empty($obj))
        {
            $obj->name="tariq updated";

            $is_update = $obj->save();
            if($is_update)
            {
                echo "Customer updated";
            }
            else
            {
                echo "Customer not updated";
            }
        }
        */


        /*
        //Delete//
        
        $obj = $std->where("id",1)->first();

        if(!empty($obj))
        {
            $is_deleted = $obj->delete();
            if($is_deleted)
            {
                echo "Customer deleted";
            }
            else
            {
                echo "Customer not deleted";
            }
        }
        */


        //fetch all records;


        //it will get all records
        // $list = $std->get();
        //it will filter record by where condition
         $list = $std->where("salary","3000")->get();
        //dd($list);
        foreach($list as $row)
        {
            echo $row->name . " : " . $row->salary ."<br/>";
        }
    }


    function relation()
    {
        //ONE TO ONE
        //direct
        /*
        $c = new Customer();
        $c = $c->where("id",2)->first();
        dd($c->getImage);
        //$c->getImage->image_path
        */

        /*
        //indirect
        $im = new Image();
        $im = $im->where("id","1")->first();

        dd($im->getCustomer);

        */


        //One To Many

        /*
        //direct
        $c = new Customer();
        $c = $c->where("id",2)->first();

        echo $c->name."<br/>";

        foreach($c->address as $row)
        {
            echo $row->address."<br/>";
        }*/

        //indirect
        /*

        $add = new Address();
        $add = $add->where("id",1)->first();

        dd($add->Customer);
        */


        //Many to Many

        /*
        $c = new Customer();

        $c = $c->where("id",2)->first();

        echo $c->name . "<br/>";


        foreach($c->Product as $row)
        {
            echo $row->name . "<br/>";
        }
        */

        //indirect

        $p = new Product();
        $p = $p->where("id",1)->first();

        echo $p->name ."<br/>";

        foreach($p->Customer as $row)
        {
            echo $row->name . "<br/>";
        }




    }
}
