<html>
    <head>
        <title>UI PDF Creator</title>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js" type="text/javascript"></script>
<!--        <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script>-->

        <script type="text/javascript">
            $(function(){
                $('.component').draggable({ helper: "clone", revert : "invalid"});
                $('#paper').droppable({
                    drop: function( event, ui ) {
                        if($(ui.draggable).hasClass('component')){
                            var $el = $(ui.draggable)
                            .clone()
                            .removeClass('component')
                            .css('top', ui.position.top,'left')
                            .addClass('valid element');
                            
                            $(this).append($el);
                            selectElement($el);
                            $('.valid').draggable({ containment : 'parent',
                                drag: function(event, ui){
                                    selectElement($(ui.helper));
                                }
                            });
                        }
                    }
                });
                
                function selectElement($el){
                    $('#paper .valid').removeClass('selected');
                    $el.addClass('selected');
                }
            });
        </script>

    </head>
    <body>
        <header> <h1>UI PDF Creator</h1> </header>
        <section>
            <section id="esquerda">
                <nav id="menu">
                    <ul>
                        <li><div class="component">Text</div></li>
                        <li><div class="component">Imagem</div></li>
                    </ul>
                </nav>    
            </section>
            <section id="center">
                <div id="paper"></div>
            </section>
        </section>
        <footer>

        </footer>
    </body>
</html>
