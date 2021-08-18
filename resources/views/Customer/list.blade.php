<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <title>CodePen - Fade and Blur on Hover Data Table</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cities/list.css') }}">

    <script>
        window.console = window.console || function (t) {
        };
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">
<div style="text-align: center;">
    <h3>Khách hàng </h3>
</div>
<div style="margin-left: 250px">
    <a href="{{ route('city.list') }}">Xem danh sách thành phố</a><br>
    <a> Add new City</a>
</div>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Tên khách hàng</th>
        <th>Dob</th>
        <th>Email</th>
        <th>Thành phố</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if(count($customers) == 0)
        <tr>
            <td>Không có dữ liệu</td>
        </tr>
    @else
        @foreach($customers as $key => $customer)
            <tr>
                <td><strong>{{ ++$key }}</strong></td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->dob }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->city['name'] }}</td>
                <td><a href=""><i class="far fa-edit icon"></i></a></td>
                <td><a href="" class="text-danger icon" onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i
                                class="fas fa-trash-alt"></i></a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
{{ $customers->links() }}

<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


<script>
    /* Hover over table rows to see fade/blur effect */
    "use strict";
    //# sourceURL=pen.js
</script>


</body>

</html>
