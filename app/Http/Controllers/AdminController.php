<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //untuk lihat semua tugas melalui ruangan -> tugas -> lihat semua collection
    public function viewAllRooms(){
        $rooms = \App\Room::all();

        return view('dashboard.viewAllRooms', ['rooms'=>$rooms]);
    }

    public function viewAllTasks(Request $request, $id){
        // dd($request);

        $room = \App\Room::findOrFail($id);
        $tasks = $room->tasks;


        return view('dashboard.viewAllTasks', ['tasks' => $tasks]);
    }

    public function viewAllCollections($idroom, $idtask){
        $rooms = \App\Room::findOrFail($idroom);
        $task = $rooms->tasks->where('id',$idtask)->first();
        // echo $idtask;
        return view('dashboard.viewAllCollections',['task'=>$task, 'collections'=>$task->collections]);
    }

    public function viewCollection($idroom, $idtask, $idcollection){
        $rooms = \App\Room::findOrFail($idroom);
        $task = $rooms->tasks->where('id',$idtask)->first();
        $collection=$task->collections->where('id',$idcollection)->first();
        // dd($collection);
        return view('dashboard.viewCollection',['collection'=>$collection]);
    }


}
