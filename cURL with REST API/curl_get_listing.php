<?php  
    $url = "https://reqres.in/api/users?page=2";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);

    if($e = curl_error($ch)){
        echo $e;
    } else {
        $decoded = json_decode($resp, true);
        if ($decoded) {
            $users = $decoded['data'];
            
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
                        padding-right: 10px;
                        font-size: x-large;
                        color: white;
                        width: 300px;
                        height: 50px;
                    }

                    td {
                        background-color: lightgray;
                        padding-right: 10px;
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
                foreach ($users as $user) {
                    echo "<tr>";
                        echo "<td>" . $user['id'] . "</td>";
                        echo "<td>" . $user['first_name'] . "</td>";
                        echo "<td>" . $user['last_name'] . "</td>";
                        echo "<td>" . $user['email'] . "</td>";
                    echo "<tr>";
                }
            ?>
                    </tr>
                </table>
            <?php  
        } 
        else {
            echo "Veri çekme veya çözme işlemi başarısız oldu veya veri eksik.";
        }
    }

    curl_close($ch);
?>
    





