<!DOCTYPE html>
<html>
    <head>
        <title>{{@config('app.name')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="wrapper" style="width: 600px; margin:0 auto;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">      
                            <div class="mt-5 mb-3 clearfix">
                                <h3 class="pull-left">Immunization Records</h3>
                                <a href="create" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <!-- all dynamic page content goes here -->
                            @yield('content')

                        </div>
                    </div>
                </div>
        </div>        

        <script src="https://code.jquery.com/jquery.js"></script>
    </body>
</html>