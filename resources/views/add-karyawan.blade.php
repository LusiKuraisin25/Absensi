<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-200 leading-tight">
               {{ __('Tambah Karyawan baru') }}
          </h2>
     </x-slot>

     <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-gray-800 p-5 overflow-hidden shadow-sm sm:rounded-lg">
               <form action="{{ url('karyawan') }}" method="post" class="flex flex-col items-center w-full"
               enctype="multipart/form-data">
               @csrf
               <div class="flex flex-col w-full">
                   <x-input-label for="nama" :value="__('Nama')" />
                   <x-text-input name="nama_karyawan" id="nama" value="{{ old('nama') }}" />
                   @error('nama_karyawan')
                       <x-input-error>{{ $message }}</x-input-error>
                   @enderror
               </div>
               <div class="flex flex-col w-full">
                   <x-input-label for="nip" :value="__('Nip')" />
                   <x-text-input name="NIP" id="name" autofocus value="{{ old('nip') }}" />
                   @error('NIP')
                       <x-input-error>{{ $message }}</x-input-error>
                   @enderror
               </div>
               <div class="flex flex-col w-full">
                   <x-input-label for="ttl" :value="__('TTL')" />
                   <x-text-input name="TTL" id="ttl" value="{{ old('ttl') }}" />
                   @error('TTL')
                       <x-input-error>{{ $message }}</x-input-error>
                   @enderror
               </div>
               <div class="flex flex-col items-start w-full">
                   <x-input-label :value="__('Jenis Kelamin')" />
                   <div class="w-1/4 flex justify-around">
                       <div class="flex items-center justify-between w-[4vw] my-2">
                           <input type="radio" name="jenis_kelamin" id="pria" value="Pria"
                               {{ old('jenis_kelamin') == 'Pria' ? 'checked' : '' }}>
                           <x-input-label for="pria" :value="__('Pria')" />
                       </div>
                       <div class="flex items-center justify-between w-[6vw]">
                           <input type="radio" name="jenis_kelamin" id="wanita" value="Wanita"
                               {{ old('jenis_kelamin') == 'Wanita' ? 'checked' : '' }}>
                           <x-input-label for="wanita" :value="__('Wanita')" />
                       </div>
                   </div>
                   @error('jenis_kelamin')
                       <x-input-error>{{ $message }}</x-input-error>
                   @enderror
               </div>
               <div class="flex flex-col w-full">
                    <x-input-label for="alamat" :value="__('Alamat')" />
                    <textarea
                    class="resize-none w-full h-[20vh] border border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-600 focus:ring-indigo-600 rounded-md shadow-sm my-2"
                    name="alamat" id="alamat">{{ old('alamat') }}</textarea>
                    @error('alamat')
                    <x-input-error>{{ $message }}</x-input-error>
                    @enderror
               </div>
               <div class="flex flex-col w-full">
                   <x-input-label for="jabatan" :value="__('Jabatan')" />
                   <x-text-input name="jabatan" id="jabatan" value="{{ old('jabatan') }}" />
                   @error('jabatan')
                   <x-input-error>{{ $message }}</x-input-error>
                   @enderror
               </div>
               <div class="flex flex-col w-full">
                    <x-input-label for="no_telepon" :value="__('Nomor Telepon')" />
                    <x-text-input name="no_telepon" id="no_telepon" value="{{ old('no_telepon') }}" />
                    @error('no_telepon')
                    <x-input-error>{{ $message }}</x-input-error>
                    @enderror
               </div>
               <div class="flex flex-col w-full">
                   <x-input-label for="keterangan" :value="__('Keterangan')" />
                   <textarea
                       class="resize-none w-full h-[20vh] border border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-600 focus:ring-indigo-600 rounded-md shadow-sm my-2"
                       name="keterangan" id="keterangan">{{ old('keterangan') }}</textarea>
                   @error('keterangan')
                       <x-input-error>{{ $message }}</x-input-error>
                   @enderror
               </div>
               <x-primary-button class="float-left">{{ __('Submit') }}</x-primary-button>
           </form>
              </div>
          </div>
      </div>
</x-app-layout>