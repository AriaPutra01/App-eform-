<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eform - bank bjb</title>

    {{-- icon --}}
    <link rel="icon" href="{{ asset('build/image/logobjb.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-app-layout>

        <main>

            <x-slot name="header">
                <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Buat Data Pemohon') }}
                </h2>
            </x-slot>
            <form action="{{ route('adminEmail.dataEmail.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12" style="padding-bottom: 3rem">
                    <x-card>

                        <h2 class="text-base font-semibold leading-7 text-gray-900">Data Pemohon</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Data pribadi pemohon</p>
                        <fieldset style="margin-top: 2rem;">
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Jenis
                                Permohonan
                            </legend>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="pendaftaran" name="pendaftaran" type="radio" value="Pendaftaran"
                                        {{ old('initiateConnection') == 'Pendaftaran' ? 'checked' : '' }}
                                        class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                    <label for="pendaftaran"
                                        class="block text-sm font-medium leading-6 text-gray-900">Pendafaran</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="pengaktifan" name="pendaftaran" type="radio" value="Pengaktifan"
                                        {{ old('initiateConnection') == 'Pengaktifan' ? 'checked' : '' }}
                                        class="@error('initiateConnection') is-invalid @enderror h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                    <label for="pengaktifan"
                                        class="block text-sm font-medium leading-6 text-gray-900">Pengaktifan</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="pendafatran" name="pendaftaran" type="radio" value="Penghapusan"
                                        {{ old('initiateConnection') == 'Penghapusan' ? 'checked' : '' }}
                                        class="@error('initiateConnection') is-invalid @enderror h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                    <label for="penghapusan"
                                        class="block text-sm font-medium leading-6 text-gray-900">Penghapusan</label>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('initiateConnection')" class="mt-2" />
                        </fieldset>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <x-input-label for="nama" :value="'Nama Lengkap'" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama"
                                    :value="old('nama')" required autofocus placeholder="Masukan Nama Lengkap Anda" />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>
                            <div class="sm:col-span-3">
                                <x-input-label for="nama_ibu" :value="'Nama Ibu Kandung'" />
                                <x-text-input id="nama_ibu" class="block mt-1 w-full" type="text" name="nama_ibu"
                                    :value="old('nama_ibu')" required autofocus placeholder="Masukan Nama Ibu Anda" />
                                <x-input-error :messages="$errors->get('nama_ibu')" class="mt-2" />
                            </div>
                            <div class="sm:col-span-3">
                                <x-input-label for="cabang" :value="'Cabang'" />
                                <x-text-input id="cabang" class="block mt-1 w-full" type="text" name="cabang"
                                    :value="old('cabang')" required autofocus placeholder="Masukan Cabang" />
                                <x-input-error :messages="$errors->get('cabang')" class="mt-2" />
                            </div>

                            <div class="sm:col-span-3">
                                <x-input-label for="jabatan" :value="'Jabatan'" />
                                <select id="countries"
                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    id="jabatan" name="jabatan">
                                    <option value="">Pilih Jabatan Anda</option>
                                    <option value="Teller" {{ old('jabatan') == 'Teller' ? 'selected' : '' }}>Teller
                                    </option>
                                    <option value="Customer Service"
                                        {{ old('jabatan') == 'Customer Service' ? 'selected' : '' }}>Customer Service
                                    </option>
                                    <option value="Marketing" {{ old('jabatan') == 'Marketing' ? 'selected' : '' }}>
                                        Marketing
                                    </option>
                                    <option value="Staf/Back Office"
                                        {{ old('jabatan') == 'Staf/Back Office' ? 'selected' : '' }}>Staf/Back Office
                                    </option>
                                    <option value="Supervisor" {{ old('jabatan') == 'Supervisor' ? 'selected' : '' }}>
                                        Supervisor
                                    </option>
                                    <option value="Pimpinan KK"
                                        {{ old('jabatan') == 'Pimpinan KK' ? 'selected' : '' }}>
                                        Pimpinan
                                        KK</option>
                                    <option value="Pimpinan KCP"
                                        {{ old('jabatan') == 'Pimpinan KCP' ? 'selected' : '' }}>
                                        Pimpinan KCP</option>
                                    <option value="Manager" {{ old('jabatan') == 'Manager' ? 'selected' : '' }}>
                                        Manager
                                    </option>
                                    <option value="Pimpinan Cabang"
                                        {{ old('jabatan') == 'Pimpinan  Cabang' ? 'selected' : '' }}>Pimpinan Cabang
                                    </option>
                                </select>
                                <x-input-error :messages="$errors->get('cabang')" class="mt-2" />
                            </div>

                            <div class="sm:col-span-full">
                                <x-input-label for="no_telp" :value="'No Telepon'" />
                                <x-text-input id="no_telp" class="block mt-1 w-full" type="number" name="no_telp"
                                    :value="old('no_telp')" required autofocus placeholder="Masukan No Telepon Anda" />
                                <x-input-error :messages="$errors->get('no_telp')" class="mt-2" />
                            </div>
                        </div>
                    </x-card>
                    <x-card>

                        <div class="col-span-full">
                            <x-input-label class="text-base font-semibold leading-7 text-gray-900" for="alasan"
                                :value="'Alasan'" />
                            <textarea id="alasan" name="alasan" rows="3"
                                class="mt-3 block w-full border-1 py-1.5 border-gray-300 focus:border-sky-50 rounded-md shadow-sm"
                                placeholder="Masukan Alasan Anda">{{ old('alasan') }}</textarea>
                            <x-input-error :messages="$errors->get('alasan')" class="mt-2" />
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="reset"
                                class="text-sm font-semibold leading-6 text-gray-900">Reset</button>

                            <x-primary-button>{{ __('Kirim') }}</x-primary-button>

                        </div>


                    </x-card>
                </div>
            </form>

        </main>
    </x-app-layout>
</body>

</html>
