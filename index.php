<html>
    <head>
        <title>UI PDF Creator</title>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" type="text/css" media="all">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(function(){
                $('.component').draggable({containment : 'parent'});
            });
        </script>

    </head>
    <body>
        <header> <h1>UI PDF Creator</h1> </header>
        <section>
            <section id="esquerda">
                <nav id="menu">
                    <ul>
                        <li>Text Element</li>
                        <li>Image Element</li>
                    </ul>
                </nav>    
            </section>
            <section id="center">
                <div id="paper">
                    <div class="component">

                    </div>
                </div>
            </section>
        </section>
        <footer>

        </footer>
    </body>
</html>
