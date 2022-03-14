<?php

namespace App\Http\Controllers;

use App\Models\CustomerService;
use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = CustomerService::all();
        return view('customerService.index', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:100',
            'email' => 'required|email',
            'pesan' => 'required'
        ]);
        $customerService = new CustomerService();
        $customerService->nama = $validateData['nama'];
        $customerService->email = $validateData['email'];
        $customerService->pesan = $validateData['pesan'];
        $customerService->save();

        return redirect('/#contact/message')->with('pesan', "Pesan telah dikirim");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerService  $customerService
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerService $customerService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerService  $customerService
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerService $customerService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerService  $customerService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerService $customerService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerService  $customerService
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerService $customerService)
    {
        //
    }
}
