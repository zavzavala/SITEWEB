<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    function index(){

        return view('dashboards.admins.index');
       }
    
       function profile(){
           return view('dashboards.admins.profile');
       }
       function settings(){
           return view('dashboards.admins.settings');
       }

       function updateInfo(Request $request){
           
               $validator = \Validator::make($request->all(),[
                   'name'=>'required',
                   'email'=> 'required|email|unique:users,email,'.Auth::user()->id,
                   'favoritecolor'=>'required',
               ]);

               if(!$validator->passes()){
                   return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
               }else{
                    $query = User::find(Auth::user()->id)->update([
                         'name'=>$request->name,
                         'email'=>$request->email,
                         'favoriteColor'=>$request->favoritecolor,
                    ]);

                    if(!$query){
                        return response()->json(['status'=>0,'msg'=>'Ocorreu um erro.']);
                    }else{
                        return response()->json(['status'=>1,'msg'=>'Seus dados foram atualizados com sucesso.']);
                    }
               }
       }

       function updatePicture(Request $request){
           $path = 'users/images/';
           $file = $request->file('admin_image');
           $new_name = 'UIMG_'.date('Ymd').uniqid().'.jpg';

           //Upload new image
           $upload = $file->move(public_path($path), $new_name);
           
           if( !$upload ){
               return response()->json(['status'=>0,'msg'=>'Ocorreu um erro.']);
           }else{
               //Get Old picture
               $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

               if( $oldPicture != '' ){
                   if( \File::exists(public_path($path.$oldPicture))){
                       \File::delete(public_path($path.$oldPicture));
                   }
               }

               //Update DB
               $update = User::find(Auth::user()->id)->update(['picture'=>$new_name]);

               if( !$upload ){
                   return response()->json(['status'=>0,'msg'=>'Ocorreu um erro, a foto nao foi atualizada.']);
               }else{
                   return response()->json(['status'=>1,'msg'=>'Sua foto foi atualizada com sucesso.']);
               }
           }
       }


       function changePassword(Request $request){
           //Validate form
           $validator = \Validator::make($request->all(),[
               'oldpassword'=>[
                   'required', function($attribute, $value, $fail){
                       if( !\Hash::check($value, Auth::user()->password) ){
                           return $fail(__('A palavra-passe atual esta incorreta.'));
                       }
                   },
                   'min:8',
                   'max:30'
                ],
                'newpassword'=>'required|min:8|max:30',
                'cnewpassword'=>'required|same:newpassword'
            ],[
                'oldpassword.required'=>'Insira palavra-passe anterior',
                'oldpassword.min'=>'A palavra-passe anterior deve ter pelomenos 8 carateres',
                'oldpassword.max'=>'A palavra-passe anterior nao deve ter mais de 30 carateres',
                'newpassword.required'=>'Insira a nova palavra-passe',
                'newpassword.min'=>'A nova palavra-passe deve ter pelomenos 8 carateres',
                'newpassword.max'=>'A nova palavra-passe nao deve ter mais de 30 carateres',
                'cnewpassword.required'=>'Repita a palavra-passe',
                'cnewpassword.same'=>'A nova palavra-passe e a antiga devem combinar'
            ]);

           if( !$validator->passes() ){
               return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
           }else{
                
            $update = User::find(Auth::user()->id)->update(['password'=>\Hash::make($request->newpassword)]);

            if( !$update ){
                return response()->json(['status'=>0,'msg'=>'Ocorreu um erro, falha ao tentar atualizada a palavra-passe.']);
            }else{
                return response()->json(['status'=>1,'msg'=>'A sua palavra-passe foi atualizada com sucesso.']);
            }
           }
       }

}
