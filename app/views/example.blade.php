<!-- app/views/example.blade.php -->

<h1>Dear Lord Otwell</h1>
<p>I hereby challenge you to a duel</p>

{{ $squirrel; }}

{{{ '<script>alert("chunky bacon");</script>' }}}

@if ($squirrel == "yaya")
 <p>Something is true!</p>
@else
 <p>Something is false!</p>
@endif