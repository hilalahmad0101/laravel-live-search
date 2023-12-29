<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Searching</title>
    @vite('resources/css/app.css')
</head>

<body>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            function loadData() {
                $.ajax({
                    url: '/get/data',
                    type: 'GET',
                    success: (data) => {
                        $("#search_data").html(data)
                    }
                })
            }

            loadData();


            $(document).on('keyup', '#live_search', function() {
                const value = $(this).val();
                console.log(value);
                $.ajax({
                    url: '/get/search/data',
                    type: 'GET',
                    data: {
                        value
                    },
                    success: (data) => { 
                        $("#search_data").html(data)
                    }
                })
            })

            $(document).on('change', '#value_change', function() {
                let value= $(this).val();
                console.log(value);
                $.ajax({
                    url: '/get/value/data',
                    type: 'GET',
                    data: {
                        value
                    },
                    success: (data) => {  
                        $("#search_data").html(data)
                    }
                })
            })
        })
    </script>

</body>

</html>
