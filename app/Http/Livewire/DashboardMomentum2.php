<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;

use App\Models\User;
use App\Models\Data_;

class DashboardMomentum2 extends Component
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

        return view('livewire.dashboard-momentum2', compact('dataArray', 'category'));
    }
}