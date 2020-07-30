<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;

####### Include
use Auth;
use DB;
use Session;
use Cookie;
use General;
use Socialite;

class loginController extends FrontendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = [
        //     'cookie_PFK_COM' => Cookie::get('cookie_PFK_COM')
        // ];
        // return view('frontend.login.index', $data);
        $data = [];
        return view('frontend.login', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        ### Check Response Google Recaptcha V2
        $secret_key = '6Lddv7AUAAAAAAz6PfyUJ3W9eh4ZH9G8SWgZIE6n';
        $response   = $request->input('g-recaptcha-response');
        $remoteIp   = '';
        $recaptcha  = new \ReCaptcha\ReCaptcha($secret_key);
        $resp       = $recaptcha->setExpectedHostname($request->getHost())//planforkids.com
                          ->verify($response, $remoteIp);
        if ($resp->isSuccess()) {
            // Verified!
        } else {
            $errors = $resp->getErrorCodes();
            if(@$errors[0] == 'missing-input-response') {
                $text_respon = 'กรุณายืนยัน reCAPTCHA ค่ะ';
            } else {
                $text_respon = 'กรุณาติดต่อผู้ดูแลระบบค่ะ';
            }
            return back()->withInput($request->except(['password']))->with('fail', true)->with('message',$text_respon); 
        }
        ###

        ### Request
        //General::print_r_($request->all());exit;
        foreach ($request->all() as $key => $value) {
            ${$key}  = $value;
        }   


        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        DB::beginTransaction();

        try {
            if(Auth::guard('ecom_customer')->attempt(['customer_username' => $username,'customer_password'=> $password, 'password' => $password], 1)) {
                $status_login = 'Pass';
                if(Auth::guard('ecom_customer')->user()->customer_login_active != 1) {
                    $status_login = 'Not Active';
                }
            } else {
                $status_login = 'Wrong';
            }

            if($status_login != 'Pass') {
                DB::rollback();
                if($status_login == 'Not Active') {
                  ## Log
                  \App\Model\Log\log_frontend_login::log('login/ecommerce_customer/ID:/Not Active', 'F');

                  return back()->withInput($request->except(['password']))->with('fail', true)->with('message','ไม่สามารถทำรายการได้ในขณะนี้ เนื่องจาก Account นี้ยังไม่ได้รับการอนุมัติ รหัส:Login Not Active'); 
                } else {
                  ## Log
                  \App\Model\Log\log_frontend_login::log('login/ecommerce_customer/ID:/Wrong', 'F');

                  return back()->withInput($request->except(['password']))->with('fail', true)->with('message','"อีเมล" หรือ "รหัสผ่าน" ไม่ถูกต้องค่ะ'); 
                }

                
            } else {

                //ลบ Cookie -- ปิดเมื่อเปิดใช้งานจริง
                //Cookie::queue(Cookie::forget('cookie_PFK_COM'));
                //return 'ลบ Cookie';

                ## Log
                \App\Model\Log\log_frontend_login::log('login/ecommerce_customer/ID:'.Auth::guard('ecom_customer')->user()->id.'/Pass', 'S');
            }

            DB::commit(); 
            if(@Session::get('frontUrl')) {
                $url = Session::get('frontUrl');
                Session::forget('frontUrl');
            } else {
                $url = '/';
            }

            ### Cookie Save
            // Set cookie: Cookie::queue(Cookie::make('cookieName', 'value', $minutes));
            // Get cookie: $value = $request->cookie('cookieName'); or $value = Cookie::get('cookieName');
            // Forget/remove cookie:  Cookie::queue(Cookie::forget('cookieName'));
            //cookie('name', 'value', $minutes, $path, $domain, $secure, $httpOnly);

            /*
            $minutes = '5';
            $cookie_value = [
                'start' => date('Ymd_His'),
                'end'   => date('Ymd_His', strtotime('+5 min')), //days, min
                'cart'  => [
                    [
                        'product_id'    => '1',
                        'product_name'  => 'หนังสือปกอ่อน',
                        'product_price' => '150'
                    ],
                    [
                        'product_id'    => '2',
                        'product_name'  => 'หนังสือปกแข็ง',
                        'product_price' => '300'
                    ],
                    [
                        'product_id'    => '3',
                        'product_name'  => 'หนังสือปกบาง',
                        'product_price' => '215'
                    ]
                ]
            ];
            Cookie::queue(Cookie::make('cookie_PFK_COM', json_encode($cookie_value), $minutes));
            */
            //ลบ Cookie
            //Cookie::queue(Cookie::forget('cookie_PFK_COM'));

            return redirect()->intended($url)->with('success', true)->with('message', ' เข้าสู่ระบบสำเร็จแล้วค่ะ');

        } catch (\Exception $e) {
            DB::rollback();
            ## Log
            $log_code = \App\Model\Log\log_frontend_login::log('login/ecommerce_customer/ID:/Error:'.substr($e->getMessage(),0,180), 'F');
            // throw $e;
            // echo $e->getMessage();
            // return abort(404);
            return back()->withInput($request->except(['password']))->with('fail', true)->with('message','ไม่สามารถทำรายการได้ในขณะนี้ กรุณาติดต่อผู้ดูแลระบบ รหัส:'.$log_code);
        }

        //return 'Store = '.$name;
    }

    public function logout()
    {
        Auth::guard('ecom_customer')->logout();
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function facebook_redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function facebook_handleProviderCallback(Request $request)
    {
        ### Request
        //General::print_r_($request->all());exit;
        foreach ($request->all() as $key => $value) {
            ${$key}  = $value;
        } 

        if(@$error == 'access_denied') {
          return redirect('login');
        }
    
        $user = Socialite::driver('facebook')->stateless()->user();
        //dd($user);

        if($user->id) {
          ### ค้นหา Facebook ID
          $customer = DB::table('ecommerce_customer')->where('fb_id',$user->id)->first();
          if(@$customer) {
            ## พบ Login
            @Auth::guard('ecom_customer')->loginUsingId($customer->id);
            ## Log
            \App\Model\Log\log_frontend_login::log('login/ecommerce_customer/ID:'.$customer->id.'/facebook', 'S');
            return redirect()->to('member');
          } else {
            ## ไม่พบ ค้นหาด้วย email
            $customer = DB::table('ecommerce_customer')
            ->where('customer_email',$user->email)
            ->whereNotNull('customer_email')
            ->first();

            if(@$customer) {
              ## พบ Login และ Update Facebook ID
              DB::table('ecommerce_customer')
              ->where('id',$customer->id)
              ->update([
                'fb_id' => $user->id
              ]);
            } else {
              ## ไม่พบ สร้าง Acc ใหม่

              ### Create Acc Customer พร้อม Login

              ### Gen Data ###
                $current_year = General::mb_substr_((date('Y')+543),2,2); //62
                $first = DB::table('ecommerce_customer')->orderBy('customer_code','desc')->first();
                if($first) {
                    //ตัวอย่าง : 62000001
                    $prefix = General::mb_substr_($first->customer_code,0,2);//62
                    $num = General::mb_substr_($first->customer_code,2,6); //000001

                    if($prefix == $current_year) {
                        $customer_code = $prefix.General::str_pad_num(($num+1), 6);
                    } else {
                        $customer_code = $current_year.'000001';
                    }
                } else {
                    $customer_code = $current_year.'000001';
                }

                $gender = '';

                $fullname = explode(' ',$user->name);

                DB::table('ecommerce_customer')
                ->insert([
                  'fb_id'               => $user->id,
                  'customer_code'       => $customer_code,
                  'customer_prefix'     => '',
                  'customer_firstname'  => $fullname[0],
                  'customer_lastname'   => $fullname[1],
                  'customer_gender'     => $gender,
                  'customer_email'      => $user->email
                ]);
                $new_customer_id = DB::getPdo()->lastInsertId();
                @Auth::guard('ecom_customer')->loginUsingId($new_customer_id);
                ## Log
                \App\Model\Log\log_frontend_login::log('login/ecommerce_customer/ID:'.$customer->id.'/facebook@new', 'S');
                return redirect()->to('member');
            }

          }


        }
        

    }

    

}
