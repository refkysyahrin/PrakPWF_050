<x-guest-layout>
    <div class="mb-4 text-center">
        <h2 class="text-2xl font-bold text-gray-100">Selamat Datang Kembali</h2>
        <p class="text-sm text-gray-400">Silakan login untuk mengakses dashboard</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-300" />
            <x-text-input id="email" class="block mt-1 w-full bg-[#161615] border-[#3E3E3A] text-white focus:border-[#f53003] focus:ring-[#f53003]" 
                            type="email" name="email" :value="old('email')" 
                            required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-300" />
            <x-text-input id="password" class="block mt-1 w-full bg-[#161615] border-[#3E3E3A] text-white focus:border-[#f53003] focus:ring-[#f53003]"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-[#3E3E3A] bg-[#161615] text-[#f53003] shadow-sm focus:ring-[#f53003]" name="remember">
                <span class="ms-2 text-sm text-gray-400">{{ __('Ingat saya') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-400 hover:text-[#f53003] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#f53003]" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif

            <button type="submit" class="ms-3 inline-flex items-center px-6 py-2 bg-[#f53003] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#d42902] focus:bg-[#d42902] active:bg-[#b32202] focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Log in') }}
            </button>
        </div>
        
        <div class="mt-6 text-center border-t border-[#3E3E3A] pt-4">
            <p class="text-sm text-gray-400">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-[#f53003] hover:underline font-bold">Daftar sekarang</a>
            </p>
        </div>
    </form>
</x-guest-layout>