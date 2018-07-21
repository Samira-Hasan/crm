<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Revenue;
use App\Models\User;
use App\Models\MonthlyVisitor;
use App\Models\Dashboard;
use App\Models\ChatBox;


class CrmController extends Controller
{
    public function index()
    {   
        $MonthlyVisitor = MonthlyVisitor::all(['visitor_count'])->toArray();

        $visitor = array_column($MonthlyVisitor, 'visitor_count');
        $Total = Revenue::getData();
        
        $Revenue = $Total[0]->Total_Revenue;
        $Cost = $Total[0]->Total_Cost;
        $Profit = $Total[0]->Total_Profit;
        $Goal = $Total[0]->Goal;
        $member = Dashboard::createMembers();
        $formattedMembers = number_format($member);
        $sales = Dashboard::where('id', '>=', 800)->sum('sales');
        $sales = number_format($sales);
        $likes = Dashboard::getlikes();
        $l = $likes[0]->likes;        
        $formattedLikes = number_format($l);
        $Traffic = Dashboard::createTraffic();
        $t = $Traffic[0]->traffic;
        $chat = ChatBox::createChatBox();
        $today = "today";
        $yesterday = "yesterday";
        $date = "13 Jan";
        $User = User::setUser();
        $pieChart = [12, 19, 3, 5, 2, 3];
        
        return view('dashboard', ['name' => $visitor, 
        'revenue' => $Revenue, 'cost' => $Cost, 'profit' => $Profit, 'goal' => $Goal, 
        'traffic' => $t, 'likes' => $formattedLikes, 'sales' => $sales, 
        'members' => $formattedMembers, 'chat' => $chat, 'today' => $today, 'yesterday' => $yesterday, 
        'date' => '13 Jan', 'user' => $User, 'pChart' => $pieChart]);
        
    }
    public function log()
    {
        return view('auth/login');
    }
    public function rset()
    {
        return view('auth/passwords/reset');
    }
    public function mail()
    {
        return view('auth/passwords/email');
    }
    public function reg()
    {   

        return view('register');
    }

    public function registerStep1(Request $request)
   {
    
    $this->validate($request,[
          'fname' => 'required',
          'lname' => 'required',
          'phone' => 'required',
          'twitter' => 'required',
          'facebook' => 'required',
          'gplus' => 'required',
          'email' => 'required',
          'pass' => 'required'
    ]);
    
  
    $User = new User;
   
    $User->First_Name = $request->fname;
    $User->Last_Name = $request->lname ;
    $User->Phone = $request->phone;
    $User->Twitter = $request->twitter;
    $User->FaceBook = $request->facebook ;
    $User->Google_plus = $request->gplus;
    $User->Email = $request->email;
    $User->Password = $request->pass ;
    
    $User->save();
    return redirect('/login');
   }

   public function setMessage(Request $request)
   {
    if ($request->isMethod('post')) {
        //$name = $request->message;
        
        $chatbox = new ChatBox;

        $chatbox->user_id = 1;
        $chatbox->messege = $request->message;
        $chatbox->is_viewed = true;

        $chatbox->save();
        
        $response = array(
            "success" => true,
        );
        echo json_encode($response); exit();
    }
   }
    
    public function getChatbox(Request $request) 
     {
        $chat = ChatBox::createChatBox();

        $response = array(
            "success" => true,
            "chat" => $chat,
        );
        echo json_encode($response); exit();
     }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
}