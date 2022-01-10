@extends('pages.layouts.app')

@section('content')

    <div class="container">
        @isset ($error)
            <h1>{{ $error }}</h1>
        @endisset

        @isset($fields)
                    <h1> {{ ucfirst(trans($name)) }} Form </h1>
            <form method="GET" action="{{url('form-display')}}">

                <div class="form-group">
                    @foreach($fields as $element)

                        @if($element['type'] === 'hidden')
                            <div class="form-group">
                                <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}" @isset($element['value'])value="{{ $element['value'] }}"@endisset>
                            </div>
                        @endif

                        @if($element['type'] === 'text')
                            <div class="form-group">
                                <label for="{{ $element['id'] }}">{{ ucfirst( $element['label'] ) }}</label>
                                <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" id="{{ $element['id'] }}" placeholder="{{ $element['placeholder'] }}"  name="{{ $element['name'] }}">
                            </div>
                        @endif

                            @if($element['type'] === 'email')
                                <div class="form-group">
                                    <label for="{{ $element['id'] }}">{{ ucfirst( $element['label'] ) }}</label>
                                    <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}" placeholder="Enter you Email">
                                </div>
                            @endif

                            @if($element['type'] === 'checkbox')
                                <div class="form-group">
                                    <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" id="{{ $element['id'] }}" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="{{ $element['id'] }}">Checkbox 1</label>
                                </div>
                            @endif

                            @if($element['type'] === 'textarea')
                                <div class="form-group">
                                    <label for="{{ $element['id'] }}">{{ ucfirst( $element['label'] ) }}</label>
                                    <textarea type="{{ $element['type'] }}" class="{{ $element['class'] }}" id="{{ $element['id'] }}" name="textarea"
                                              rows="{{ $element['rows'] }}" placeholder="Leave a comment here"></textarea>
                                </div>
                            @endif

                        @if($element['type'] === 'submit')
                            <button type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}">Submit</button>
                        @endif
                    @endforeach
                </div>
            </form>
            @endisset
    </div>

@endsection
