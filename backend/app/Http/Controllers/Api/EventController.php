<?php

namespace App\Http\Controllers\Api;

//import Model "Clients"
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//import Resource "ClientsResource"
use App\Http\Resources\EventResource;
//import Facade "Validator"
use Illuminate\Support\Facades\Validator;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all event
        $event = Event::latest()->paginate(5);

        //return collection of role as a resource
        return new EventResource(true, 'List Data Event', $event);
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
            'id_client'   => 'required',
            'event_name'   => 'required',
            'event_date'   => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create event
        $event = Event::create([
            'row_status'    => '1',
            'id_client'     => $request->id_client,
            'event_name'     => $request->event_name,
            'event_date'     => $request->event_date,
            'created_by' => '',
            'updated_by' => ''
        ]);

        //return response
        return new EventResource(true, 'Data Event Berhasil Ditambahkan!', $event);
    }

    /**
     * show
     *
     * @param  mixed $events
     * @return void
     */
    public function show($id)
    {
        //find event by ID
        $event = Event::find($id);

        //return single event as a resource
        return new EventResource(true, 'Detail Data Event !', $event);
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
            'id_client'   => 'required',
            'event_name'   => 'required',
            'event_date'   => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find event by ID
        $event = Event::find($id);

        //check if event not null
        if ($event != null) {

            //update event
            $event->update([
                'row_status'    => '1',
                'id_client'     => $request->id_client,
                'event_name'     => $request->event_name,
                'event_date'     => $request->event_date,
                'created_by' => '',
                'updated_by' => ''
            ]);

        } else {

            //errors
            return response()->json("Data dengan id: ".$id." tidak ditemukan.", 422);
        }

        //return response
        return new EventResource(true, 'Data Event Berhasil Diubah!', $event);
    }

    /**
     * destroy
     *
     * @param  mixed $event
     * @return void
     */
    public function destroy($id)
    {

        //find event by ID
        $event = Event::find($id);

        //delete event
        $event->delete();

        //return response
        return new EventResource(true, 'Data Event Berhasil Dihapus!', null);
    }
}
