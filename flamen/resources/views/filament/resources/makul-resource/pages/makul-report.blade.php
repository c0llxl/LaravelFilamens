<x-filament-panels::page>
    <x-filament::card>
        <h2 class="text-xl font-bold mb-4">Statistik Data Mata Kuliah</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-lg p-4 shadow">
                <h3 class="text-lg font-semibold mb-2">Total Mata Kuliah</h3>
                <p class="text-3xl font-bold text-primary-600">{{ \App\Models\Makul::count() }}</p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow">
                <h3 class="text-lg font-semibold mb-2">2 SKS</h3>
                <p class="text-3xl font-bold text-primary-600">{{ \App\Models\Makul::where('sks', 2)->count() }}</p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow">
                <h3 class="text-lg font-semibold mb-2">3 SKS</h3>
                <p class="text-3xl font-bold text-primary-600">{{ \App\Models\Makul::where('sks', 3)->count() }}</p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow">
                <h3 class="text-lg font-semibold mb-2">4 SKS</h3>
                <p class="text-3xl font-bold text-primary-600">{{ \App\Models\Makul::where('sks', 4)->count() }}</p>
            </div>
        </div>

        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Total SKS</h3>
            <p class="text-3xl font-bold text-primary-600">{{ \App\Models\Makul::sum('sks') }} SKS</p>
        </div>
    </x-filament::card>

    {{ $this->table }}
</x-filament-panels::page>
