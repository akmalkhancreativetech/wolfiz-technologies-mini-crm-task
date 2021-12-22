<x-app-layout>
    <x-slot name="header">
        <div class="inline-flex items-center">
            <h2 class="float-left font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Companies') }}
            </h2>
            <a class="bg-indigo-50 font-bold hover:bg-grey inline-flex items-center ml-12 px-4 py-2 rounded text-grey-darkest"
               href="{{ route('companies.create') }}">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64"><g transform="translate(28 278)"><path fill="#134563" d="M4-222.1c-13.2,0-23.9-10.7-23.9-23.9c0-13.2,10.7-23.9,23.9-23.9s23.9,10.7,23.9,23.9     C27.9-232.8,17.2-222.1,4-222.1L4-222.1z M4-267.3c-11.7,0-21.3,9.6-21.3,21.3s9.6,21.3,21.3,21.3s21.3-9.6,21.3-21.3     S15.7-267.3,4-267.3L4-267.3z"/><polygon fill="#134563" points="-8.7 -247.4 16.7 -247.4 16.7 -244.6 -8.7 -244.6"/><polygon fill="#134563" points="2.6 -258.7 5.4 -258.7 5.4 -233.3 2.6 -233.3"/></g></svg>
                <span>Add Company</span>
            </a>
        </div>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if(count($companies))
                        <x-flash/>
                        <x-table>
                            <x-slot name="header">
                                <x-table-column>Id</x-table-column>
                                <x-table-column>Name</x-table-column>
                                <x-table-column>Email</x-table-column>
                                <x-table-column>Website</x-table-column>
                                <x-table-column>Actions</x-table-column>
                            </x-slot>
                            @foreach($companies as $company)
                                <tr>
                                    <x-table-column>{{ $company->id }}</x-table-column>
                                    <x-table-column><a href="{{ route('companies.show', $company) }}">{{ $company->name }}</a></x-table-column>
                                    <x-table-column>{{ $company->email }}</x-table-column>
                                    <x-table-column>{{ $company->website }}</x-table-column>
                                    <x-table-column>
                                        <form class="inline-flex items-center" action="{{ route('companies.destroy', $company) }}" method="POST">
                                            <a class="bg-indigo-50 hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center"
                                               href="{{ route('companies.show', $company) }}">
                                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="Layer 18"><path d="M28.374,14.9014v-.0005C26.5264,13.2021,21.6025,9.25,15.7847,9.25c-5.82,0-10.7427,3.9521-12.5889,5.6519a1.4934,1.4934,0,0,0,0,2.1962c1.8457,1.7,6.7681,5.6519,12.5884,5.6519,5.8178,0,10.7417-3.9521,12.5893-5.6514a1.4962,1.4962,0,0,0,0-2.1972Zm-.6777,1.4614c-1.7608,1.62-6.4453,5.3872-11.9116,5.3872-5.4678,0-10.1514-3.7676-11.9112-5.3872a.4946.4946,0,0,1,0-.7256c1.76-1.62,6.4439-5.3872,11.9117-5.3872,5.4663,0,10.1508,3.7671,11.9116,5.3872a.4951.4951,0,0,1,0,.7256Z"/><path d="M15.7847,11.5225A4.4775,4.4775,0,1,0,20.2627,16,4.4829,4.4829,0,0,0,15.7847,11.5225Zm0,7.955A3.4775,3.4775,0,1,1,19.2627,16,3.4815,3.4815,0,0,1,15.7847,19.4775Z"/></g></svg>
                                                <span>Show</span>
                                            </a>
                                            <a class="bg-indigo-50 ml-2 hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center"
                                               href="{{ route('companies.edit', $company) }}">
                                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#212121" d="M13.6568542,2.34314575 C14.4379028,3.12419433 14.4379028,4.39052429 13.6568542,5.17157288 L6.27039414,12.558033 C5.94999708,12.87843 5.54854738,13.105727 5.10896625,13.2156223 L2.81796695,13.7883721 C2.45177672,13.8799197 2.12008033,13.5482233 2.21162789,13.182033 L2.78437771,10.8910338 C2.894273,10.4514526 3.12156995,10.0500029 3.44196701,9.72960586 L10.8284271,2.34314575 C11.6094757,1.56209717 12.8758057,1.56209717 13.6568542,2.34314575 Z M10.1212441,4.46435931 L4.14907379,10.4367126 C3.95683556,10.6289509 3.82045738,10.8698207 3.75452021,11.1335694 L3.38388341,12.6161166 L4.86643062,12.2454798 C5.1301793,12.1795426 5.37104912,12.0431644 5.56328736,11.8509262 L11.5352441,5.87835931 L10.1212441,4.46435931 Z M11.5355339,3.05025253 L10.8282441,3.75735931 L12.2422441,5.17135931 L12.9497475,4.46446609 C13.3402718,4.0739418 13.3402718,3.44077682 12.9497475,3.05025253 C12.5592232,2.65972824 11.9260582,2.65972824 11.5355339,3.05025253 Z"/></svg>
                                                <span>Edit</span>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-indigo-50 ml-2 hover:bg-red text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center">
                                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M19.795 27H9.205a2.99 2.99 0 0 1-2.985-2.702L4.505 7.099A.998.998 0 0 1 5.5 6h18a1 1 0 0 1 .995 1.099L22.78 24.297A2.991 2.991 0 0 1 19.795 27zM6.604 8L8.21 24.099a.998.998 0 0 0 .995.901h10.59a.998.998 0 0 0 .995-.901L22.396 8H6.604z"/><path d="M26 8H3a1 1 0 110-2h23a1 1 0 110 2zM14.5 23a1 1 0 01-1-1V11a1 1 0 112 0v11a1 1 0 01-1 1zM10.999 23a1 1 0 01-.995-.91l-1-11a1 1 0 01.905-1.086 1.003 1.003 0 011.087.906l1 11a1 1 0 01-.997 1.09zM18.001 23a1 1 0 01-.997-1.09l1-11c.051-.55.531-.946 1.087-.906a1 1 0 01.905 1.086l-1 11a1 1 0 01-.995.91z"/><path d="M19 8h-9a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h9a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zm-8-2h7V4h-7v2z"/></svg>
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                    </x-table-column>
                                </tr>
                            @endforeach
                        </x-table>
                        <div class="px-4 py-4">
                            {{ $companies->links() }}
                        </div>
                    @else
                        <p class="p-6 text-center">No Company to show yet</p>
                    @endif
                </div>
            </div>
        </div>
</x-app-layout>
