<?php
require 'core.php';
include 'header.php';

$query="SELECT * FROM `patient_diagnosis` WHERE 1";
$query_run=mysqli_query($dbcon, $query);
$query_num_rows = mysqli_num_rows($query_run);

if ($query_num_rows==0) {
     echo 'No results';
} else if($query_num_rows>=1){
    while ($rows = mysqli_fetch_assoc($query_run)) {
            $id=$rows['id'];
            $date=$rows['date'];
            $full_name=$rows['full_name'];
            $age=$rows['age'];
            $sex=$rows['sex'];
            $weight=$rows['weight'];
            $symptoms=$rows['symptoms'];
            $allergies=$rows['allergies'];
            $diagnosis=$rows['diagnosis'];

        echo '<table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>ID</th>
                    <th>DATE</th>
                    <th>FULL NAME</th>
                    <th>AGE</th>
                    <th>SEX</th>
                    <th>WEIGHT</th>
                    <th>SYMPTOMS</th>
                    <th>ALLERGIES</th>
                    <th>DIAGNOSIS</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">'. $id .'</td>
                        <td>'.$date.'</td>
                        <td>'.$full_name.'</td>
                        <td>'.$age.'</td>
                        <td>'.$sex.'</td>
                        <td>'.$weight.'</td>
                        <td>'.$symptoms.'</td>
                        <td>'.$allergies.'</td>
                        <td>'.$diagnosis.'</td>
                        
                    </tr>

                    <tr>
                    <a name="" id="" class="btn btn-dark" href="doctor.php" role="button">Back</a>
                    </tr>
                   
                </tbody>
        </table>';

        
    }
}


include 'footer.php';
?>