<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php all filter</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
         .php_filter{
            background-image: url(image/8144_cool_sunrise.jpg);
                padding: 57px 0;
                max-width: 1350px;
                max-height: 650px;
            
        }
        .regester{
           background-color: rgb(0,0,0,.5);
            border-radius: 9px 8px;
            color: white;
            padding-left: 14px;
            padding-top: 44px;
            padding-right: 21px;
            padding-bottom: 57px;
        }
        .regester p{
            font-size: 20px;
        }
        .green{
            color: green;
            font-size: 15px
        }
        .red{
            color: red;
            font-size: 15px
        }
        .date_function{
            background-color: yellow;
        }
    
    </style>
</head>
<body>
          <!-- somoy show korar jonno -->
<section class="date_function">
    <div class="container">
        <div class="raw">
            <div class="col-md-6">
                <div class="date text-left">
                     <h2 style="color:red;">Today Date:<?php echo date('d/m/y') ;?> </h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="date text-right">
                     <h2>Time:<?php 
                         date_default_timezone_set("America/New_York");
                         echo date('h:i:sa');
                         ?> 
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
           
                 
            <section class="time_function">
                <div class="container">
                    <div class="raw">
                       
                        <div class="col-md-4">
                            <div class="time regester">
                             <!-- tomorrow time check korar jonno -->
                             <?php
                                $d=strtotime($_POST['time']);
                                echo date('y/m/d h:i:sa',$d);
                                ?>
                              <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                                 <input type="text" name="time" class="form-control form-group">
                                 <br>
                                 <input type="submit" value="submit" class="btn btn-pramery">
                                </form>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="time regester">
                               <h2>The example below outputs the dates for the next six Saturdays:<br>
                
                                    <?php
                                    $startdate = strtotime($_POST['day']);
                                    $enddate = strtotime("+6 weeks",$startdate);

                                    while ($startdate < $enddate) {
                                      echo date("M d", $startdate),"<br>";
                                      $startdate = strtotime("+1 week", $startdate);
                                    }
                                    ?>
                                </h2>
                                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                                 <input type="text" name="day" class="form-control form-group">
                                 <br>
                                 <input type="submit" value="submit" class="btn btn-pramery">
                                </form>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="time regester">
                               <h2>The example below outputs the number of days until 4th of Julay: <br>
                                    <?php
                                    $d1=strtotime($_POST['date']);
                                    $d2=ceil(($d1-time())/60/60/24);
                                    echo "There are " . $d2 ." days until 4th of July.";
                                    ?>
                                </h2>
                                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                                 <input type="text" name="date" class="form-control form-pramery">
                                 <br>
                                 <input type="submit" value="submit" class="btn btn-pramery">
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
 </body>
</html>