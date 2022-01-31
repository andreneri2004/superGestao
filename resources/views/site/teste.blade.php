<h3>Teste</h3>

<span>Valor do retorno é {{ $dados }}</span>
<ul>
    @foreach ($nomes as $nome)
    <li>{{$nome}}</li>
    @endforeach
    
</ul>