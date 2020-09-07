<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cinemas;

class CinemaController extends Controller
{

    
    public function home(){
            $cinemas = Cinemas::all();
            return view('pages.admin.admin_cinema',['cinemas' => $cinemas]);
          }


    public function index(){

       $cinemas = Cinemas::latest()->paginate(5);
        return view('pages.admin.admin_cinema',compact('cinemas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
         return view('pages.admin.admin_cinema');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $request->validate([
            'cinema_name' => 'required',
            'location' => 'required',
        ]);
  
        Cinemas::create($request->all());
   
        return redirect()->route('cinemas')
                         ->with('success','Cinema created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Cinemas $cinemas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Cinemas $cinema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cinemas $cinema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cinemas $cinema)
    {
        $cinema->delete();
        return redirect()->route('cinemas')
                        ->with(['failure','Cinema deleted successfully']);
    }


}
