<?php
    /**
    *  Mobile Theme
    */
    ?>
    <html>
        <head>
        
            <?php
                
            ?>
            <style>

                body {

                    background-color: #d12323;
                    font-family: georgia;
                    color: #000000;
                    font-size:12px
                }

                h1 {

                    color: #ffffff;

                }

                h2 {

                    color: #ffffff;

                }

                h3 {

                    color: #ffffff;

                }

                a {

                    color: #ff0009;

                }

                /*  Forms  */
                textarea, button, input[type="text"] {
                    border-bottom-left-radius:3px;
                    border-bottom-right-radius:3px;
                    border-top-left-radius:3px;
                    border-top-right-radius:3px;
                    margin-bottom:0;
                    padding-left:14px;
                    padding-right:14px;
                    background:#f9f9f9;
                    border:0;
                    box-shadow: 0px 0px 2px #222;
                    padding:5px;
                    width:97%;
                    color:#888
                }
                button, input[type="submit"] {
                    background:#c94545;
                    color:#4c632a;
                    border-bottom-left-radius:3px;
                    border-bottom-right-radius:3px;
                    border-top-left-radius:3px;
                    border-top-right-radius:3px;
                    box-shadow: 0px 0px 2px #222;
                    border:0;
                    padding:7px 10px;
                    margin-bottom:20px;
                }
                label { font-weight:bold }

                img { max-width:97%; }
            </style>
        </head>
        <body>
            <!-- Template generated: 1366116320 -->
            <div id="primary">
                <div id="content" role="main">
                    <?php 
					
						$p = get_page($_GET[article_id]);
						echo apply_filters("the_content", $p->post_content);
						
					?>
                </div><!-- #content -->
            </div><!-- #primary -->
            
        </body>
    </html>