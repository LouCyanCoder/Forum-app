<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Answer;
use Session;


class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('answers')->get();

        return view('questions.index', compact('questions'));
    }

    public function show($question_id)
    {
        $question = Question::findorFail($question_id);

        $answers = Answer::where('question_id', $question_id)->get();

        return view('questions.show', compact('question','answers'));
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text'  => 'required',
        ]);

        $question = new Question();

        $question->title = $request->input('title');
        $question->text  = $request->input('text');

        $question->save();

        session()->flash("success", "Successfully added");

        return redirect(url('questions'));
    }
   
    public function create()
    {
        $question = new Question();

        return view('questions.form', compact('question'));
        
    }

    public function edit($question_id)
    {
        $question = Question::query()->where('id', $question_id)->first();

        session()->flash('id', $question_id);

        return view('questions.form', compact('question'));
    }
}
