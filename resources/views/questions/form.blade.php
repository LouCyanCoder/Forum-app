@extends('layouts.layout')

@section('content')

<style>
    .form-banner{
    height: 8rem;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background: linear-gradient(to right, #126CFA 0, #108AEC 100%);
    margin: 0 0 40px 0;
    color: #fff;
}

footer {
    margin-top: 2rem;
    padding: 1rem .3rem;
    background-color: #242729;
    color: #6a737c;
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 60px;
}

.form-group {
    display:flex;
    flex-direction: column;
    width: 40%;
    margin:auto;

}

.form-group textarea{
    margin-bottom: 20px;
}

</style>


<div class="form-banner">
    <h1> <?= $question->id === null ? 'Post a new question' : 'Edit a question' ?> </h1>
</div>

    @if ($question->id === null)                 
<form action="/questions" method="post">
    
    @else
<form action="/questions/{{ $question->id }}" method="post">
        @method('PUT')
        
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
        <button class="btn btn-success">Save</button>
    </div>

</form>



@endsection