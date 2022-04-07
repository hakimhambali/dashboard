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
    // public function data_save(Request $request){

    //     $validatedData = $request->validate([
    //         'achievement' => ['required'],
    //         'target' => ['required'],
    //     ]);

    //     Data_::insert([              
    //         'user_id'=> Auth::user()->id,
    //         'created_at'=> Carbon::now(),
    //         'achievement'=>  $request->achievement,
    //         'target'=>  $request->target,
    //     ]);

    //     return redirect()->back()->with('message', 'Data has been successfully inserted');
    // }

    public function data_edit(Request $request, $content_id){
        // dd($content_id);
        $data = Data_::find($content_id);
        return view('livewire.data' , compact('data', 'content_id'));
    }

    public function data_update(Request $request, $content_id){

        // dd($content_id);
        if ($content_id == 5 || $content_id == 6 || $content_id == 7) {
            $validatedData = $request->validate([
                'achievement' => ['required'],
                'target' => ['required'],
                'active_membership' => ['required'],
            ]);
        }

        $validatedData = $request->validate([
            'achievement' => ['required'],
            'target' => ['required'],
        ]);
        // $achievement = $request->achievement;
        // $target = $request->target;

        // if ($achievement <= $target) {
        //     Data_::find($content_id)->update([
        //         'user_id'=> Auth::user()->id,
        //         'created_at'=> Carbon::now(),
        //         'achievement'=>  $request->achievement,
        //         'target'=>  $request->target,
        //     ]);
        //     return redirect('/list-content')->with('message', 'Data Updated Successfully');
        // }else {
        //     return redirect()->back()->with('error', 'Achievement Must Be Smaller Or Equal With Target');
        // }

        Data_::find($content_id)->update([
            'user_id'=> Auth::user()->id,
            'created_at'=> Carbon::now(),
            'achievement'=>  $request->achievement,
            'target'=>  $request->target,
            'active_membership'=>  $request->active_membership,
        ]);
        return redirect('/list-content')->with('message', 'Data Updated Successfully');

        // return redirect('/list-content')->with('error', 'Achievement Must Be Smaller Or Same With Target');
        // return redirect()->back()->with('message', 'Data has been successfully updated');
    }


    public function render()
    {
        return view('livewire.data');
    }
}