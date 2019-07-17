<?php


// namespace App\Http\Models;
// namespace App\Http\Models\Models\hocsinh;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\HOCSINH;

class HocsinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hocsinh = HOCSINH::all();
        // ten bien = clss hocsinh ben models :: all() de lay tat ca du lieu ra 
        // echo "<pre>";
        // print_r( $hocsinhh);
        // echo "</pre>";
        return view('RESTful.list',compact('hocsinh'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('RESTful.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $connect = mysqli_connect($txtHoTen, $txtToan, $txtHoa);
        $hocsinh = new HOCSINH; 
        $hocsinh->hoten = $request->txtHoTen;
        $hocsinh->toan = $request->txtToan;
        $hocsinh->ly = $request->txtLy;
        $hocsinh->hoa = $request->txtHoa;
        $hocsinh->save();
        return redirect()->route('hocsinh.store',[$hocsinh]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('RESTful.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hocsinh = HOCSINH::find($id);
        // lay ra tat ca du lieu cua thang co id la $id 
        $hocsinh->delete();
        return redirect()->route('hocsinh.index');

    }
}
