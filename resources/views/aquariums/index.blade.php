@extends('layouts.app')

@section('content')

    
    <div class="top_image">
    <img src="/images/penguin1-min.jpeg" class="topImage_size">
    </div>
    <div class="top__text-box">
      <h1 class="top__title">Enjoy Aquaria!</h1>
      <div class="top__catchphrase">色々な水族館に出かけよう</div>
    </div>

<div class="main"></div>
<h2 class="text-second" style="width:100vw">どのエリアに行く？</h2>
    
<!--メインエリア-->
<div class="container">
    <!--検索-->
    <div class="d-flex justify-content-center mt-3">
        {!! Form::open(['route' => ['search.index'],'method' => 'get']) !!}
            {!! Form::text('search', null) !!}
        {!! Form::submit('検索',['class' => "btn btn-primary"]) !!}
        {!! Form::close() !!}
    </div>
    
    <div class="row col-sm-12 mt-2 mx-auto d-flex justify-content-center text-center">
        @if(count($aquariums) > 0)
        @foreach($aquariums as $aquarium)

        <div href="{{ route('aquariums.show',['id'=>$aquarium->id]) }}" class="card ml-2 mt-2" style="display:inline-block;height:17rem;width:15rem">
            <div class="card-body clearfix" style="height:100%">
                <p class="card-header" style="font-size:15px">{{ $aquarium->name }}</p>
                <p class="card-text mt-3 text-left">{!! mb_substr(nl2br(e($aquarium->content)),0,58) !!}</p>
                <div class="mb-0">
                <a href="{{ route('aquariums.show',['id'=>$aquarium->id]) }}" class="btn btn-primary float-right">詳細</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-2">
        {{ $aquariums->links('pagination::bootstrap-4') }}
    </div>
    @else
    <div class="mx-auto mb-3">
        <h3>まだ登録されていません。</h3>
        <h3>少々お待ちを。</h3>
    </div>
    @endif
</div>


@endsection