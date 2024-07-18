<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('permission:Edit Admins', ['only' => ['edit', 'update']]);
//    }


    public function index()
    {
        return view('admin.admins.index', [
            'admins' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(AdminRequest $request)
    {
        User::create($request->validated());
        return redirect(route('admin.admins.index'))->with('success', 'Admin Added Successfully');
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
        return view('admin.admins.edit', [
            'admin' => User::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return
     */
    public function update(AdminRequest $request, User $admin)
    {
        $validator = $request->validated();

        $admin->update($validator);
        return redirect(route('admin.admins.index'))->with('success', 'Updated Successfully');
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
