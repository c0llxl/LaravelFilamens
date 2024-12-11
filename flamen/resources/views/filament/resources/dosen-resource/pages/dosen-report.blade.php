<x-filament-panels::page>
    <x-filament::card>
        <h2 class="text-xl font-bold mb-4">Statistik Data Dosen</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white rounded-lg p-4 shadow">
                <h3 class="text-lg font-semibold mb-2">Total Dosen</h3>
                <p class="text-3xl font-bold text-primary-600">{{ \App\Models\Dosen::count() }}</p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow">
                <h3 class="text-lg font-semibold mb-2">Dosen Laki-laki</h3>
                <p class="text-3xl font-bold text-primary-600">{{ \App\Models\Dosen::where('jenis_kelamin', 'L')->count() }}</p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow">
                <h3 class="text-lg font-semibold mb-2">Dosen Perempuan</h3>
                <p class="text-3xl font-bold text-primary-600">{{ \App\Models\Dosen::where('jenis_kelamin', 'P')->count() }}</p>
            </div>
        </div>
    </x-filament::card>

    {{ $this->table }}
</x-filament-panels::page>
