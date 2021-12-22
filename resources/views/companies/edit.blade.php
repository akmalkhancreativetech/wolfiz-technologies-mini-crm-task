<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a company') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('companies.update', $company) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-label for="name" :value="__('Name')"/>
                        <x-input id="name" type="text" class="block mt-1 w-full" name="name" :value="$company->name" required autofocus/>
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')"/>
                        <x-input id="email" type="email" class="block mt-1 w-full" name="email" :value="$company->email" required autofocus/>
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <x-label for="website" :value="__('Website')"/>
                        <x-input id="website" type="url" class="block mt-1 w-full" name="website" :value="$company->website" autofocus/>
                    </div>
                    <div class="mt-4">
                        <x-button class="ml-4">{{ __('Update') }}</x-button>
                        <a href="{{ route('companies.index') }}" class="inline-flex ml-4 items-center text-red-600">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

