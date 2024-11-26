<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModulesModel;
use Illuminate\Support\Facades\Validator;

class ModulesController extends Controller
{
    public function __construct(){
        if(!auth()->user()->hasRole('Admin')){
            return abort(403, 'Unauthorized action.');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Modules';
        $data['modules'] = ModulesModel::all();
        return view('admin.modules.modules-list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required | string'
        ],
        [
            'name.required' => 'Module name is required'
        ]);

        if ($validator->passes()) {
            ModulesModel::create($request->all());
            session()->flash('success', 'Module Added Successfully');
            return response()->json([
                'status' => true,
                'errors' => [],
            ]);
        }else{
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ],403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
