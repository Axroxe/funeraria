<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Principal') }}
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
                        <h1>Bienvenido</h1>
                        <p>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>
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
