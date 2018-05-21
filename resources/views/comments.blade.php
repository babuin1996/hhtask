<!-- resources\views\comments.blade.php -->
@extends('layouts.default')
@include('common.errors')
@section('content')

<div class="row">
    
    @foreach($comments as $comment)
        <div class="col-lg-4 mb-4">
          <div class="bg-light card h-100">
            <h4 class="card-header">{{$comment->author}}</h4>
            <div class="card-body">
              <p class="card-text">{{$comment->text}}</p>
            </div>
            <div class="card-footer">
              <b>{{$comment->email}}</b>
            </div>
          </div>
        </div>    
    
    @endforeach 
    
</div>

@endsection