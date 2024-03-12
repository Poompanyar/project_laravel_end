<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PopulationController extends Controller
{
    //ดึงข้อมูล
    function puData()
    {
        $populationData = Population::all();
        $country = DB::table('populations')->whereNotNull('pu_country')->count(); //นับแถว
        $total = DB::table('populations')->sum('pu_total_all');  //บวกเลข
        $density = DB::table('populations')->avg('pu_density');  //หาค่าเฉลี่ย
        $medianAge = DB::table('populations')->avg('pu_median_age');  //หาค่าเฉลี่ย

        return view('dashboard', compact('populationData','total','country','density','medianAge'));
    }


    //เพื่มข้อมูล 
    function addCountry(Request $request)
    {
        $request->validate([
            'pu_country' => 'required',
            'pu_total_all' => 'required',
            'pu_density' => 'required',
            'pu_median_age' => 'required',
        ]);

        $data = [
            'pu_country' => $request->pu_country,
            'pu_total_all' => $request->pu_total_all,
            'pu_density' => $request->pu_density,
            'pu_median_age' => $request->pu_median_age,
        ];

        DB::table('populations')->insert($data);
        $populationData = Population::all();
        $country = DB::table('populations')->whereNotNull('pu_country')->count();
        $total = DB::table('populations')->sum('pu_total_all');
        $density = DB::table('populations')->avg('pu_density');
        $medianAge = DB::table('populations')->avg('pu_median_age');

        return view('dashboard', compact('populationData','total','country','density','medianAge'));
    }



    //ลบข้อมูล
    function delete($id)
    {
        Population::find($id)->delete();
        $populationData = Population::all();
        $country = DB::table('populations')->whereNotNull('pu_country')->count();
        $total = DB::table('populations')->sum('pu_total_all');
        $density = DB::table('populations')->avg('pu_density');
        $medianAge = DB::table('populations')->avg('pu_median_age');

        return view('dashboard', compact('populationData','total','country','density','medianAge'));
    }



    //แก้ไขข้อมูล
    function edit($id)
    {
        $editPu = Population::find($id);
        return view('edit', compact('editPu'));
    }

    //อัพเดทข้อมูล
    function UpdateCountry(Request $request, $id)
    {
        $population = Population::find($id);
        $request->validate([
            'pu_country' => 'required',
            'pu_total_all' => 'required',
            'pu_density' => 'required',
            'pu_median_age' => 'required',
        ]);
        $population->update([
            'pu_country' => $request->pu_country,
            'pu_total_all' => $request->pu_total_all,
            'pu_density' => $request->pu_density,
            'pu_median_age' => $request->pu_median_age,
        ]);
        $populationData = Population::all();
        $country = DB::table('populations')->whereNotNull('pu_country')->count();
        $total = DB::table('populations')->sum('pu_total_all');
        $density = DB::table('populations')->avg('pu_density');
        $medianAge = DB::table('populations')->avg('pu_median_age');

        return view('dashboard', compact('populationData','total','country','density','medianAge'));
    }
}
