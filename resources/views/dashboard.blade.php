<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div>

        </div>

        <div class="grid grid-cols-3 gap-4">
            <div>
                <!-- component -->

                <div class="flex flex-row bg-teal-100 rounded">
                    <div class="relative z-2 max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="relative text-teal-900 font-bold text-xl mb-2">Alumnos</div>
                            <p class="text-gray-700 text-base z-234 ">
                               En esta seccion podras registrar a los alumnos que accederan al SIE
                            </p>
                            <a href="{{route('registro.index')}}" class="text-teal-900 font-bold text-xl mt-2 mb-2">Ir</a>
                            <div class=" flex flex-wrap  justify-">

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div>
                <!-- component -->

                <div class="flex flex-row bg-teal-100 rounded">
                    <div class="relative z-2 max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="relative text-teal-900 font-bold text-xl mb-2">Materias</div>
                            <p class="text-gray-700 text-base z-234 ">
                                Aqui podras registrar las materias que se asignaran a los alumnos
                            </p>
                            <a href="{{route('subject.index')}}" class="text-teal-900 font-bold text-xl mt-2 mb-2">Ir</a>
                            <div class=" flex flex-wrap  justify-">

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div>
                <!-- component -->

                <div class="flex flex-row bg-teal-100 rounded">
                    <div class="relative z-2 max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="relative text-teal-900 font-bold text-xl mb-2">Calificaciones</div>
                            <p class="text-gray-700 text-base z-234 ">
                               Aqui podras asignarle calficacion a los alumnos en la respectiva materia
                            </p>
                            <a href="{{route('Score.index')}}" class="text-teal-900 font-bold text-xl mt-2 mb-2">Ir</a>
                            <div class=" flex flex-wrap  justify-">

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
