
<html>
<head>
    <title>Disable Browser Back Button Using JavaScript</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
</head>
<body>
<!--    <a href="Page2.htm">Click Here...</a>-->
    <h1>THANK YOU</h1>
</body>
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
    </script>
</html>
