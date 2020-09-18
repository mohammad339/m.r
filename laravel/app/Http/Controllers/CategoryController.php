<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Exception;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagetitle= 'مدیریت دسته بندی ها';
     $categories =category::orderby('id','desc')->get();
     return view ('categories',compact('pagetitle','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagetitle= 'دسته بندی جدید';
        return view ('create',compact('pagetitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
           $messages=[
             'title.required'=>'فیلد عنوان را وارد نمایید',
             //'title.unique'=>'فیلد عنوان تکراری است .لطفا عنوان را عوض کنید',
             'title.max'=>'تعداد حروف مجاز حداکثر ده کاراکتر است',
             'description.required'=>'شرح دسته بندی راوارد نمایید',
          ];
       
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'description' => 'required',
            ],$messages);
           // $category= new category([
              //  'title' => $request->get('title'),
              //  'description'=>$request->get('description'),
              //  'active'=>$request->get('active')

          //  ]);
          $category= new category();
            try {
                //$category->save();
            $category->create($request->all());  //  میتوانیم این کدرابجای همه کدهای کامنت شده بالااستفاده کنیم
            } catch (Exception $exception)
            
            {
                switch($exception->getCode())
                {
                    case 23000:
                        $msg ="عنوان واردشده تکراری است";
                    break;
                }
                return redirect(route('categories'))->with('warning',$msg);}
            
            $msg="ذخیره دسته بندی با موفقیت انجام شد";
            return redirect(route('categories'))->with('success',$msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {    
        $pagetitle='اطلاعات دسته بندی انتخاب شده';
        return view('category',compact('pagetitle','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        $pagetitle='ویرایش دسته بندی';
        return view('edit',compact('pagetitle','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $messages=[
            'title.required'=>'فیلد عنوان را وارد نمایید',
            //'title.unique'=>'فیلد عنوان تکراری است .لطفا عنوان را عوض کنید',
            'title.max'=>'تعداد حروف مجاز حداکثر ده کاراکتر است',
            'description.required'=>'شرح دسته بندی راوارد نمایید',
         ];
      
           $validatedData = $request->validate([
               'title' => 'required|max:255',
               'description' => 'required',
           ],$messages);
          // $category->title=$request->title;
          // $category->description=$request->description;
          // $category->active=$request->active;
           
       
           try {
         // $category->save();
          $category->update($request->all()); // به جای کدهای کامنت شده بالامیتوان ازاین کداستفاده کرد
           } catch (Exception $exception)
           
           {
               switch($exception->getCode())
               {
                   case 23000:
                       $msg ="عنوان واردشده تکراری است";
                   break;
               }
               return redirect(route('categories'))->with('warning',$msg);}
           
           $msg="ویرایش با موفقیت انجام شد";
           return redirect(route('categories'))->with('success',$msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        try {
        $category->delete();
    } catch (Exception $exception){  return redirect(route('categories'))->with('warning',$exception->getCode());}
             $msg="حذف با موفقیت انجام شد";
           return redirect(route('categories'))->with('success',$msg);
    }
}
