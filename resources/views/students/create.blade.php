<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('registro.store') }}">
            @csrf
            <div class="mt-4">
                <x-jet-label for="enrollment" value="{{ __('Matricula') }}" />
                <x-jet-input id="enrollment" class="block mt-1 w-full" type="number" name="enrollment" required />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>
            <div class="mt-4">
                <x-jet-label for="career" value="{{ __('Carrera') }}" />
                <x-jet-input id="career" class="block mt-1 w-full" type="text" name="career" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="semester" value="{{ __('Semestre') }}" />
                <x-jet-input id="Semester" class="block mt-1 w-full" type="text" name="semester" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="number" value=" {{ __('Numero de telefono') }}" />
                <x-jet-input id="number" class="block mt-1 w-full" type="number" name="number" :value="old('email')"
                    required />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="flex flex-col">
                @foreach ($subject as row )
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" checked><span class="ml-2 text-gray-700">{{$row->name}}</span>
                </label>
@endforeach







            </div>


            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
