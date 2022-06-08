<?php

namespace App\Http\Livewire\UserManagements;
use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public $id_user;
    public $action;

    protected $listeners = [
        'refreshParent' => '$refresh',
        'delete'
    ];

    public function selectItem($id_user , $action)
    {
        $this->id_user = $id_user;
        $this->action = $action;
        
        if($action == "update")
        {
            $this->emit('getModelId' , $this->id_user);
        }
    }

    public function delete()
    {
        $user = User::find($this->id_user);
       
        $user->delete();
    }

    public function render()
    {
        $employee = User::where('type', NULL)->get();
        $admin = User::where('type', 'admin')->get();
        $alluser = User::all();
        $allusercount = $alluser->count();

        return view('livewire.user-managements.user-management')->with(compact('employee', 'admin', 'alluser', 'allusercount'));
    }
}
