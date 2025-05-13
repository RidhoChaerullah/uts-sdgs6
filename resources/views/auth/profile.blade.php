<x-layout>
    <div class="justify-center">
        <x-title>Update Profile</x-title>

            <div class="bg-white rounded-2xl p-6 pt-2  ring-gray-200">
                <form action="{{ route('profile.update') }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                    </div>

                    <div class="flex justify-end space-x-4 pt-4">
                        <a href="{{ route('articles.index') }}"><button type="button"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button></a>
                        <button type="submit"
                            class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/80">Simpan Perubahan</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="mt-8 space-y-4 p-6 relative mx-auto flex flex-col w- bg-white shadow-md border border-slate-200 w-11/12 rounded-lg my-6">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                    class="w-full bg-slate-800 text-white px-4 py-2 rounded-lg hover:bg-slate-800/90">Logout</button>
            </form>

            <form action="{{ route('profile.destroy') }}" method="POST"
                onsubmit="return confirm('Yakin hapus akun?')">
                @csrf
                @method('DELETE')
                <button class="w-full bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Hapus
                    Akun</button>
            </form>
        </div>
</x-layout>
