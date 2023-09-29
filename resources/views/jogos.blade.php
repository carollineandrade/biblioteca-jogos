<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Biblioteca de Jogos - Academia Indiana') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="card-group">
                        <div class="card">
                          <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">
                          <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p>
                            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">
                          <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">
                          <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
                            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
