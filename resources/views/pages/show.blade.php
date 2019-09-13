@extends('layouts.page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if($child)
                    @section('title', $child->title)
                    @parsedown($child->content)
                @else
                    @section('title', $parent->title)
                    @parsedown($parent->content)
                @endif
            </div>
            <div class="col-md-4">
                <h2>Sidebar content goes in here</h2>
            </div>
        </div>
    </div>

@stop