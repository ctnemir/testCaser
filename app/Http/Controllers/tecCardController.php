<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tecCards;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class tecCardController extends Controller
{
    public function deneme($name){
        return $name;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tecCard.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['statuses'] = DB::table('statuses')->get();
        $data['project'] = DB::table('projects')->find($id);
        //return $data;
        return view('tecCard.tecCardCreate',compact('id','id','data','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Request
     */
    public function store(Request $request)
    {
        $avgpreDate = Auth::user()->avgPreDate;
        $date = now();
        $date->addDays($avgpreDate);
        DB::table('tasks')->insert([
            'taskName' => $request->taskName,
            'created_at' => now(),
            'desc' => $request->desc,
            'note' => $request->note,
            'statusId' => $request->status,
            'projectId' => $request->projectId,
            'preDate' => $date
        ]);
        //return $request;
        return redirect('/tecCard/'.$request->projectId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(DB::table('projects')->where('id','=',$id)->exists()) {
                $data['statuses'] = DB::table('statuses')->get();

                if (DB::table('tasks')->where('projectId', '=', $id)->exists()){
                    $data['tasks'] = DB::table('projects')
                        ->join('tasks', 'tasks.projectId', '=', 'projects.id', 'inner')
                        ->orderBy("tasks.updated_at")
                        ->where('projectId', '=', $id)->get();
                if(DB::table('taskstates')->count() > 0) {
                    $data['taskStates'] = DB::table('taskStates')
                        ->join('statuses', 'taskStates.statusId', '=', 'statuses.id', 'inner')
                        ->join('tasks', 'taskStates.taskId', '=', 'tasks.id', 'inner')
                        ->select('taskStates.created_at', 'taskStates.updated_at', 'taskStates.id', 'taskStates.taskStatesDesc', 'taskStates.taskId', 'taskStates.statusId', 'taskStates.userId', 'statuses.statusName')
                        ->where('tasks.projectId', '=', $id)
                        ->get();

                    foreach ($data['taskStates'] as $state) {
                        $state->user = User::find($state->userId);
                    }
                }
            }
            $data['project'] = DB::table('projects')->find($id);

            $data['id'][0] = $id;
            if (DB::table('projects')->where('id', '=', $id)->exists()) {
                $data['id'][1] = true;
            } else {
                $data['id'][1] = false;
            }
            //return $data;
            return view('tecCard.dashboard', compact('data', 'data'));

        }//endif
        else{
            return view('tecCard.dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataa[] = DB::table('tasks')
            ->join('projects','tasks.projectId',"=",'projects.id','inner')
            ->first();
        $data=$dataa[0];
        return view('tecCard.tecCardUpdate',compact('data'));
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
        DB::table('tasks')
            ->where('id',$id)
            ->update([
                'updated_at' => now(),
                'taskName' => $request->taskName,
                'desc' => $request->desc,
                'note' => $request->note
            ]);
        return view('tecCard.dashboard',compact('id','id'));
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

    /*
     * Change Status*/
    public function change (Request $request){
        //kullanıyı $user a alma
        $user = User::findOrFail(Auth::user()->id);


        if($request->value == 5){
            //yeni durum done
            //eski görevi $old a al
            $old = DB::table('tasks')->get()->where('id','=',$request->dataStatus);
            $startTime = new Carbon($old->first()->created_at);
            $now = Carbon::now();
            $diffTime = $startTime->diffInDays($now);

            if(isset($user->avgPreDate)){
                //avgPreDate varsa
                $newAvgPreDate = ($user->avgPreDate + $diffTime) / 2;
                $user->avgPreDate = $newAvgPreDate;
                $user->updated_at = Carbon::now();
                $user->save();
            }
            else{
                //avgPreDate yoksa
                $user->avgPreDate = $diffTime;
                $user->updated_at = Carbon::now();
                $user->save();
            }
        }
        else{}
            //yeni durum done değil güncelle
            DB::table('tasks')
            ->where('id','=',$request->dataStatus)
                ->update([
                    'updated_at' => Carbon::now(),
                    'statusId' => $request->value
                ]);
            return back();

    }
}
