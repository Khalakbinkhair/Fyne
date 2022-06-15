<?php

namespace App\Http\Controllers\Admin;

/*use App\LogActivity;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;*/

use App\LogActivity;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function index(){
    return view('admin.index');
  }
  public function display_user_table(){
    $alluser = User::all();
    return view('admin.display_table.user-table', compact('alluser'));
  }
    
  public function edit_status($id){
    $user = User::find($id);
    if($user->status==1 ){
      $user->status = 0;
    }
    else{
      $user->status = 1;
    }
    $user->save();
    return redirect('admin/user-table');
  }
  public function delete_user($id)
  {
    $user = User::findOrFail($id);
    $user->delete();
    return redirect('admin/user-table');
  }
  public function profile(){
/*    $alluser = User::all();*/
    return view('admin.display_table.profile'/*, compact('alluser')*/);
  }
}
