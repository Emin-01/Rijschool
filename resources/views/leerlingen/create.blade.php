<x-app-layout>
    <div class="max-w-xl mx-auto mt-10 bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Nieuwe Leerling toevoegen</h1>

        <form action="{{ route('leerlingen.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="voornaam" class="block text-sm font-medium text-gray-700">Voornaam</label>
                <input type="text" name="voornaam" id="voornaam" value="{{ old('voornaam') }}"
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('voornaam')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="achternaam" class="block text-sm font-medium text-gray-700">Achternaam</label>
                <input type="text" name="achternaam" id="achternaam" value="{{ old('achternaam') }}"
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('achternaam')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="telefoonnummer" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                <input type="text" name="telefoonnummer" id="telefoonnummer" value="{{ old('telefoonnummer') }}"
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('telefoonnummer')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="py-2 px-4 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition w-40 mx-auto block">Toevoegen</button>
        </form>
    </div>
</x-app-layout>
