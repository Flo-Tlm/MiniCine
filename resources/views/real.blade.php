@extends('layouts.app')
@section('main')

<h1 class="text-2xl text-center  text-gray-600 font-bold m-5"> Liste des films du réalisateurs </h1>

    <table class="rounded-t-lg m-5 w-5/6 mx-auto  bg-gray-700 text-gray-200">
        <tr class="text-left border-b border-gray-300">
            <th class="px-4 py-3">Films</th>
            <th class="px-4 py-3">Affiche</th>
          
        </tr>

        @foreach ($films as $film)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3"> <a href="/films/{{ $film['id'] }}">{{ $film['titre'] }}</a></td>
               
               
                
            </tr>
        @endforeach
    </table>
@endsection
