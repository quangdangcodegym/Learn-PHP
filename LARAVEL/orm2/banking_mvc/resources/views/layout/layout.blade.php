<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @includeIf('layout.components.css_header', ['key_css_header' => 'some data from '])
</head>
<body>

    <div class="container">
        <div class="header">
            @yield('frmCreate')
        </div>
        <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            Modal body..
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>
    <!-- Content -->
    @yield('content')
    <!-- End Content -->
    </div>
    
    @include('layout.components.js_footer');
    <script>
        /**
        $(function() {
            $('.btnEdit').on('click', function(){
                console.log($(this));
                $('#frmCreateCustomer').hide();
                $('#frmCreateEdit').hide();
                $('#fullNameEdit').val($(this).parent().parent().find('td')[1].innerText);
                $('#emailEdit').val($(this).parent().parent().find('td')[2].innerText);
                $('#phoneEdit').val($(this).parent().parent().find('td')[3].innerText);
                $('#addressEdit').val($(this).parent().parent().find('td')[4].innerText);
            })
        });
        **/
    </script>
</body>
</html>