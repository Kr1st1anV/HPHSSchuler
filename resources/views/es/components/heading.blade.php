@props(['file'])

<div class="heading" style="background:url(/images/{{$file}}.png) no-repeat">
  <h1>{{ $slot }}</h1>
</div>