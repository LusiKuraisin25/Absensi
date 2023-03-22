<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-200 leading-tight">
               {{ __('Karyawan') }}
          </h2>
     </x-slot>
     <a href="/karyawan/create">
          <x-primary-button class="absolute left-20">{{ __('Tambah Karyawan baru') }}</x-primary-button>
     </a>
     <div class="text-white -mt-3 right-5 absolute">
          <h1 class="font-bold">Selasa</h1>
          <h1>21-03-23</h1>
     </div>
     <div class="py-12 text-white mt-7">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <table class="w-full ">
                         <thead>
                              <tr>
                                   <th class="p-2">No.</th>
                                   <th class="p-2">Nama</th>
                                   <th class="p-2">NIP</th>
                                   <th class="p-2">TTL</th>
                                   <th class="p-2">Jenis Kelamin</th>
                                   <th class="p-2">Alamat</th>
                                   <th class="p-2">Jabatan</th>
                                   <th class="p-2">No. Telepon</th>
                                   <th class="p-2">Action</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($karyawan as $data)
                              <tr class="text-center">
                                   <td class="p-2">1.</td>
                                   <td class="p-2">{{ $data->nama_karyawan }}</td>
                                   <td class="p-2">{{ $data->NIP }}</td>
                                   <td class="p-2">{{ $data->TTL }}</td>
                                   <td class="p-2">{{ $data->jenis_kelamin }}</td>
                                   <td class="p-2">{{ $data->alamat }}</td>
                                   <td class="p-2">{{ $data->jabatan }}</td>
                                   <td class="p-2">{{ $data->no_telepon }}</td>
                                   <td class="p-2 flex items-center justify-center">
                                        <a href="/karyawan/{{ $data->id }}/edit"><x-primary-button>{{ __('Edit') }}</x-primary-button></a>
                                        <form action="/delete/{{ $data->id }}" method="post">
                                             @method('delete')
                                             @csrf
                                             <x-primary-button class="bg-red-600 text-white">{{ __('Delete') }}</x-primary-button>
                                        </form>
                                   </td>
                              </tr>
                              @endforeach
                         </tbody>
                    </table>
               </div>
          </div>
</x-app-layout>