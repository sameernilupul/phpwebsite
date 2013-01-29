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
    </head>
    <body>
        <div id ="big_div">
            <div id ="topbox_div">
                <div id="signin_div">
                    <form>
                        <a href="#" class="button signin">SIGN IN</a>
                    </form>
                </div>
                <div id="signup_div">
                    <form>
                        <a href="#" class="button signup">SIGN UP</a>
                    </form>
                </div>
                <div id ="search_div">
                    <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="40" placeholder="Search..." />
                    </form>
                </div>

            </div>
            <div id ="column1_div">

            </div>
            <div id ="column2_div">

            </div>
            <div id ="column3_div">

            </div>
            <div id ="column4_div">

            </div>
            <div id ="column5_div">

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
