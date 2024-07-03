<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Question::latest()->take(10)->get());
    }
    public function get(Request $request){
        try{
            return response()->json(
                Question::with(['subject','chapter'])->applyFilter()->paginate($request->get('per_page',15))->items()
            );
        }catch(\Exception $e){
            return response()->json(['message' => $e->getMessage()],500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(\Illuminate\Http\Request $request)
    public function store(StoreQuestionRequest $request)
    {
        // return response()->json($request->all(),500);
        try{
            Question::create($request->validated());

            return response()->json(['message' => 'Success']);
            // Question::create($request->all());

        }catch(\Exception $e){
            return response()->json(['message' => $e->getMessage()],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        try{
            // $question->update($request->only(['text']));
            // Question::create($request->all());
            $question->update($request->validated());

            return response()->json(['message' => 'Success', 'q' => $question]);
        }catch(\Exception $e){
            return response()->json(['message' => $e->getMessage()],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
