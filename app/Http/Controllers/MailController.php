<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Mail\TourValidatedMail;
use App\Models\Join;
use App\Models\MemberJoin;
use App\Models\User;
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




    public function handleTourDecision($joinId, $userId, $memberJoinId, $status)
{  
    $join = Join::findOrFail($joinId);
    $user = User::findOrFail($userId);
    $memberjoins = MemberJoin::findOrFail($memberJoinId);
    $currentStatus = $memberjoins->status;

    if ($currentStatus == '2') {
        // Logic khi tour được chấp nhận
        Mail::to($user->email)->send(new TourValidatedMail($join));
    } elseif ($currentStatus == '3') {
        // Logic khi tour bị từ chối
        Mail::to($user->email)->send(new TourValidatedMail($join));
    }
}
    }

