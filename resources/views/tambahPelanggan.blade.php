<x-admin-template>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tambah Pelanggan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="p-5 bg-white" action="{{ route('user-create') }}" method="POST">
                        @csrf
                        <div class="">
                            <label class="block text-sm text-gray-600" for="nama">Nama</label>
                            <input value="{{old('nama')}}" class="w-full text-gray-700 bg-gray-200 rounded" id="nama" name="nama" type="text" placeholder="Nama " >
                            @error('nama')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class=" block text-sm text-gray-600" for="nik">NIK</label>
                            <input value="{{old('nik')}}" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="nik" name="nik" type="text" placeholder="NIK">
                            @error('nik')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="alamat">Alamat</label>
                            <input value="{{old('alamat')}}" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="alamat" name="alamat" type="text" placeholder="Alamat">
                            @error('alamat')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="jk">Jenis Kelamin</label>
                            <select name="jk" id="jk">
                                <option {{(old('jk') == 0) ? "selected" : ""}} value="0">Perempuan</option>
                                <option {{(old('jk') == 1) ? "selected" : ""}} value="1">Laki Laki</option>
                            </select>
                            @error('jk')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="tgllhr">Tanggal Lahir</label>
                            <input value="{{old('tgllhr')}}" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="tgllhr"  name="tgllhr" type="date" placeholder="Tanggal Lahir">
                            @error('tgllhr')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="no_rekening">Rekening</label>
                            <input value="{{old('no_rekening')}}" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="no_rekening"  name="no_rekening" type="text" placeholder="No Rekening">
                            @error('no_rekening')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="telp">Telepon</label>
                            <input value="{{old('telp')}}" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="telp"  name="telp" type="text" placeholder="No Telepon">
                            @error('telp')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-template>
