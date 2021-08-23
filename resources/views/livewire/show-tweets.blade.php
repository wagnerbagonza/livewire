<div>
    Show Tweets

    <p>{{$content}}</p>

    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content')
            {{$message}}
        @enderror
        <button type="submit">Criar Tweet</button>
    </form>
    <hr>
    @foreach($tweets as $tweet)
        @if ($tweet->user->photo)
            <img src="{{ url("storage/{$tweet->user->photo}") }}" alt="{{$tweet->user->name}}">
        @else   
            <img src="{{ url('imgs/img_default.png') }}" alt="{{$tweet->user->name}}">
        @endif
        
        {{ $tweet->user->name }} - {{ $tweet->content}} ----{{$tweet->user->photo}}
        @if($tweet->likes->count())
            <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
        @else
            <a href="#" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
        @endif
        <br>
    @endforeach
    <hr>
    <div>
        {{ $tweets -> links() }}
    </div>
</div>
