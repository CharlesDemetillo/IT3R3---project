<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Status;

class StatusController extends Controller
{
    public function list(Request $request){
        return json_encode(Status::with(['emergency','response'])->get());
    }
    public function items(Request $request){
        return json_encode(Status::with(['emergency','response'])->find($request->id));
    }
    public function create(Request $request){
        $request->validate([
            'emergency_id' => 'required',
            'response_id' => 'required',
            'status' => 'required',
        ]);
        $data = new Status();
        $data->emergency_id = $request->emergency_id;
        $data->response_id = $request->response_id;
        $data->status = $request->status;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    } 
    public function update(Request $request){
        $request->validate([
            'emergency_id' => 'required',
            'response_id' => 'required',
            'status' => 'required',
        ]);
        $data = Status::find($request->id);
        $data->emergency_id = $request->emergency_id;
        $data->response_id = $request->response_id;
        $data->status = $request->status;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function delete(Request $request){
        $data = Status::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    }
    
}
