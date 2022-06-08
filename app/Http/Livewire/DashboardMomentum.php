<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;

use App\Models\User;
use App\Models\Data_;

class DashboardMomentum extends Component
{   
    public function render()
    {
        $catOrder = "CASE WHEN category = 'Main' THEN 1 ";
        $catOrder .= "WHEN category = 'Membership' THEN 2 ";
        $catOrder .= "WHEN category = 'Social Media' THEN 3 ";
        $catOrder .= "ELSE 4 END";

        $dataArray[] = array();
        $category = Data_::selectRaw('category')->groupBy('category')->get();
        
        foreach ($category as $key => $cat) {
            $datas = Data_::where('category', $cat->category)->orderByRaw($catOrder)->get();
            array_push($dataArray, $datas);
        }

        return view('livewire.dashboard-momentum', compact('dataArray', 'category'));

        // $updated1 = Data_::where('id', '=', '1')->value('updated_at');
        // $updated2 = Data_::where('id', '=', '2')->value('updated_at');
        // $updated3 = Data_::where('id', '=', '3')->value('updated_at');
        // $updated4 = Data_::where('id', '=', '4')->value('updated_at');
        // $updated5 = Data_::where('id', '=', '5')->value('updated_at');
        // $updated6 = Data_::where('id', '=', '6')->value('updated_at');
        // $updated7 = Data_::where('id', '=', '7')->value('updated_at');
        // $updated8 = Data_::where('id', '=', '8')->value('updated_at');
        // $updated9 = Data_::where('id', '=', '9')->value('updated_at');
        // $updated10 = Data_::where('id', '=', '10')->value('updated_at');
        // $updated11 = Data_::where('id', '=', '11')->value('updated_at');
        // $updated12 = Data_::where('id', '=', '12')->value('updated_at');

        // $achievement1 = Data_::where('id', '=', '1')->value('achievement');
        // $achievement2 = Data_::where('id', '=', '2')->value('achievement');
        // $achievement3 = Data_::where('id', '=', '3')->value('achievement');
        // $achievement4 = Data_::where('id', '=', '4')->value('achievement');
        // $achievement5 = Data_::where('id', '=', '5')->value('achievement');
        // $achievement6 = Data_::where('id', '=', '6')->value('achievement');
        // $achievement7 = Data_::where('id', '=', '7')->value('achievement');
        // $achievement8 = Data_::where('id', '=', '8')->value('achievement');
        // $achievement9 = Data_::where('id', '=', '9')->value('achievement');
        // $achievement10 = Data_::where('id', '=', '10')->value('achievement');
        // $achievement11 = Data_::where('id', '=', '11')->value('achievement');
        // $achievement12 = Data_::where('id', '=', '12')->value('achievement');

        // $target1 = Data_::where('id', '=', '1')->value('target');
        // $target2 = Data_::where('id', '=', '2')->value('target');
        // $target3 = Data_::where('id', '=', '3')->value('target');
        // $target4 = Data_::where('id', '=', '4')->value('target');
        // $target5 = Data_::where('id', '=', '5')->value('target');
        // $target6 = Data_::where('id', '=', '6')->value('target');
        // $target7 = Data_::where('id', '=', '7')->value('target');
        // $target8 = Data_::where('id', '=', '8')->value('target');
        // $target9 = Data_::where('id', '=', '9')->value('target');
        // $target10 = Data_::where('id', '=', '10')->value('target');
        // $target11 = Data_::where('id', '=', '11')->value('target');
        // $target12 = Data_::where('id', '=', '12')->value('target');

        // $active_membership1 = Data_::where('id', '=', '5')->value('active_membership');
        // $active_membership2 = Data_::where('id', '=', '6')->value('active_membership');
        // $active_membership3 = Data_::where('id', '=', '7')->value('active_membership');

        // $digit_achievement1 = strlen($achievement1);
        // $digit_achievement2 = strlen($achievement2);
        // $digit_achievement3 = strlen($achievement3);
        // $digit_achievement4 = strlen($achievement4);
        // $digit_achievement5 = strlen($achievement5);
        // $digit_achievement6 = strlen($achievement6);
        // $digit_achievement7 = strlen($achievement7);
        // $digit_achievement8 = strlen($achievement8);
        // $digit_achievement9 = strlen($achievement9);
        // $digit_achievement10 = strlen($achievement10);
        // $digit_achievement11 = strlen($achievement11);
        // $digit_achievement12 = strlen($achievement12);

        // $digit_target1 = strlen($target1);
        // $digit_target2 = strlen($target2);
        // $digit_target3 = strlen($target3);
        // $digit_target4 = strlen($target4);
        // $digit_target5 = strlen($target5);
        // $digit_target6 = strlen($target6);
        // $digit_target7 = strlen($target7);
        // $digit_target8 = strlen($target8);
        // $digit_target9 = strlen($target9);
        // $digit_target10 = strlen($target10);
        // $digit_target11 = strlen($target11);
        // $digit_target12 = strlen($target12);

        // $active_membership_target1 = strlen($active_membership1);
        // $active_membership_target2 = strlen($active_membership2);
        // $active_membership_target3 = strlen($active_membership3);

        // return view('livewire.dashboard-momentum', compact('achievement1', 'achievement2', 'achievement3', 'achievement4', 'achievement5', 'achievement6', 
        // 'achievement7', 'achievement8', 'achievement9', 'achievement10', 'achievement11', 'achievement12', 'target1', 'target2', 'target3', 
        // 'target4', 'target5', 'target6', 'target7', 'target8', 'target9', 'target10', 'target11', 'target12', 'digit_achievement1', 'digit_achievement2',
        // 'digit_achievement3', 'digit_achievement4', 'digit_achievement5', 'digit_achievement6', 'digit_achievement7', 'digit_achievement8', 'digit_achievement9',
        // 'digit_achievement10', 'digit_achievement11', 'digit_achievement12', 'digit_target1', 'digit_target2', 'digit_target3', 'digit_target4', 'digit_target5',
        // 'digit_target6', 'digit_target7', 'digit_target8', 'digit_target9', 'digit_target10', 'digit_target11', 'digit_target12', 'updated1', 'updated2', 'updated3', 
        // 'updated4', 'updated5', 'updated6', 'updated7', 'updated8', 'updated9', 'updated10', 'updated11', 'updated12', 'active_membership1', 'active_membership1',
        // 'active_membership2', 'active_membership3', 'active_membership_target1', 'active_membership_target2', 'active_membership_target3'));
    }
}