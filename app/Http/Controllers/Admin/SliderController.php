<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\SliderRequest;
use App\Models\About;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class SliderController extends Controller
{


    public function index()
    {
        return view('admin.sliders.index', [
            'sliders' => Slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(SliderRequest $request)
    {
        Slider::create($request->validated());
        return redirect(route('admin.sliders.index'))->with('success', 'Slider Added Successfully');
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
        return view('admin.sliders.edit', [
            'slider' => Slider::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $validator = $request->validated();
        $slider->update($validator);
        return redirect(route('admin.sliders.index'))->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return 'Done';
    }
}
