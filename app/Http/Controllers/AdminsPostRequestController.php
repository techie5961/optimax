<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AdminsPostRequestController extends Controller
{
    // login
    public function Login(){
        if(!DB::table('admins')->where('tag',request('tag'))->exists()){
            return response()->json([
                'message' => 'Admin not found',
                'status' => 'error'
            ]);
        }
        $admin=DB::table('admins')->where('tag',request('tag'))->first();
        if(!Hash::check(request('password'),$admin->password)){
            return response()->json([
                'message' => 'Invalid password',
                'status' => 'error'
            ]);
        }
        Auth::guard('admins')->loginUsingId($admin->id,true);
        return response()->json([
            'message' => 'Login successfull',
            'status' => 'success',
            'url' => url('admins/dashboard')
        ]);

    }
    // add package
    public function AddPackage(){
     $name=time().'.'.request()->file('banner')->getClientOriginalExtension();

      if(request()->file('banner')->move(public_path('packages'),$name)){
         DB::table('packages')->insert([
        'banner' => $name,
        'type' => request()->input('type'),
        'name' => request('name'),
        'cost' => request('fee'),
        'cashback' => request('cashback') ?? null,
        'subordinate' => request('subordinate') ?? null,
        'first_indirect' => request('first_indirect') ?? null,
        'free_data' => request('free_data') ?? null,
        'article_writing' => request('article_writing') ?? null,
        'earning_per_click' => request('earning_per_click') ?? null,
        'tiktok_monitizing' => request('tiktok_minitizing') ?? null,
        'casino_game' => request('casino_game') ?? null,
        'daily_advert' => request('daily_advert') ?? null,
        'updated' => Carbon::now(),
        'date' => Carbon::now()
       ]);
       return response()->json([
        'message' => 'Package added successfully',
        'status' => 'success',
        'url' => url('admins/packages/manage')
        ]);
      }
    }
     // edit package
    public function EditPackage(){
      
        if(request()->file('banner') !== null){
 $name=time().'.'.request()->file('banner')->getClientOriginalExtension();

      if(request()->file('banner')->move(public_path('packages'),$name)){
          
       DB::table('packages')->where('id',request()->input('id'))->update([
        'banner' => $name,
        'type' => request()->input('type'),
        'name' => request('name'),
        'cost' => request('fee'),
        'cashback' => request('cashback') ?? null,
        'subordinate' => request('subordinate') ?? null,
        'first_indirect' => request('first_indirect') ?? null,
        'free_data' => request('free_data') ?? null,
        'article_writing' => request('article_writing') ?? null,
        'earning_per_click' => request('earning_per_click') ?? null,
        'tiktok_monitizing' => request('tiktok_minitizing') ?? null,
        'casino_game' => request('casino_game') ?? null,
        'daily_advert' => request('daily_advert') ?? null,
        'updated' => Carbon::now(),
      
       ]);
       return response()->json([
        'message' => 'Package edited successfully',
        'status' => 'success',
        'url' => url('admins/packages/manage')
        ]);
      }
        }else{
              
       DB::table('packages')->where('id',request()->input('id'))->update([
        'type' => request()->input('type'),
        'name' => request('name'),
        'cost' => request('fee'),
        'cashback' => request('cashback') ?? null,
        'subordinate' => request('subordinate') ?? null,
        'first_indirect' => request('first_indirect') ?? null,
        'free_data' => request('free_data') ?? null,
        'article_writing' => request('article_writing') ?? null,
        'earning_per_click' => request('earning_per_click') ?? null,
        'tiktok_monitizing' => request('tiktok_minitizing') ?? null,
        'casino_game' => request('casino_game') ?? null,
        'daily_advert' => request('daily_advert') ?? null,
        'updated' => Carbon::now(),
      
       ]);
       return response()->json([
        'message' => 'Package edited successfully',
        'status' => 'success',
        'url' => url('admins/packages/manage')
        ]);
        }
      
    }
    // create coupon
    public function CreateCoupon(){
        if(!Hash::check(request()->input('password'),'$2y$12$.3edJuEjkx7CkS63mud0Aeb3wYdEbMXcM.kQUIj5NEfnFZCJ2JRoe')){
            return response()->json([
                'message' => 'Invalid password',
                'status' => 'error'
            ]);
        }
        if(request()->has('prefix')){
            $prefix=request()->input('prefix');
        }else{
            $prefix=substr(DB::table('packages')->where('id',request('package'))->first()->name,0,3);
        }
        for($i=0;$i < request()->input('amount');$i++){

             $code=substr(strtoupper($prefix.Str::random(10)),0,10);
        DB::table('coupons')->insert([
            'code' => $code,
            'vendor_id' => request('vendor_id'),
            'package' => json_encode(DB::table('packages')->where('id',request('package'))->first()),
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
        }
       
        return response()->json([
            'message' => 'Coupon code created success',
            'status' => 'success',
            'url' => url('admins/coupons/all')
        ]);
    }
    // add task
    public function AddTask(){
       DB::table('tasks')->insert([
        'uniqid' => strtoupper(uniqid('TSK')),
        'category' => request()->input('category'),
        'title' => (request()->input('category') == 'others') ? request()->input('title') : request()->input('category'),
        'link' => request()->input('link'),
        'reward' => request()->input('reward'),
        'limit' => request()->input('limit'),
        'updated' => Carbon::now(),
        'date' => Carbon::now()
       ]);
       return response()->json([
        'message' => 'Task posted successfully',
        'status' => 'success',
        'url' => url('admins/tasks/manage')
       ]);
    }
      // edit task
    public function EditTask(){
       DB::table('tasks')->where('id',request()->input('id'))->update([
        'category' => request()->input('category'),
        'title' => (request()->input('category') == 'others') ? request()->input('title') : request()->input('category'),
        'link' => request()->input('link'),
        'reward' => request()->input('reward'),
        'limit' => request()->input('limit'),
        'updated' => Carbon::now(),
        
       ]);
       return response()->json([
        'message' => 'Task editted successfully',
        'status' => 'success',
        'url' => url('admins/tasks/manage')
       ]);
    }
    // general settings
    public function GeneralSettings(){
        $key='general_settings';
        $json=[
            'spin_minimum' => request()->input('spin_minimum'),
            'spin_maximum' => request()->input('spin_maximum')
        ];
        if(DB::table('settings')->where('key',$key)->exists()){
            DB::table('settings')->where('key',$key)->update([
                'json' => json_encode($json),
                'updated' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings updated successfully',
                'status' => 'success'
            ]);
        }else{
             DB::table('settings')->insert([
                'key' => $key,
                'json' => json_encode($json),
                'updated' => Carbon::now(),
                'date' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings saved successfully',
                'status' => 'success'
            ]);
        }
    }
     // social settings
    public function SocialSettings(){
        $key='social_settings';
        $json=[
            'whatsapp' => request()->input('whatsapp'),
            'telegram' => request()->input('telegram'),
            'notification' => request()->input('notification') ?? ''
        ];
        if(DB::table('settings')->where('key',$key)->exists()){
            DB::table('settings')->where('key',$key)->update([
                'json' => json_encode($json),
                'updated' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings updated successfully',
                'status' => 'success'
            ]);
        }else{
             DB::table('settings')->insert([
                'key' => $key,
                'json' => json_encode($json),
                'updated' => Carbon::now(),
                'date' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings saved successfully',
                'status' => 'success'
            ]);
        }
    }
     // finance settings
    public function FinanceSettings(){
        $key='finance_settings';
        $json=[
           'wallets' => [
            'activities' => [
                'minimum' => request()->input('activities_minimum_withdrawal'),
                'portal' => request()->input('activities_withdrawal_portal'),
               
            ],
             'affiliate' => [
                'minimum' => request()->input('affiliate_minimum_withdrawal'),
                'portal' => request()->input('affiliate_withdrawal_portal'),
               
            ],
        ],
        'vtu' => [
            'airtime' => request()->input('airtime_portal'),
            'data' => request()->input('data_portal')
        ]
        ];
        if(DB::table('settings')->where('key',$key)->exists()){
            DB::table('settings')->where('key',$key)->update([
                'json' => json_encode($json),
                'updated' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings updated successfully',
                'status' => 'success'
            ]);
        }else{
             DB::table('settings')->insert([
                'key' => $key,
                'json' => json_encode($json),
                'updated' => Carbon::now(),
                'date' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings saved successfully',
                'status' => 'success'
            ]);
        }
    }
    // credit user 
    public function CreditUser(){
        DB::table('users')->where('id',request()->input('id'))->update([
            request()->input('wallet') => DB::raw(''.request()->input('wallet').' + '.request()->input('amount').'')
        ]);
        if(request()->input('wallet') == 'affiliate_balance'){
             DB::table('transactions')->insert([
                 'uniqid' => strtoupper(uniqid('trx')),
            'user_id' => request()->input('id'),
            'type' => 'Admin Commission',
            'class' => 'credit',
            'amount' => request()->input('amount'),
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z"></path></svg>',
            'json' => json_encode([
                'data' => [
                    'type' => 'admin_commission',
                   
                   
                   
                ],
                'wallet' => 'affiliate_balance'
            ]),
            'gateway' => 'automatic',
            'status' => 'success',
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
        }
        return response()->json([
            'message' => 'User wallet creditted successfully',
            'status' => 'success'
        ]);
    }
     // debit user 
    public function DebitUser(){
        DB::table('users')->where('id',request()->input('id'))->update([
            request()->input('wallet') => DB::raw(''.request()->input('wallet').' - '.request()->input('amount').'')
        ]);
        return response()->json([
            'message' => 'User wallet debitted successfully',
            'status' => 'success'
        ]);
    }
       // update user password
    public function UpdatePassword(){
        if(!Hash::check(request('confirm_password'),Hash::make(request('new_password')))){
           return response()->json([
            'message' => 'New password & confirm password must be the same',
            'status' => 'error'
        ]);  
        }
        DB::table('users')->where('id',request()->input('id'))->update([
           'password' => Hash::make(request()->input('new_password'))
        ]);
        return response()->json([
            'message' => 'User password updated successfully',
            'status' => 'success'
        ]);
    }
    // add article topic
    public function AddArticleTopic(){
        DB::table('article_topics')->insert([
            'topic' => request()->input('topic'),
            'status' => 'active',
            'updated' =>Carbon::now(),
            'date' => Carbon::now()
        ]);
        return response()->json([
            'message' => 'Article topic added successfully',
            'status' => 'success'
        ]);
    }
}
