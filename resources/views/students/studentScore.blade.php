<x-app-layout>
    <div class="p-4">
        <div class="w-full overflow-hidden rounded-lg">
            <div class="w-full overflow-x-auto font-semibold tracking-wide text-left bg-white rounded-md dark:bg-darker mt-4 mb-4">
                <div class="text-center mt-3">
                    <h1 class="text-4xl">¡Bienvenido {{ Auth::user()->name }}! </h1>
                    <p class="text-center font-italic">En esta sección se pueden ver las calificaciones de las materias.
                    <p class="small text-center"></p>
                    @role('Admin')
                    <div class="btn-group py-2">
                        <a href="{{route('Score.create')}}" class="bg-transparent hover:bg-green-400 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-400 hover:border-transparent rounded">
                            <i class="fas fa-plus mr-2"></i>
                            <span>Añadir calificación</span>
                        </a>
                    </div>@endrole
                </div>
                <div></div>
                <div class="w-full overflow-hidden tracking-wide text-left shadow-xs bg-white rounded-md dark:bg-darker mt-4 mb-4">
                    <div class="w-full overflow-x-auto">
                        <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white rounded-md dark:bg-darker mt-4 mb-4">
                            <table class="min-w-full">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Materia</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Parcial 1</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Parcial 2</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Parcial 3</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Parcial 4</th>
                                        @role('Admin')
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Acciones</th>@endrole
                                    </tr>
                                </thead>
                                <tbody class="bg-white rounded-md dark:bg-darker mt-4 mb-4 ">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm font-semibold">{{$subject->name}} </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm font-semibold">{{$score->parcial1}} </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm font-semibold"> {{$score->parcial2}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm font-semibold"> {{$score->parcial3}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm font-semibold"> {{$score->parcial4}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        @role('Admin')

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <a href="{{route('Score.edit', $score->id)}}" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Calificar</a>
                                                </div>
                                            </div>
                                        </td>
                                        @endrole


                                    </tr>
                                 </tbody>
                            </table>
                            {{-- --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>