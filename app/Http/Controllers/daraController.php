<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class daraController extends Controller
{
    // public function callMyName(Request $dkfhdjd)
    // {
    //     $names = ['ade', 'sola', 'bayo'];
    //     $age = ['1', '2', '3'];

    //     return view('dara', compact('names', 'age'));
    // }

    // public function callMyName(Request $dkfhdjd)
    // {
    //    //dd(Member::all());
    //    $check_for_john = Member::where('first_name', '=', 'john')->first();
    //    dd($check_for_john);
    // }

    public function getAllMember()
    {
    
        $allMembers = Member::all(); //as object
        $allMemberarr = $allMembers->toArray(); //as array
        return view('member.allmembers', compact('allMembers'));
    }
    public function formA(Request $request){
        if ($request->isMethod('post')){
            
            $checkC = Member::where(['email' =>$request->email])->count();
            $checkF = Member::where(['email' =>$request->email])->first();
            if($checkF !== null){
                return back()->with('error', 'Email Already exist');
            }
            $save_to_db = Member::create($request->except('_token'));
            if($save_to_db){
                return back()->with('success', 'It is done');
            }else{
                return back()->with('error', 'we don cook beans');
            }
        }
        return view ('member.form');
    }

    public function process_form(Request $request){
        if ($request->isMethod('post')){
            $validation = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
            ]);
        }
    }
}
