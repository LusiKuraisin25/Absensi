<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-200 leading-tight">
               {{ __('Absensi') }}
          </h2>
     </x-slot>

     <div class="py-12 text-white mt-7">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <table class="w-full pb-10">
                         <thead>
                              <tr>
                                   <th class="p-2">No.</th>
                                   <th class="p-2">Nama Karyawan</th>
                                   <th class="p-2">Hadir</th>
                                   <th class="p-2">Sakit</th>
                                   <th class="p-2">Izin</th>
                                   <th class="p-2">Alpa</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr class="text-center">
                                   <td class="p-2">1.</td>
                                   <td>Lusi Kuraisin</td>
                                   <td class="p-2">
                                        <input type="radio" name="Absensi" id="Absensi" value="Hadir">
                                   </td>
                                   <td class="p-2">
                                        <input type="radio" name="Absensi" id="Absensi" value="Sakit">
                                   </td>
                                   <td class="p-2">
                                        <input type="radio" name="Absensi" id="Absensi" value="Izin">
                                   </td>
                                   <td class="p-2">
                                        <input type="radio" name="Absensi" id="Absensi" value="Alpa">
                                   </td>
                              </tr>
                         </tbody>
                    </table>
                    <x-primary-button class="mt-5">
                         {{ __('Submit') }}
                    </x-primary-button>
               </div>
          </div>
</x-app-layout>