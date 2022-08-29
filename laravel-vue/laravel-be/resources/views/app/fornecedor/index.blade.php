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

@endphp

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns Fornecedores Cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem vários Fornecedores Cadastrados</h3>
@else
    <h3>Ainda não existem Fornecedores Cadastrados</h3>
@endif
