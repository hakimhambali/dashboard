<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserManagementFormWire extends Component
{
    public $id_user;
    public $name;
    public $email;
    // public $role;
    public $password;
    public $model_id;
    public $action;
    protected $listeners = [
        'getModelId'
    ];
    public function getModelId($model_id)
    {
        $user = User::find($model_id);
        $this->model_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        // $this->role = $user->role;
        // $this->created_at = $user->created_at;
    }

    public function store()
    {
        if($this->model_id)
        {
            $this->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                // 'role' => 'required',
            ]);
            $update = User::find($this->model_id);
            $update->name = $this->name;
            $update->email = $this->email;
            if(($this->password != null) || ($this->password != ''))
            {
                $this->validate([
                   
                    'password' => 'required|string|min:6',
                    
                ]);
                $update->password = Hash::make($this->password);
            }
            // $update->role = $this->role;
            $update->save();
            session()->flash('message', 'User successfully updated');
        }
        else
        {
            $this->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
                // 'role' => 'required',
            ]);
            $add = New User;
            $add->name = $this->name;
            $add->email = $this->email;
            $add->password = Hash::make($this->password);
            // $add->role = $this->role;
            // $add->status = 'Not Submitted';
            $add->save();
            session()->flash('message', 'New user successfully added');
        }
        $this->emit('refreshParent');
    }
    
    public function render()
    {
        return view('livewire.laravel-examples.user-management-form-wire');
        // return view('livewire.laravel-examples.user-management')->with(compact('userscount', 'users'));
    }
}
