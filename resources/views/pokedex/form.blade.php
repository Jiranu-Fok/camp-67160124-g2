<form method="POST"
      action="{{ isset($pokemon) ? url('/pokedex/'.$pokemon->id) : url('/pokedex') }}">
    @csrf
    @if(isset($pokemon))
        @method('PUT')
    @endif
    <input name="name" placeholder="Name" value="{{ $pokemon->name ?? '' }}">
    <input name="type" placeholder="Type" value="{{ $pokemon->type ?? '' }}">
    <input name="species" placeholder="Species" value="{{ $pokemon->species ?? '' }}">
    <input type="number" name="height" placeholder="Height" value="{{ $pokemon->height ?? '' }}">
    <input type="number" name="weight" placeholder="Weight" value="{{ $pokemon->weight ?? '' }}">
    <input type="number" name="hp" placeholder="HP" value="{{ $pokemon->hp ?? '' }}">
    <input type="number" name="attack" placeholder="Attack" value="{{ $pokemon->attack ?? '' }}">
    <input type="number" name="defense" placeholder="Defense" value="{{ $pokemon->defense ?? '' }}">
    <input name="image_url" placeholder="Image URL" value="{{ $pokemon->image_url ?? '' }}">
    <button>{{ isset($pokemon) ? 'Update' : 'Save' }}</button>
</form>
