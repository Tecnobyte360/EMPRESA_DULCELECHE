<header 
   class="sticky top-0 before:absolute before:inset-0 before:backdrop-blur-md before:bg-transparent
         before:-z-10 z-30
         {{ $variant === 'v2' || $variant === 'v3'
              ? 'after:absolute after:h-px after:inset-x-0 after:top-full after:bg-gray-200 dark:after:bg-gray-700/60 after:-z-10'
              : 'max-lg:shadow-xs' }}"
 class="sticky top-0 z-30 shadow-md rounded-b-3xl"
    style="background-color: {{ $empresaActual?->color_secundario }};"
>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 
                    {{ $variant === 'v2' || $variant === 'v3' 
                        ? '' 
                        : 'lg:border-b border-gray-200 dark:border-gray-700/60' }}">
            
            <!-- Header: Left side -->
           <div class="flex">
  <button
    class="relative z-50 p-2.5 rounded-2xl 
           bg-black/20 hover:bg-black/30 
           dark:bg-white/20 dark:hover:bg-white/30
           text-white dark:text-black
           mix-blend-difference
           backdrop-blur-lg
           shadow-[0_0_15px_rgba(255,255,255,0.6)]
           hover:shadow-[0_0_25px_rgba(255,255,255,0.9)]
           transition-all duration-300 transform hover:scale-110"
    @click.stop="sidebarOpen = !sidebarOpen"
    aria-controls="sidebar"
    :aria-expanded="sidebarOpen"
  >
    <span class="sr-only">Abrir menú</span>
    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
      <rect x="4" y="5" width="16" height="2" rx="1"/>
      <rect x="4" y="11" width="16" height="2" rx="1"/>
      <rect x="4" y="17" width="16" height="2" rx="1"/>
    </svg>
  </button>
</div>


            <!-- Header: Right side -->
            <div class="flex items-center space-x-3">
                <x-modal-search />
                <x-dropdown-notifications align="right" />
                <x-dropdown-help align="right" />
                <x-theme-toggle />
                <hr class="w-px h-6 bg-white/40 border-none" />
                <x-dropdown-profile align="right" />
            </div>
        </div>
    </div>
</header>
