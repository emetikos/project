@extends('pages.layouts.app')

@section('content')

    <div class="container">
        @isset ($error)
            <h1>{{ $error }}</h1>
        @endisset

        @isset($formData)
            <h1> Update {{ ucfirst(trans($formName)) }} form </h1>

            <form method="GET" action="{{url('form-display')}}">

                <div class="form-group">
                    @foreach($formData as $element)

                        @if($element['type'] === 'hidden')
                            <div class="form-group">
                                <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}" value="{{ $element['userValue'] }}">
                            </div>
                        @endif

                        @if($element['type'] === 'text')
                            <div class="form-group">
                                <label for="{{ $element['id'] }}">Your current {{ ucfirst( $element['label'] ) }} : {{ $element['userValue'] }}</label>
                                <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" id="{{ $element['id'] }}" placeholder="change your {{ ucfirst(trans($element['name'])) }}"  name="{{ $element['name'] }}">
                            </div>
                        @endif

                        @if($element['type'] === 'email')
                            <div class="form-group">
                                <label for="{{ $element['id'] }}">Your current {{ ucfirst( $element['label'] ) }} : {{ $element['userValue'] }}</label>
                                <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}" placeholder="change your {{ ucfirst(trans($element['name'])) }}">
                            </div>
                        @endif

                        @if($element['type'] === 'checkbox')
                            <div class="form-group">
                                <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" id="{{ $element['id'] }}" autocomplete="off" disabled>
                                <label class="btn btn-outline-primary" for="{{ $element['id'] }}">Checkbox 1</label>
                            </div>
                        @endif

                        @if($element['type'] === 'textarea')
                            <div class="form-group">
                                <label for="{{ $element['id'] }}">Your current {{ ucfirst( $element['label'] ) }} : {{ $element['userValue'] }}</label>
                                <textarea type="{{ $element['type'] }}" class="{{ $element['class'] }}" id="{{ $element['id'] }}" name="textarea"
                                          rows="{{ $element['rows'] }}" placeholder="change your text"></textarea>
                            </div>
                        @endif
                    @endforeach
                        <button type="submit" class="btn btn-info" >Update your Information</button>
                </div>
            </form>
        @endisset
    </div>

@endsection