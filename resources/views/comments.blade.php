<!-- resources\views\comments.blade.php -->
@extends('layouts.default')
@include('common.errors')
@section('content')

<div class="row">
    <?php $i = 0; ?>

    @foreach($comments as $comment)
        <div class="col-lg-4 mb-4">
            
            @if ($i % 2 == 0)
                <div class="bg-light card h-100">
            @else
                <div class="bg-secondary card h-100" style="color: white;">
            @endif
            

            <h4 class="card-header">{{$comment->author}}</h4>
            <div class="card-body">
              <p class="card-text">{{$comment->text}}</p>
            </div>
            <div class="card-footer">
              <b>{{$comment->email}}</b>
            </div>
          </div>
        </div>
    <?php $i++; ?>
    @endforeach

</div>

@endsection