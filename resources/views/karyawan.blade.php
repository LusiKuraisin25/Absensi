<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xltext-gray-200 leading-tight">
               {{ __('Karyawan') }}
          </h2>
     </x-slot>

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
                              </tr>
                         </thead>
                         <tbody>
                              <tr class="text-center">
                                   <td class="p-2">1.</td>
                                   <td class="p-2">Lusi Kuraisin</td>
                                   <td class="p-2">32066322508050001</td>
                                   <td class="p-2">Tasikmalaya,25-08-05</td>
                                   <td class="p-2">Perempuan</td>
                                   <td class="p-2">Kp.Sanding Timur</td>
                                   <td class="p-2">Sekretaris</td>
                                   <td class="p-2">083116573229</td>
                              </tr>
                         </tbody>
                    </table>
               </div>
          </div>
</x-app-layout>