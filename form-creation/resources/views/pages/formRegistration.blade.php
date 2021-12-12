@extends('pages.layouts.app')

@section('content')
<div class="container">
    <h1> Registration </h1>

    <form method="GET" action="{{url('form-display')}}">

        <div class="form-group">
            @foreach($values as $element)

                @if($element['type'] === 'hidden')
                    <div class="form-group">
                        <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}" value="{{ $element['value'] }}">
                    </div>
                @endif

                @if($element['type'] === 'text')
                    <div class="form-group">
                        <label for="{{ $element['id'] }}">{{ ucfirst( $element['id'] ) }}</label>
                        <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" id="{{ $element['id'] }}" placeholder="{{ $element['placeholder'] }}"  name="{{ $element['name'] }}">
                    </div>
                @endif

                @if($element['type'] === 'submit')
                    <button type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}">Submit</button>
                @endif
            @endforeach
        </div>
    </form>
</div>

@endsection
