<?php

namespace App\Http\Controllers;

use App\Events\SubmissionSaved;
use App\Jobs\ProcessSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = $validator->validated();
        
        // Dispatch the job
        ProcessSubmission::dispatch($data);

        // Trigger the event after dispatching the job
        event(new SubmissionSaved($data['name'], $data['email']));

        return response()->json(['message' => 'Submission received and being processed.'], 202);
    }
}
