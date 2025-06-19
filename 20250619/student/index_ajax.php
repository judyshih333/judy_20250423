<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 80%;
            text-align: center;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid black;
            margin: auto;
        }
    </style>
</head>

<body>
    <table id="myTable">
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
        <!-- <tr>
            <td>1</td>
            <td>amy</td>
        </tr>
        <tr>
            <td>1</td>
            <td>amy</td>
        </tr> -->


    </table>

    <!-- 載入jq -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <img src="./data.php" alt="" srcset=""> -->
    <script>
        $(document).ready(function() {
            // 1.bind
            const myTable = $('#myTable');
            console.log('myTable', myTable);

            // 2.action




            // ajax call phph data

            let url = "./data.php";
            $.ajax({
                type: "get",
                url: url,
                // data: "data",
                dataType: "json",
                success: function(response) {
                    console.log('response', response);
                    console.log('response typeof', typeof(response));

                    let data = response;
                    console.log('data', data);


                    // (1)單筆匯入

                    // let tmpText = `
                    // <tr>
                    //     <td>1</td>
                    //     <td>amyok</td>
                    // </tr>
                    // `;

                    // myTable.append(tmpText);




                    // (2)多筆資料for each
                    let tmpResult = '';
                    $.each(data, function(key, value) {
                        let tmpText = `
                        <tr>
                            <td>${value.id}</td>
                            <td>${value.name}</td>
                        </tr>
                         `;
                    
                         tmpResult += tmpText;
                    });

                    $(myTable).append(tmpResult);




                }
            });
        });
    </script>
</body>

</html>