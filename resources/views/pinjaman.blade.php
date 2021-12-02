<x-admin-template>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Pinjaman') }}
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
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Pinjaman</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Pengembalian</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Jumlah Pengembalian</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Verifikasi</td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Kabur</td>
                                    <td class="text-left py-3 px-4">12-10-2021</td>
                                    <td class="text-left py-3 px-4">12-01-2022</td>
                                    <td class="text-left py-3 px-4">Rp.2.000.000</td>
                                    <td class="text-left py-3 px-4">Belum Lunas</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 text-left py-3 px-4">Kabur</td>
                                    <td class="text-left py-3 px-4">12-10-2021</td>
                                    <td class="text-left py-3 px-4">12-01-2022</td>
                                    <td class="text-left py-3 px-4">Rp.2.000.000</td>
                                    <td class="text-left py-3 px-4">Belum Lunas</td>
                                </tr>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Kabur</td>
                                    <td class="text-left py-3 px-4">12-10-2021</td>
                                    <td class="text-left py-3 px-4">12-01-2022</td>
                                    <td class="text-left py-3 px-4">Rp.2.000.000</td>
                                    <td class="text-left py-3 px-4">Belum Lunas</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 text-left py-3 px-4">Kabur</td>
                                    <td class="text-left py-3 px-4">12-10-2021</td>
                                    <td class="text-left py-3 px-4">12-01-2022</td>
                                    <td class="text-left py-3 px-4">Rp.2.000.000</td>
                                    <td class="text-left py-3 px-4">Belum Lunas</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-template>
