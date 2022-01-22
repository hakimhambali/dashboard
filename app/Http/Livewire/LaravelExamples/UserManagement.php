<?php

namespace App\Http\Livewire\LaravelExamples;
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
        // dd($this->id_user);
        $this->action = $action;
        // dd($this->action);
        if($action == "update")
        {
            $this->emit('getModelId' , $this->id_user);
        }
    }

    public function delete()
    {
        $user = User::find($this->id_user);
        // dd($user);
        $user->delete();
    }

    public function render()
    {
        // $users = User::orderBy('created_at','desc')->get();no
        // $user = User::where('role', 'manager')->orWhere('role', 'hr')->orWhere('role', 'moderator')->get();
        $employee = User::where('type', NULL)->get();
        $admin = User::where('type', 'admin')->get();
        // $hr = User::where('type', 'hr')->get();
        // $moderator = User::where('type', 'moderator')->get();
        $alluser = User::all();
        // dd( $users);
        // $attemptQuizzes = AttemptQuiz::where( [[ 'id_createquizzes', '=', $this->id_createquizzes ], ['id_question', '=', $question->id], ['status_answer', '=', '1']] )->get();
        $allusercount = $alluser->count();

        return view('livewire.laravel-examples.user-management')->with(compact('employee', 'admin', 'alluser', 'allusercount'));
    }
}
