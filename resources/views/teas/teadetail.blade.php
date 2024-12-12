<x-layout>
    <h1>Tea Details</h1>
    <h2 class="text-3xl">{{ $tea['name']}}</h2>
    <p class="bg-red-500 p-2 my-2 rounded-full">Php {{ $tea['price']}}</p>
    <a class="bg-orange-500 p-2 m-4 rounded-xl" href="/teas">Go back -></a>
</x-layout>
