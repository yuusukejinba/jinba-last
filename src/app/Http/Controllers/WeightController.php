<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Weight_target;
use App\Models\Weight_logs;
use App\Http\Requests\AuthorRequest;


class WeightController extends Controller
{
    public function register()
{
    $weight_target = Weight_target::where('user_id', auth()->id())->first();
    if ($weight_target) {
        $weight_logs = Weight_logs::all();
        return view('weight_logs', compact('weight_target', 'weight_logs'));
    } else {
        return view('register/step2');
    }
}
    
    public function create(AuthorRequest $request)
{

    $form = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ];

        $user = User::create($form);
        return view('register/step2', compact('user'));

}

public function store(Request $request)
{
    $form = [
        'user_id' => $request->user_id,
        'target_weight' => $request->target_weight,
    ];

        Weight_target::create($form);

        $weight_logs = Weight_logs::all();
return view('weight_logs', compact('weight_logs'));
}
public function index()
{
    return view('weight_logs/goal_setting');
}

public function edit(Request $request)
{

    $weight_logs = weight_logs::find($request->id);
    return view('weight_update', ['form' => $weight_logs]);

}

public function update(Request $request)

{
    $form = $request->all();
    unset($form['_token']);
    weight_logs::find($request->id)->update($form);
    
return view('/weight_logs/{:weightLogId}/update' , compact('weight_logs'));

}
}