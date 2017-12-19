<?php

namespace App\Http\Controllers\Weilan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Exception;
use App\Exceptions\Handle;
use App\Http\Requests\SaveRemark;
use Mail;
use Notification;
use Illuminate\Notifications\ChannelManager;
use App\Notifications\MessageInvoice;
use App\User;

class MessageController extends Controller
{

    /**
     * add a new remark record.
     * @param  App\Http\Requests\SaveRemark  $request
     * @return true
     * by sane
     */    
    public function message( SaveRemark $request ){

        // validation 
        // $this->validate( $request , [
        //         'customer_name' => 'bail|required|max:5',
        //         'mobile' => 'required|max:11',
        //         'subject' => 'required|max:20',
        //         'customer_subscribe' => 'max:200',
        // ]);

        if( $request->isMethod('post') ){
            $messages = new Message();
            $messages->customer_name = $request ->input('customer_name');
            $messages->mobile = $request ->input('mobile');
            $messages->customer_email = $request ->input('customer_email');
            $messages->subject = $request ->input('subject');
            $messages->customer_subscribe = $request ->input('customer_subscribe');

            try{
            
                $result = $messages ->save($request->all());

                if( $result ){
                    $request->session()->flash('message' , 'remark-success');

                    // send email after remark successfully
                    $users = User::find(1);
                    $invoice = 'sane';

                    /**
                     *  first
                     *  $users->notify(new MessageInvoice($invoice));
                     */
                    // $users->notify(new MessageInvoice($invoice));

                    /**
                     * second
                     * Notification::send($users, new MessageInvoice($invoice));
                     * 
                     * Notification::route('mail', 'taylor@laravel.com')
                     *              ->route('nexmo', '5555555555')
                     *              ->notify(new InvoicePaid($invoice));
                     */
                    Notification::send($users, new MessageInvoice($invoice));
                    
                    /**
                     * third
                     * $this ->email($request , $request ->input('customer_name'), $request ->input('customer_email'));
                     * by sane
                     */
                    // $this ->email($request , $request ->input('customer_name'), $request ->input('customer_email'));

                    return redirect('/contact');
                }
                // else{
                //     dd($result);
                // }
            }catch( Exception $e){
                report( $e );
                return false;
            }
            
        }
    }

    /**
     * send email after remark successfully
     *
     * @param  Illuminate\Http\Request $request
     * @param [string] $name
     * @param [string] $email
     * @return boolen
     * 
     * 匿名函数从父作用域继承变量。 任何此类变量都应该用 use 语言结构传递进去
     * by sane
     */
    public function email(Request $request, $name='' , $email='' ){

        $business_card = public_path('upload/images/444.jpg');

        $result = Mail::send( 'layout.email' , ['name' => $name , 'image' => $business_card ] , function($messages) use ($name , $email) {

            $messages->to( $email, $name  );
            $messages->subject('感谢您的信任，我们会尽快安排工作人员联系您');

        });

        if( count(Mail::failures()) <1 ){
            $request->session()->flash('message' , 'email-success');
        }

    }

}
