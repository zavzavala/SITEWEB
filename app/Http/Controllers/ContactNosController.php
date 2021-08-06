<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class ContactNosController extends Controller
{ 
    function index(){
    return view('email.index');
}
    function sendMyData(Request $request){
        $name=$request->name;
        $email=$request->email;
        $subject=$request->subject;
        $message=$request->message;

        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

 

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username =
            $mail->Username = 'imposec321@gmail.com';   //  sender username
            $mail->Password = '843574541';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom($email, $name);
            $mail->addAddress('zavzavala76@gmail.com');

        
/////////////for file attachement////////////////////
            $fileName=public_path('img/imoji.jpeg');
            $mail->addAttachment($fileName);
           
//////////////////////////

            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = $subject;
            $mail->Body    = $request->message;

            if( !$mail->send() ) {
                return back()->with("failed", "Ocorreu um errro.")->withErrors($mail->ErrorInfo);
               
            }else {
                return back()->with("success", "Com sucesso.");
            }

     
    }
    
}
