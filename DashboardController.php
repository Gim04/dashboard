<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitor;
use App\Models\Computer;
use App\Models\Keyboard;
use App\Models\Monitor;
use App\Models\Cable;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    
    public function index(Request $request, visitor $page)
    {
        visitor::updateOrCreate(
            ['page' => 'home'], 
            ['count' => DB::raw('count + 1')]
        );

        $viewCount = visitor::where('page', 'home')->first()->count;

        $viewsPerDay = visitor::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as view_count')
        )
        ->where('created_at', '=', today())
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();

        $viewsPerMonth = visitor::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as date'),
            DB::raw('COUNT(*) as view_count')
        )
        ->where('page', $page)
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();

      
        $viewsPerYear = visitor::select(
            DB::raw('YEAR(created_at) as date'),
            DB::raw('COUNT(*) as view_count')
        )
        ->where('page', $page)
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();

        $computerCount = Computer::count();
        $keyboardCount = Keyboard::count();
        $monitorCount = Monitor::count();
        $cableCount = Cable::count();
        
        return view('dashboard', compact('page', 'viewCount', 'viewsPerDay', 'viewsPerMonth', 'viewsPerYear', 'computerCount', 'keyboardCount', 'monitorCount', 'cableCount'));
}
}