<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <script>
            function trimInputs(){
                $(document).on('change', 'input', function() {
                    $(this).val($.trim($(this).val()));
                })
            }
        </script>
</head>

<body>
    <input type="text">
   <!-- <div class="container">
        @for ($i = 0; $i < 10; $i++) 
        <div class="col-sm-12">
            <div class="form-check form-switch">
                <input class="form-check-input checkbtn" type="checkbox" role="switch" id="" data-id="{{$i}}" {{ $i === 2 ? 'checked' : ''}}  ><br>
                <label class="form-check-label checklabel" for="checkbox{{$i}}"  >{{ $i === 2 ? 'active' : 'inactive'}}</label>
            </div>
       </div>
    @endfor
    </div> -->

    <!-- <form action="./api/senddata" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror -->

    <!-- Add more form fields and error display as needed -->
    <!--  <button type="submit">Submit</button>
    </form> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            // trimInputs();
            $('.checkbtn').on('click', function () {
                var isChecked = $(this).prop('checked'); // Check if the checkbox is checked
                var dataId = $(this).data('id');
                var label = $(this).siblings('.checklabel');
                let status = 0;
                label.text('inactive');        
                if (isChecked) {
                    
                    label.text('active'); 
                    status = 1;
                    
                } 

                $.ajax({
                        url: '/api/sendactive', // Replace with your API endpoint URL
                        type: 'POST',
                        data: {status},
                        success: function (data) {
                            console.log(data);
                        },
                        error: function (xhr, status, error) {
                        
                            console.error(error);
                        }
                    });
            });

        
        });
    </script>
</body>


</html>