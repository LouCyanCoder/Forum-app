@extends('layouts.layout')

@section('content')
    
    @if ($question->id)
        
        <h1>Edit question</h1>

        <form action="questions/{{ $question->id }}" method="post">
            @method('PUT')
    @else
        <h1>Post a new question</h1>

        <form action="/questions" method="post">
    @endif

            @csrf

    <div class="form-group">
        <label for="">Title</label><br>
        <input
            type="text"
            name="title"
            value="{{ old('title', $question->title) }}"
        >
    </div>

    <div class="form-group">
        <label for="">Additional text</label><br>
        <textarea
            name="text"
        >{{ old('text', $question->text) }}</textarea>
    </div>

    <div class="form-group">
        <button>Save</button>
    </div>

</form>

@endsection