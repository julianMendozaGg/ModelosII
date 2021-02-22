<?php
namespace App\Traits;
use App\Models\Actor;

trait ActorTrait{
    public function getActorIdByName($actorFullName){
        $actorName= explode(" ",$actorFullName);
        return Actor::where('first_name','like','%'.$actorName[0].'%')
            ->where('last_name','like','%'.$actorName[1].'%')->pluck('actor_id');
    }
}