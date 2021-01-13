<?php

namespace App\Http\Livewire\Front\Member;

use App\Models\Member;
use Livewire\Component;

class LoginMember extends Component
{
    public $password,$email;
    protected $rules=[
        'password'=>'required',
        'email'=>'required|email',
    ];
    public function login(){
        $this->validate();
        $find=Member::whereEmail($this->email)->wherePassword($this->password);
        if ($find->count()>0){
            session()->put('member_id',$find->first()->id);
            return $this->redirect(route('front.member.profile-member'));
        }else{
            session()->flash('error',trans('sorry email and password not falid..!'));
        }
    }
    public function render()
    {
        return view('livewire.front.member.login-member')->extends('front.layouts.index');
    }
}
