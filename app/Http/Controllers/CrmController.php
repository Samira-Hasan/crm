<?php

namespace App\Http\Controllers;
use App\Models\Visitors;
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
        $pieChart = Visitors::createVisitors();
        
        $arr = [];
        $val = [];
        $bser = [];
        foreach ($pieChart as $user) {
            array_push($arr, $user->name);
            array_push($val, $user->Value);
           array_push($bser, $user->browser_id);
        }
         $Labels = $arr;
        $Labels= "'" . implode( "','",($Labels) ) . "'";
      //  echo '<pre>';print_r($val);die();
        $chart_data = $val;
        $chart_data = "'" . implode( "','",($chart_data) ) . "'";
        $mapCoor = [
            [50.0091294, 9.0371812],
            [49.0543102, 8.4825862],
            [50.9030599, 6.4213693],
            [53.1472465, 12.9903674],
            [48.513264, 10.4020357],
            [49.364503, 9.076252],
            [52.5331853, 7.2505223],
            [50.1051446, 8.9348691],
            [53.6200685, 9.5306289],
            [48.6558015, 12.2500848],
            [54.1417497, 13.6583877],
            [49.709331, 8.415865],
            [51.6396481, 9.3915617],
            [49.0401151, 9.1721088],
            [53.8913533, 9.2005777],
            [48.5544748, 12.3472095],
            [53.4293465, 8.4774649],
            [49.1473279, 8.3827739],
            [49.2513078, 8.4356761],
            [49.9841308, 10.1846373],
            [53.4104656, 10.4091597],
            [52.0348748, 9.4097793],
            [53.850666, 9.3457603],
            [50.408791, 7.4861956],
            [51.6786228, 7.9700232],
            [52.4216974, 7.3706389]
        ];

        
        return view('dashboard', ['name' => $visitor,
        'revenue' => $Revenue, 'cost' => $Cost, 'profit' => $Profit, 'goal' => $Goal, 
        'traffic' => $t, 'likes' => $formattedLikes, 'sales' => $sales, 
        'members' => $formattedMembers, 'chat' => $chat, 'today' => $today, 'yesterday' => $yesterday, 
        'date' => $date, 'user' => $User, 'pChart' => $pieChart, 'label' => $Labels, 'cdata' => $chart_data]);
        
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