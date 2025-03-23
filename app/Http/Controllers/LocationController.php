<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;


class LocationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        try {
            $locationdata = Location::orderBy('id', 'desc')->get();
            return view('admin.location')->with('locationdata', $locationdata);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
            return redirect('/error');
        }
    }
}
