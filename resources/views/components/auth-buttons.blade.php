    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex flex-col items-center justify-end w-full h-full pt-2 md:w-full md:flex-row md:py-0">
        @auth
            <a href="{{ url('/dashboard') }}"
                class="w-full py-5 mr-0 text-center text-gray-200 md:py-3 md:w-auto hover:text-white md:pl-0 md:mr-3 lg:mr-5">Dashboard</a>
        @else
            <button @click="$store.authModal.login = true"
                class="w-full py-5 mr-0 text-center text-gray-200 md:py-3 md:w-auto hover:text-white md:pl-0 md:mr-3 lg:mr-5">Sign
                In</button>

            <button @click="$store.authModal.register = true"
                class="inline-flex items-center justify-center w-full px-4 py-3 md:py-1.5 font-medium leading-6 text-center whitespace-no-wrap transition duration-150 ease-in-out border border-transparent md:mr-1 text-gray-600 md:w-auto bg-white rounded-lg md:rounded-full hover:bg-white focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700">Sign
                Up</button>
        @endauth
    </div>
    <x-auth-modal modalFor="login" heading="Login To Your Account" excerpt="This is the login modal">
        <x-login-form />
    </x-auth-modal>
    <x-auth-modal modalFor="register" heading="Enter Your Email to Create An Account"
        excerpt="This is the register modal">
        <x-register-form />
    </x-auth-modal>
