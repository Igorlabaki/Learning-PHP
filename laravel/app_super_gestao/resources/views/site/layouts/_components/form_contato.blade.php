  
  {{$slot}}
  {{$nome}}
  <form action="{{route('site.contato')}}" method="post">
                        @csrf
                        <input type="text" placeholder="Nome" class="{{$classe}}" name="nome">
                        <br>
                        <input type="text" placeholder="Telefone" class="{{$classe}}" name="telefone">
                        <br>
                        <input type="text" placeholder="E-mail" class="{{$classe}}" name="email">
                        <br>
                        <select name="motivo_contato" class="{{$classe}}">
                            <option name="nome"value="" >Qual o motivo do contato?</option>
                            <option name="nome"value="1" >Dúvida</option>
                            <option name="nome"value="2" >Elogio</option>
                            <option name="nome"value="3" >Reclamação</option>
                        </select>
                        <br>
                        <textarea name="mensagem" class="{{$classe}}">Preencha aqui a sua mensagem</textarea>
                        <br>
                        <button type="submit" class="{{$classe}}">ENVIAR</button>
                    </form>