<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Inventory;
use App\Models\Visitors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Revenue;
use App\Models\User;
use App\Models\MonthlyVisitor;
use App\Models\Dashboard;
use App\Models\ChatBox;
use App\Models\order;
use App\Models\Tables;
use Validator;


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
        
       // echo '<pre>';print_r($pieChart);die();
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
            [  "name" => "MZFR",
              "coords" => [
                  49.0543102,
                  8.4825862
              ]
            ],

            [  "name" => "AVR",
                "coords" => [
                    50.9030599, 6.4213693
                ]
            ],
            [  "name" => "KKR",
                "coords" => [
                    53.1472465, 12.9903674
                ]
            ],
            [  "name" => "KRB",
                "coords" => [
                    48.513264, 10.4020357
                ]
            ],
            [  "name" => "KWO",
                "coords" => [
                    49.364503, 9.076252
                ]
            ],
            [  "name" => "KWL",
                "coords" => [
                    52.5331853, 7.2505223
                ]
            ],
            [  "name" => "HDR",
                "coords" => [
                    50.1051446, 8.9348691
                ]
            ],
            [  "name" => "KKS",
                "coords" => [
                    53.6200685, 9.5306289
                ]
            ],
            [  "name" => "KKN",
                "coords" => [
                    48.6558015, 12.2500848
                ]
            ],
            [  "name" => "KGR",
                "coords" => [
                    54.1417497, 13.6583877
                ]
            ],
            [  "name" => "KWB",
                "coords" => [
                    49.709331, 8.415865
                ]
            ],
            [  "name" => "KWW",
                "coords" => [
                    51.6396481, 9.3915617
                ]
            ],
            [  "name" => "GKN",
                "coords" => [
                    49.0401151, 9.1721088
                    ]
            ],
                [  "name" => "KKB",
                    "coords" => [
                        53.8913533, 9.2005777
                        ]
                    ],

                    [  "name" => "KKI",
                        "coords" => [
                            48.5544748, 12.3472095
                            ]
                        ],
                    [  "name" => "KKU",
                        "coords" => [
                            53.4293465, 8.4774649
                        ]
                    ],

                [  "name" => "KNK",
                    "coords" => [
                        49.1473279, 8.3827739
                    ]
                ],
            [  "name" => "KKP",
                "coords" => [
                    49.2513078, 8.4356761
                ]
            ],
            [  "name" => "KKG",
                "coords" => [
                    49.2513078, 8.4356761
                ]
            ],
            [  "name" => "KKG",
                "coords" => [
                    49.2513078, 8.4356761
                ]
            ],
            [  "name" => "KKK",
                "coords" => [
                    53.4104656, 10.4091597
                ]
            ],
            [  "name" => "KWG",
                "coords" => [
                    52.0348748, 9.4097793
                ]
            ],
            [  "name" => "KBR",
                "coords" => [
                    53.850666, 9.3457603
                ]
            ],
            [  "name" => "KMK",
                "coords" => [
                    50.408791, 7.4861956
                ]
            ],
            [  "name" => "THTR",
                "coords" => [
                    51.6786228, 7.9700232
                ]
            ],
            [  "name" => "KKE",
                "coords" => [
                    52.4216974, 7.3706389
                ]
            ]

        ];
        

        $latLon = Visitors::addLonLat();
       //die('l');
       //echo '<pre>';print_r($latLon);die();
        $coor = [];
        
        foreach ($latLon as $user) {
            $coor[]['coords'] = [ $user->lat, $user->lon];

        }
        
        $coorData =json_encode($coor);
       
       //echo '<pre>';print_r($coorData);die();
        $inventSum = Inventory::createSum();
        

        $inventory = $inventSum[0]->Val1;
        
        $mentions = $inventSum[0]->Val2;
       
        $downloads = $inventSum[0]->Val3;
        $messages = $inventSum[0]->Val4;
        $formattedInventory = number_format($inventory);
        $formattedmentions = number_format($mentions);
        $formatteddownloads = number_format($downloads);
        $formattedmessages = number_format($messages);
        $order = order::createOrder();
        //echo '<pre>';print_r($order);die();
        

        return view('dashboard', ['name' => $visitor,
        'revenue' => $Revenue, 'cost' => $Cost, 'profit' => $Profit, 'goal' => $Goal, 
        'traffic' => $t, 'likes' => $formattedLikes, 'sales' => $sales, 
        'members' => $formattedMembers, 'chat' => $chat, 'today' => $today, 'yesterday' => $yesterday, 
        'date' => $date, 'user' => $User, 'pChart' => $pieChart, 'label' => $Labels, 'cdata' => $chart_data,
            'map' => $coorData, 'invent'=> $formattedInventory,
            'mentions'=> $formattedmentions, 'downloads'=> $formatteddownloads,
            'messages'=> $formattedmessages, 'orderId' => $order]);
        
    }

    public function tables()
    {
       $borderTable = Tables::createTables();
       //echo '<pre>';print_r($borderTable);die();
       $widthTable = Tables::createTables2();
       //echo '<pre>';print_r($widthTable);die();
       return view('Tables/simpleTable', ['borderTable'=>$borderTable, 'widthTable' => $widthTable]);
    }

    public function forms(Request $request)
    {

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'exampleInputFirstName' => 'required',
                'exampleInputLastName' => 'required',
                'exampleInputPhone' => 'required',
                'exampleInputEmail1' => 'required|email',
                'exampleInputPassword1' => 'required',
                'inputFirstName' => 'required',
                'inputLastName' => 'required',
                'inputPhone' => 'required',
                'inputEmail3' => 'required|email',
                'inputPassword3' => 'required',
            ]);

            $user = new user;
            $user->First_Name = $request->exampleInputFirstName;
            $user->Last_Name = $request->exampleInputLastName;
            $user->Phone = $request->exampleInputPhone;
            $user->email = $request->exampleInputEmail1;
            $user->password = $request->exampleInputPassword1;
            $user->First_Name = $request->inputFirstName;
            $user->Last_Name = $request->inputLastName;
            $user->Phone = $request->inputPhone;
            $user->email = $request->inputEmail3;
            $user->password = $request->inputPassword3;

            $user->save();
            //echo '<pre>';print_r($user);die();
            if ($validator->fails()) {
                return redirect('/Form')
                            ->withErrors($validator)
                            ->withInput();
            }
        
            $target_dir = public_path()."/uploads/";
            $target_file = $target_dir . basename($_FILES["exampleInputFile"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["exampleInputFile"]["tmp_name"]);
            if($check !== false) {
               
                $uploadOk = 1;
            } else {
                
                $uploadOk = 0;
    }
               
            if (file_exists($target_file)) {
                
                $uploadOk = 0;
            }
           
            if ($_FILES["exampleInputFile"]["size"] > 500000) {
                
                $uploadOk = 0;
            }
            
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
               
                $uploadOk = 0;
            }
            
            if ($uploadOk != 0) {
                if (move_uploaded_file($_FILES["exampleInputFile"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["exampleInputFile"]["name"]). " has been uploaded.";
                } else {
                   
                }

            }


        }

           return view('Forms/simpleForms');
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