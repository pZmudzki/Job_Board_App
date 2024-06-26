<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Job::class);

        $filters = request()->only('search', 'min_salary', 'max_salary', 'experience', 'category');

        $jobs = Job::with('employer')->filter($filters)->get();

        return view('job.index', ['jobs' => $jobs]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        Gate::authorize('view', $job);

        $job->load('employer.jobs');

        return view('job.show', [
            'job' => $job,
        ]);
    }
}
