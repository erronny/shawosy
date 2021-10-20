<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    {!! Form::label('category_id', 'Choose Category', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'required']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    </div>
</div>




<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Sub-Category Name', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('name', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    </div>
</div>
<div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
    {!! Form::label('icon', 'Icon', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('icon', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('icon') }}</strong>
        </span>
    </div>
    
    
</div>
<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
    {!! Form::label('url', 'Url', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('url', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('url') }}</strong>
        </span>
    </div>
    
    
</div>

<br/>
<div class="form-group{{ $errors->has('wherevalue') ? ' has-error' : '' }}">
<div class="col-md-12">
    <label>{{ __('shawosy.Header') }}
        <input type="checkbox" value="1" name="wherevalue[]" @if($subcategory->wherevalue == '1')checked @endif/></label>&nbsp;&nbsp;

        <label>{{ __('shawosy.Footer-Section1') }}
        <input type="checkbox" value="2" name="wherevalue[]" @if($subcategory->wherevalue == '2')checked @endif/></label>&nbsp;&nbsp;

        <label>{{ __('shawosy.Footer-Section2') }}
        <input type="checkbox" value="3" name="wherevalue[]" @if($subcategory->wherevalue == '1')checked @endif/></label>&nbsp;&nbsp;

        <label>{{ __('shawosy.Footer-Section3') }}
        <input type="checkbox" value="4" name="wherevalue[]" @if($subcategory->wherevalue == '4')checked @endif/></label>&nbsp;&nbsp;

        <label>{{ __('shawosy.Footer-Section4') }}
        <input type="checkbox" value="5" name="wherevalue[]" @if($subcategory->wherevalue == '5')checked @endif/></label>&nbsp;&nbsp;

        <label>{{ __('shawosy.Header Footer-Section1') }}
        <input type="checkbox" value="12" name="wherevalue[]" @if($subcategory->wherevalue == '12')checked @endif/></label>&nbsp;&nbsp;

        <label>{{ __('shawosy.Header Footer-Section2') }}
        <input type="checkbox" value="13" name="wherevalue" @if($subcategory->wherevalue == '13')checked @endif/></label>&nbsp;&nbsp;

        <label>{{ __('shawosy.Header Footer-Section3') }}
        <input type="checkbox" value="14" name="wherevalue[]" @if($subcategory->wherevalue == '14')checked @endif/></label>&nbsp;&nbsp;

        <label>{{ __('shawosy.Header Footer-Section4') }}
        <input type="checkbox" value="15" name="wherevalue[]" @if($subcategory->wherevalue == '15')checked @endif/></label>

        <span class="help-block">
            <strong>{{ $errors->first('wherevalue') }}</strong>
        </span>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    $("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>