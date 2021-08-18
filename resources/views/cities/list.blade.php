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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
    <h3>City</h3>
</div>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Tên tỉnh thành</th>
        <th>Số khách hàng</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if(count($cities) == 0)
        <tr>
            <td>Không có dữ liệu</td>
        </tr>
    @else
        @foreach($cities as $key => $citie)
            <tr>
                <td><strong>{{ ++$key }}</strong></td>
                <td>{{ $citie->name }}</td>
                <td>{{ count($citie->customers) }}</td>
                <td><a href="{{ route('city.form-add', $citie->id) }}"><i class="far fa-edit icon "></i></a>
                </td>
                <td><a href="{{ route('city.delete', $citie->id ) }}" class="text-danger icon"
                       onclick="return confirm('Bạn chắc chắn muốn xóa thành phố {{ $citie->name }}?')"><i
                                class="fas fa-trash-alt"></i></a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

<div style="margin-right: 250px;float: right;">
    <a data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus add"></i></a>
</div>

<div style="margin-left: 250px">
    <a href="{{ route('customer.list') }}"><i class="far fa-hand-point-left add"></i></a>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add new city</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('city.add') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    City name : <input id="city" type="text" class="input" name="name" placeholder="Enter city name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php $a = session()->get('city') ?>
@if(session()->has('city'))
    <script>
        var session = "<?php echo $a ?>";

        alert(session);
    </script>
@endif


<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script>
    /* Hover over table rows to see fade/blur effect */
    "use strict";
    //# sourceURL=pen.js
</script>

<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>

</body>

</html>
 