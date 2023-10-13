<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;
use Illuminate\Support\Facades\DB;

class resumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Resume::all();
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
        $resume = new Resume;
        $resume->nama = $request->nama;
        $resume->skill = $request->skill;
        $resume->graduate = $request->graduate;
        $resume->experience = $request->experience;
        if($resume->save()){
            return ["status" => "Berhasil Menyimpan"];
        }else{
            return ["status" => "Gagal Menyimpan"];
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
