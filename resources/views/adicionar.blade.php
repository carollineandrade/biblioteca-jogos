
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Adicione seu jogo abaixo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                        <form method="POST" name="cadastro" action="{{url('new')}}">
                            @csrf

                            <div class="form-group">
                                <label for="NomeJogo">Nome Jogo</label>
                                <input name="NomeJogo" type="text" class="form-control" id="NomeJogo" placeholder="Nome Jogo">
                            </div>



                          {{-- tela de cadastro --}}


                            <div class="form-group">
                                <select name="TipoJogo" id="TipoJogo">
                                    <option value="">Tipo Jogo</option>
                                    <option value="Jogo Console">Jogo Console</option>
                                    <option value="Jogo Computador">Jogo Computador</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="Sinopse">Sinopse</label>
                                <textarea name="sinopse" class="form-control" id="sinopse" rows="3"></textarea>

                            </div>

                            <div class="form-group">
                                <label for="imagem"></label>
                                <input name="imagem" type="file" class="form-control-file" id="imagem">
                            </div>

                            <div class="form-group">
                                <label for="sitejogo">Site Jogo</label>
                                <input name="sitejogo" type="text" class="form-control" id="sitejogo" placeholder="Site Oficial Jogo">
                            </div>

                            <div class="form-group">
                                <label for="videojogo">URL Youtube</label>
                                <input name="videojogo" type="text" class="form-control" id="videojogo" placeholder="URL Youtube">
                            </div>
                            <input type="hidden" name="id_user" value="{{ __(Auth::id()) }}">

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Adicionar</button>

                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
