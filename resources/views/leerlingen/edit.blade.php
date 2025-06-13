<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-3xl font-extrabold mb-8 text-gray-800">Leerling bewerken</h1>

        <form action="{{ route('leerlingen.update', $leerling) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="voornaam" class="block text-gray-700 font-semibold mb-1">Voornaam</label>
                <input type="text" name="voornaam" id="voornaam" value="{{ old('voornaam', $leerling->voornaam) }}"
                    class="border border-gray-300 rounded-lg w-full p-3 focus:outline-none focus:ring-2 focus:ring-green-400 transition">
                @error('voornaam')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="achternaam" class="block text-gray-700 font-semibold mb-1">Achternaam</label>
                <input type="text" name="achternaam" id="achternaam" value="{{ old('achternaam', $leerling->achternaam) }}"
                    class="border border-gray-300 rounded-lg w-full p-3 focus:outline-none focus:ring-2 focus:ring-green-400 transition">
                @error('achternaam')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $leerling->email) }}"
                    class="border border-gray-300 rounded-lg w-full p-3 focus:outline-none focus:ring-2 focus:ring-green-400 transition">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="telefoonnummer" class="block text-gray-700 font-semibold mb-1">Telefoonnummer</label>
                <input type="text" name="telefoonnummer" id="telefoonnummer" value="{{ old('telefoonnummer', $leerling->telefoonnummer) }}"
                    class="border border-gray-300 rounded-lg w-full p-3 focus:outline-none focus:ring-2 focus:ring-green-400 transition">
                @error('telefoonnummer')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 text-white rounded-lg px-6 py-3 font-semibold hover:bg-green-700 transition shadow">
                    Opslaan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
