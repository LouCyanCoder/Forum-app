@extends('layouts.layout')

@section('content')

    <section id="banner">
        <div class="container">
            <h1>Question</h1>
            
            <div class="banner-control">
                
                <a href="/questions/{{ $question->id }}/edit">
                    <button class="btn btn-success">Edit this question</button>
                </a>
                
                <a href="{{ route('question-destroy', [$question->id]) }}">
                    <button class="btn btn-danger">Delete this question</button>
                    @method('destroy')
                </a>
                
            </div>
        </div>
    </section>

    <section id="question">
        <div class="container">
    
        
    <div class="question-left">
        <h2>{{ $question->title }}</h2>
        <p>{{ $question->text }}</p>
        </div>
        <div class="question-right">
            <div class="user-avatar">
                <img class="img-fluid" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
            </div>
            <div class="user-name">by <a href="">Unknown user</a></div>
    </div>
    
    
        </div>
    </section>

    <section id="answers">
        <div class="container">
            <h2>{{ $answers->count()}} Answers</h2>
            @foreach ($answers as $answer)
            <div class="answer">
                <div class="answer-right">
                    <p>{{ $answer->text }}</p>
                </div>
                <div class="answer-left">
                    <div class="user-avatar">
                        <img class="img-fluid" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                    </div>
                    <div class="user-name">by <a href="">Unknown user</a></div>
                </div>
            </div>       
            @endforeach
        </div>
    </section>
   
@endsection