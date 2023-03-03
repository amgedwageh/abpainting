<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Contracts\Routing\ResponseFactory;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;    
//use Illuminate\Support\MessageBag;
//use App\Http\Traits\GeneralTraits;
//
class Home extends Controller
{
    //use GeneralTraits;
    
    public function index(){
        return view('pages/index', ['name' => 'Home']);
           
    }
    public function about(){
        return view('pages/about', ['name' => 'about']);
           
    }
    public function services(){
        return view('pages/services', ['name' => 'services']);
           
    }
    public function projects(){
        return view('pages/projects', ['name' => 'projects']);
           
    }
    public function features(){
        return view('pages/features', ['name' => 'features']);
           
    }
    public function team(){
        return view('pages/team', ['name' => 'team']);
           
    }
    public function testimonial(){
        return view('pages/testimonial', ['name' => 'testimonial']);
           
    }
    public function p404(){
        return view('pages/p404', ['name' => '404']);
           
    }
    public function contact(){
        return view('pages/contact', ['name' => 'contact']);
           
    }
    public function termsandconditions(){
        return view('pages/termsandconditions', ['name' => 'termsandconditions']);
           
    }
    public function support(){
        return view('pages/support', ['name' => 'support']);
           
    }
    public function sendmail(Request $request){
        /////////////////////////////////////////////////////////validate
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required',
            'subject' => 'required|max:500',
          ]);
          $name = $request->name;
          $email = $request->email;//sender
          $phone = $request->age;
          $subject = $request->subject;
          $address = $request->address;
          $city = $request->city;
          $message = $request->message;
          //send mail 
        /////////////Mail
        $email_rec = 'amgedwageh123@gmail.com';
        $data = ['name' =>$name ,'email'=>$email ,'phone' =>$phone ,'subject'=>$subject ,'address' =>$address ,'city'=>$city,'message'=>$message ];
        Mail::send('myTestMail', $data, function ($message) use ($data,$email_rec) {
            $message->from('info@newsohag.online','Activation@kwamel')
                ->to($email_rec);
                //->subject($subject);
        });
        /////////////Mail
          //return redirect('form')->with('status', 'Form Data Has Been Inserted');
        /////////////////////////////////////////////////////////////////
        
           
    }
    
    
    
}
