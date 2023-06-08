@extends( 'layout.app' )

@section( 'content' )


<!-- 
@foreach( $cards as $elem )
    <h2>{{ $elem['title'] }}</h2>
@endforeach -->

    <div class="container d-flex flex-wrap ">
        <!-- <button class="sas">CURRENT SERIES</button> -->
        @foreach( $cards as $elem )
       <div class="blas mt-5"> <img class="img" src= "{{ $elem['thumb'] }}" alt=""> <br> <p>{{ $elem[ 'series' ] }} </p> </div>
       @endforeach 
       
    </div>

@endsection

