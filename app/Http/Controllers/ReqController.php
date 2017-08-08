<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Req;
use App\Models\User;
use Response;
use Notification;
use App\Notifications\NewRequestAlert;


class ReqController extends Controller
{
	public function __construct(
		Request $request,
		Req $req,
        User $user
	){
	    $this->request = $request;
	    $this->req = $req;
        $this->user = $user;
	}


	public function saveRequestForm(){
        $this->validate($this->request, 
        [
            'ein' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'area' => 'required',
            'benefit' => '',
            'adhoc' => 'required',
            'audiance' => 'required',
            'description' => 'required'
        ],
            
        [
            'ein.required' => 'Please enter your EIN',
            'name.required' => 'Please enter your full name',
            'email.required' => 'Please enter your email',
            'area.required' => 'Please enter the area this request is for',
            'email.email' => 'Please use a correct email',
            'adhoc.required' => 'Please select if this is an adhoc request',
            'audiance.required' => 'Please select the request audience',
            'description.required' => 'Please add a description of your request'
        ]);  
        
        $record = New Req;
        $record->ein = $this->request->get('ein');
        $record->name = $this->request->get('name');
        $record->email = $this->request->get('email');
        $record->area = $this->request->get('area');
        $record->benefit = $this->request->get('benefit');
        $record->adhoc = $this->request->get('adhoc');
        $record->audiance = $this->request->get('audiance');
        $record->description = $this->request->get('description');
        $record->save();

        $user = $this->user->find(1);
        $user->notify(new NewRequestAlert($record));

        return Response::json(['success'=>true]);  	
    }
}
