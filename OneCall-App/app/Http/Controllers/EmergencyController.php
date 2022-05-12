<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Emergency;

class EmergencyController extends Controller
{
    public function list(Request $request){
        return json_encode(Emergency::with(['response','account'])->get());
    }
    public function items(Request $request){
        return json_encode(Emergency::with(['response','account'])->find($request->id));
    }
    public function create(Request $request){
        $request->validate([
            'account_id' => 'required',
            'response_id' => 'required',
            'emergency_type' => 'required',
            'can_call' => 'required',
            'is_finish' => 'required',
        ]);
        $data = new Emergency();
        $data->account_id = $request->account_id;
        $data->response_id = $request->response_id;
        $data->emergency_type = $request->emergency_type;
        $data->location = $request->location;
        $data->can_call = $request->can_call;
        $data->is_finish = $request->is_finish;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    } 
    public function update(Request $request){
        $request->validate([
            'account_id' => 'required',
            'response_id' => 'required',
            'emergency_type' => 'required',
            'can_call' => 'required',
            'is_finish' => 'required',
        ]);
        $data = Emergency::find($request->id);
        $data->account_id = $request->account_id;
        $data->response_id = $request->response_id;
        $data->emergency_type = $request->emergency_type;
        $data->location = $request->location;
        $data->can_call = $request->can_call;
        $data->is_finish = $request->is_finish;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function delete(Request $request){
        $data = Emergency::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    }
    
}
