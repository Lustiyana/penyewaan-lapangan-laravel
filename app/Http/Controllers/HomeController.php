<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
   
class HomeController extends Controller
{
    public function schedule()
    {
        $arenas = DB::table('arenas')->get();

        return view('schedule', ['arenas' => $arenas]);
    }

    public function scheduletime(){
        $arenas = DB::table('arenas')->get();

        return view('scheduletime', ['arenas' => $arenas]);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homeAdmin()
    {
        return view('homeAdmin');
    }
    
}