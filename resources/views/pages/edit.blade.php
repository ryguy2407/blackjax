@extends('layouts.page')

@section('content')


    <div class="container">
        <form action="{{ route('page.update', $page->id) }}" method="POST">
            @csrf
            @method('PUT')
            <textarea id="pageEdit" name="page" hidden>{!! $page->lb_raw_content !!}</textarea>
            <button type="submit">Update page</button>
        </form>
    </div>


    <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>

    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>

    <script>
        Laraberg.init('pageEdit', { laravelFilemanager: true });
    </script>

@stop