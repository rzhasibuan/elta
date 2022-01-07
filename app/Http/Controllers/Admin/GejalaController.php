<?php

namespace App\Http\Controllers\Admin;

use App\Gejala;
use App\Http\Controllers\Controller;
use App\Traits\FlashAlert;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    use FlashAlert;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $data = Gejala::orderBy('created_at','desc')->paginate(10);
        return view('admin.pages.gejala.index',[
            'subGejala' => 'active',
            'title' => 'Symptom / Gejala',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.gejala.create',[
            'subGejala' => 'active',
            'title' => 'Create Symptom / Gejala',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_rule' => ['required','max:30'],
            'nama_rule' => ['required', 'max:30'],
            'nilai_md' => ['required', 'numeric']
            ]);

        $data = Gejala::create([
            'kode_rule' => $request->input('kode_rule'),
            'nama_rule' => $request->input('nama_rule'),
            'nilai_md' => $request->input('nilai_md')
        ]);

        return redirect()->route('admin.gejala.index')->with($this->alertCreated());
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        try{
            $data = Gejala::findOrFail($id);
            return view('admin.pages.gejala.edit',[
                'subGejala' => 'active',
                'title' => 'Update Symptom / Gejala',
                'data' => $data
            ]);
        }catch (ModelNotFoundException $e){
            return redirect()->route('admin.gejala.index')->with($this->alertNotFound());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $data = Gejala::findOrFail($id);

            $this->validate($request,[
                'kode_rule' => ['required','max:30'],
                'nama_rule' => ['required', 'max:30'],
                'nilai_md' => ['required', 'numeric']
            ]);

            $data->update([
                'kode_rule' => $request->input('kode_rule'),
                'nama_rule' => $request->input('nama_rule'),
                'nilai_md' => $request->input('nilai_md')
            ]);

            return redirect()->route('admin.gejala.index')->with($this->alertUpdated());
        }catch (ModelNotFoundException $e){
            return redirect()->route('admin.gejala.index')->with($this->alertNotFound());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $data = Gejala::findOrFail($id);
            $data->delete();
            return redirect()->route('admin.gejala.index')->with($this->alertDeleted());
        }catch (ModelNotFoundException $e){
            return redirect()->route('admin.gejala.index')->with($this->alertNotFound());
        }
    }
}
