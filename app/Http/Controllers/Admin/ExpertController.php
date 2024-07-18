<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpertRequest;
use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{


    public function index()
    {
        return view('admin.experts.index', [
            'experts' => Expert::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        return view('admin.experts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(ExpertRequest $request)
    {
        Expert::create($request->validated());
        return redirect(route('admin.experts.index'))->with('success', 'Added Successfully');
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
        return view('admin.experts.edit', [
            'expert' => Expert::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return
     */
    public function update(ExpertRequest $request, Expert $expert)
    {
        $validator = $request->validated();
        $expert->update($validator);
        return redirect(route('admin.experts.index'))->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return
     */
    public function destroy(Expert $expert)
    {
        $expert->delete();
        return 'Done';
    }
}
