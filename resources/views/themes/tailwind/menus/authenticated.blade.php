<div class="flex sm:ml-6 sm:items-center">

    @if( auth()->user()->onTrial() )
    <div class="relative items-center justify-center hidden h-full md:flex">
        <span class="px-3 py-1 text-xs text-red-600 bg-red-100 border border-gray-200 rounded-md">You have
            {{ auth()->user()->daysLeftOnTrial() }} @if(auth()->user()->daysLeftOnTrial() >
            1){{ 'Days' }}@else{{ 'Day' }}@endif left on your Trial</span>
    </div>
    @endif

    {{--  @include('theme::partials.notifications') --}}

    <!-- Profile dropdown -->
    <div @click.away="open = false" class="relative flex items-center h-full ml-3" x-data="{ open: false }">
        <div class="mr-3">
            <p class="text-sm text-white">Thomas Brown</p>
            <p class="text-sm text-gray-400">Developer</p>
        </div>
        <div class="flex">
            <button @click="open = !open"
                class="flex text-sm"
                id="user-menu" aria-label="User menu" aria-haspopup="true" x-bind:aria-expanded="open"
                aria-expanded="true">
                <img class="w-8 h-8 transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:border-gray-300" src="{{ auth()->user()->avatar() . '?' . time() }}"
                    alt="{{ auth()->user()->name }}'s Avatar">
                    <span class="inline-block  align-middle my-auto ml-1">
                <svg class="text-gray-400" width="10" height="6" viewbox="0 0 10 6" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.08335 0.666657C8.75002 0.333323 8.25002 0.333323 7.91669 0.666657L5.00002 3.58332L2.08335 0.666657C1.75002 0.333323 1.25002 0.333323 0.916687 0.666657C0.583354 0.99999 0.583354 1.49999 0.916687 1.83332L4.41669 5.33332C4.58335 5.49999 4.75002 5.58332 5.00002 5.58332C5.25002 5.58332 5.41669 5.49999 5.58335 5.33332L9.08335 1.83332C9.41669 1.49999 9.41669 0.99999 9.08335 0.666657Z"
                        fill="currentColor"></path>
                </svg></span>
            </button>
            
        </div>

        <div x-show="open" x-transition:enter="duration-100 ease-out scale-95"
            x-transition:enter-start="opacity-50 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition duration-50 ease-in scale-100"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            class="absolute top-0 right-0 w-56 mt-20 origin-top-right transform rounded-xl" x-cloak>

            <div class="bg-white border border-gray-100 shadow-md rounded-xl" role="menu" aria-orientation="vertical"
                aria-labelledby="options-menu">
                <a href="{{ route('wave.profile', auth()->user()->username) }}"
                    class="block px-4 py-3 text-gray-700 hover:text-gray-800">

                    <span class="block text-sm font-medium leading-tight truncate">
                        {{ auth()->user()->name }}
                    </span>
                    <span class="text-xs leading-5 text-gray-600">
                        View Profile
                    </span>
                </a>
                @impersonating
                <a href="{{ route('impersonate.leave') }}"
                    class="block px-4 py-2 text-sm leading-5 text-gray-700 text-blue-900 border-t border-gray-100 bg-blue-50 hover:bg-blue-100 focus:outline-none focus:bg-blue-200">Leave
                    impersonation</a>
                @endImpersonating
                <div class="border-t border-gray-100"></div>
                <div class="py-1">

                    <div class="block px-4 py-1">
                        <span
                            class="inline-block px-2 my-1 -ml-1 text-xs font-medium leading-5 text-gray-600 bg-gray-200 rounded">{{ auth()->user()->role->display_name }}</span>
                    </div>
                    @trial
                    <a href="{{ route('wave.settings', 'plans') }}"
                        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">Upgrade
                        My Account</a>
                    @endtrial
                    @if( !auth()->guest() && auth()->user()->can('browse_admin') )
                    <a href="{{ route('voyager.dashboard') }}"
                        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"><i
                            class="fa fa-bolt"></i> Admin</a>
                    @endif
                    <a href="{{ route('wave.profile', auth()->user()->username) }}"
                        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">My
                        Profile</a>
                    <a href="{{ route('wave.settings') }}"
                        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">Settings</a>

                </div>
                <div class="border-t border-gray-100"></div>
                <div class="py-1">
                    <a href="{{ route('logout') }}"
                        class="block w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem">
                        Sign out
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>