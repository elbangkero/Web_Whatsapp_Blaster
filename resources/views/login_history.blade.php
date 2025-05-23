<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example Template</title>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" type="text/css" media="all" rel="stylesheet" />
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/demo.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>

@if($login->status=='undefined')

<body style="background-color: rgb(0,168,132);">
    <?php

    // Source: http://stackoverflow.com/questions/5943368/dynamically-generating-a-qr-code-with-php
    // Google Charts Documentation: https://developers.google.com/chart/infographics/docs/qr_codes?csw=1#overview

    // CHart Type
    $cht = "qr";

    // CHart Size
    $chs = "350x350";

    // CHart Link
    // the url-encoded string you want to change into a QR code
    $chl = urlencode($qr_code->qr_code);

    // CHart Output Encoding (optional)
    // default: UTF-8
    $choe = "UTF-8";

    $qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;

    ?>

    <div class="bs-example" style="background-color: rgb(0,168,132);height:100%">
        <!-- Bootstrap Grid -->
        <div class="row" style="margin: 100px;padding:5px">
            <div class="col-xs-6" style="background-color:white;margin-left:300px">

                <div class="col-xs-6" style="margin-top: 70px;">
                    <div class="container">
                        <h5>
                            <b>
                                <div class="landing-title _3-XoE">To use WhatsApp on your computer:</div>
                            </b>
                            <br>
                            <ol class="_2A31C">
                                <li class="QtrYx">Open WhatsApp on your phone</li>
                                <br>
                                <li class="QtrYx"><span dir="ltr" class="i0jNr">Tap <strong><span dir="ltr" class="i0jNr">Menu <span class="_30yMe"><svg height="24px" viewBox="0 0 24 24" width="24px">
                                                        <rect fill="#f2f2f2" height="24" rx="3" width="24"></rect>
                                                        <path d="m12 15.5c.825 0 1.5.675 1.5 1.5s-.675 1.5-1.5 1.5-1.5-.675-1.5-1.5.675-1.5 1.5-1.5zm0-2c-.825 0-1.5-.675-1.5-1.5s.675-1.5 1.5-1.5 1.5.675 1.5 1.5-.675 1.5-1.5 1.5zm0-5c-.825 0-1.5-.675-1.5-1.5s.675-1.5 1.5-1.5 1.5.675 1.5 1.5-.675 1.5-1.5 1.5z" fill="#818b90"></path>
                                                    </svg></span></span></strong> or <strong><span dir="ltr" class="i0jNr">Settings <span class="_30yMe"><svg width="24" height="24" viewBox="0 0 24 24">
                                                        <rect fill="#F2F2F2" width="24" height="24" rx="3"></rect>
                                                        <path d="M12 18.69c-1.08 0-2.1-.25-2.99-.71L11.43 14c.24.06.4.08.56.08.92 0 1.67-.59 1.99-1.59h4.62c-.26 3.49-3.05 6.2-6.6 6.2zm-1.04-6.67c0-.57.48-1.02 1.03-1.02.57 0 1.05.45 1.05 1.02 0 .57-.47 1.03-1.05 1.03-.54.01-1.03-.46-1.03-1.03zM5.4 12c0-2.29 1.08-4.28 2.78-5.49l2.39 4.08c-.42.42-.64.91-.64 1.44 0 .52.21 1 .65 1.44l-2.44 4C6.47 16.26 5.4 14.27 5.4 12zm8.57-.49c-.33-.97-1.08-1.54-1.99-1.54-.16 0-.32.02-.57.08L9.04 5.99c.89-.44 1.89-.69 2.96-.69 3.56 0 6.36 2.72 6.59 6.21h-4.62zM12 19.8c.22 0 .42-.02.65-.04l.44.84c.08.18.25.27.47.24.21-.03.33-.17.36-.38l.14-.93c.41-.11.82-.27 1.21-.44l.69.61c.15.15.33.17.54.07.17-.1.24-.27.2-.48l-.2-.92c.35-.24.69-.52.99-.82l.86.36c.2.08.37.05.53-.14.14-.15.15-.34.03-.52l-.5-.8c.25-.35.45-.73.63-1.12l.95.05c.21.01.37-.09.44-.29.07-.2.01-.38-.16-.51l-.73-.58c.1-.4.19-.83.22-1.27l.89-.28c.2-.07.31-.22.31-.43s-.11-.35-.31-.42l-.89-.28c-.03-.44-.12-.86-.22-1.27l.73-.59c.16-.12.22-.29.16-.5-.07-.2-.23-.31-.44-.29l-.95.04c-.18-.4-.39-.77-.63-1.12l.5-.8c.12-.17.1-.36-.03-.51-.16-.18-.33-.22-.53-.14l-.86.35c-.31-.3-.65-.58-.99-.82l.2-.91c.03-.22-.03-.4-.2-.49-.18-.1-.34-.09-.48.01l-.74.66c-.39-.18-.8-.32-1.21-.43l-.14-.93a.426.426 0 00-.36-.39c-.22-.03-.39.05-.47.22l-.44.84-.43-.02h-.22c-.22 0-.42.01-.65.03l-.44-.84c-.08-.17-.25-.25-.48-.22-.2.03-.33.17-.36.39l-.13.88c-.42.12-.83.26-1.22.44l-.69-.61c-.15-.15-.33-.17-.53-.06-.18.09-.24.26-.2.49l.2.91c-.36.24-.7.52-1 .82l-.86-.35c-.19-.09-.37-.05-.52.13-.14.15-.16.34-.04.51l.5.8c-.25.35-.45.72-.64 1.12l-.94-.04c-.21-.01-.37.1-.44.3-.07.2-.02.38.16.5l.73.59c-.1.41-.19.83-.22 1.27l-.89.29c-.21.07-.31.21-.31.42 0 .22.1.36.31.43l.89.28c.03.44.1.87.22 1.27l-.73.58c-.17.12-.22.31-.16.51.07.2.23.31.44.29l.94-.05c.18.39.39.77.63 1.12l-.5.8c-.12.18-.1.37.04.52.16.18.33.22.52.14l.86-.36c.3.31.64.58.99.82l-.2.92c-.04.22.03.39.2.49.2.1.38.08.54-.07l.69-.61c.39.17.8.33 1.21.44l.13.93c.03.21.16.35.37.39.22.03.39-.06.47-.24l.44-.84c.23.02.44.04.66.04z" fill="#818b90"></path>
                                                    </svg></span></span></strong> and select <strong>Linked Devices</strong></span></li>
                                <br>
                                <li class="QtrYx"><span dir="ltr" class="i0jNr">Tap on <strong>Link a Device</strong></span></li>
                                <br>
                                <li class="QtrYx">Point your phone to this screen to capture the code</li>
                                <br>
                                <li class="QtrYx">Click this <a href="{{route('main')}}" class="btn btn-success btn-xs">Button</a> to refresh the app</li>
                            </ol>
                        </h5>
                    </div>
                </div>
                <div class="col-xs-6">
                    <img src="<?php echo $qrcode ?>" alt="My QR code">
                </div>
            </div>
        </div>
    </div>

    @else


    <body>
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="http://127.0.0.1:8000/#">
                            Whatsapp Bulk Messenger
                        </a>
                    </li>
                    <li>
                        <a href="{{route('main')}}">Setup Config</a>
                    </li>
                    <li>
                        <a href="{{route('history')}}">Messenge History</a>
                    </li>
                    <li style="background-color:white">
                        <a style="color:black" href="{{route('login_history')}}">Login History</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">



                            <!-- /#wrapper -->
                            <!-- YOUR CONTENT GOES HERE -->
                            <div class="container">

                                <div class="row">

                                    <div class="row justify-content-center">
                                        <div class="col-md-12 text-center mb-12">
                                            <h2 class="heading-section">Messenger History List</h2>

                                        </div>

                                    </div>
                                    @if(isset($code) && $code == 200)
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <button type="button" class="btn btn-success btn-xs" style="float: right;" data-toggle="modal" data-target="#addConfig">
                                            Add
                                        </button>
                                        <thead>
                                            <tr>
                                                <th>Config ID</th>
                                                <th>Phone number</th>
                                                <th>User name</th>
                                                <th>Platform</th>
                                                <th>last login</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($login_list as $list)
                                            <tr>
                                                <td>{{$list->id}}</td>
                                                <td>{{$list->phone_number}}</td>
                                                <td>{{$list->user_name}}</td>
                                                <td>{{$list->platform}}</td>
                                                <td>{{$list->created_at}}</td>
                                                <td>
                                                    @if($list->status=='active')
                                                    <div style="background-color: green;text-align:center;color:white"> Active </div>
                                                    @else
                                                    <div style="background-color: red;text-align:center;color:white"> Inactive </div>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Config ID</th>
                                                <th>Phone number</th>
                                                <th>User name</th>
                                                <th>Platform</th>
                                                <th>last login</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>

        </div>
        @endif

    </body>
    <!-- JavaScript: placed at the end of the document so the pages load faster -->
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script>
        $("#deleteconfig").click(function() {
            if (!confirm("Do you want to delete")) {
                return false;
            }
        });

        $('#save_changes').click(function() {
            if ($('#fileInput').val() == '') {
                alert('please upload a csv file');
                return false;
            }

        });
        $(document).ready(function() {
            var table = $('#example').DataTable({
                fixedHeader: true,
                "order": [
                    [5, "asc"]
                ]
            });



            $('input[type="radio"]').click(function() {
                if ($(this).attr('id') == 'csv_btn') {
                    $('#csv_leads_div').show();
                    $('#query_leads_div').hide();
                } else if ($(this).attr('id') == 'query_btn') {
                    $('#csv_leads_div').hide();
                    $('#query_leads_div').show();
                }
            });

            $("#instant_trigger").click(function() {
                if ($(this).is(":checked")) {

                    $("#start_at").hide();
                } else {

                    $("#start_at").show();
                }
            });
        });
    </script>

</html>