<!-- NAVIGASI -->
<nav class="fixed top-0 w-full z-20 bg-gradient-to-r from-teal-600 to-cyan-300 shadow-md" x-data="{ open: false }">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button
              type="button"
              class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
              aria-controls="mobile-menu"
              aria-expanded="false"
              x-on:click="open = ! open"
            >
              <span class="sr-only">Open main menu</span>
              <!--
                Icon when menu is closed.
    
                Menu open: "hidden", Menu closed: "block"
              -->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!--
                Icon when menu is open.
    
                Menu open: "block", Menu closed: "hidden"
              -->
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
              <h1 class="font-bold text-white text-lg">KaryawanApp</h1>
            </div>
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4">
                <!-- NAVBAR OPTION -->
                <a href="/home" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-80 rounded-md px-3 py-2 text-sm font-medium ">Dashboard</a>
                <a href="/koleksi" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-80 rounded-md px-3 py-2 text-sm font-medium ">Koleksi</a>
                <a href="/unggah" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-80 rounded-md px-3 py-2 text-sm font-medium ">Unggah</a>
                <a href="/bantuan" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-80 rounded-md px-3 py-2 text-sm font-medium ">Bantuan</a>
              </div>
            </div>
          </div>

          <!-- SEARCH -->
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <div x-data="{ open: false}" >
              <button type="button" class="rounded-full bg-white p-1 text-teal-500 hover:bg-cyan-500 hover:text-white mr-4" x-on:click="open = ! open">
                <span class="sr-only">Search</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>              
              </button>
              
              <div 
                class="absolute right-0 z-10 mt-2 w-1/3 origin-top-right rounded-full bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="search-menu-button"
                tabindex="-1"
                x-show="open"
                x-on:click.outside="open = false"
                x-transition.scale.origin.right
                >
                <form class="w-full max-w-md mx-auto">
                  <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email sign-up</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                      </svg>
                    </div>
                    <input
                      type="search"
                      id="default-search"
                      class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500"
                      placeholder="Search material, e-book, journal..."
                      onkeypress=""
                    />
                    <button type="submit" class="text-white absolute right-2.5 bottom-2 bg-teal-600 hover:bg-white hover:text-teal-500 hover:border hover:border-teal-500 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                  </div>
                </form>
              </div>
            </div>


            <!-- NOTIFIKASI -->
            <button type="button" class="rounded-full bg-white p-1 text-teal-500 hover:bg-cyan-500 hover:text-white">
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
                />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3" x-data="{ open: false}">
              <div>
                <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true" x-on:click="open = ! open">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </button>
              </div>

            
              <div
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="user-menu-button"
                tabindex="-1"
                x-show="open"
                x-on:click.outside="open = false"
                x-transition.scale.origin.right
              >
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="sm:hidden" id="mobile-menu" x-show="open">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="/home" class="text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
          <a href="/koleksi" class="text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 block rounded-md px-3 py-2 text-base font-medium">Koleksi</a>
          <a href="/unggah" class="text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 block rounded-md px-3 py-2 text-base font-medium">Unggah</a>
          <a href="/bantuan" class="text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 block rounded-md px-3 py-2 text-base font-medium">Bantuan</a>
        </div>
      </div>
    </nav>

    <div class="h-10 w-full"></div>

    