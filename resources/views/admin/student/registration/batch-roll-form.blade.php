
<div class="row">
              <div class="form-group col-md-6 mb-3">
                        <label for="batchId" class="col-sm-4 col-form-label text-right">Batch</label>
                        <select name="batch_id" class="form-control col-sm-8" id="batchId" required>
                           
                            <option value="">Select Batch</option>
                             @foreach($batches as $batch)
                             <option value="{{$batch->id}}">{{ $batch->batch_name}}</option>
                             @endforeach
                        </select>
                        <span class="text-danger"></span>
  
              </div>
              <div class="form-group col-md-6 mb-3">
                        <label for="roll" class="col-sm-4 col-form-label text-right">Roll</label>
                        <input type="text" name="roll" class="form-control col-sm-8 " placeholder="Roll Number">
                        <span class="text-danger"></span>
  
              </div>
</div>

