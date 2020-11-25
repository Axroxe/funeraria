<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Principal - Contacto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg content">
                <div class="md:grid md:grid-cols-3 md:gap-12">
                    <div class="md:col-span-1">
                        <div class="px-2 sm:px-0">
                            <div class="sidebar">
                                <nav class="sidebar-nav">
                                    <ul class="nav">
                                        <x-jet-label value="{{ __('Modulos') }}" />
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard/contacto"><i class="icon-speedometer"></i> Contacto</a>
                                        </li>
                                        <li class="nav-title">
                                            <a class="nav-link active" href="/dashboard/difunto"><i class="icon-speedometer"></i> Difunto</a>
                                        </li>
                                        <li class="nav-title">
                                            <a class="nav-link active" href="/dashboard/osario"><i class="icon-speedometer"></i> Osario</a>
                                        </li>
                                        <li class="nav-title">
                                            <a class="nav-link active" href="/dashboard/boveda"><i class="icon-speedometer"></i> Bóveda</a>
                                        </li>
                                        <li class="nav-title">
                                            <a class="nav-link active" href="/dashboard/usuarios"><i class="icon-speedometer"></i> Usuarios</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 md:mt-0 md:col-span-2">
                        <div class="button-new">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Crear
                            </button>
                        </div>

{{--                        <table id="example" class="table table-striped table-bordered" style="width:100%">--}}
{{--                            <thead class="thead-dark">--}}
{{--                            <tr>--}}
{{--                                <th scope="col">No</th>--}}
{{--                                <th scope="col">Nombre</th>--}}
{{--                                <th scope="col">Apellido</th>--}}
{{--                                <th scope="col">Documento</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach ($projects as $project)--}}
{{--                                <tr>--}}
{{--                                    <td scope="row">1</td>--}}
{{--                                    <td>Carlos</td>--}}
{{--                                    <td>Pérez</td>--}}
{{--                                    <td>123456789</td>--}}
{{--                                    <td>--}}
{{--                                        <form action="" method="POST">--}}

{{--                                            <a data-toggle="modal" id="smallButton" data-target="#smallModal"--}}
{{--                                               data-attr="1" title="show">--}}
{{--                                                <i class="fas fa-eye text-success  fa-lg"></i>--}}
{{--                                            </a>--}}

{{--                                            <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal"--}}
{{--                                               data-attr="1">--}}
{{--                                                <i class="fas fa-edit text-gray-300"></i>--}}
{{--                                            </a>--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}

{{--                                            <button type="submit" title="delete" style="border: none; background-color:transparent;">--}}
{{--                                                <i class="fas fa-trash fa-lg text-danger"></i>--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
                        <form>
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-12 gap-12">
                                        @csrf
                                        <div>
                                            <x-jet-label for="name" value="{{ __('Nombre') }}" />
                                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="name" />
                                        </div>

                                        <div class="mt-4">
                                            <x-jet-label for="last_name" value="{{ __('Apellido') }}" />
                                            <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="last_name" />
                                        </div>

                                        <div class="mt-4">
                                            <x-jet-label for="document" value="{{ __('Documento') }}" />
                                            <x-jet-input id="document" class="block mt-1 w-full" type="text" name="documento" :value="old('documento')" required autofocus autocomplete="document" />
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">

                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" wire:loading.attr="disabled" wire:target="photo">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<style>
    .md\:col-span-1{
        background: #7f867b;
        box-shadow: 0px 0px 5px 0px #7f867b;
    }
    ul {
        padding: 20px;
        color: white;
    }
    ul label {
        color: white !important;
        border-bottom: 1px solid #e2e8f0;
    }
    ul li {
        padding: 10px 10px 10px 0;
    }

    ul li a {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    h1 {
        text-align: center;
        font-size: 50px;
        font-weight: bold;
    }
    p{
        text-align: center;
    }
    .button-new {
        display: flex;
        justify-content: flex-end;
        padding: 20px 20px 0 20px;
    }
</style>
