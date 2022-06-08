<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;

use App\Models\User;
use App\Models\Data_;

class Data extends Component
{   
    public function data_edit(Request $request, $id)
    {
        $data = Data_::find($id);
        return view('livewire.data' , compact('data', 'id'));
    }

    public function data_update(Request $request, $id)
    {
        Data_::find($id)->update([
            'user_id'=> Auth::user()->id,
            'created_at'=> Carbon::now(),
            'achievement'=>  $request->achievement,
            'target'=>  $request->target,
            'active_membership'=>  $request->active_membership,
        ]);
        return redirect('/list-content')->with('message', 'Data Updated Successfully');
    }

    public function render()
    {
        return view('livewire.data');
    }
}