<div>
	<p id="rome_rate">{{ $reservation->room->rate }}</p>
	<p class="text-center"> Room Name:  <b>{{ $reservation->room->name }},</b> Room Per day Rate:  <b>{{ $reservation->room->rate }},</b> Entry At: <b>{{ $reservation->entry_at }},</b> Exit At: <b>{{ $reservation->exit_at }},</b></p>
</div>