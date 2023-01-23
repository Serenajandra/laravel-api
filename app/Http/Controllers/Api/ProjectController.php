<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);

        // $projects = Project::with('type', 'technologies')->get();
        // return response()->json([
        //     'success' => true,
        //     'result' => $projects
        // ]);
    }

    public function show($slug)
    {
        // dd($slug);
        $project = Project::where('slug', $slug)->first();
        if ($project) {
            return response()->json(
                [
                    'success' => true,
                    'project' => $project
                ]
            );
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Nessun progetto trovato'
            ]);
        }
    }
}
