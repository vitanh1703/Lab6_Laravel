<h2>Danh sách sản phẩm</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Tên</th>
        <th>Giá</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product['name'] }}</td>
        <td>
            @if($product['price'] > 10000000)
                <span style="color:red">
                    {{ number_format($product['price']) }} (Vip)
                </span>
            @else
                {{ number_format($product['price']) }}
            @endif
        </td>
    </tr>
    @endforeach

</table>