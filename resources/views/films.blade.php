@extends('layouts.app')



@section('main')
    <table class="rounded-t-lg m-5 w-5/6 mx-auto  bg-gray-700 text-gray-200">
        <tr class="text-left border-b border-gray-300">
            <th class="px-4 py-3">Salle</th>
            <th class="px-4 py-3">Affiche</th>
            <th class="px-4 py-3">Titre</th>
            <th class="px-4 py-3">Durée</th>
            <th class="px-4 py-3">Réalisateur</th>
            <th class="px-4 py-3">Actions</th>
      

        </tr>
       
        @foreach ($films as $film)
        <tr class="bg-gray-700 border-b border-gray-600">
            <td class="px-4 py-3"> <a href="/film/{{ $film['salle_id'] }}">{{ $film->salle->numéro }}</a></td>
            <td class="px-4 py-3"> <a href="/livre/{{ $film['id'] }}">{{ $film['Affiche'] }}</a></td>
            <td class="px-4 py-3"> <a href="/film/{{ $film['id'] }}">{{ $film['titre'] }}</a></td>
            <td class="px-4 py-3"> {{ $film['duree'] }}</td>
            <td class="px-4 py-3"> <a href="/realisateur/{{ $film['real_id'] }}">{{ $film->realisateur->nom }} &zwnj; {{ $film->realisateur->prenom }}</a></td>
            <td class="px-4 py-3"> <a href="/update/{{$film->id}}"> <button class="min-w-auto w-18
                 h-14 bg-green-300 p-2 rounded-full hover:bg-green-500 text-white font-semibold transition-rotation duration-300 hover:-rotate-45 ease-in-out">
                Update
              </button> 
              {{-- &zwnj; @include('components.deleteFilm')</a></td> --}}
            </td>
        </tr>
    @endforeach
        
    </table>
    @include('components.addFilms')
@endsection
