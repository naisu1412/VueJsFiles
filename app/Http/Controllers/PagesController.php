<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    
    //getRequest most traditional type of request
    //postRequest kadalasan pag mag susubmit ng form
    public function getIndex(){
        $justAnotherName = 'Name of Some Employee';

        //process data or params
        //talk to the model
        //recieve from the model
        //compile or process data from the model if needed
        //pass the data to the correct view
        return view('pages.Welcome' -> with('var',$justAnotherName));
    }

    public function getAbout(){
        $name = 'Eric';
        $last = 'De Jesus';

        $fullname = $name.' '.$last;
        $email = 'a@a.com';
            //special method with takes 2 argument with(placeholder,value )
            //->with('fullname',$fullname) another way lang to
            // ang mapapapasa ngayon na variable ay nakalowercase withFullname-> fullname
            //return view('pages.About')->withFullname($fullname)->withEmail($email);

            //passing an array
            $data = [];
            $data['email'] = $email;
            $data['fullname'] = $fullname;
            return view('pages.About')->withData($data);
    }

    public function getContact(){
    return view('pages.Contact');
    
    }

    public function postContact(){
        
    }


    public function getSample(){
       $homeValue = 'Some Value';

        return view('Templating.Templating')->with('NewVal',$homeValue);
        
    }

    public function getSampleHome(){
        $slots = 5;
        $quartz = 0;
        //with('yung variable na placeholder , yung ipapass mo na variable')
        return view('Templating.Pages.Home')->with('slot',$slots)->with('gem',$quartz);
    }
    
    public function getPanel(){
        $morequartz = 5;

        return view('Templating.Pages.panel') ->with('newGem',$morequartz);
    }


    //Sample website ecommerce

    public function getECommerceIndex(){
        return view('ECommerceWebsite.pages.index');
    }



}