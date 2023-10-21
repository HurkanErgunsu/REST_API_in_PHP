<?php 
$url = file_get_contents("https://reqres.in/api/users?page=2");
$decoded = json_decode($url, true);

if (isset($decoded)) {
    $datas = $decoded['data'];
    ?>
        <style>
            table {
                justify-content: center;
                text-align: center;
                margin-top: 30vh;
                display: flex;
            }

            th {
                background-color: red;
                font-size: x-large;
                color: white;
                width: 300px;
                height: 50px;
            }

            td {
                background-color: lightgray;
                font-size: large;
                height: 40px;
            }
        </style>

        <table>
            <tr>
                <th> User ID </th>
                <th> User First Name </th>
                <th> User Last Name </th>
                <th> User Email </th>
            </tr>
        <?php
            foreach ($datas as $data) {
                echo "<tr>";
                    echo "<td>" . $data['id'] . "</td>";
                    echo "<td>" . $data['first_name'] . "</td>";
                    echo "<td>" . $data['last_name'] . "</td>";
                    echo "<td>" . $data['email'] . "</td>";
                echo "<tr>";
            }
        ?>
                </tr>
            </table>
        <?php  
    } 
    else {
        echo "Data extraction or decoding failed or data is missing.";
    }
?>