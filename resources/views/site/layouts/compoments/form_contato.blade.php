{{$slot}}

<form action="{{route("site.contato")}}" method="get">
    @csrf
    <input type="text" placeholder="Nome" class="{{$classe}}" name="nome">
    <br>
    <input type="text" placeholder="Telefone" class="{{$classe}}" name="telefone">
    <br>
    <input type="text" placeholder="E-mail" class="{{$classe}}" name="email" >
    <br>
    <select class="{{$classe}}" name="nome">
        <option value="1">Qual o motivo do contato?</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
        <option value="4">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
