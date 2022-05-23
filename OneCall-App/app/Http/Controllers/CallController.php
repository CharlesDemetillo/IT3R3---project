<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Call;

class CallController extends Controller
{
    public function list(Request $request){
        return json_encode(Call::with(['account','emergency'])->get());
    }
    public function items(Request $request){
        return json_encode(Call::with(['account','emergency'])->find($request->id));
    }
    public function create(Request $request){
        $request->validate([
            'account_id' => 'required',
            'emergency_id' => 'required',
            'call_minutes' => 'required',
        ]);
        $data = new Call();
        $data->account_id = $request->account_id;
        $data->emergency_id = $request->emergency_id;
        $data->call_minutes = $request->call_minutes;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    } 
    public function update(Request $request){
        $request->validate([
            'account_id' => 'required',
            'emergency_id' => 'required',
            'call_minutes' => 'required',
        ]);
        $data = Call::find($request->id);
        $data->account_id = $request->account_id;
        $data->emergency_id = $request->emergency_id;
        $data->call_minutes = $request->call_minutes;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function delete(Request $request){
        $data = Call::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    }
    
}
