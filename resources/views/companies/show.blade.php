<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Display a company info') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-100 px-4 py-4"><span class="font-semibold ml-4">ID: </span> {{ $company->id }}</div>
                <div class="text-gray-100 px-4 py-4"><span class="font-semibold ml-4">Name: </span> {{ $company->name }}</div>
                <div class="text-gray-100 px-4 py-4"><span class="font-semibold ml-4">Email: </span> {{ $company->email }}</div>
                <div class="text-gray-100 px-4 py-4"><span class="font-semibold ml-4">Website: </span> {{ $company->website }}</div>
                @if(count($company->employees))
                    <div class="text-gray-100 px-4 py-4"><span class="font-semibold ml-4">Employees: </span>
                        @foreach($company->employees as $employee)
                            {{ $employee->first_name . ' ' . $employee->last_name . (($loop->last) ? ' ' : ',')  }}
                        @endforeach
                    </div>
                @endif
                <div class="text-gray-100 px-4 py-4"><span class="font-semibold ml-4">Created At: </span> {{ $company->created_at->diffForHumans() }}</div>
                <div class="text-gray-100 px-4 py-4">
                    <a href="{{ route('companies.index') }}" class="bg-indigo-50 inline-flex items-center ml-4 px-2 py-2 rounded text-red-600">Back</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

