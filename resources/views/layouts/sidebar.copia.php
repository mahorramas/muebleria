<nav class="mt-4">
    <ul class="flex flex-col gap-2">
        <li class="px-2">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                class="flex justify-between items-center py-2 px-2 rounded-md hover:bg-slate-200 transition-all duration-200">
                <div class="flex items-center gap-2">
                    <x-icon name="dashboard" class="text-gray-600" />
                    {{ __('Dashboard') }}
                </div>
            </x-nav-link>
        </li>
        <li class="px-2">
            <x-nav-link :href="route('reportes')" :active="request()->routeIs('reportes')"
                class="flex justify-between items-center py-2 px-2 rounded-md hover:bg-slate-200 transition-all duration-200">
                <div class="flex items-center gap-2">
                    <x-icon name="group" class="text-gray-600" />
                    {{__('Reportes')}}
                </div>
            </x-nav-link>
        </li>
        <!-- UTILIZANDO COMPONENTE NAV-LINK -->
        <li class="px-2">
            <x-nav-link :href="route('personal')" :active="request()->routeIs('personal')"
                class="flex justify-between items-center py-2 px-2 rounded-md hover:bg-slate-200 transition-all duration-200">
                <div class="flex items-center gap-2">
                    <x-icon name="group" class="text-gray-600" />
                    {{__('Personal')}}
                </div>
            </x-nav-link>
        </li>
        <!-- UTILIZANDO COMPONENTE NAV-LINK -->

        <!-- #################### PRODUCCION MUEBLES/SALAS #################### -->
        @php
            $salasOpen = request()->routeIs('salas.*');
        @endphp
        <li class="px-2 flex flex-col gap-2" x-data="{ open: @js($salasOpen) }" x-cloak>
            <x-nav-link href="{{ route('salas.index') }}" @click.prevent="open = !open"
                :active="request()->routeIs('salas.index')" class="flex justify-between items-center py-2 px-2 rounded-md hover:bg-slate-200 transition-all
                duration-200" x-cloak>
                <div class="flex items-center gap-2">
                    <x-icon name="factory" class="text-gray-600" />
                    Salas
                </div>
                <span class="inline-flex">
                    <x-icon name="keyboard_arrow_down" class="text-gray-600" x-show="!open" />
                    <x-icon name="keyboard_arrow_up" class="text-gray-600" x-show="open" />
                </span>
            </x-nav-link>
            <ul class="flex flex-col gap-2" x-show="open" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90" x-cloak>
                <li class="ml-6" x-cloak>
                    <x-nav-link href="{{ route('salas.areas') }}" :active="request()->routeIs('salas.areas')"
                        class="flex items-center gap-2 rounded px-4 py-1.5 hover:bg-slate-200">
                        Areas
                    </x-nav-link>
                </li>
                <li class="ml-6">
                    <a href="#" class="flex items-center gap-2 rounded px-4 py-1.5 hover:bg-slate-200">
                        Productos
                    </a>
                </li>
                <li class="ml-6">
                    <a href="#" class="flex items-center gap-2 rounded px-4 py-1.5 hover:bg-slate-200">
                        Reportes
                    </a>
                </li>
            </ul>
        </li>

        <!-- #################### END PRODUCCION MUEBLES/SALAS #################### -->
        <li class="px-2">
            <a href="#"
                class="flex justify-between items-center py-2 px-2 rounded-md hover:bg-slate-200 transition-all duration-200">
                <div class="flex items-center gap-2">
                    <x-icon name="calendar_month" class="text-gray-600" />
                    Vacaciones
                </div>
                <x-icon name="keyboard_arrow_down" class="text-gray-600" />
            </a>
        </li>

    </ul>
</nav>