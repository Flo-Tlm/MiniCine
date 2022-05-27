<style>
    body {
        background: white !important;
    }

</style>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div x-data="{ modelOpen: false }">
    <button @click="modelOpen =!modelOpen"
        class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-300 rounded-md dark:bg-red-500 dark:hover:bg-red-600 dark:focus:bg-red-600 hover:bg-red-500 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                clip-rule="evenodd" />
        </svg>

    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                <div class="flex items-center justify-between space-x-4">
                    <h1 class="text-xl font-medium text-gray-800 "></h1>

                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>



                <form action="/films" method="POST" enctype="multipart/form-data"
                    class="w-5/6 mx-auto border-2 border-gray-400 rounded-md p-16 flex flex-col sm:flex-row sm:justify-evenly">
                    @csrf
                    <div class>
                        @if ($errors->any())
                            @foreach ($errors->all() as $errors)
                                <div class="text-red-500 text-center">{{ $errors }}</div>
                            @endforeach
                        @endif
                        <h1 class="text-lg sm:text-4xl text-gray-800 font-semibold tracking-wide mb-10">Ajouter un film
                            !</h1>
                        <div class="p-2 border-[0.75px] border-gray-800 rounded">
                            <input required type="text" placeholder="Titre" name="titre"
                                class="placeholder:text-lg focus:outline-none p-1">
                        </div>
                        <div class="p-2 border-[0.75px] border-gray-800 rounded">
                            <textarea placeholder="Résumé" name="resume" class="placeholder:text-lg focus:outline-none p-1">
                             </textarea>
                        </div>

                        <div class="p-2 border-[0.75px] border-gray-800 rounded">
                            <input required type="text" placeholder="Durée" name="duree"
                                class="placeholder:text-lg focus:outline-none p-1">

                        </div>

                        <div class="p-2 border-[0.75px] border-gray-800 rounded">
                            <input required type="text" placeholder="Casting" name="casting"
                                class="placeholder:text-lg focus:outline-none p-1">

                        </div>

                      

                        <div class="w-full p-2">
                            <div class="relative">
                                <label for="realisateur" class="text-lg leading-7 text-gray-400">Réalisateur</label>
                                <div class="p-2 border-[0.75px] border-gray-800 rounded">
                                    <select id="realisateur" name="realisateurs"
                                        class="w-full px-1 py-2 text-base leading-8 text-gray-100 transition-colors duration-200 ease-in-out bg-gray-800 border border-gray-700 rounded outline-none bg-opacity-40 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900">
                                        @foreach ($realisateur as $realisateur)
                                            <option value="{{ $realisateur['id'] }}">{{ $realisateur['nom'] }}
                                                &zwnj;{{ $realisateur['prenom'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="w-full p-2">
                                <div class="relative">
                                    <label for="salle" class="text-lg leading-7 text-gray-400">Salle</label>
                                    <div class="p-2 border-[0.75px] border-gray-800 rounded">
                                        <select id="salle" name="salles"
                                            class="w-full px-1 py-2 text-base leading-8 text-gray-100 transition-colors duration-200 ease-in-out bg-gray-800 border border-gray-700 rounded outline-none bg-opacity-40 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900">
                                            @foreach ($salles as $salle)
                                                <option value="{{ $salle['id'] }}">{{ $salle['numéro'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="flex w-ful items-center justify-center bg-grey-lighter">
                                    <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Select a file</span>
                                        <input type="file" name="affiche" class="hidden" />
                                    </label>
                                </div>

                            <button type="submit"
                                class="w-full bg-red-300 hover:bg-red-500 text-white text-2xl p-2 rounded-xl mt-3">Créer</button>
                        </div>






                        
                        <!-- address End -->
</form>

                
