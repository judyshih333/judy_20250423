<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
        <tr>
            <td>1</td>
            <td>amy</td>
        </tr>
        <tr>
            <td>1</td>
            <td>amy</td>
        </tr>


    </table>

    <!-- 載入jq -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- <img src="./data.php" alt="" srcset=""> -->
<script>
    $(document).ready(function () {
        // ajax call phph data

        let url="./data.php";
        $.ajax({
            type: "get",
            url: url,
            // data: "data",
            dataType: "json",
            success: function (response) {
                console.log('response',response);
                
            }
        });
    });
</script>
</body>

</html>