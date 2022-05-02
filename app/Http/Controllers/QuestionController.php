<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Answer;


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
}
