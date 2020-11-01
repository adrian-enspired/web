<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Release;

class ReleaseController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(['releases' => Release::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $release = Release::find($id);

        return response(['release' => $release]);
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
        $request->validate([
            'title' => 'required',
            'artist' => 'required'
        ]);

        $release = Release::findOrFail($id);
        $release->title = $request->get('title');
        $release->artist = $request->get('artist');
        $release->artwork = $request->get('artwork');
        $release->status = $request->get('status');
        $release->user_id = $response->get('user_id');
        $release->save();

        return response(['release' => $release]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Release::find($id)->delete();
        return response(null, 200);
    }
}
