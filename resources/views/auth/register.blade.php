<x-guest-layout>
  
    <form method="POST" action="{{ route('register') }}">
        @csrf
       
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            
         </div>
         <input value="" name="user_address" type="hidden" id="user_address" autocomplete="off">

         {{-- <div style="display: none;">
            <x-text-input id="address" class="block mt-1 w-full" type="address" name="address" :value="old('address')" required autocomplete="address" />
            <input value="" name="address" type="text" style="display: none;" id="address" /> 
        </div> --}}
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="referal_by" :value="__('Referral Code')" />
            <x-text-input id="referal_by" class="block mt-1 w-full" type="text" name="referal_by" :value="old('referal_by')" required autocomplete="referal_by" />
            <x-input-error :messages="$errors->get('referal_by')" class="mt-2" />
        </div>
        <div class="input-field">
            <!-- Left Input/Select Field -->
            <x-input-label for="left-input" :value="__('Select Option')" />
            <select id="left-input" 
                    name="team_position" 
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-300 focus:border-indigo-500"
                    required>
                <option value="" disabled selected>Select an option</option>
                <option value="1">Left</option>
                <option value="2">Right </option>
            </select>
            <x-input-error :messages="$errors->get('team_position')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<script>
    window.onload = function() {
        // Get the URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const referralCode = urlParams.get('ref'); // Get the value of the 'ref' parameter

        // If a referral code exists, set it as the value of the 'referal_by' input
        if (referralCode) {
            document.getElementById('referal_by').value = referralCode;
        }
    };
</script>

