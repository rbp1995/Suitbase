@extends('layoutTemplate')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$survey->title}}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-8 detail">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class = "content">
                        <form class = "form-horizontal">
                            @foreach ($questions as $question)
                            <div class = "form-group">
                                <label class="col-md-4 control-label">Question</label>
                                <div class = "right-side">
                                    <label class="col-md-6">{{$question->question}}</label>
                                </div>
                            </div>
                            <div class = "form-group">
                                <label class="col-md-4 control-label">Answer</label>
                                <div class = "right-side">
                                    <div class="col-md-6">
                                        @if($question->question_type == 1)
                                        <input class="form-control" name = "answer">
                                        @elseif ($question->question_type == 2)
                                        @foreach ($question->option as $option)
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio{{$question->id}}" id="optionsRadios1" value="{{$option->option}}">{{$option->option}}
                                            </label>
                                        </div>
                                        @endforeach
                                        @else
                                        @foreach ($question->option as $option)
                                        <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="checkbox{{$question->id}}" value="{{$option->option}}">{{$option->option}}
                                            </label>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </form>
                        <div class="form-group">
                            <div class="col-md-6 control-label"></div>
                            <div class = "col-md-2 col-md-offset-3">
                                <a href="{{route('survey.form')}}" class="btn btn-default" role="button">Back</a>
                            </div>
                        </div>
                        <!--row-->
                    </div><!--content-->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#wrapper -->
@endsection