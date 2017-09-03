
<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
  <div class="text-muted">Escrito por: 
    <a href="/{{ $message->user->name }}">{{ $message->user->name }}</a>
  </div>
  <div>
    {{ $message->content }}
  </div>
  <a href="/messages/{{ $message->id }}">Leer más</a>
</p>