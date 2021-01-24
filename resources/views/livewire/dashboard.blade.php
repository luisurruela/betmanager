<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <x-jet-button class="ml-2" wire:click="create">
                        {{ __('Nueva apuesta') }}
                    </x-jet-button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.modals')
