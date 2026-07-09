<nav class="mt-4">
    <ul class="flex flex-col gap-2">
        <li class="px-2">
            <a href="#"
                class="flex justify-between items-center py-2 px-2 rounded-md hover:bg-green-300 transition-all duration-200">
                <div class="flex items-center gap-2">
                    <x-icon name="dashboard" class="text-gray-600" />
                    Dashboard
                </div>
            </a>
        </li>
        <li class="px-2">
            <a href="#"
                class="flex justify-between items-center py-2 px-2 rounded-md hover:bg-green-300 transition-all duration-200">
                <div class="flex items-center gap-2">
                    <x-icon name="group" class="text-gray-600" />
                    Personal
                </div>
                <!-- <span class="material-symbols-outlined">keyboard_arrow_down</span> -->
            </a>
        </li>
        <!-- #################### PRODUCCION MUEBLES/SALAS #################### -->
        <li class="px-2 flex flex-col gap-2" x-data="{ open: false }">
            <a href="#" @click.prevent="open = !open"
                class="flex justify-between items-center py-2 px-2 rounded-md hover:bg-green-300 transition-all duration-200">
                <div class="flex items-center gap-2">
                    <x-icon name="factory" class="text-gray-600" />
                    Salas
                </div>
                <span class="inline-flex">
                    <x-icon name="keyboard_arrow_down" class="text-gray-600" x-show="!open" />
                    <x-icon name="keyboard_arrow_up" class="text-gray-600" x-show="open" />
                </span>
            </a>
            <ul class="flex flex-col gap-2" name="sub-salas" x-show="open"
                x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <li class="ml-6">
                    <a href="#" class="flex items-center gap-2 rounded px-4 py-1.5 hover:bg-sky-200">
                        Areas
                    </a>
                </li>
                <li class="ml-6">
                    <a href="#" class="flex items-center gap-2 rounded px-4 py-1.5 hover:bg-sky-200">
                        Productos
                    </a>
                </li>
                <li class="ml-6">
                    <a href="#" class="flex items-center gap-2 rounded px-4 py-1.5 hover:bg-sky-200">
                        Reportes
                    </a>
                </li>
            </ul>
        </li>
        <!-- #################### END PRODUCCION MUEBLES/SALAS #################### -->
        <li class="px-2">
            <a href="#"
                class="flex justify-between items-center py-2 px-2 rounded-md hover:bg-green-300 transition-all duration-200">
                <div class="flex items-center gap-2">
                    <x-icon name="calendar_month" class="text-gray-600" />
                    Vacaciones
                </div>
                <x-icon name="keyboard_arrow_down" class="text-gray-600" />
            </a>
        </li>

    </ul>
</nav>