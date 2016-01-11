<!DOCTYPE html>
<html>
    <head>
        <title>CloudCart Api</title>
        <script type="text/javascript" src="{{ URL::asset('js/jquery-1.11.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                {{ Form::select('startPoint', array('default_start' => 'Select Start Point')+$cities, null, ['class' => 'startPointField']) }}
                {{ Form::select('endPoint', array('default_end' => 'Select End Point')+$cities, null, ['class' => 'endPointField']) }}
                {{ Form::button('Find', array('class'=>'findBttn')) }}
            </div>
            <div id="ajaxContent">
            </div>
        </div>
    </body>
</html>
