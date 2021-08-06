<?php

namespace App\Http\Controllers;

use App\Http\Requests\siteRequest;
use App\Models\ModelSite;
use App\Models\User;

class controlador extends Controller
{
    private $objUser;
    private $objSite;

    public function __Construct()
    {
        $this->objUser=new User();     
        $this->objSite=new ModelSite();

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('index');
        $site=$this->objSite->all();
        $site=ModelSite::all();
        return view('index',compact('site'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$users=$this->objUser->all();
        $users=User::all();
        return view('carrega', compact('users'));

        //$site=ModelSite::all();
      //  return view('info', compact('site'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(siteRequest $request)
    {
            //$Cad=ModelSite->create([]);

        $Cad=$this->objSite->create([
           // 'campo_tabela'=>$request->campo_form,

            'importacao'=>$request->importacao,
            'contabilidade'=>$request->contabilidade,
            'tics'=>$request->tics,
            'tn'=>$request->TecnologiaNuclear,
            'id_user'=>$request->id_user
        ]);
        if($Cad){
            return redirect('info');
            
        }
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(siteRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
