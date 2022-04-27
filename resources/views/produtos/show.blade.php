@extends('layouts.bot')

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


                        <table id="listar" class="table table-dark table-striped">
                            <thead>
                                <div>
                                    <th>Código </th>
                                    <th>Produto</th>
                                    <th>Ações</th>

                                </div>
                            </thead>
                            <tbody>
                                @foreach ($produto as $produto)
                                <tr>
                                    <td>{{$produto->nome}} </td>
                                    <td>{{$produto->codigo}} </td>
                                    <td>
                                        <a href=""></a>
                                        <a href=""></a>
                                    </td>

                                </tr>

                                @endforeach
                            </tbody>




                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
