<?php

namespace App\Http\Controllers\Api;

//import Model "Clients"
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//import Resource "ClientsResource"
use App\Http\Resources\RoleResource;
//import Facade "Validator"
use Illuminate\Support\Facades\Validator;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class RoleController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all role
        $role = Role::latest()->paginate(5);

        //return collection of role as a resource
        return new RoleResource(true, 'List Data Role', $role);
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
            'name'   => 'required',
            'menu'   => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create role
        $role = Role::create([
            'row_status'    => '1',
            'name'     => $request->name,
            'menu'     => $request->menu,
            'created_by' => '',
            'updated_by' => ''
        ]);

        //return response
        return new RoleResource(true, 'Data Role Berhasil Ditambahkan!', $role);
    }

    /**
     * show
     *
     * @param  mixed $clients
     * @return void
     */
    public function show($id)
    {
        //find role by ID
        $role = Role::find($id);

        //return single clients as a resource
        return new RoleResource(true, 'Detail Data Role !', $role);
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
            'name'   => 'required',
            'menu'   => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find role by ID
        $role = Role::find($id);

        //check if role not null
        if ($role != null) {

            //update role
            $role->update([
                'row_status'    => '1',
                'name'     => $request->name,
                'menu'     => $request->menu,
                'created_by' => '',
                'updated_by' => ''
            ]);

        } else {

            //errors
            return response()->json("Data dengan id: ".$id." tidak ditemukan.", 422);
        }

        //return response
        return new RoleResource(true, 'Data Role Berhasil Diubah!', $role);
    }

    /**
     * destroy
     *
     * @param  mixed $role
     * @return void
     */
    public function destroy($id)
    {

        //find role by ID
        $role = Role::find($id);

        //delete role
        $role->delete();

        //return response
        return new RoleResource(true, 'Data Role Berhasil Dihapus!', null);
    }
}
