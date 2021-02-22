<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use App\Traits\ActorTrait;

class ActorController extends Controller
{
    //use ActorTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Uso de trait en revisión
    public function getActorIdByName($actorFullName){
        //$this->getActorIdByName($actorFullName);
        $actorName= explode(" ",$actorFullName);
        return Actor::where('first_name','like','%'.$actorName[0].'%')
            ->where('last_name','like','%'.$actorName[1].'%')->pluck('actor_id');
    
    }

    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $nombreComp= explode(" ",$name);
        return Actor:: whereIn('first_name',$nombreComp)
            ->orWhereIn('last_name',$nombreComp)
            ->orWhere(function($query) use ($nombreComp){
                for ($i = 0; $i < count($nombreComp); $i++){
                    $query->where('first_name','like','%'.$nombreComp[$i].'%');
                }
            })->paginate(8);
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
    public function update(Request $request, $id)
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
