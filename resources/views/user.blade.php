<x-admin-template>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight text-white">
            {{ __('Data User') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-3">
                <a href="{{ route('user-create')}}" class="bg-indigo-500 px-2 py-1 hover:bg-indigo-600 text-white rounded">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Pelanggan
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">NIK</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Jenis Kelamin</td>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Lahir</td>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Rekening</td>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Telepon</td>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">

                            @foreach ($pelanggan as $user) 
                                <tr>
                                    <td class="text-left py-3 px-4">{{$user->nama}}</td>
                                    <td class="text-left py-3 px-4">{{$user->nik}}</td>
                                    <td class="text-left py-3 px-4">{{$user->alamat}}</td>
                                    <td class="text-left py-3 px-4">
                                        @if ($user->jk == 1)
                                        Laki Laki
                                        @else
                                        Perempuan
                                        @endif
                                    </td>
                                    <td class="text-left py-3 px-4">{{$user->tgllhr}}</td>
                                    <td class="text-left py-3 px-4">{{$user->no_rekening}}</td>
                                    <td class="text-left py-3 px-4">{{$user->telp}}</td>
                                    <td class="text-center py-3 px-4">
                                        <form action="{{ route('user-delete', ['id'=>$user->id]) }}" method="POST" class="mb-2">
                                            @csrf
                                            @method('delete')
                                            <button class="bg-red-500 px-2 py-1 hover:bg-red-600 text-white rounded">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <div>
                                            <a href="{{ route('user-edit', ['id'=>$user->id]) }}" class="bg-yellow-500 px-2 py-1 hover:bg-yellow-600 text-white rounded">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                             @endforeach

                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</x-admin-template>
