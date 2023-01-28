<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Http\Requests\StoreMediaRequest  $request
     * @return string[]
     */
    public function store(StoreMediaRequest $request)
    {
        $file= $request->file('name');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
//         $filename;

        $media = Media::create([
            'name' => $filename,
            'original_name' => $file->getClientOriginalName(),
            'is_main' => $request->is_main,
            'mediaable_id' => $request->mediaable_id,
            'file_type' => $request->file_type,
//            'first_user' => Auth::id(),
        ]);

        return ['message' => 'added Successfully',
//            'data' => [PostResource::make($post)],
        ];//        if ($request->hasFile('assets')) {
//            foreach ($request->assets as $file) {
//                $image_name = $file->store('public', 'public');
//                $post->media()->create([
//                    'post_id' => $post->id,
//                    'name' => $image_name,
//                ]);
//            }
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaRequest  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaRequest $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}
