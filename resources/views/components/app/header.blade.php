<header
  class="relative sticky top-0 z-40 rounded-b-3xl shadow-lg
         before:absolute before:inset-0 before:backdrop-blur-md before:bg-black/5 dark:before:bg-white/5 before:pointer-events-none"
  style="background-color: {{ $empresaActual?->color_secundario }};"
>
  <!-- Línea inferior solo para variantes v2/v3 -->
  @if ($variant === 'v2' || $variant === 'v3')
    <span class="pointer-events-none absolute inset-x-0 top-full h-px bg-gray-200 dark:bg-gray-700/60"></span>
  @endif

  <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 lg:h-20 items-center justify-between
                {{ ($variant === 'v2' || $variant === 'v3') ? '' : 'border-b border-white/20 dark:border-black/20' }}">

      <!-- Izquierda: botón hamburguesa -->
      <div class="flex items-center">
        <button
          class="lg:hidden p-2.5 rounded-xl bg-gray-200 text-gray-700
                 hover:bg-gray-300 hover:text-gray-900
                 shadow-md hover:shadow-lg
                 transition-all duration-300 transform hover:scale-110
                 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/70 focus-visible:ring-offset-2 focus-visible:ring-offset-black/10"
          @click.stop="sidebarOpen = !sidebarOpen"
          aria-controls="sidebar"
          :aria-expanded="sidebarOpen"
        >
          <span class="sr-only">Abrir menú</span>
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" aria-hidden="true">
            <rect x="4" y="5" width="16" height="2" rx="1" />
            <rect x="4" y="11" width="16" height="2" rx="1" />
            <rect x="4" y="17" width="16" height="2" rx="1" />
          </svg>
        </button>
      </div>

      <!-- Derecha: acciones -->
      <div class="flex items-center gap-2 sm:gap-3">
        <x-modal-search />
        <x-dropdown-notifications align="right" />
        <x-dropdown-help align="right" />
        <x-theme-toggle />

        <!-- Separador -->
        <span class="hidden sm:block h-6 w-px bg-white/40 dark:bg-black/30"></span>

        <x-dropdown-profile align="right" />
      </div>
    </div>
  </div>
</header>
