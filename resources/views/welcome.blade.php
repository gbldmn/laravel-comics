@extends( 'layout.app' )

@section( 'content' )

<h1> boolean </h1>

@foreach( $cards as $elem )
    <h2>{{ $elem['title'] }}</h2>
@endforeach

@endsection