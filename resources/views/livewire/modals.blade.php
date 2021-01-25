<x-jet-dialog-modal wire:model="createFormModal">
    <x-slot name="title">
        {{ __('Nueva apuesta') }}
    </x-slot>

    <x-slot name="content">

        <div>
            <x-jet-label for="match" value="{{ __('Encuentro') }}" />
            <x-jet-input id="match" class="block mt-1 w-full" wire:model="match" type="text" name="match" :value="old('match')" required autofocus />
        </div>

        <div class="mt-4">
            <x-jet-label for="odds" value="{{ __('Cuota') }}" />
            <x-jet-input id="odds" class="block mt-1 w-full" wire:model="odds" type="number" name="odds" :value="old('odds')" required />
        </div>

        <div class="mt-4">
            <x-jet-label for="amount" value="{{ __('Cantidad') }}" />
            <x-jet-input id="amount" class="block mt-1 w-full" wire:model="amount" type="number" name="amount" :value="old('amount')" required />
        </div>

        <div class="mt-4">
            <x-jet-label for="type" value="{{ __('Tipo') }}" />
            <input id="type" wire:model="type" type="radio" name="type" :value="old('type')" value="Derecha" required /> <span class="text-sm text-gray-700"> Derecha</span>
            <input id="type" wire:model="type" type="radio" name="type" :value="old('type')" value="Parlay" required /> <span class="text-sm text-gray-700"> Parlay</span>
        </div>

        <div class="mt-4">
            <x-jet-label for="market" value="{{ __('Mercado') }}" />
            <div class="mt-1">
                <select name="market" id="market" class="w-full h-12 border-gray-300 border shadow-sm rounded-lg" wire:model="market">
                    <option value="">Elige un mercado</option>
                    <option value="ML">Money Line</option>
                    <option value="Over/Under">Altas/Bajas</option>
                    <option value="Corners">Corners</option>
                    <option value="Combinada">Combinada</option>
                </select>
            </div>
        </div>

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('createFormModal')" wire:loading.attr="disabled">
            {{ __('Cancelar') }}
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="store" wire:loading.attr="disabled">
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>

</x-jet-dialog-modal>
