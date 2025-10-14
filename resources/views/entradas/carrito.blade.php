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

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4 text-center">🛒 Tu carrito de entradas</h1>

        <!-- Si hay entradas -->
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>🎫 Evento</th>
                        <th>📅 Fecha</th>
                        <th>🧩 Categoría</th>
                        <th>🔢 Cantidad</th>
                        <th>💵 Precio por entrada</th>
                        <th>💰 Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fila de ejemplo -->
                    <tr>
                        <td>Tour Guiado</td>
                        <td>15/12/2025 10:00</td>
                        <td>Cultural</td>
                        <td>2</td>
                        <td>$10.00</td>
                        <td>$20.00</td>
                    </tr>
                    <tr>
                        <td>Autocine Nocturno</td>
                        <td>18/12/2025 21:30</td>
                        <td>Cine</td>
                        <td>1</td>
                        <td>$8.00</td>
                        <td>$8.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="table-secondary">
                        <td colspan="5" class="text-end"><strong>Total:</strong></td>
                        <td><strong>$28.00</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Botón de confirmación -->
        <div class="text-center mt-4">
            <button class="btn btn-success btn-lg">
                ✅ Confirmar compra
            </button>
        </div>

        <!-- Si no hay entradas (puedes ocultar o mostrar esta parte con JS) -->
        <!--
        <div class="alert alert-info text-center mt-4">
