<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Blank;
use App\User;
use Illuminate\Support\Facades\Auth;

class BlankController extends Controller
{
    public function show(){
    	$user = User::find((Auth::id()));
    	$blanks = $user->blanks()->orderBy('created_at', 'desc')->get();
    	if(view()->exists('site.show_blanks')){
    		return view('site.show_blanks', ['blanks'=>$blanks]);
    	}
    	abort(404);
    }

    public function add(Request $request){
    	if($request->isMethod('post')){
    		$input = $request->except('_token');
    		$messages = [
    			'required'=>'Поле :attribute не может быть пустым',
    			'phone_number.max'=>'Максимальное значение поля "Номер телефона" 30 символов',
    			'company.max'=>'Максимальное значение поля "Название компании" 50 символов',
    			'name.max'=>'Максимальное значение поля "Имя пользователя" 100 символов',
    			'message.max'=>'Максимальное значение поля "Текст" 500 символов',
    		];
    		$validator = Validator::make($input, [
    			'name'=>'required|max:100',
    			'company'=>'required|max:50',
    			'phone_number'=>'required|max:30',
    			'message'=>'required|max:500',
    		],$messages);

    		if($validator->fails()){
    			return redirect()->route('add')->withErrors($validator)->withInput();
    		}
    		$input['user_id'] = Auth::id();
    		if($request->hasFile('files')){
    			$file = $request->file('files');
    			$input['files'] = $file->getClientOriginalName();
    			$file->move(public_path().'/assets/file/', $input['files']);
    		}
    		$blank = new Blank;
    		$blank->fill($input);
    		if($blank->save()){
    			return redirect()->route('add')->with('status', 'Заявка отправлена');
    		}

    	}


    	if(view()->exists('site.add_blank')){
    		return view('site.add_blank');
    	}
    	
    	abort(404);
    	

    }
}
