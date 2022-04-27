<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <div id="search">
                            <h1>Busca de peças</h1>
                            <form action="{{route ('procurar_product')}}" method="GET">
                            <input type="text" id="search " name="search" placeholder="procure">
                            </form>


                        </div><br/>



                        <form action="{{route ('regis_product')}}" method="POST">
                            @csrf
                            <div>

                                <input type="text" placeholder="nome" name="nome" value="" />
                            </div>

                            <div>

                                <input type="text" placeholder="Código" name="codigo" value="" />

                            </div>

                            <div>
                                <input type="text" placeholder="Valor" name="valor" value="" />
                            </div>

                            <div>
                                <input type="number" placeholder="quantidade" name="quantidade" value="" />
                            </div>


                            <div>
                                <button>Salvar</button>
                            </div>




                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
