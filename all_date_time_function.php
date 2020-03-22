 <h2>
            <?php
         
           $x=mktime(8,45,10,6,20,2018);
            echo 'create time:'.date('y/m/d h:i:sa',$x);
            ?>
            </h2>
            
            <h2>
               
                <?php
                $d=strtotime("10:30pm April 15 2014");
                echo "Created date is " . date("Y-m-d h:i:sa", $d);
                ?>
            </h2>
             <!--agamikal somoy deyar jonno php code-->
            <h2>tomorrow:
            <?php
                $d=strtotime("tomorrow");
                echo date("Y-m-d h:i:sa", $d) . "<br>";
                ?>
            </h2>
             <!--ak sopta pora date deyar jonno php code-->
            <h2>next Saturday:
            <?php
                $d=strtotime("next Saturday");
                echo date("Y-m-d h:i:sa", $d) . "<br>";
                ?>
            
            </h2>
            <!--3 mas vasi deyar jonno php code-->
           <h2>+3 Months:`   
                <?php
                $d=strtotime("+3 Months");
                echo date("Y-m-d h:i:sa", $d) . "<br>";
                ?>
            </h2>
            
            <h2>The example below outputs the dates for the next six Saturdays:<br>
                
                <?php
                $startdate = strtotime("Saturday");
                $enddate = strtotime("+6 weeks",$startdate);

                while ($startdate < $enddate) {
                  echo date("M d", $startdate),"<br>";
                  $startdate = strtotime("+1 week", $startdate);
                }
                ?>
            </h2>
            
            <h2>The example below outputs the number of days until 4th of July: <br>
                <?php
                $d1=strtotime("July 04");
                $d2=ceil(($d1-time())/60/60/24);
                echo "There are " . $d2 ." days until 4th of July.";
                ?>
            </h2>