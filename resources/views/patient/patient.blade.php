  <div class="form-group{{ $errors->has('patient_id') ? ' has-error' : '' }}">
        <label for="patient_id" class="col-md-2 control-label"># Historia</label>

        <div class="col-md-8">
                                
            <select class="form-control selectpicker" @change="patient()" id="patient_id" name="patient_id" data-live-search='true' required="">

                @foreach($patients as $id => $name)

                    @if(old('patient_id', isset($data->patient_id) && $data->patient_id == $id) == $id )
                     <option value="{{ $id }}" selected>{{ $name }}</option>
                    @else
                     <option value="{{ $id }}">{{ $name }}</option>
                    @endif

                @endforeach
            </select>
                                
            @if ($errors->has('patient_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('patient_id') }}</strong>
                </span>
            @endif
     </div>
</div>