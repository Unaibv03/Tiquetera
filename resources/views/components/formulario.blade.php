<form method="POST" action="{{ route('carrito.agregar') }}">
    @csrf
    <input type="hidden" name="evento_id" value="{{ $evento->id }}">

    <div class="mb-3">
        <label for="cantidad" class="form-label">🎟️ Cantidad de entradas</label>
        <input 
            type="number" 
            name="cantidad" 
            id="cantidad" 
            class="form-control w-25" 
            min="1" 
            step="1" 
            value="1"
            required
        >
    </div>

    <button type="submit" class="btn btn-success btn-lg m-2">🎟️ Reservar Entrada</button>
</form>
<a href="{{ route('entradas.carrito') }}" class="btn btn-primary ms-2">🛒 Ver carrito</a>

