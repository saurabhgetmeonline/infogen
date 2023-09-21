<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insight_post;
use App\Models\Insight_category;
use Illuminate\Support\Str;

class Insight_postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $insight_posts = Insight_post::all();
        return view("admins.insight_posts.index")->with('insight_posts',$insight_posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       $data = array(
            'insight_categories'=>Insight_category::all(),
        );
        return view("admins.insight_posts.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
         $input['slug'] = Str::slug($request->slug);
        if ($featured_image = $request->file('featured_image')) {
            # code...
            $path ="admins/assets/img/insights/featured_image/";
            $file = date("YmdHis").".".$featured_image->getClientOriginalExtension();
            $featured_image->move($path,$file);
            $input['featured_image'] = $file;
        }
        if ($thumbnail_image = $request->file('thumbnail_image')) {
            # code...
            $path ="admins/assets/img/insights/thumbnail_image/";
            $file = date("YmdHis").".".$thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move($path,$file);
            $input['thumbnail_image'] = $file;
        }

        Insight_post::create($input);

        return redirect("insight-post")->with("flash_message", "Data Created Successfully");
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $insight_posts = Insight_post::find($id);
        return view("admins.insight_posts.show")->with('insight_posts',$insight_posts);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $insight_posts = Insight_post::find($id);
        $data = array(
            'insight_categories'=>Insight_category::all(),
        );
        return view("admins.insight_posts.edit",$data)->with('insight_posts',$insight_posts);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $insight_posts = Insight_post::find($id);
        $input = $request->all();
        $input['slug'] = Str::slug($request->slug);
       if ($featured_image = $request->file('featured_image')) {
            # code...
            $path ="admins/assets/img/insights/featured_image/";
            $file = date("YmdHis").".".$featured_image->getClientOriginalExtension();
            $featured_image->move($path,$file);
            $input['featured_image'] = $file;
        }else{
            unset($input['featured_image']);
        }
        if ($thumbnail_image = $request->file('thumbnail_image')) {
            # code...
            $path ="admins/assets/img/insights/thumbnail_image/";
            $file = date("YmdHis").".".$thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move($path,$file);
            $input['thumbnail_image'] = $file;
        }else{
            unset($input['thumbnail_image']);
        }
        $insight_posts->update($input);
        return redirect("insight-post")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $insight_posts = Insight_post::destroy($id);
        return redirect("insight-post")->with("flash_message","Data Deleted Successfully");
    }
    public function duplicateRow(string $id)
    {
        $insight_posts = Insight_post::findOrFail($id);
        $duplicatedRow = $insight_posts->replicate();
        $duplicatedRow->save();

        return redirect("insight-post")->with('flash_message', 'Row duplicated successfully.'); 
    }
}                    