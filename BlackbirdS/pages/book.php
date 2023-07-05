<?php
    require_once("./../includes/db_conect.php");
    require_once("./../includes/function_pat.php");
    getHeader();
    getSidebar();

$sql="SELECT * FROM appointment
    join on doctor.username=appointment.doctor
where doctor = pat_id";
                $q=$conn->query($sql);
                while ($row=$q->fetch_assoc())
                { ?>
                <tr>
                    <td><?=$row["Depertment"]?></td>
                    <td><?=$row["appDate"]?></td>
                    <td><?=$row["appTime"]?></td>
                    <td><a href="" class="btn btn-danger btn-sm">Cancel</a></td>
                </tr>

            <?php } ?>