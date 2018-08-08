<?php
    echo "<script type='text/JavaScript'>
        function delRows(){
          var pageRes = document.getElementById('pageRes');
          pageRes.parentNode.removeChild(pageRes);
        }
        delRows();
        </script>";
      if(!empty($result)) 
                        { 
                            foreach($result as $row) 
                            {
                            $id = $row['id'];
                            $cikkszam = $row['cikkszam'];
                            $gyarto = $row['gyarto'];
                            $cikknev = $row['cikknev'];
                            $cikkfajta = $row['cikkfajta'];
                            $ar = $row['ar'];
                            $garancia = $row["garancia"];
                            $keszlet = $row['keszlet'];
                            $leiras = $row['leiras'];
                            $cikkcsopnev=$row['cikkcsopnev'];
                            $kepek=$row['kepek'];
                        ?>
                          <tbody>
                          <tr class='table-row'>
                          <td><input type="checkbox" class="chkCheckBoxId" value="<?php echo $row['id']; ?>" name="id"/></td>
                          <td name="cikkszam[]" value="cikkszam" id="cikkszam"> <?php echo $row['cikkszam']; ?> </td>
                          <td title="<?php echo $row['gyarto'];?>" id="rov"><?php echo $row['gyarto']; ?></td>
                          <td title="<?php echo $row['cikknev'];?>" id="rov"><?php echo $row['cikknev']; ?></td>
                          <td title="<?php echo $row['cikkcsopnev'];?>" id="rov"><?php echo $row['cikkcsopnev']; ?></td>
                          <td title="<?php echo $row['cikkfajta'];?>" id="rov"><?php echo $row['cikkfajta']; ?></td>
                          <td title="<?php echo $row['ar']; ?>"><?php echo $row['ar']; ?></td>
                          <td title="<?php echo $row['garancia'];?>" id="rov"><?php echo $row['garancia']; ?></td>
                          <td title="<?php echo $row['keszlet'];?>" id="rov"><?php echo $row['keszlet']; ?></td>
                          <td title="<?php echo $row['leiras'];?>" id="rov"> <a target="_blank" href="<?php echo $kepek;?>"><img src="<?php echo $kepek;?>" width="50px" height="50px" alt="X" class="img-responsive"></a></td>
                          <td id="rov"><textarea name="cikkszam" id="cikkszam" class="form-control"><?php echo $row['cikkszam'];?></textarea></td>
                          <td><textarea name="cikknev" id="cikknev" class="form-control"><?php echo $row['cikknev'];?></textarea></td>
                          <td id="rov"><textarea name="garancia" id="garancia" class="form-control"><?php echo $row['garancia'];?></textarea></td>
                          <td id="rov"><textarea name="tomeg" id="tomeg" class="form-control"></textarea></td>
                          <td id="rov"><textarea name="x" id="x" class="form-control"></textarea></td>
                          <td id="rov"><textarea name="y" id="y" class="form-control"></textarea></td>
                          <td id="rov"><textarea name="z" id="z" class="form-control"></textarea></td>
                          <td id="rov"><textarea name="megjegyzes" id="megjegyzes" class="form-control"></textarea></td>
                          <td id="nem"><textarea name="leiras" id="leiras"><?php echo $row['leiras'];?></textarea></td>
                          <td id="nem"><textarea name="kep" id="kep"><?php echo $row['kepek'];?></textarea></td>
                          <td id="nem"><textarea name="ar" id="ar"><?php echo $row['ar'];?></textarea></td>
                          <td id="rov">
                          <select name="kategoria" class="select">
                          <?php
                          require "include/db.php";
                          while ($row = mysqli_fetch_array($resulta)) 
                          {
                          echo "<option value=" . $row['nev'] . ">" . $row['nev'] . "</option>";
                          }
                          ?>       
                          <select></td>
                          <td id="rov">
                          <select name="gyarto" class="select2">
                          <?php
                          while ($row = mysqli_fetch_array($resultb)) 
                          {
                          echo "<option value=" . $row['nev'] . ">" . $row['nev'] . "</option>";
                          }
                          ?>        
                          </select></td>
                          </tr>
                          </tbody>
                     <?php
                    }
                    }
                    ?>
                    <?php
  include "szukit.php";
?>