<span>
    <span wire:click="addToCart('{{ $id }}')" class="flex items-center justify-center">
        
        {!! $button !!}
    </span>
    {{-- @if ($err_msg)
        <span class="text-[12px] text-[red]">{{ $err_msg }}</span>
    @endif
    @if ($msg)
        <span class="text-[12px] text-[green]">{{ $msg }}</span>
    @endif --}}
</span>
