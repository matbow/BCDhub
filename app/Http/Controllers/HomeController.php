<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class HomeController extends Controller
{
    public function __construct(
        Request $request,
        Group $group
    ){
        $this->group = $group;
        $this->request = $request;
        //$this->middleware('guest');
    }

    public function index()
    {
        $data['content'] = $this->refreshContent('link');

        return view('home.index',$data);
    }

    public function refreshContent($id = null){
        
        $id = $this->request->get('id',$id);
        $data['groups'] = $this->group->get();
        return view('parts.'.$id,$data);
    }
}
