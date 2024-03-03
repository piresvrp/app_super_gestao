


@isset($fornecedores)

    @forelse($fornecedores as $fornecedor)
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ !empty($fornecedor['cnpj']) ? $fornecedor['cnpj'] : 'VAZIO' }}
        <hr>
    @empty
        Não existe fornecedores cadastrados
    @endforelse

@endisset

