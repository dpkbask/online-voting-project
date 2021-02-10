<form name="frm" method="post" id="frm" action="vcod.php">
         <table>
         	<tr>
            	<td>Select</td>
                <td><select name="id">
                <option selected>-Choose Any One-</option>
                <?php
				$v="SELECT * FROM `cnddat`";
				$rs=mysql_query($v) or die(mysql_error());
	
                while($rec=mysql_fetch_array($rs))
				{
			
			?>
            <option value="<?php echo $rec['id'] ?>"><?php echo $rec['name'] ?></option>
			<?php
			}
			?>
        </select></td>
            </tr>
            <tr>
            	<td>
                	<input type="submit" name="ok" id="ok" value="Submit">
                </td>
            </tr>
         </table>
        </form>