<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;

use App\Models\User;
use App\Models\Data_;

class ListContent extends Component
{  
    public function render()
    {
        $achievement1 = Data_::where('id', '=', '1')->value('achievement');
        $achievement2 = Data_::where('id', '=', '2')->value('achievement');
        $achievement3 = Data_::where('id', '=', '3')->value('achievement');
        $achievement4 = Data_::where('id', '=', '4')->value('achievement');
        $achievement5 = Data_::where('id', '=', '5')->value('achievement');
        $achievement6 = Data_::where('id', '=', '6')->value('achievement');
        $achievement7 = Data_::where('id', '=', '7')->value('achievement');
        $achievement8 = Data_::where('id', '=', '8')->value('achievement');
        $achievement9 = Data_::where('id', '=', '9')->value('achievement');
        $achievement10 = Data_::where('id', '=', '10')->value('achievement');
        $achievement11 = Data_::where('id', '=', '11')->value('achievement');
        $achievement12 = Data_::where('id', '=', '12')->value('achievement');

        $target1 = Data_::where('id', '=', '1')->value('target');
        $target2 = Data_::where('id', '=', '2')->value('target');
        $target3 = Data_::where('id', '=', '3')->value('target');
        $target4 = Data_::where('id', '=', '4')->value('target');
        $target5 = Data_::where('id', '=', '5')->value('target');
        $target6 = Data_::where('id', '=', '6')->value('target');
        $target7 = Data_::where('id', '=', '7')->value('target');
        $target8 = Data_::where('id', '=', '8')->value('target');
        $target9 = Data_::where('id', '=', '9')->value('target');
        $target10 = Data_::where('id', '=', '10')->value('target');
        $target11 = Data_::where('id', '=', '11')->value('target');
        $target12 = Data_::where('id', '=', '12')->value('target');

        $active_membership1 = Data_::where('id', '=', '5')->value('active_membership');
        $active_membership2 = Data_::where('id', '=', '6')->value('active_membership');
        $active_membership3 = Data_::where('id', '=', '7')->value('active_membership');

        return view('livewire.list-content', compact('achievement1', 'achievement2', 'achievement3', 'achievement4', 'achievement5', 'achievement6', 
        'achievement7', 'achievement8', 'achievement9', 'achievement10', 'achievement11', 'achievement12', 'target1', 'target2', 'target3', 
        'target4', 'target5', 'target6', 'target7', 'target8', 'target9', 'target10', 'target11', 'target12', 'active_membership1', 'active_membership2', 
        'active_membership3'));
    }
}