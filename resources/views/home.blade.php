@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
	    {{ trans('admin.home.title') }}
    </div>

    <div class="body">
        @if(session('status'))
            <div class="alert success">
                {{ session('status') }}
            </div>
        @endif

        {{ trans('admin.home.content.you_are_logged_in') }}
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection