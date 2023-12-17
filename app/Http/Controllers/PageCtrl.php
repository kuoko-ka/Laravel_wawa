<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PageCtrl extends Controller
{
    public function index()
    {

        return view('Layouts.index');

    }
    public function login()
    {
        return view('User.Login');

    }
    // dito pinapakita at kinukuha ang mga bagay bagay :)


    public function InnerC()
    {

        return view('Inner.Events', [
            'Events' => Events::latest()->filter(request(['Department', 'search']))->paginate(3)
        ]);
    }

    //create form show
    public function CRF()
    {
        return view('Inner.ShowForm');
    }



    //store form to database POST
    public function SF(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'department' => 'required',
            'tags' =>  'required',
            'description' => 'required'
            ]);

        if ($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('imgs', 'public');
        }
        Events::create($formFields);
        return redirect('/Events/Create')->with('message', 'Post created successfully!');
    }

    //get data in forms to database (update)
    public function update(Request $request, Events $events)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'department' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('imgs', 'public');
        }
        $events->update($formFields);
        return back()->with('message', 'Post Edited successfully!');
    }



    //single event
    public function Sevnt(Events $events)
    {

        return view('Inner.SEvents', [
            'events' => $events
        ]);
    }

    // viewing edit form
    public function edit(Events $events)
    {

        return view('Inner.ShowEditForm', [
            'events' => $events

        ]);

    }
    public function delete(Events $events)
    {
        $events->delete();
        return redirect('/Events')->with('message', 'Post deleted successfully!');

    }



}
