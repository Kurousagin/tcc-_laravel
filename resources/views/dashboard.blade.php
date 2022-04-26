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


                    <main>
                        <div class="container-fluid text-center  ">

                            <div class="container coll">
                                <h1 class="marg">Mural</h1>

                                <div class="row boj " >

                                    <div class="col-lg-6">
                                        <h1 class="">Informações importantes</h1>
                                        <p>Sempre logue com sua conta, não use a de outro funcionário.</p>

                                        <p>Caso não esteja cadastrado ainda, pedir para que um responsavel o cadastre no sistema.</p>
                                        <p>Página de vendas é somente para máquinas a venda. </p>
                                        <p>Página de produtos engloba todo o estoque, menos as máquinas. Não misturar com a página de vendas !!. </p>


                                    </div>

                                    <div class="col-lg-6">
                                        <h1 class="">Testes</h1>
                                        <p>O programa está na versão beta ainda, por isso, caso haja alguma inconsistência, contate o suporte</br>
                                    (11)947942365</p>

                                    </div>



                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
