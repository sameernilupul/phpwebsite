<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>This is home page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/' . $css; ?>"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src ="<?php echo base_url() . '/'.'application/javascripts/home_actions.js'?>"> </script>    
    </head>
    <body>
        <div id ="big_div">
            <div id ="topbox_div">
                <div id="signin_div">
                    <form>
                        <a id ="signin_btn" href="#" class="button signin">SIGN IN</a>
                    </form>
                </div>
                <div id="signup_div">
                    <form>
                        <a id ="signup_btn" href="#" class="button signup">SIGN UP</a>
                    </form>
                </div>
                <div id ="search_div">
                    <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="40" placeholder="Search..." />
                    </form>
                </div>

            </div>
            <div id ="column1_div">
                <?php
                $counter = 0;
                foreach ($result as $row) {
                    $counter++;
                    if ($counter % 5 != 1)
                        continue;
                    echo'
                    <div>
                    <div style="width: 85%;height: 20px; position: relative;float: bottom">

                    </div>    
                    <div style="border-top-left-radius: 15px; border-top-right-radius: 15px;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; width: 85%; left: 7%; position: relative;float: bottom;background: #EBF3EC;box-shadow: 0px 0px 10px #000 "  >

                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%">
                            <center>' . $row->name . '</center>
                        </div>
                        <img src="' . $base . $row->image . '"  style="position: relative;left: 5%" width="90%" />
                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Actual price : ' . $row->unitprice . '</center>

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Our price : ' . $row->offerprice . '</center>                            
                        </div>
                        <div style="width: 100%;font-size: small;">
                            <div style="position: relative">
                                <label style="left: 10px;position: relative;float: left"> Hits 100 </label> 
                                <form >
                                    <input type="submit" value="Bid it" style="position: relative;left: 40%"/>
                                </form>
                            </div>
                        </div>

                    </div> 
                </div>
                ';
                }
                ?>

            </div>
            <div id ="column2_div">
                <?php
                $counter = 0;
                foreach ($result as $row) {
                    $counter++;
                    if ($counter % 5 != 2)
                        continue;
                    echo'
                    <div>
                    <div style="width: 85%;height: 20px; position: relative;float: bottom">

                    </div>    
                    <div style="border-top-left-radius: 15px; border-top-right-radius: 15px;width: 85%;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; left: 7%; position: relative;float: bottom;background: #EBF3EC;box-shadow: 0px 0px 10px #000 "  >

                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%">
                            <center>' . $row->name . '</center>
                        </div>
                        <img src="' . $base . $row->image . '"  style="position: relative;left: 5%" width="90%" />
                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Actual price : ' . $row->unitprice . '</center>

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Our price : ' . $row->offerprice . '</center>                            
                        </div>
                        <div style="width: 100%;font-size: small;">
                            <div style="position: relative">
                                <label style="left: 10px;position: relative;float: left"> Hits 100 </label> 
                                <form >
                                    <input type="submit" value="Bid it" style="position: relative;left: 40%"/>
                                </form>
                            </div>
                        </div>

                    </div> 
                </div>
                ';
                }
                ?>

            </div>
            <div id ="column3_div">
                <?php
                $counter = 0;
                foreach ($result as $row) {
                    $counter++;
                    if ($counter % 5 != 3)
                        continue;
                    echo'
                    <div>
                    <div style="width: 85%;height: 20px; position: relative;float: bottom">

                    </div>    
                    <div style="border-top-left-radius: 15px; border-top-right-radius: 15px;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;width: 85%; left: 7%; position: relative;float: bottom;background: #EBF3EC;box-shadow: 0px 0px 10px #000 "  >

                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%">
                            <center>' . $row->name . '</center>
                        </div>
                        <img src="' . $base . $row->image . '"  style="position: relative;left: 5%" width="90%" />
                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Actual price : ' . $row->unitprice . '</center>

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Our price : ' . $row->offerprice . '</center>                            
                        </div>
                        <div style="width: 100%;font-size: small;">
                            <div style="position: relative">
                                <label style="left: 10px;position: relative;float: left"> Hits 100 </label> 
                                <form >
                                    <input type="submit" value="Bid it" style="position: relative;left: 40%"/>
                                </form>
                            </div>
                        </div>

                    </div> 
                </div>
                ';
                }
                ?>

            </div>
            <div id ="column4_div">
                <?php
                $counter = 0;
                foreach ($result as $row) {
                    $counter++;
                    if ($counter % 5 != 4)
                        continue;
                    echo'
                    <div>
                    <div style="width: 85%;height: 20px; position: relative;float: bottom">

                    </div>    
                    <div style="border-top-left-radius: 15px; border-top-right-radius: 15px;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; width: 85%; left: 7%; position: relative;float: bottom;background: #EBF3EC;box-shadow: 0px 0px 10px #000 "  >

                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%">
                            <center>' . $row->name . '</center>
                        </div>
                        <img src="' . $base . $row->image . '"  style="position: relative;left: 5%" width="90%" />
                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Actual price : ' . $row->unitprice . '</center>

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Our price : ' . $row->offerprice . '</center>                            
                        </div>
                        <div style="width: 100%;font-size: small;">
                            <div style="position: relative">
                                <label style="left: 10px;position: relative;float: left"> Hits 100 </label> 
                                <form >
                                    <input type="submit" value="Bid it" style="position: relative;left: 40%"/>
                                </form>
                            </div>
                        </div>

                    </div> 
                </div>
                ';
                }
                ?>

            </div>
            <div id ="column5_div">
                <?php
                $counter = 0;
                foreach ($result as $row) {
                    $counter++;
                    if ($counter % 5 != 0)
                        continue;
                    echo'
                    <div>
                    <div style="width: 85%;height: 20px; position: relative;float: bottom">

                    </div>    
                    <div style="border-top-left-radius: 15px; border-top-right-radius: 15px;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; width: 85%; left: 7%; position: relative;float: bottom;background: #EBF3EC;box-shadow: 0px 0px 10px #000 "  >

                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%">
                            <center>' . $row->name . '</center>
                        </div>
                        <img src="' . $base . $row->image . '"  style="position: relative;left: 5%" width="90%" />
                        <div style=" height: 10px;width: 100%">

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Actual price : ' . $row->unitprice . '</center>

                        </div>
                        <div style="width: 100%;background: #cdd;font-size: small">
                            <center>Our price : ' . $row->offerprice . '</center>                            
                        </div>
                        <div style="width: 100%;font-size: small;">
                            <div style="position: relative">
                                <label style="left: 10px;position: relative;float: left"> Hits 100 </label> 
                                <form >
                                    <input type="submit" value="Bid it" style="position: relative;left: 40%"/>
                                </form>
                            </div>
                        </div>

                    </div> 
                </div>
                ';
                }
                ?>

            </div>
            <div id ="bottom1_div">

            </div>
            <div id ="bottom2_div">

            </div>

        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
