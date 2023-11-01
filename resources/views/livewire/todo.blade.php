<div>
   <input type="text" wire:model.live='todo'>
   <button wire:click='add'>Add</button>
   <h1>{{$todo}}</h1>
   <ul>
    @foreach ($todos as $todo)
        <li>{{$todo}}</li>
    @endforeach
   </ul>
</div>











