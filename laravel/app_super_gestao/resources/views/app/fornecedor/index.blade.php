<h3>Fornecedor</h3>


{{ 'Teste' }}
<?'Teste'?>

{{-- Comentario no blade--}}

@php

    //Bloco do codigo php no blade
    echo 'Texto teste';

@endphp

@isset($fornecedores2,$fornecedores)

    @if (count($fornecedores) > 0 && count($fornecedores) < 10)   
    <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
    @else
    <h3>Ainda nao existem fornecedores cadastrados</h3>
    @endif

    {{-- Inverso do if executa se o retorno e false--}}

    Fornecedor: {{ $fornecedores2[0]['nome'] }} <br>
    Status:     {{ $fornecedores2[0]['status'] }}<br>
    @isset($fornecedores2[0]['cnpj'])
        CNPJ:       {{ $fornecedores2[0]['cnpj'] }}
        @empty($fornecedores2[0]['cnpj'])
            -Vazio
        @endempty
    @endisset<br>

    CNPJ: {{$fornecedores[0]['cnpj'] ?? 'nao informado!'}}

    @unless($fornecedores2[0]['status'] == 'S')
    Fornecedor Inativo
    @endunless

@endisset

<br>

