<?php

namespace App\Http\Controllers;

use App\Models\{Ad, Category, City, Upload};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdsController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->session()->has('index')) {
            $request->session()->put('index', Str::random(30));
        }

        $cities = City::all();
        $ads = Ad::all();
        $categories = Category::all();
        return view('settings.ads.index', compact('cities', 'ads', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.ads.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientCreate(Request $request)
    {

        if (!$request->session()->has('index')) {
            $request->session()->put('index', Str::random(30));
        }

        $categories = Category::all();
        $cities = City::all();

        return view('myaccount.ads.create', compact('categories', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'title' => 'required|string',
            'texte' => 'required',
            'category' => 'required',
            'city' => 'required',
        ]);

        $ad = Ad::create([
            'title'          => $request->title,
            'texte'          => $request->texte,
            'category_id'    => $request->category,
            'city_id'        => $request->city,
            'user_id'        => auth()->check() ? auth()->id() : 0,
            'departement'    => $request->departement ?? 0,
            'commune'        => 'commune',
            'commune_name'   => 'commune_name',
            'commune_postal' => 'commune_postal',
            'pseudo'         => (auth()->check() && auth()->user()->name != null) ? auth()->user()->name : '-',
            'email'          => auth()->check() ? auth()->user()->email : $request->email,
            'limit'          => Carbon::now()->addWeeks($request->limit),
        ]);

        if ($request->session()->has('index')) {
            $index = $request->session()->get('index');
            Upload::whereIndex($index)->update(['ad_id' => $ad->id, 'index' => 0]);
        }

        return redirect()->back()->with('success', 'La ville a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        $data = array(
            'ad' => $ad,
            'blocs' => $ad->blocs,
        );

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        $data = array(
            'id' => $ad->id,
            'name' => $ad->name,
            'city_id' => $ad->city->id,
        );

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'city_id' => 'int|required',
            'long' => 'string',
            'lat' => 'string',
        ]);

        $ad->name = $request->name;
        $ad->city_id = $request->city_id;
        $ad->update();

        return response()->json(['success' => true]);
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
    }
}
