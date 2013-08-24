@layout('master')

@section('content')
	<h1>Here is our short url!</h1>
    {{ HTML::link($shortened, "url.dev/$shortened") }}


    
@endsection