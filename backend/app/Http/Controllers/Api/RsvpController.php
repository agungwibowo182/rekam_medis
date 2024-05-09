<?php

namespace App\Http\Controllers\Api;

//import Model "Rsvp"
use App\Models\Rsvp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//import Resource "RsvpResource"
use App\Http\Resources\RsvpResource;
//import Facade "Validator"
use Illuminate\Support\Facades\Validator;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class RsvpController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all rsvp
        $rsvp = Rsvp::latest()->paginate(5);

        //return collection of rsvp as a resource
        return new RsvpResource(true, 'List Data Rsvp', $rsvp);
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
            'customer_name'   => 'required',
            'company_name'   => 'required',
            'title'   => 'required',
            'email'   => 'required|email',
            'phone_number'   => 'required',
            'phone_office'   => 'required',
            'address_office'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create rsvp
        $rsvp = Rsvp::create([
            'client_id'     => $request->client_id,
            'event_id'     => $request->event_id,
            'barcode_id'     => $request->barcode_id,
            'feedback_id'     => $request->feedback_id,
            'breakout_id'   => $request->breakout_id,
            'room_id'   => $request->room_id,
            'customer_name'   => $request->customer_name,
            'company_name'   => $request->company_name,
            'title'   => $request->title,
            'email'   => $request->email,
            'phone_number'   => $request->phone_number,
            'phone_office'   => $request->phone_office,
            'address_office'   => $request->address_office,
            'city'   => $request->city,
            'walk_in'   => $request->walk_in,
            'is_attend'   => $request->is_attend,
            'is_verified'   => $request->is_verified,
            'is_rejected'   => $request->is_rejected,
            'row_status'    => '1',
            'created_by' => $request->client_id,
            'updated_by' => ''
        ]);

        //return response
        return new RsvpResource(true, 'Data Rsvp Berhasil Ditambahkan!', $rsvp);
    }

    /**
     * show
     *
     * @param  mixed $rsvp
     * @return void
     */
    public function show($id)
    {
        //find rsvp by ID
        $rsvp = Rsvp::find($id);

        //return single rsvp as a resource
        return new RsvpResource(true, 'Detail Data Rsvp !', $rsvp);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $rsvp
     * @return void
     */
    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'customer_name'   => 'required',
            'company_name'   => 'required',
            'title'   => 'required',
            'email'   => 'required|email',
            'phone_number'   => 'required',
            'phone_office'   => 'required',
            'address_office'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find rsvp by ID
        $rsvp = Rsvp::find($id);

        //check if rsvp not null
        if ($rsvp != null) {

            //update rsvp
            $rsvp->update([
                'client_id'     => $request->client_id,
                'event_id'     => $request->event_id,
                'barcode_id'     => $request->barcode_id,
                'feedback_id'     => $request->feedback_id,
                'breakout_id'   => $request->breakout_id,
                'room_id'   => $request->room_id,
                'customer_name'   => $request->customer_name,
                'company_name'   => $request->company_name,
                'title'   => $request->title,
                'email'   => $request->email,
                'phone_number'   => $request->phone_number,
                'phone_office'   => $request->phone_office,
                'address_office'   => $request->address_office,
                'city'   => $request->city,
                'walk_in'   => $request->walk_in,
                'is_attend'   => $request->is_attend,
                'is_verified'   => $request->is_verified,
                'is_rejected'   => $request->is_rejected,
                'row_status'    => '1',
                'created_by' => $request->client_name,
                'updated_by' => $request->client_name
            ]);

        } else {

            //errors
            return response()->json("Data dengan id: ".$id." tidak ditemukan.", 422);
        }

        //return response
        return new RsvpResource(true, 'Data Rsvp Berhasil Diubah!', $rsvp);
    }

    /**
     * destroy
     *
     * @param  mixed $rsvp
     * @return void
     */
    public function destroy($id)
    {

        //find rsvp by ID
        $rsvp = Rsvp::find($id);

        //delete rsvp
        $rsvp->delete();

        //return response
        return new RsvpResource(true, 'Data Rsvp Berhasil Dihapus!', null);
    }
}
