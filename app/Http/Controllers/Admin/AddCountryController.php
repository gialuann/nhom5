<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Country\StoreRequest;
use App\Http\Requests\Admin\Country\UpdateRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country=Country::orderBy('created_at','DESC')->where('status', '!=' , 3)->get();
        return view('admin.modules.addcountry.index',[
            'countries'=>$country
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.addcountry.create')->with('success','Create country successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $country = new Country();

        $file = $request->image;
        $fileName = time() . '-' . $file->getClientOriginalName();

        $country->name = $request->name;
        $country->image = $fileName;

        $country->save();
        $file->move(public_path('uploads/'),$fileName);

        return redirect()->route('admin.addcountry.index')->with('success','Create country successfully');
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
        $country = Country::find($id);
        return view('admin.modules.addcountry.edit',[
            'id' => $id,
            'country' => $country,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $country = Country::findOrFail($id);

        $file = $request->image;

        if (!empty($file)) {
            $old_image_path = public_path('uploads/'. $country->image);
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
            $country->image = $fileName;
            $file->move(public_path('uploads/'),$fileName);
        }

        $country->name =$request->name;
        $country->save();

        return redirect()->route('admin.addcountry.index')->with('success','Update country successfully');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $country = Country::findOrFail($id);

        $old_image_path = public_path('uploads/'. $country->image);

        if(file_exists($old_image_path)) {
            unlink($old_image_path);
        }

        DB::table('countries')->where('id',$id)->update([
            'status' => 3
        ]);

        DB::table('mountains')->where('country_id',$id)->update([
            'status' => 3
        ]);

        $country->save();

        return redirect()->route('admin.addcountry.index')->with('success','Delete country successfully');
    }
}
