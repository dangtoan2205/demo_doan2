@extends('master')
@section('content')
<div class="content">
                    <div class="content_title">
                        <h1>Dự án</h1>
                    </div>
                    <div class="clean10"></div>
                    <div class="content_main">
                        <div class="clean10"></div>
                        @foreach($new_tin as $new)
                        <div class="body">
                            <div class="col4">
                                <img src="{{$new->image}}" alt="">
                            </div>
                            <div class="col6">
                                <h2>{{$new->description}}</h2>
                                <p>{{$new->note}}</p>
                            </div>
                        </div>
                        <div class="clean10"></div>
                        @endforeach
                    </div>
                </div>

@endsection