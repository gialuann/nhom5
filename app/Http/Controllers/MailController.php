<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Mail\TourRejectedMail;
use App\Mail\TourValidatedMail;
use App\Models\Join;
use App\Models\MemberJoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function testEmail(){
        
        $joins=Join::with('user')->where('email')->get();
        // dd($join)
        foreach($joins as $join){
           $email = $join -> user -> email; 
        }
        //gửi email cho người tạo tour
        Mail::to($email)
        ->send(new DemoMail($join, 'create'));

        // Gửi email cho người đăng ký
        Mail::to(auth()->user()->email)
            ->send(new DemoMail($join, 'registrant'));  
    }

    public function validatedEmail(){
        $joins=Join::with('user')->where('email')->get();
        $memberjoins=MemberJoin::get();
        foreach($joins as $join){
           $email = $join -> user -> email; 
        }
        foreach($memberjoins as $memberjoin){
            $status = $memberjoin->status; 
        }
        if ($status == '2') {
            // Logic khi tour được chấp nhận
            Mail::to(auth()->user()->email)
            ->send(new TourValidatedMail($join,));  
        } elseif ($status == '3') {
            // Logic khi tour bị từ chối
            Mail::to($user->email)->send(new TourRejectedMail($join));
        }
        }
    }

