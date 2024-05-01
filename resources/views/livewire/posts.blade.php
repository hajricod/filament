<div class="w-screen h-screen flex items-center justify-center">
    <div class="max-w-lg mx-auto p-10 border border-gray-200 rounded-lg">
        <form wire:submit="create">
            {{ $this->form }}

            <button type="submit" class="w-full bg-blue-500 text-white rounded mt-3 py-2">
                Submit
            </button>
        </form>
        <x-filament-actions::modals />
    </div>
</div>
