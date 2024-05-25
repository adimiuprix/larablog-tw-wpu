<x-layout>

    {{-- <x-slot:title> digunakan untuk mengirim variable ke sebuah component Header,
    karena nilai variable $title tidak bisa langsung di tampilkan.
    <x-slot:namaVariable> namaVariable adalah variable di component penerima. --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    <h3 class="text-xl-3">Ini adalah Homepage</h3>
    <p>Welcome to my homepage</p>
</x-layout>
