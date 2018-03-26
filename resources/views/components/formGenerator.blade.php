{{-- 
	Props :
	1[' Field (name, label, type, inputType, value, disabled, placeholder, options, optionLabel, optionValue)
	2[' Error (kumpulan name dari field)
	3[' Model (sama dengan $error)
	 --}}
@foreach($fields as $x)
	@switch($x['type'])
    @case('input')
        <div class="form-group">
			<label for="{{$x['name']}}">{{$x['label']}}</label>
			<input type="{{$x['inputType']}}" class="form-control" id="{{$x['name']}}" name="{{$x['name']}}" placeholder="{{$x['placeholder']}}" value="{{$model[$x['name']]}}" />
			<p class="help-block text-red">{{$error[$x['name']]}}</p>
		</div>
        @break

    @case('textarea')
		<div class="form-group">
			<label for="{{$x['name']}}">{{$x['label']}}</label>
			<textarea class="form-control" id="{{$x['name']}}" name="{{$x['name']}}" placeholder="{{$x['placeholder']}}">{{$model[$x['name']]}}</textarea>
			<p class="help-block text-red">{{$error[$x['name']]}}</p>
		</div>
        @break
        
    @case('checkbox')
		<div class="checkbox">
			<label>
			<input type="checkbox" id="{{$x['name']}}" name="{{$x['name']}}"> {{$x['label']}}
			</label>
		</div>
		<div class="form-group">
			<label for="{{$x['name']}}">{{$x['label']}}</label>
			<textarea class="form-control" id="{{$x['name']}}" name="{{$x['name']}}" placeholder="{{$x['placeholder']}}">{{$model[$x['name']]}}</textarea>
			<p class="help-block text-red">{{$error[$x['name']]}}</p>
		</div>
        @break
    @case('select')
		<div class="form-group">
			<label>{{$x['label']}}</label>
			<select class="form-control"  id="{{$x['name']}}" name="{{$x['name']}}">
				@foreach($x['options'] as $o)
					<option value="{{$o[$x['optionValue']]}}">{{$o[$x['optionLabel']]}}</option>
				@endforeach
			</select>
		</div>
        @break

    @default
        Default case
	@endswitch
@endforeach
