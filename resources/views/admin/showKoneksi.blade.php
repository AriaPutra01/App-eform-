<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            Detail Data <i class="text-blue-500">{{ $pemohon->nama }}</i>
        </h2>
    </x-slot>
    <div class="space-y-12">
        <x-card>

            <div class="col-span-full">
                <x-input-label class="text-base font-semibold leading-7 text-gray-900" :value="__('Tujuan Pengajuan')" />
                <textarea disabled rows="3" class="mt-3 block w-full border-1 py-1.5 border-gray-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm">{{ $pemohon->tujuan }}</textarea>
            </div>
        </x-card>
        <x-card>

            <h2 class="text-base font-semibold leading-7 text-gray-900">Data Pemohon</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Data pribadi pemohon</p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <x-input-label :value="__('Nama Lengkap')" />
                    <x-text-input disabled class="block mt-1 w-full" type="text" :value="$pemohon->nama" required autofocus />
                </div>
                <div class="sm:col-span-3">
                    <x-input-label :value="__('NIK')" />
                    <x-text-input disabled class="block mt-1 w-full" type="number" :value="$pemohon->nik" required autofocus />
                </div>
                <div class="sm:col-span-6">
                    <x-input-label :value="__('Alamat Email')" />
                    <x-text-input disabled class="block mt-1 w-full" type="email" :value="$pemohon->email" required autofocus />
                </div>
                <div class="sm:col-span-3">
                    <x-input-label :value="__('Divisi')" />
                    <x-text-input disabled class="block mt-1 w-full" type="text" :value="$pemohon->divisi" required autofocus />
                </div>
                <div class="sm:col-span-3">
                    <x-input-label :value="__('Grup')" />
                    <x-text-input disabled class="block mt-1 w-full" type="text" :value="$pemohon->grup" required autofocus />
                </div>
            </div>
        </x-card>
        <x-card>

            <h2 class="text-base font-semibold leading-7 text-gray-900">Informasi Koneksi</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Detail pengajuan koneksi
            </p>
            <div class="my-10 space-y-10">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <fieldset class="sm:col-span-3">
                        <legend class="text-sm font-semibold leading-6 text-gray-900">
                            Kebutuhan Akses</legend>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" value="production" {{ $pemohon->kebutuhan == 'production' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Production</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" value="development" {{ $pemohon->kebutuhan == 'development' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Development</label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="sm:col-span-3">
                        <legend class="text-sm font-semibold leading-6 text-gray-900">Akses
                            Koneksi</legend>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" value="internal" {{ $pemohon->akses == 'internal' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Internal</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" value="pihakKetiga" {{ $pemohon->akses == 'pihakKetiga' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Pihak
                                    Ketiga</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="sm:col-span-4">
                <x-input-label :value="__('Nama Aplikasi / Koneksi')" />
                <x-text-input disabled class="block mt-1 w-full" type="text" :value="$pemohon->koneksiAplikasi" required autofocus />
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <x-input-label :value="__('Jangka Waktu Mulai')" />
                    <x-text-input disabled class="block mt-1 w-full" type="date" :value="$pemohon->mulai" required autofocus />
                </div>
                <div class="sm:col-span-3">
                    <x-input-label :value="__('Selesai')" />
                    <x-text-input disabled class="block mt-1 w-full" type="date" :value="$pemohon->sampai" required autofocus />
                </div>
                <div class="sm:col-span-2 sm:col-start-1">
                    <x-input-label :value="__('IP Source')" />
                    @foreach (json_decode($pemohon->ipSource) as $s)
                    <x-text-input disabled class="block mt-2 w-full" type="text" :value="$s" required autofocus />
                    @endforeach
                </div>
                <div class="sm:col-span-2">
                    <x-input-label :value="__('IP Destination')" />
                    @foreach (json_decode($pemohon->ipDestination) as $d)
                    <x-text-input disabled class="block mt-2 w-full" type="text" :value="$d" required autofocus />
                    @endforeach
                </div>
                <div class="sm:col-span-2">
                    <x-input-label :value="__('Port')" />
                    @foreach (json_decode($pemohon->port) as $p)
                    <x-text-input disabled class="block mt-2 w-full" type="text" :value="$p" required autofocus />
                    @endforeach
                </div>
            </div>
            <div class="my-10 space-y-10">
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 text-gray-900"><i>Initiate
                            Connection</i>
                    </legend>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="flex items-center gap-x-3">
                            <input disabled type="radio" value="Bank bjb" {{ $pemohon->initiateConnection == 'Bank bjb' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                            <label class="block text-sm font-medium leading-6 text-gray-900">bank
                                bjb</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input disabled type="radio" value="Pihak Ketiga" {{ $pemohon->initiateConnection == 'Pihak Ketiga' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Pihak
                                Ketiga</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 text-gray-900">Lampiran
                    </legend>
                    <div class="mt-6 space-y-6">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" value="Topology Aplikasi" {{ $pemohon->lampiran == 'Topology Aplikasi' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Topology
                                    Aplikasi</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" value="Perjanjian Kerjasama" {{ $pemohon->lampiran == 'Perjanjian Kerjasama' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Perjanjian
                                    Kerjasama</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" value="BRD" {{ $pemohon->lampiran == 'BRD' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">BRD</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" value="Lainnya" {{ $pemohon->lampiran == 'Lainnya' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Lainnya.....</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <x-primary-button><a href="{{ route('admin.export.word', $pemohon->id) }}"> Export ke
                        Word</a></x-primary-button>

                <a class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" href="{{ route('admin.tableKoneksi') }}"> Kembali
                </a>
        </x-card>
    </div>
</x-app-layout>