<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.main-categories.index', [
            'categories' => MainCategory::with('subCategories')->orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.main-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:main_categories',
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
            $data = new MainCategory();
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

            return redirect()->route('admin.main-categories.index')->with([
                'created' => 'New category added successfully.'
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MainCategory $mainCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MainCategory $mainCategory)
    {
        return view('admin.pages.main-categories.edit', [
            'category' => $mainCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainCategory $mainCategory)
    {
        $validator = Validator::make($request->all(), [
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
                $file = $mainCategory->image;
            }

            $data = $mainCategory;
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

            return redirect()->route('admin.main-categories.index')->with([
                'updated' => $request->title.' category updated successfully.'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainCategory $mainCategory)
    {
        $mainCategory->delete();
        return redirect()->route('admin.main-categories.index')->with([
            'removed' => $mainCategory->title.' category remove successfully.'
        ]);
    }
}
