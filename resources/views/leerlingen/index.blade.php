<!-- resources/views/leerlingen/index.blade.php -->
<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Leerlingenlijst</h1>
        <a href="{{ route('leerlingen.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Nieuwe leerling toevoegen</a>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded shadow">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left border-b">Naam</th>
                        <th class="px-4 py-2 text-left border-b">Email</th>
                        <th class="px-4 py-2 text-left border-b">Telefoon</th>
                        <th class="px-4 py-2 text-left border-b">Acties</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leerlingen as $leerling)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b">{{ $leerling->voornaam }} {{ $leerling->achternaam }}</td>
                            <td class="px-4 py-2 border-b">{{ $leerling->email }}</td>
                            <td class="px-4 py-2 border-b">{{ $leerling->telefoonnummer }}</td>
                            <td class="px-4 py-2 border-b">
                                <a href="{{ route('leerlingen.edit', $leerling) }}" class="text-blue-600 hover:underline mr-2">Bewerken</a>
                                <form action="{{ route('leerlingen.destroy', $leerling) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Verwijderen</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
