<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        {{--  <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>  --}}
    </div>
 {{--  <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date:</strong>
            {!! Form::text('date', null, array('placeholder' => 'Date','class' => 'form-control')) !!}
        </div>
    </div>  --}}


			<div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Date </label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    {!! Form::text('date', null, array('placeholder' => 'Date','class' => 'form-control')) !!}
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>




{{--  
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>From:</strong>
            {!! Form::text('from', null, array('placeholder' => 'From','class' => 'form-control')) !!}
        </div>
    </div>  --}}

    <div class="form-group">
                <label for="dtp_input3" class="col-md-2 control-label">From</label>
                <div class="input-group date form_time col-md-5" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                     {!! Form::text('from', null, array('placeholder' => 'From','class' => 'form-control')) !!}
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
				<input type="hidden" id="dtp_input3" value="" /><br/>
            </div>





     {{--  <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>To:</strong>
            {!! Form::text('too', null, array('placeholder' => 'To','class' => 'form-control')) !!}
        </div>
    </div>  --}}

     <div class="form-group">
                <label for="dtp_input3" class="col-md-2 control-label">To</label>
                <div class="input-group date form_time col-md-5" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                   {!! Form::text('too', null, array('placeholder' => 'To','class' => 'form-control')) !!}
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
				<input type="hidden" id="dtp_input3" value="" /><br/>
            </div>






   <div class="form-group">
            <strong>Involves:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>



    {{--  <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>  --}}
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>