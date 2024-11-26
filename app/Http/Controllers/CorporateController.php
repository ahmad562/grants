<?php

namespace App\Http\Controllers;

use App\Models\CorporateModel;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function __construct(){
        if(!auth()->user()->can('View Corporate')){
            echo view('unauthorized');
            exit;
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Corporate List';
        $data['corporates'] = CorporateModel::getAllCoporates();
        return view('admin.corporate.corporate-list', $data);
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
        $request->validate([
            'name' => 'required | string | max:255',
        ]);

        CorporateModel::create([
            'name' => $request->name,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'state' => $request->state,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'website' => $request->website,
            'email' => $request->email,
            'created_by' => auth()->user()->id,
        ]);
        session()->flash('success', 'User Created Successfully');
        return response()->json([
            'status' => true,
            'errors' => [],
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['title'] = 'Corporate Details';
        $data['corporate'] = CorporateModel::find($id);
        // dd($data['corporate']);
        return view('admin.corporate.corporate-details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['title'] = 'Corporate Details';
        $data['corporate'] = CorporateModel::find($id);
        return view('corporate.corporate-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required | string | max:255',
        ]);
        
        $corporate = CorporateModel::findOrFail($id);
        
        $corporate->update([
            'name' => $request->name,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'state' => $request->state,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'website' => $request->website,
            'email' => $request->email,
            'updated_by' => auth()->user()->id,
        ]);
        // dd($request->all());
        return redirect()->route('corporate.index')->with('success', 'Corporate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $corporate = CorporateModel::find($id);
        $corporate->status = 'Deleted';
        $corporate->save();
        session()->flash('success', 'Corporate Deleted Successfully');
        return redirect()->route('corporate.index');
    }
}
