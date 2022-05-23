<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Cmessage;

class CmessageController extends Controller
{
    public function list(Request $request){
        return json_encode(Cmessage::with(['account','contact'])->get());
    }
    public function items(Request $request){
        return json_encode(Cmessage::with(['account','contact'])->find($request->id));
    }
    public function create(Request $request){
        $request->validate([
            'account_id' => 'required',
            'contact_id' => 'required',
        ]);
        $data = new Cmessage();
        $data->account_id = $request->account_id;
        $data->contact_id = $request->contact_id;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    } 
    public function update(Request $request){
        $request->validate([
            'account_id' => 'required',
            'contact_id' => 'required',
        ]);
        $data = Cmessage::find($request->id);
        $data->account_id = $request->account_id;
        $data->contact_id = $request->contact_id;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function delete(Request $request){
        $data = Cmessage::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    } 
}
