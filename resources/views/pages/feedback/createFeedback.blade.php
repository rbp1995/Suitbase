@extends('layoutTemplate')
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
	@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Create Feedback</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createFeedback') }}">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-lg-6 createFeedback">
                                    <div class="form-group">
                                        <textarea name="description" class="form-control" rows="5"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10 feedbackSubmit">
                                          <label>
<<<<<<< HEAD
                                            <input type="checkbox" name="is_anonim" value=""> Anonymous
=======
                                            <input type="hidden" name="is_anonim" value="0" />
                                            <input type="checkbox" name="is_anonim" value="1"> Anonymous
>>>>>>> 2c597105d518500ff6ce263e6dcf3c8fe7732c1a
                                          </label>
                                        </div>
                                           <input type="hidden" name="employees_id" value="{{ Auth::user()->id }}">
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </form>
<<<<<<< HEAD
=======

                    @foreach ($feedbacks as $feedback)
>>>>>>> 2c597105d518500ff6ce263e6dcf3c8fe7732c1a
                        <div class="row">
                            <div class="col-lg-3">
                            </div>
<<<<<<< HEAD
                            <div class="col-lg-6">
<<<<<<< HEAD
                                    <div class="form-group">
                                        Lorem ipsum dolor sit amet, no eam vero lucilius tacimates, cum id suavitate honestatis. No mel sanctus democritum. Omnes decore noluisse te mei, idque aperiri rationibus at eos, in nam ferri assueverit. Ne aliquid vocibus vim, mel causae scribentur at, quo dictas omnesque interesset eu. Voluptua sapientem in eam, et sea essent eligendi rationibus.
                                    <div class="row">
                                        <div class="col-lg-9">

                                        </div>
                                        <div class="col-lg-3">
                                          20-03-2016; 22:33
=======
=======
                            <div class="col-lg-6 createFeedback">
>>>>>>> 315374fbeca3037a61b981f8166a7cacbe3801bc
                                    <div class="form-group" style="text-align: justify">
                                        {{$feedback->description}}
                                    <div class="row">
                                        <div class="col-lg-7">
                                        </div>
                                        <div class="col-lg-5 feedbackDate" style="text-align: right">
                                          {{$feedback->created_at}}
>>>>>>> 2c597105d518500ff6ce263e6dcf3c8fe7732c1a
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
<<<<<<< HEAD
=======

                    @endforeach

>>>>>>> 2c597105d518500ff6ce263e6dcf3c8fe7732c1a
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#wrapper -->
    @endsection
    <!-- jQuery -->
    <script src="/assets/plugins/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/assets/plugins/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/assets/js/sb-admin-2.js"></script>

</body>

</html>
