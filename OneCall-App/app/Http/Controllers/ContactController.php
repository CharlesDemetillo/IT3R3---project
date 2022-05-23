<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Contact;

class ContactController extends Controller
{
    public function list(Request $request){
        return json_encode(Contact::with(['account'])->get());
    }
    public function items(Request $request){
        return json_encode(Contact::with(['account'])->find($request->id));
    }
    public function create(Request $request){
        $request->validate([
            'account_id' => 'required',
            'contact_name' => 'required',
            'contact_no' => 'required',
            'relationship_to_user' => 'required',
        ]);
        $data = new Contact();
        $data->account_id = $request->account_id;
        $data->contact_name = $request->contact_name;
        $data->contact_no = $request->contact_no;
        $data->relationship_to_user = $request->relationship_to_user;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    } 
    public function update(Request $request){
        $request->validate([
            'account_id' => 'required',
            'contact_name' => 'required',
            'contact_no' => 'required',
            'relationship_to_user' => 'required',
        ]);
        $data = Contact::find($request->id);
        $data->account_id = $request->account_id;
        $data->contact_name = $request->name;
        $data->contact_no = $request->contact_no;
        $data->relationship_to_user = $request->relationship_to_user;
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function delete(Request $request){
        $data = Contact::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    }
    
}
