<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Inventory</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #111827;
        }

        .container {
            max-width: 950px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .header p {
            color: #6b7280;
            margin-top: 8px;
        }

        .card {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .count {
            margin-bottom: 18px;
            color: #6b7280;
            font-size: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #f9fafb;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        th {
            font-size: 14px;
            color: #6b7280;
        }

        .price {
            color: #15803d;
            font-weight: bold;
        }

        .empty {
            text-align: center;
            padding: 35px;
            color: #6b7280;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>Product Inventory</h1>
            <p>Activity 4: Laravel MVC Integration</p>
        </div>

        <div class="card">
            <div class="count">
                Total Products: {{ $products->count() }}
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PRODUCT NAME</th>
                        <th>QUANTITY</th>
                        <th>PRICE</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td class="price">₱{{ number_format($product->price, 2) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="empty">
                                No products found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>