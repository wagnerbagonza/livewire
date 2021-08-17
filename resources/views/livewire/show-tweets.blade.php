<div>
    Show Tweets

    <p>{{$messege}}</p>

    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="messege" id="message" wire:model="messege"><br>
        <button type="submit">Criar Tweet</button>
    </form>
    <hr>
    @foreach($tweets as $tweet)
        {{ $tweet->user->name}} - {{ $tweet->content}}<br>
    @endforeach
</div>
