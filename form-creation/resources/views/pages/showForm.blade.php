@extends('pages.layouts.app')

@section('content')

<div class="container">
    @isset ($error)
        <h1>{{ $error }}</h1>
    @endisset

    @isset($formData)
        <h1>{{ ucfirst(trans($formName)) }} form is displayed</h1>

            <form method="GET" action="/">

                <div class="form-group">
                    @foreach($formData as $element)

                        @if($element['type'] === 'hidden')
                            <div class="form-group">
                                <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}" value="{{ $element['userValue'] }}" disabled>
                            </div>
                        @endif

                        @if($element['type'] === 'text')
                            <div class="form-group">
                                <label for="{{ $element['id'] }}">{{ ucfirst( $element['label'] ) }}</label>
                                <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" id="{{ $element['id'] }}" placeholder="{{ $element['userValue'] }}"  name="{{ $element['name'] }}" disabled>
                            </div>
                        @endif

                        @if($element['type'] === 'email')
                            <div class="form-group">
                                <label for="{{ $element['id'] }}">{{ ucfirst( $element['label'] ) }}</label>
                                <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}" placeholder="{{ $element['userValue'] }}" disabled>
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
                                <label for="{{ $element['id'] }}">{{ ucfirst( $element['label'] ) }}</label>
                                <textarea type="{{ $element['type'] }}" class="{{ $element['class'] }}" id="{{ $element['id'] }}" name="textarea"
                                          rows="{{ $element['rows'] }}" placeholder="{{ $element['userValue'] }}" disabled></textarea>
                            </div>
                        @endif

{{--                        @if($element['type'] === 'submit')--}}
{{--                            <button type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}">Submit</button>--}}
{{--                        @endif--}}
                    @endforeach
                </div>
            </form>
    @endisset
</div>

@endsection
