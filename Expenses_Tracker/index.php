
<?php
    require "./connect.php";

    $sql = "SELECT * FROM categories";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    $sql = "SELECT * FROM expenses";
    $result1 = mysqli_query($conn, $sql);
    $row1 = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // if(isset($_POST['submit'])){
    //     $name = $_POST['ename'];
    //     $amount = $_POST["eamount"];

    //     $sql = "INSERT INTO `expenses` (title, amount) values ('test', '25000')";
    //     $result = mysqli_query($conn, $sql);
    //     if($result){
    //         echo "Successfully Added Record";
    //     }else{
    //         echo "Failed to Added Record";
    //     }
    // }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses Tracker</title>
</head>
<body>

    <main>
        <!-- Expense Logging -->
        <section>
            <div>
                <h1>Balance:2000</h1>
                <label for="">Total Income</label>
                <span>25000</span>
            </div>
            <div>
                <h1>Balance:2000</h1>
                <label for="">Total Expenses</label>
                <span>25000</span>
            </div>
        </section>

        <!-- Expense Viewing -->
        <section>
            <div>
                <h1>Expenses</h1>
                <table>
                    <tr>
                        <th>S.no.</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>income</td>
                        <td>25000</td>
                        <td><button>action</button></td>
                        <td><button>X</button></td>
                    </tr>
                    <tr>
                        <?php
                           
                        ?>
                        <td></td>
                        <td>income</td>
                        <td>25000</td>
                        <td><button>action</button></td>
                        <td><button>X</button></td>
                    </tr>
                </table>
            </div>
            <div>
                <h1>Add new</h1>
                <form action="./add.php" method="POST">
                    <label for="">Entry type</label>
                    <select name="" id="">
                        <?php
                            foreach($row as $value) {
                                echo "<option value='{$value['id']}'>{$value['label']}</option>";
                            }
                        ?>
                    </select><br>

                    <label for="">Name: </label><br>
                    <input type="text" name="ename"><br>
                    <label for="">Amount: </label><br>
                    <input type="number"  name="eamount"><br>
                    <button type="submit">Add Expense</button>
                </form>
            </div>
        </section>

    </main>
    
</body>
</html>