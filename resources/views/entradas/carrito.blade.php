<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Entradas</title>

    <style>
        body{
            background-color: #CAFFE9;
        }
    </style>
    @vite(['resources/css/app.css'])

</head>
<body>
    @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif

@if(count($carrito) > 0)
    <div class="text-center">
    <h1 class="display-9">🛒 Tu carrito de entradas</h1>
</div>


    <div class="container table-responsive mt-5">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>🎫 Evento</th>
                    <th>📅 Fecha</th>
                    <th>🧩 Categoría</th>
                    <th>🔢 Cantidad</th>
                    <th>💵 Precio por entrada</th>
                    <th>💰 Subtotal</th>
                    <th>🗑️ Acción</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($carrito as $index => $entrada)
                    @php $total += $entrada['subtotal']; @endphp
                    <tr>
                        <td>{{ $entrada['nombre_evento'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($entrada['fecha_evento'])->format('d/m/Y H:i') }}</td>
                        <td>{{ $entrada['categoria'] }}</td>
                        <td>{{ $entrada['cantidad'] }}</td>
                        <td>${{ number_format($entrada['precio'], 2) }}</td>
                        <td>${{ number_format($entrada['subtotal'], 2) }}</td>
                        <td>
                            <form action="{{ route('carrito.eliminar', $index) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">❌</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="table-secondary">
                    <td colspan="5" class="text-end"><strong>Total:</strong></td>
                    <td colspan="2"><strong>${{ number_format($total, 2) }}</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="text-center mt-4">
        <form action="{{ route('carrito.comprar') }}" method="POST">
            @csrf
            <button class="btn btn-success btn-lg">✅ Confirmar compra</button>
        </form>

        <a href="{{ route('todosLosEventos') }}" class="btn btn-secondary btn-lg mt-2">🛍️ Seguir comprando</a>

    </div>
@else
    <div class="alert alert-info text-center mt-4">
        🛒 Tu carrito está vacío.
    </div>

    <div class="text-center mt-3">
        <a href="{{ route('todosLosEventos') }}" class="btn btn-primary">
            🔙 Volver a eventos
        </a>
    </div>
@endif


</body>
</html>