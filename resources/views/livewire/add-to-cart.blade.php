<span >
<span wire:click="addToCart('{{ $id }}')" class="flex items-center justify-center">
    <div wire:loading
        class="inline-block h-4 w-4 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
        role="status">
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
        </span>
    </div>
    {!! $button !!}
</span>
 @if ($err_msg)
        {{-- {!! $err_msg !!} --}}
        <span class="text-[12px] text-[red]">{{ $err_msg }}</span>
    @endif
    @if ($msg)
        <span class="text-[12px] text-[green]">{{ $msg }}</span>
    @endif
</span>
