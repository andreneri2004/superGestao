<h3>{{$titulo}}</h3>




@foreach ($fornecedores as $key => $fornecedor)
    {{ $loop->iteration }} - {{$fornecedor['nome']}} <br>
    @if ($loop->last)
        Total de Registro: {{ $loop->count }}
    @endif
@endforeach