<header class="bg-white flex justify-between items-center h-full px-6">
    <div class="flex items-center text-sky-900">
        <h2 class="text-2xl">Administrador Fabrica<span class="text-base"> - Pagina</span></h2>
    </div>
    <div class="">
        <div class="flex items-center gap-2.5">
            <div class="flex items-center gap-4 border-r border-amber-400 pr-4 self-stretch">
                <!-- <i class="fa-regular fa-calendar-days fa-lg hover:scale-110 transition-transform"></i> -->
                <x-icon name="calendar_clock" class="hover:scale-110 transition-transform cursor-pointer" />
                <div class="relative">
                    <!-- <i class="fa-regular fa-bell fa-lg hover:scale-110 transition-transform"></i> -->
                    <x-icon name="notifications" class="hover:scale-110 transition-transform cursor-pointer" />
                    <div
                        class="absolute -top-1 right-0 w-4 h-4 bg-red-600 rounded-full flex items-center justify-center border-2 border-white">
                        {{-- animacion de icono notificaciones --}}
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        {{-- end animacion --}}
                        <span class="text-[10px] text-white">1</span>
                    </div>
                </div>
            </div>
            <img src="{{ asset('images/user2.png') }}" alt="usuario" class="w-10">
            <div class="flex flex-col text-sky-900">
                <span class="font-semibold">Miguel</span>
                <span class="font-light text-xs">Administrador</span>
            </div>
            <i class="fa-solid fa-angle-down cursor-pointer hover:scale-110 transition-transform"></i>
        </div>
    </div>
</header>