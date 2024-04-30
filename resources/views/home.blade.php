<x-layout>

    {{-- <x-slot:title> digunakan untuk mengirim variable ke sebuah component Header,
    karena nilai variable $titile tidak bisa langsung di tampilkan.
    <x-slot:namaVariable> namaVariable adalah variable di component penerima. --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Welcome to my homepage</p>
    </div>
</x-layout>
