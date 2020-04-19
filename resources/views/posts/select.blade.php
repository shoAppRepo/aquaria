@extends('layouts.app')

@section('content')
<div class="mx-auto wrapper" style="width:500px">
<div class="row mx-auto">
    <div class="mx-auto">
        <h2>{{ $aquarium->name }}</h2>
    </div>
</div>
<div class="row mb-3">
    <div class="col-sm-4" style="margin-top:100px">
        <button type="button" class="btn btn-primary" style="width:10rem;height:5rem">
            <a href="{{ route('posts.review',['id'=>$aquarium->id]) }}" style="color:white;font-size:30px">コメント</a>
        </button>
    </div>
    <div class="offset-sm-3 col-sm-4" style="margin-top:100px">
        <button type="button" class="btn btn-primary" style="width:10rem;height:5rem">
            <a href="{{ route('posts.recommendation',['id'=>$aquarium->id]) }}" style="color:white;font-size:20px">おすすめ生物</a>
        </button>
    </div>
</div>
</div>


@endsection