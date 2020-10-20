<?php

namespace App\Http\Controllers;

use App\Car_gallery;
use App\Car_model;
use App\Car_specification;
use App\CarBrand;
use Illuminate\Http\Request;

class CarSpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car_specification::with('carModel')->get();
        $pros=Car_model::pluck('title','id');
        //dd($cars);
        
        return view('Backend.car_specifications.index',compact('cars','pros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $carBrand=CarBrand::pluck('title', 'id');
        $carModel = Car_model::pluck('title', 'id');
        return view('Backend.car_specifications.create',compact('carModel','carBrand','pros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        {
            //dd($request->all());
            try
            {
                if($request->hasFile('image1','image2','image3','image4','image5','image6','image7','image8','image9','image10','image11','image12','banner1','banner2','banner3','extra')){
                    $data=$request->all();

                    $pictureName1=time().'_'.$request->image1->getClientOriginalName();
                    $pictureName2=time().'_'.$request->image2->getClientOriginalName();
                    $pictureName3=time().'_'.$request->image3->getClientOriginalName();
                    $pictureName4=time().'_'.$request->image4->getClientOriginalName();
                    $pictureName5=time().'_'.$request->image5->getClientOriginalName();
                    $pictureName6=time().'_'.$request->image6->getClientOriginalName();
                    $pictureName7=time().'_'.$request->image7->getClientOriginalName();
                    $pictureName8=time().'_'.$request->image8->getClientOriginalName();
                    $pictureName9=time().'_'.$request->image9->getClientOriginalName();
                    $pictureName10=time().'_'.$request->image10->getClientOriginalName();
                    $pictureName11=time().'_'.$request->image11->getClientOriginalName();
                    $pictureName12=time().'_'.$request->image12->getClientOriginalName();
                    $pictureName13=time().'_'.$request->banner1->getClientOriginalName();
                    $pictureName14=time().'_'.$request->banner2->getClientOriginalName();
                    $pictureName15=time().'_'.$request->banner3->getClientOriginalName();
                    $pictureName16=time().'_'.$request->extra->getClientOriginalName();

                    $request->image1->move('images/car' , $pictureName1);
                    $request->image2->move('images/car' , $pictureName2);
                    $request->image3->move('images/car' , $pictureName3);
                    $request->image4->move('images/car' , $pictureName4);
                    $request->image5->move('images/car' , $pictureName5);
                    $request->image6->move('images/car' , $pictureName6);
                    $request->image7->move('images/car' , $pictureName7);
                    $request->image8->move('images/car' , $pictureName8);
                    $request->image9->move('images/car' , $pictureName9);
                    $request->image10->move('images/car' , $pictureName10);
                    $request->image11->move('images/car' , $pictureName11);
                    $request->image12->move('images/car' , $pictureName12);
                    $request->banner1->move('images/car' , $pictureName13);
                    $request->banner2->move('images/car' , $pictureName14);
                    $request->banner3->move('images/car' , $pictureName15);
                    $request->extra->move('images/car' , $pictureName16);
                    $data['image1'] = $pictureName1;
                    $data['image2'] = $pictureName2;
                    $data['image3'] = $pictureName3;
                    $data['image4'] = $pictureName4;
                    $data['image5'] = $pictureName5;
                    $data['image6'] = $pictureName6;
                    $data['image7'] = $pictureName7;
                    $data['image8'] = $pictureName8;
                    $data['image9'] = $pictureName9;
                    $data['image10'] = $pictureName10;
                    $data['image11'] = $pictureName11;
                    $data['image12'] = $pictureName12;
                    $data['banner1'] = $pictureName13;
                    $data['banner2'] = $pictureName14;
                    $data['banner3'] = $pictureName15;
                    $data['extra'] = $pictureName16;




                    Car_specification::create($data);
                    //dd($data);///
                    return redirect()->route('car_specifications.index')->with('message','Data has been inserted successfully');

                }
                else{
                    $data=$request->all();
                    $data['image1']="picture didn't add";
                    $data['image2']="picture didn't add";
                    Car_specification::create($data);
                    return redirect()->route('car_specifications.index')->with('message','Data has been inserted successfully');
                }

            }
            catch(QueryException $e){
                return redirect()->route('car_specifications.create')->with($e->getMessage());
            }
        }
    }
//        $data=$request->all();
    //        Car_specification::create($data);
    //       //dd($data);
    //        return redirect()->route('car_specifications.index')->with('message','Data has been inserted successfully');


    /**
     * Display the specified resource.
     *
     * @param  \App\Car_specification  $car_specification
     * @return \Illuminate\Http\Response
     */
    public function show(Car_specification $car_specification)
    {

      //$car_specification=Car_specification::with('carModel')->get();
       //dd($car_specification);
        //$images=Car_gallery::all();
        $carModel=Car_model::pluck('title','id');
        return view('Backend.car_specifications.show',compact('car_specification','carModel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_specification  $car_specification
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_specification $car_specification)
    {
        $carBrand=CarBrand::pluck('title', 'id');
        $carModel = Car_model::pluck('title', 'id');
        return view('Backend.car_specifications.edit',compact('car_specification','carModel','carBrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_specification  $car_specification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_specification $car_specification)
    {
        try{
            $updateData=$request->all();
            //dd($updateData);
            $car_specification->update($updateData);
            return redirect()->route('car_specifications.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_specification  $car_specification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_specification $car_specification)
    {
        $car_specification->delete();
        return redirect()->route('car_specifications.index')->with('message', 'Data has been updated successfully');

    }
}
