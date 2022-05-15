<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Rmessage;

class RmessageController extends Controller
{
    public function list(Request $request){
        return json_encode(Rmessage::with(['emergency','response'])->get());
    }
    public function items(Request $request){
        return json_encode(Rmessage::with(['emergency','response'])->find($request->id));
    }
    public function create(Request $request){
        $request->validate([
            'emergency_id' => 'required',
            'response_id' => 'required',
        ]);
        $data = new Rmessage();
        $data->emergency_id = $request->emergency_id;
        $data->response_id = $request->response_id;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    } 
    public function update(Request $request){
        $request->validate([
            'emergency_id' => 'required',
            'response_id' => 'required',
        ]);
        $data = Rmessage::find($request->id);
        $data->emergency_id = $request->emergency_id;
        $data->response_id = $request->response_id;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function delete(Request $request){
        $data = Rmessage::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    }
    
}
