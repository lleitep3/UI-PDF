<html>
    <head>
        <title>UI PDF Creator</title>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" type="text/css" media="all">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js" type="text/javascript"></script>
        <style type="text/css">
            body{
                background-color:#eee;
                margin: 5px 0 0 5px;
            }
            header h2{
                margin: 10px 0 0 50px;
                color: #aaa;
            }
            
            footer h6{
                margin: 2px 5px auto;
                display: inline-block;
                color: #ccc;
                font-style: italic;
                float: right;
            }
            
            body section{
                display: inline-block;
                margin: 5px auto;
                height: 650px;
                width: 100%;                              
                border-radius: 25px;
                border: dotted #cccccc 1px;
                background-color:#eee;
            }
            
            #paper {
                position:absolute;
                top: 10%;
                left: 10%;
                display: inline-block;
                width: 420px;
                height: 594px;
                background-color: #FFFFFF;
                box-shadow: -15px -10px 15px -7px #ccc;
                border-radius: 0px;
               
            }
            #toolbar{
                position: relative;
                display: inline-block;
                top: 1%;
                left:50%;
                width: 200px;
                height: 500px;
                border:dotted #cccccc 1px;
                box-shadow: -10px -5px 10px -3px #ccc;
                background-color:gainsboro;
            }
            
           .handle{
                position: absolute;
                left: 100%;
                top: -16px;
                background-color: #fff;
                border:dotted #cccccc 1px;
                cursor: move;
                width: 16px;
                height: 16px;
            }


        </style>
        
        <script type="text/javascript">
        
        $(function(){
            $('#toolbar').draggable({handle: 'span', containment : 'parent'});
            $('#paper').draggable({handle: 'span', containment : 'parent'});
            $('#paper span').toggle(
                function(){
                    $('#paper').dblclick(function(){
                        css({'width':'594px','height':'420px'});                        
                    });
                },
                function(){
                   $('#paper').dblclick(function(){
                       css({'width':'420px','height':'594px'});
                   });
                   }                
            );

        });
        </script>

    </head>
    <body>
        <header> <h2>UI PDF Creator</h2> </header>
        <section>
            <div id="paper"><span class="handle"></span></div>
            <div id="toolbar"><span class="handle"></span></div>
        </section>

        <footer><h6>UI PDF Creator - 2012 </h6> </footer>
        
    </body>
</html>