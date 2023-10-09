<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function avatar(Request $request, $id){
        $this->validate($request, [
            
            "img_avatar" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            


        ]);
        if($request->img_avatar){
            $fileNameWithExt = $request->file('img_avatar')->getClientOriginalName();
            

            $path = $request->file('img_avatar')->storeAs('public/imgavatar', $fileNameWithExt);
            $img = $request->img_avatar->getClientOriginalName();
      }
      else{
        $img = '';
      }
      $text_user = User::where('id', $id)->update(['my_img' => $img]);
      
      return redirect()->to('home'.$id);

    }
}
