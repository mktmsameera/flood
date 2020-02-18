<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//modals
  use App\Users;
  use App\Person;


class User extends Controller
{
    //user register function
    public function register(Request $req){
        $utable=new  Users;
        $person=new Person;

        $person->fname=$req->fname;
        $person->lname=$req->lname;
        $person->email=$req->email;
        $person->phone=$req->phone;
        $person->password=$req->password;
        $person->role="user";
        $person->save();

        
        $utable->email=$req->email;
        $utable->reg_date=date('Y-m-d');
        $utable->streat=$req->streat;
        $utable->province=$req->province;
        $utable->area=$req->area;
        $utable->save();



        return $req;
    }
}
