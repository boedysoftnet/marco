<?php

namespace App\Http\Livewire\Front\Member;

use App\Models\Member;
use Livewire\Component;

class ProfileMember extends Component
{
    public function render()
    {
        $member=Member::find(session('member_id'));
        return view('livewire.front.member.profile-member',compact('member'))->extends('front.layouts.index');
    }
}
