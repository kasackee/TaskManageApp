<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Project\UpdateProjectRequest;
use App\Project;
use App\Http\Controllers\Controller;
use \App\Http\Requests\Project\StoreProjectRequest;


class ProjectController extends Controller
{
    /**
     * プロジェクトを取得
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Project::limit(10)->get();
        return response()->json($list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return redirect('/api/articles');
    }

    /**
     * プロジェクトを登録
     *
     * @param  StoreProjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $project = new Project();
        $project->fill($request->all());
        $project->save();
        return response()->json($project);
    }

    /**
     * 指定したIDのプロジェクトを取得
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return response()->json($project);
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
     * @param  UpdateProjectRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::find($id);
        $project->fill($request->all());
        $project->update();
        return response()->json($project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $is_delete = $project->delete();
        return response()->json($is_delete);
    }
}
