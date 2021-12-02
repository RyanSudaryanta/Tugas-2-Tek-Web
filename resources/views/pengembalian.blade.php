<x-admin-template>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Pengembalian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Peminjaman</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Pengembalian</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Bunga Pinjaman</td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Dobleh</td>
                                    <td class="w-1/3 text-left py-3 px-4">1234567890123456</td>
                                    <td class="text-left py-3 px-4">08-02-2021</td>
                                    <td class="text-left py-3 px-4">3%</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 text-left py-3 px-4">Dobleh</td>
                                    <td class="w-1/3 text-left py-3 px-4">1234567890123456</td>
                                    <td class="text-left py-3 px-4">08-02-2021</td>
                                    <td class="text-left py-3 px-4">3%</td> 
                                </tr>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Dobleh</td>
                                    <td class="w-1/3 text-left py-3 px-4">1234567890123456</td>
                                    <td class="text-left py-3 px-4">08-02-2021</td>
                                    <td class="text-left py-3 px-4">3%</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 text-left py-3 px-4">Dobleh</td>
                                    <td class="w-1/3 text-left py-3 px-4">1234567890123456</td>
                                    <td class="text-left py-3 px-4">08-02-2021</td>
                                    <td class="text-left py-3 px-4">3%</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-template>