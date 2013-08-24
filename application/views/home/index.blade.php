@layout('master')

@section('content')

    <h1>My Awersom url shortner</h1>
    {{Form::open('/')}}
		{{Form::text('url')}}
		{{Form::submit('Shorten')}}
    {{Form::close()}}

    {{ $errors->first('url', '<p class="error">:message</p>') }}
@endsection