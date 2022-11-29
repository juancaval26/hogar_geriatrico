@if(@Auth::user()->hasRole('administrador'))
    <h1>admin</h1>
    @include('layouts.inicio')
@endif

@if(@Auth::user()->hasRole('enfermero'))
    <h1>enfer</h1>
    @include('layouts.inicio')
@endif


