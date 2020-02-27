<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);

        $profile = new Profile;
        $form = $request->all();
        
      

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
     

        // データベースに保存する
        $profile->fill($form);
         $profile->save();
        
        return redirect('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        return view('admin.profile.edit');
    }
    
    public function update(Request $request)
    {
        //validationをかける
        $this->validate($request,Profile::$rules);
        //Profile Modelからデータを取得する
        $profile = Profile::find($request->id);
        //送信されてきたフォームデータを格納する
        $profile_form = $request->all();
        unset($profile_form["_token"]);
        
        //該当するデータを上書きする
        $profile->fill($profile_form)->seve();
        
        return redirect('admin/profile/edit');
    }
}
?>