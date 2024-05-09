<?php

namespace App\Http\Controllers\Api;

//import Model "Clients"
use App\Models\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//import Resource "ClientsResource"
use App\Http\Resources\ClientsResource;
//import Facade "Validator"
use Illuminate\Support\Facades\Validator;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class ClientsController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all clients
        $clients = Clients::latest()->paginate(5);

        //return collection of clients as a resource
        return new ClientsResource(true, 'List Data Clients', $clients);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'client_name'   => 'required',
            'client_phone'   => 'required',
            'client_email'   => 'required',
            'client_address'   => 'required',
            'client_groups'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create clients
        $clients = Clients::create([
            'row_status'    => '1',
            'client_name'     => $request->client_name,
            'client_phone'     => $request->client_phone,
            'client_email'     => $request->client_email,
            'client_address'     => $request->client_address,
            'client_groups'   => $request->client_groups,
            'created_by' => $request->client_name,
            'updated_by' => ''
        ]);

        //return response
        return new ClientsResource(true, 'Data Clients Berhasil Ditambahkan!', $clients);
    }

    /**
     * show
     *
     * @param  mixed $clients
     * @return void
     */
    public function show($id)
    {
        //find clients by ID
        $clients = Clients::find($id);

        //return single clients as a resource
        return new ClientsResource(true, 'Detail Data Clients !', $clients);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $clients
     * @return void
     */
    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'client_name'   => 'required',
            'client_phone'   => 'required',
            'client_email'   => 'required',
            'client_address'   => 'required',
            'client_groups'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find clients by ID
        $clients = Clients::find($id);

        //check if clients not null
        if ($clients != null) {

            //update clients
            $clients->update([
                'row_status'    => '1',
                'client_name'     => $request->client_name,
                'client_phone'     => $request->client_phone,
                'client_email'     => $request->client_email,
                'client_address'     => $request->client_address,
                'client_groups'   => $request->client_groups,
                'created_by' => $request->client_name,
                'updated_by' => $request->client_name
            ]);

        } else {

            //errors
            return response()->json("Data dengan id: ".$id." tidak ditemukan.", 422);
        }

        //return response
        return new ClientsResource(true, 'Data Clients Berhasil Diubah!', $clients);
    }

    /**
     * destroy
     *
     * @param  mixed $clients
     * @return void
     */
    public function destroy($id)
    {

        //find clients by ID
        $clients = Clients::find($id);

        //delete clients
        $clients->delete();

        //return response
        return new ClientsResource(true, 'Data Clients Berhasil Dihapus!', null);
    }
}
