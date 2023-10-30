<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Statustype;
use App\Models\Complainttype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $complainttypes = Complainttype::get();

        return view('complaint.create', [
            'complainttypes' => $complainttypes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'complainttype_id' => 'required|exists:complainttypes,id',
            'description' => 'required|string',
        ]);

        $firstStatus = Statustype::orderBy('id')->first();

        $complaintData = [
            'complainttype_id' => $request->input('complainttype_id'),
            'description' => $request->input('description'),
            'user_id' => Auth::id(),
            'statustype_id' => $firstStatus->id,
        ];

        // Create a new complaint using the validated data
        Complaint::create($complaintData);

        // Additional logic for successful complaint creation

        return redirect()->route('dashboard')->with('success', 'Complaint created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Complaint $complaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComplaintRequest $request, Complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint)
    {
        //
    }
}
