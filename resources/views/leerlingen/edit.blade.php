<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Leerling bewerken</h1>

    <form action="{{ route('leerlingen.update', $leerling) }}" method="POST" class="space-y-4 max-w-md">
        @csrf
        @method('PUT')

        <div>
            <label for="voornaam" class="block font-medium">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam" value="{{ old('voornaam', $leerling->voornaam) }}" class="border rounded w-full p-2">
            @error('voornaam')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="achternaam" class="block font-medium">Achternaam</label>
            <input type="text" name="achternaam" id="achternaam" value="{{ old('achternaam', $leerling->achternaam) }}" class="border rounded w-full p-2">
            @error('achternaam')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="block font-medium">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $leerling->email) }}" class="border rounded w-full p-2">
            @error('email')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="telefoonnummer" class="block font-medium">Telefoonnummer</label>
            <input type="text" name="telefoonnummer" id="telefoonnummer" value="{{ old('telefoonnummer', $leerling->telefoonnummer) }}" class="border rounded w-full p-2">
            @error('telefoonnummer')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-green-600 text-white rounded px-4 py-2 hover:bg-green-700">Opslaan</button>
    </form>
</x-app-layout>
