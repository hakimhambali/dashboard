<?php

namespace app\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Data_;


class ContentManagement extends Component
{
    public $id_content;

    protected $listeners = [
        'delete'
    ];

    public function selectItem($id)
    {
        $this->id_content = $id;
    }

    public function delete()
    {
        $content = Data_::find($this->id_content);
        $content->delete();

        return redirect()->back()->with('message', 'Content deleted successfully');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2000',
        ]);

        if($validatedData)
        {
            $filename = $request->file('img');

            ///// End Upload /////
            $extension = $filename->getClientOriginalExtension();
            $name_img = $filename->getClientOriginalName();
            $uniqe_img = 'ICON_'. uniqid() . '.' . $extension;
            $dirpath = public_path('assets/icons/');
            $filename->move($dirpath, $uniqe_img);

            $img_path = '/assets/icons/'.$uniqe_img;
            ///// End Upload /////

            Data_::insert([
                'user_id'=> auth()->user()->id,
                'category'=> ucwords($request->category),
                'name'=> $request->name,
                'img' => $img_path,
                'achievement' => 0,
                'target' => 0,
            ]);

            return redirect()->back()->with('message', 'Content has been successfully inserted');
        }
    }

    public function edit($id)
    {
        $content = Data_::find($id);
        $cat = Data_::selectRaw('category')->groupBy('category')->get();
        
        $categories = [];
        foreach($cat as $numering => $num) {
            $categories[] = ucwords(strtolower($num->category));
        }

        return view('livewire.content-management.edit', compact('id', 'content', 'categories'));
    }

    public function update(Request $request, $id) 
    {   
        $c = Data_::find($id);

        $filename = $request->file('img');
        if($filename != '')
        { 
            $validatedData = $request->validate([
                'img' => 'image|mimes:jpeg,png,jpg|max:2000',
            ]);
    
            if($validatedData)
            {
                $filename = $request->file('img');
    
                ///// End Upload /////
                $extension = $filename->getClientOriginalExtension();
                $name_img = $filename->getClientOriginalName();
                $uniqe_img = 'ICON_'. uniqid() . '.' . $extension;
                $dirpath = public_path('assets/icons/');
                $filename->move($dirpath, $uniqe_img);
    
                $img_path = '/assets/icons/'.$uniqe_img;
                ///// End Upload /////

                $c->user_id = auth()->user()->id;
                $c->category = $request->category;
                $c->name = $request->name;
                $c->img = $img_path;
                $c->timestamps = false;
            }
        } else {
            $c->user_id = auth()->user()->id;
            $c->category = $request->category;
            $c->name = $request->name;
            $c->timestamps = false;
        }

        $c->save();
        return redirect('/content-management')->with('message', 'Content Updated Successfully');   
    }

    public function render()
    {
        $content = Data_::orderBy('category', 'ASC')->get();
        $cat = Data_::selectRaw('category')->groupBy('category')->get();

        $categories = [];
        foreach($cat as $numering => $num) {
            $categories[] = ucwords(strtolower($num->category));
        }

        // dd($categories);
        
        return view('livewire.content-management.index', compact('content', 'categories'));
    }
}
