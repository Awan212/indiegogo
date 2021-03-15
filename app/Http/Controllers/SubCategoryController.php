<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.sub-categories.index', [
            'categories' => SubCategory::with('categories')->orderBY('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.sub-categories.create', [
            'categories' => MainCategory::orderBy('id', 'DESC')->get()
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

        // dd($request->main_category);
        $validator = Validator::make($request->all(), [
            'main_category' => 'required',
            'title' => 'required|unique:sub_categories',
            'sub_title' => 'required',
            'image'     => 'required|image',
            'adult_confirmation' => 'boolean',
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        else
        {
            $destinationPath = 'categories-img/';
            $file = $request->file('image');
            $file_new_name = time().$file->getClientOriginalName();
            $file->move($destinationPath,$file_new_name);
            for($i=0;  $i<count($request->main_category); $i++)
            {
                $data = new SubCategory();
                $data->main_category = $request->main_category[$i];
                $data->image = $destinationPath.$file_new_name;
                $data->title = $request->title;
                $data->sub_title = $request->sub_title;
                if($request->adult_confirmation == null )
                {
                    $data->adult_confirmation  = 0;
                }
                else
                {
                    $data->adult_confirmation  = $request->adult_confirmation;
                }
                $data->save();
            }


            return redirect()->route('admin.sub-categories.index')->with([
                'message' => 'New category added successfully.'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        return view('admin.pages.sub-categories.edit', [
            'category' => $subCategory,
            'categories' => MainCategory::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {

        dd($request->all());
        $validator = Validator::make($request->all(), [
            'main_category' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'image'     => 'nullable|image',
            'adult_confirmation' => 'boolean',
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        else
        {
            if($request->hasFile('image'))
            {
                $destinationPath = 'categories-img/';
                $file = $request->file('image');
                $file_new_name = time().$file->getClientOriginalName();
                $file->move($destinationPath,$file_new_name);
                $file = $destinationPath.$file_new_name;
            }
            else
            {
                $file = $subCategory->image;
            }

            for($i=0;  $i<count($request->main_category); $i++)
            {
                $data = $subCategory;
                $data->main_category = $request->main_category[$i];
                $data->image = $file;
                $data->title = $request->title;
                $data->sub_title = $request->sub_title;
                if($request->adult_confirmation == null )
                {
                    $data->adult_confirmation  = 0;
                }
                else
                {
                    $data->adult_confirmation  = $request->adult_confirmation;
                }
                $data->save();
            }


            return redirect()->route('admin.sub-categories.index')->with([
                'message' => $request->title.' sub category updated successfully.'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('admin.sub-categories.index')->with([
            'message' => $subCategory->title.' category remove successfully.'
        ]);
    }
}
