<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\AdminRequest;
use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{


    public function index()
    {
        return view('admin.abouts.index', [
            'abouts' => About::first()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(AdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return
     */
    public function edit($id)
    {
        return view('admin.abouts.edit', [
            'about' => About::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return
     */
    public function update(AboutRequest $request, $id)
    {
        $validator = $request->validated();
        $about = About::findOrFail($id);
        $about->update($validator);
        return redirect(route('admin.abouts.index'))->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return
     */
    public function destroy(User $user)
    {
        if (auth()->user()->id == $user->id) {
            return redirect(route('admin.admins.index'))->with('error', 'You Can\'t Delete your account');
        }
        $user->delete();
        return 'Done';
    }
}
