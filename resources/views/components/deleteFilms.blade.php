<form action="/delete/{{ $film->id }}" method="POST">
    @csrf
    @method('delete')



    <button class="min-w-auto w-20
    h-14 bg-red-300 p-2 rounded-full hover:bg-red-500 text-white font-semibold transition-rotation duration-300 hover:-rotate-45 ease-in-out">Delete<button>
        
</form>