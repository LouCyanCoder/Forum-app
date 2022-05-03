@extends('layouts.layout')

@section('content')

<section id="banner">
    <div class="container">
        <h1>Questions</h1>

        <a href="/questions/create">
            <button class="btn btn-success">Post a new question</button>
        </a>
        
    </div>
</section>

<section id="questions">
    <div class="container">

        @foreach ($questions as $question)
        <div class="question">
            <div class="question-left">
                <div class="question-name">
                    <a href="/questions/{{ $question->id }}">{{ $question->title }}</a>
                </div>
                <div class="question-info">
                    asked at {{ $question->created_at }} by <a href="">Unknown User</a>
                </div>
            </div>
            <div class="question-right">
                <div class="question-stat">
                    <span>{{ $question->answers->count() }}</span>
                    <label>responses</label>
                </div>
            </div>
        </div>
            
        @endforeach


    </div>
</section>

@endsection