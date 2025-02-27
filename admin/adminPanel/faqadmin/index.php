<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
        .hh_button {
    display: inline-block;
    text-decoration: none;
    background: linear-gradient(to right,#ff8a00,#da1b60);
    border: none;
    color: white;
    padding: 10px 25px;
    font-size: 1rem;
    border-radius: 3px;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
    position: relative;
    margin-top: 30px;
    margin: 0px;
    position: absolute;
    right: 20px;
    top: 1.5%;
    }
    header {
    color: white;
    padding: 20px;
    margin-bottom: 20px;
    }
    header a,  header a:hover {
        text-decoration: none;
        color: white;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Announcements Admin Panel</h2>
                        <a href="?table=AddAnnouncement" class="btn btn-primary pull-right">Add New Announcement</a>
                    </div>
                    <?php
                    // Include config file
                    // require_once "config.php";
                    require('../blogAdmin/database.php');
                    $database = new Database();
                    $link = $database->connect();
                    $connection = $link;
                    
                    // Attempt select query execution
                    // $sql = "SELECT * FROM blog";
                    // if($result = mysqli_query($link, $sql)){
                    //     if(mysqli_num_rows($result) > 0){
                    //         echo "<table class='table table-bordered table-striped'>";
                    //             echo "<thead>";
                    //                 echo "<tr>";
                    //                     echo "<th>#</th>";
                    //                     echo "<th>Title</th>";
                    //                     echo "<th>Author</th>";
                    //                     echo "<th>Action</th>";
                    //                 echo "</tr>";
                    //             echo "</thead>";
                    //             echo "<tbody>";
                    //             while($row = mysqli_fetch_array($result)){
                    //                 echo "<tr>";
                    //                     echo "<td>" . $row['Sno'] . "</td>";
                    //                     echo "<td>" . $row['Title'] . "</td>";
                    //                     echo "<td>" . substr($row["Author"],0,15) . "</td>";
                    //                     echo "<td>";
                    //                         echo "<a href='../../singleBlog.php?Id=".$row['Sno'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                    //                         // echo "<a href='faqadmin/update.php?Sno=". $row['Sno'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                    //                         echo "<a href='faqadmin/delete.php?Sno=". $row['Sno'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                    //                     echo "</td>";
                    //                 echo "</tr>";
                    //             }
                    //             echo "</tbody>";                            
                    //         echo "</table>";
                    //         // Free result set
                    //         mysqli_free_result($result);
                    //     } else{
                    //         echo "<p class='lead'><em>No Record Found.</em></p>";
                    //     }
                    // } else{
                    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    // }

                    $sql = "SELECT * FROM event";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Title</th>";
                                        echo "<th>Start Date</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['sno'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['startDate'] . "</td>";

                                        echo "<td>";
                                            echo "<a href='../../singleBlog.php?Id=".$row['sno'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            // echo "<a href='faqadmin/update.php?Sno=". $row['Sno'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='faqadmin/delete.php?Sno=". $row['sno'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";

                                    echo "</tr>";
                                }
                                

                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No Record Found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


