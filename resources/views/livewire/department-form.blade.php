<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <input type="text"  wire:model="name" class="border-2"/>
    <button wire:click="submit">
        submit
    </button>
    @if($sucess)
        <div>
            saved
        </div>
    @endif
</div>
