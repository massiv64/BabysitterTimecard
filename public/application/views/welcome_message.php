<html>
    <body>
        <button type="button" id="clock-in">Clock In</button>
        <div id="clock-in-result"></div>
        <br/>
        <button type="button" id="clock-out">Clock Out</button>
        <div id="clock-out-result"></div>
        <br/>
        <button type="button" id="get-all-times">Get All Times</button>
        <div id="get-all-times-result"></div>
        <br/>


        <script src="https://code.jquery.com/jquery-3.1.1.min.js"
                integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                crossorigin="anonymous"></script>
        <script>
            (function($){
                $('#clock-in').on('click', function(e){
                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        data: {
                            time: new Date()
                        },
                        url: "/welcome/insert_clock_in",
                        success: function (result) {
                            console.log(result);
                            $("#clock-in-result").html(result);
                        },
                        error: function (result) {
                            console.log(result);
                            $("#clock-in-result").html(result.responseText);
                        }
                    });

                    return false;
                });
                $('#clock-out').on('click', function(e){
                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        data: {
                            time: new Date()
                        },
                        url: "/welcome/insert_clock_out",
                        success: function (result) {
                            console.log(result);
                            $("#clock-out-result").html(result);
                        },
                        error: function (result) {
                            console.log(result);
                            $("#clock-out-result").html(result.responseText);
                        }
                    });

                    return false;
                });
                $('#get-all-times').on('click', function(e){
                    e.preventDefault();

                    $.ajax({
                        type: "GET",
                        url: "/welcome/get_all_times",
                        success: function (result) {
                            console.log(result);
                            $("#get-all-times-result").html(result);
                        },
                        error: function (result) {
                            console.log(result);
                            $("#get-all-times-result").html(result.responseText);
                        }
                    });

                    return false;
                });
            })(jQuery);
        </script>
    </body>
</html>