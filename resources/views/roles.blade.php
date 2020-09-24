@extends ('layouts.app') 

@section ('title', 'Crear usuarios')

@section('contents')

<form>
      <h5>
          roles
       </h5>
            @foreach($roles as $item)
                 {{$item->nombre}}
            @endforeach
</form>
@endsection