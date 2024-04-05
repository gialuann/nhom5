<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Mountain\StoreRequest;
use App\Http\Requests\Admin\Mountain\UpdateRequest;
use App\Models\Country;
use App\Models\Mountain;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mountain = Mountain::with('country')
        
        ->orderBy('created_at','DESC')
        
        ->where('status', '!=' , 3)->get();

        return view('admin.modules.mountain.index',[
            'mountains' =>$mountain
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = Country::get();

        return view('admin.modules.mountain.create',[
            'countries' => $country
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $mountain = new Mountain();

        $file = $request->image;
        $fileName = time() . '-' . $file->getClientOriginalName();
        $mountain->country_id = $request->country_id;
        $mountain->name = $request->name;
        $mountain->height = $request->height;
        $mountain->content = $request->content;
        $mountain->description = $request->description;
        $mountain->image = $fileName;
        $mountain->save();
        $file->move(public_path('uploads/'),$fileName);

        return redirect()->route('admin.mountain.index')->with('success', 'Create mountain successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $countries = Country::get();

        $mountain = Mountain::findOrFail($id);

        return view('admin.modules.mountain.edit',[
            'id' => $id,
            'countries' => $countries,
            'mountain' => $mountain,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $mountain = Mountain::findOrFail($id);
        

        $file = $request->image;

        if (!empty($file)) {
            $old_image_path = public_path('uploads/'. $mountain->image);
            if(file_exists($old_image_path)) {
                unlink($old_image_path);
            }
            $request->validated([
                'image' => 'required|mimes:png,jpg,bmp,jpeg',
            ],[
                'image.required' => 'vui lòng chọn hình ảnh',
                'image.mimes' => 'hình ảnh không hợp lệ (png,jpg,bmp,jpeg)',
            ]);

            $fileName = time() . '-' . $file->getClientOriginalName();
            $mountain->image = $fileName;
            $file->move(public_path('uploads/'),$fileName);
        }

        $mountain->name = $request->name;
        $mountain->height = $request->height;
        $mountain->content = $request->content;
        $mountain->description = $request->description;
        $mountain->country_id = $request->country_id;
        $mountain->save();

        return redirect()->route('admin.mountain.index')->with('success', 'Update mountain successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $mountain = Mountain::findOrFail($id);
        $old_image_path = public_path('uploads/'. $mountain->image);

        if(file_exists($old_image_path)) {
            unlink($old_image_path);
        }

        $mountain->status= 3;

        $mountain->save();

        return redirect()->route('admin.mountain.index')->with('success', 'Delete mountain successfully');
    }
}
