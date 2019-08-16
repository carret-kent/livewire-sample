<div style="text-align: center">
  <button wire:click="increment">+</button>
  <h1>{{ $count }}</h1>
  <p>{!! implode('<br>', $accessHistories) !!}</p>
  <button wire:click="decrement">-</button>
</div>
