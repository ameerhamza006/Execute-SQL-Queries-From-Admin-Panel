@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Bulk Editing')}}</h5>
            </div>
            <div class="card-body">
                <form id="" class="form-horizontal" action="{{ route('bulk.editing.add') }}" method="POST">
                    @csrf
                    <div class="form-group row" id="category">
                        <label class="col-md-3 col-from-label">
                            {{translate('Category')}} 
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <select class="form-control aiz-selectpicker" name="category_id" id="category_id" data-live-search="true" required>
                                <option>--</option>
                                @foreach(\App\Category::where('parent_id','0')->get() as $key => $category)
                                
                                <option value="{{$category->id}}">
                                {{$category->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" id="">
                        <label class="col-md-3 col-from-label">
                            {{translate('Select Option')}} 
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <select class="form-control aiz-selectpicker" name="option" id="option" data-live-search="true" required>
                                <option>--</option>
                                
                                <option  value="unit_price">Unit Price</option>
                                <option value="cost_price">Cost Price</option>
                                <option value="compare_at">Compare At</option>
                                <option value="minimum_quantity">Minimum Quantity</option>
                                <option value="model_number">Model Number</option>
                                
                            </select>
                            
                            
                            
                        </div>
                    </div>
                    
                    <div class="form-group row" id="for_model_no">
                        <label class="col-md-3 col-from-label">
                            {{translate('Select')}} 
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <select class="form-control aiz-selectpicker " name="option_option" id="option_option" data-live-search="true" >
                                <option>--</option>
                                
                                <option class="option_option" value="decrease_by_percent">Decrease by Percent</option>
                                <option class="option_option" value="increase_by_percent">Increase by Percent</option>
                                <option class="option_option" value="change_by_fixed_amount">Change by Fixed Amount</option>
                                <option class="option_option" value="set_to_fixed_value">Set to Fixed Value</option>
                        
                                
                                <option class="min-qty" value="increase_stock">Increase Stock</option>
                                <option class="min-qty" value="decrease_stock">Decrease Stock</option>
                            </select>
                            
                            
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Value')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="value" placeholder="{{translate('Value')}}">
                        </div>
                    </div>

                    
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">
                            {{translate('Save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

	$(function() {
  $('#option').change(function(){
    
    var s = $('#option').val();
   // alert(s)
    if($('#option').val() == 'model_number'){
        
        $('#for_model_no').hide();
        
    }else if($('#option').val() == 'minimum_quantity'){
        $('#for_model_no').show();
        $('.min-qty').show();
        $('.option_option').hide();
    }else if($('#option').val() == 'unit_price' || $('#option').val() == 'cost_price' || $('#option').val() == 'compare_at'){
        $('.min-qty').hide();
        $('#for_model_no').show();
        $('.option_option').show();
    }
    $('#' + $(this).val()).hide();
  });
});



</script>
@endsection
