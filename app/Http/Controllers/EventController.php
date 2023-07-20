<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();
        return view('pages.event.event', compact('event'));
    }

    public function listEvent(Request $request)
    {
        $start = date('Y-m-d', strtotime($request->start));
        $end = date('Y-m-d', strtotime($request->end));

        $events = Event::where('start_date', '>=', $start)
        ->where('end_date','<=', $end)->get()
        ->map( fn ($item) => [
            'id' => $item->id,
            'title' => $item->title,
            'start' => $item->start_date,
            'end' => date('Y-m-d', strtotime($item->end_date.'+1 days')),
            'jam' => $item->jam,
            'tempat' => $item->tempat,
            'asal_surat' => $item->asal_surat,
            'bidang_penanggung_jawab' => $item->bidang_penanggung_jawab,
            'keterangan' => $item->keterangan,
            'no_surat' => $item->no_surat,
            'no_agenda' => $item->no_agenda,
            'category' => $item->category,
            'className' => ['bg-'.$item->category, 'text-black']
        ]);

        return response()->json($events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event)
    {
        return view('pages.event.event-form', ['data' => $event,'action' => route('events.store')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request, Event $event)
    {
        return $this->update($request, $event);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('pages.event.event-form', ['data' => $event,'action' => route('events.update',$event->id)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        if ($request->has('delete')){
            return $this->destroy($event);
        }
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->title = $request->title;
        $event->jam = $request->jam;
        $event->tempat = $request->tempat;
        $event->asal_surat = $request->asal_surat;
        $event->bidang_penanggung_jawab = $request->bidang_penanggung_jawab;
        $event->keterangan = $request->keterangan;
        $event->no_surat = $request->no_surat;
        $event->no_agenda = $request->no_agenda;
        $event->category = $request->category;

        $event->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Save data successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Delete data successfully'
        ]);
    }
}
