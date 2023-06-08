<aside id="default-sidebar"
       class="fixed top-20 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
       aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{route('home')}}"
                   class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('home') ? 'active' : ''}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="ml-3">Home</span>
                </a>
            </li>
            @if(auth()->user()->role_id == 5 )
                <li>
                    <a href="{{route('profile')}}"
                       class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('profile') ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                    </a>
                </li>
            @endif
            @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 3 || auth()->user()->role_id == 4 || auth()->user()->role_id == 6 || auth()->user()->role_id == 7)
                <li>
                    <a href="{{route('favorites')}}"
                       class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('favorites') ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Favorites</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('basket')}}"
                       class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('basket') ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Basket</span>
                        @if(session('cart'))
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">{{count(session('cart'))}}</span>

                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{route('profile')}}"
                       class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('profile') ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                    </a>
                </li>
                @if(auth()->user()->role_id == 4 || auth()->user()->role_id == 6 || auth()->user()->role_id == 7)
                    <li>
                        <a href="{{route('admin.categories')}}"
                           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('admin.categories') ? 'active' : ''}}">
                            <svg aria-hidden="true"
                                 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                <path
                                    d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.menu')}}"
                           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('admin.menu') ? 'active' : ''}}">
                            <svg aria-hidden="true"
                                 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.orders')}}"
                           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('admin.orders') ? 'active' : ''}}">
                            <svg aria-hidden="true"
                                 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.feedback')}}"
                           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('admin.feedback') ? 'active' : ''}}">
                            <svg aria-hidden="true"
                                 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Feedbacks</span>
                        </a>
                    </li>
                @endif
                @if(auth()->user()->role_id == 6 || auth()->user()->role_id == 7)
                    <li>
                        <a href="{{route('admin.users')}}"
                           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{Route::currentRouteNamed('admin.users') ? 'active' : ''}}">
                            <svg aria-hidden="true"
                                 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                        </a>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</aside>
