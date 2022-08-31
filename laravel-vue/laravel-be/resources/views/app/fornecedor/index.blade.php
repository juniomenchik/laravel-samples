<h3>Fornecedor</h3>

{{-- Aqui fica o comentário que é descartado no interpretador
    do Blade--}}

{{ 'Texto de teste'}}
<?= 'Texto de teste'?>

@php
        // Comentarios de uma linha
        /*
            Comentarios de Várias Linhas
        */
        echo 'Texto de teste';

        /*
        if(!<>)
        */

@endphp
{{--
    Para Mostrar um Array no browser
        @dd($fornecedores)
--}}

@isset($fornecedores)

<h3>
    Fornecedor: {{ $fornecedores[0]['nome']}} <br>
    Status: {{ $fornecedores[0]['status']}} <br>
    @if ( !($fornecedores[0]['status']=='S') )
    Fornecedor esta inativo
    @endif
    <br>
    @unless($fornecedores[0]['status']=='S')
    Fornecedor esta inativo
    @endunless
    <br>
    @isset($fornecedores[0]['cnpj'])
    CNPJ = {{$fornecedores[0]['cnpj']}}
        @empty($fornecedores[0]['cnpj'])
        - Vazio
        @endempty

    @endisset

</h3>


<h1>
        {{--
    "?? " definir valor padrao.
--}}
    CNPJ: {{$fornecedores[0]['cnpj'] ?? 'No have cnpj'}}

</h1>



@endisset
