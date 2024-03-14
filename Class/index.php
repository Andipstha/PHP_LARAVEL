<?php
    require './connect.php';

    $sql = "SELECT * FROM contacts";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // print_r($row);
    // foreach($row as $value){
    //     echo $value['first_name'] . $value['last_name'] . $value['phone_number'];
    // }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main>

        <!-- Add Contact  -->
        <div class="container">
            <section>
                <form action="/add_contact.php" method="POST"><br><br>
                    <input type="text" name="fname" id="fname" placeholder="First Name" required> <br><br>
                    <input type="text" name="mname" id="mname" placeholder="Middle Name" > <br><br>
                    <input type="text" name="lname" id="lname" placeholder="Last Name" reqired> <br><br>
                    <input type="text" name="pno" id="pno" placeholder="Phone No" reqired> <br><br>
                    <button type="submit" name="save" id="submit">Add Contact</button>
                    <button type="submit" name="update" id="submit">Update Contact</button> <br><br>

                </form>
            </section>

            <section>
                <div>

                    <h2>Contacts List:</h2>
                    <table >
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Phone No</th>
                        </tr>
                        <!-- foreach($row as $value){
        echo $value['first_name'] . $value['last_name'] . $value['phone_number'];
    } -->
                        <?php
                        foreach($row as $value){
                            echo "<tr>";
                            echo "<td>" . $value['id'] . "</td>";
                            echo "<td>" . $value['first_name'] . " " . $value['last_name'] . "</td>";
                            echo "<td>" . $value['phone_number'] . "</td>";
                            // echo "<td><a href='/edit_contact.php?id=" . $value['id'] . "'>Edit</a> / <a href='/delete_contact.php?id=" . $value['id'] . "'>Delete</a></td>";
                            // echo "<td>"<button class="edit-btn" id="edit-btn" onclick="editContact(${value['id']})">Edit</button> / <button class="delete-btn" id="delete-btn" onclick="deleteContact(${value['id']})">Delete</button></td>";
                            // echo "<td> <button class=`edit-btn` id=`edit-btn` >Edit</button> <button class=`delete-btn` id=`delete-btn` >Delete</button>  </td>";
                            echo "<td>
                                    <form action='/delete_contact.php' method='post'>
                                        <input type='hidden' name='cid' value='" . $value['id'] . "'>
                                        <button type='submit' class='delete-btn'>Delete</button>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                    ?>
                        <!-- <tr>
                        <td>1</td>
                        <td>Sandip</td>
                        <td>Sandip</td>
                        <td>Edit /Delete</td>
                    </tr> -->
                    </table>

                    <!-- this is for displaying contacts -->


                </div>
            </section>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>