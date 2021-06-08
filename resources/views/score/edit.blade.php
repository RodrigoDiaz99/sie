<x-app-layout>
    <div class="p-4">
        <div class="w-full overflow-hidden rounded-lg">
            <div class="w-full overflow-x-auto font-semibold tracking-wide text-left bg-white rounded-md dark:bg-darker mt-4 mb-4">
                <div class="text-center mt-3">
                    <h1 class="text-4xl">¡Bienvenido {{ Auth::user()->name }}! </h1>
                    <p class="text-center font-italic">En esta sección se hace la administración de los Alumnos.
                    <p class="small text-center"></p>
                </div>
                <div></div>
                <div class="w-full overflow-hidden tracking-wide text-left shadow-xs bg-white rounded-md dark:bg-darker mt-4 mb-4">
                    <div class="w-full overflow-x-auto">
                        <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white rounded-md dark:bg-darker mt-4 mb-4">
                            <table class="min-w-full">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Asignatura</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Parcial 1</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Parcial 2</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Parcial 3</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Parcial 4</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 uppercase dark:text-primary-light">
                                            Acciones</th>
                                    </tr>
                                </thead>

                                <form method="POST" action="{{route('Score.update', $score->id)}}" enctype="multipart/form-data">
                                    @method('PUT') @csrf
                                    <tbody class="bg-white rounded-md dark:bg-darker mt-4 mb-4 ">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                <div class="flex items-center">
                                                    <div>
                                                        <select disabled id="subject" name="subject" class="flex-1 appearance-none rounded shadow p-3 text-dark mr-2 focus:outline-none" required>
                                                            <option value="">Seleccione una materia</option>
                                                            @foreach($subject as $row)
                                                            <option value="{{$row->id}}" {{$score->id == $row->score_id ? 'selected' : '' }}> {{$row->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                <div class="flex items-center">
                                                    <div>
                                                        <input name="parcial1" id="parcial1" class="flex-1 appearance-none rounded shadow p-3 text-dark mr-2 focus:outline-none" required placeholder="Parcial 1" value="{{$score->parcial1}}"></input>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                <div class="flex items-center">
                                                    <div>
                                                        <input name="parcial2" id="parcial2" class="flex-1 appearance-none rounded shadow p-3 text-dark mr-2 focus:outline-none" required placeholder="Parcial 2" value="{{$score->parcial2}}"></input>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                <div class="flex items-center">
                                                    <div>
                                                        <input name="parcial3" id="parcial3" class="flex-1 appearance-none rounded shadow p-3 text-dark mr-2 focus:outline-none" required placeholder="Parcial 3" value="{{$score->parcial3}}"></input>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                <div class="flex items-center">
                                                    <div>
                                                        <input name="parcial4" id="parcial4" class="flex-1 appearance-none rounded shadow p-3 text-dark mr-2 focus:outline-none" required placeholder="Parcial 4" value="{{$score->parcial4}}"></input>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                <div class="btn-group-py">
                                                    <div class="inline-flex items-center">
                                                        <button type="submit" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Agregar calificaciones</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </form>
                            </table>
                            {{-- --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>