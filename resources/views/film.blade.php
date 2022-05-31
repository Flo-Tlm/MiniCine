@extends('layouts.app')



@section('main') 




<h1 class="text-2xl text-center  text-gray-600 font-bold m-5"> Résumé du film</h1>

    <table class="rounded-t-lg m-5 w-5/6 mx-auto  bg-gray-700 text-gray-200">
        <tr class="text-left border-b border-gray-300">
            <th class="px-4 py-3">Affiche</th>
            <th class="px-4 py-3">Titres</th>
            <th class="px-4 py-3">Extrait</th>
        
        </tr>
        <tr class="text-left border-b border-gray-300">
       <td class="px-4 py-3"> <img src="{{ asset('storage/' . $films->affiche)}} " alt="" width="150px"></td>
        <td class="px-4 py-3">{{ $films->titre }}</td>
        <td class="px-4 py-3">{{ $films->resume }}</td>
        </tr>
    
    </table>
@endsection




















   

