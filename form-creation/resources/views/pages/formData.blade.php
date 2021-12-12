@extends('pages.layouts.app')

@section('content')
<body>



<div class="container">





<pre>
    @foreach($data as $key => $val)
        {{ $val }}
    @endforeach


</pre>





        <h1> Registration form submitted </h1>

        <form method="GET" action="{{url('form-display')}}">

            <div class="form-group">
                @foreach($values as $element )

                    @if($element['type'] === 'hidden')
                        <div class="form-group">
                            <input type="{{ $element['type'] }}" class="{{ $element['class'] }}" name="{{ $element['name'] }}" value="{{ $element['value'] }}">
                        </div>
                    @endif

                    @if($element['type'] === 'text')
                        <div class="form-group">
                            <label for="{{ $element['id'] }}">{{ ucfirst( $element['id'] ) }}</label>
                            <input type="{{ $element['type'] }}"
                                   class="{{ $element['class'] }}"
                                   id="{{ $element['id'] }}"
                                   placeholder="@foreach($data as $key => $val)
                                                    @if($element['name'] == $key)
                                                        {{ $val }}
                                                    @endif
                                                @endforeach"
                                   name="{{ $element['name'] }}">
                        </div>
                    @endif
                @endforeach
            </div>
        </form>


</div>
@endsection
