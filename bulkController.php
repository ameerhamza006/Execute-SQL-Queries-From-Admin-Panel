

public function post_bulk(Request $request)
    {
       // dd($request);
        
        
        
        
        if($request->option == 'model_number'){
            
            
            
                
                    
                    
               $perr = $request->value;
                $catt = $request->category_id;
                
                $update_change_amountt = DB::table('products')->where('category_id',$catt)->update([
                    'model_no' => $perr,
                    
                    ]);
                
             //  $update_change_amountt = DB::update("update products set model_no = $perr where category_id = '$catt'");
                if($update_change_amountt){
            
                
                
                 flash(translate('Model Number Change successfully'))->success();
                  return back();
                }
                   
                
            
            
            
            
            
        }elseif($request->option ==  'unit_price'){
        
        switch($request->option_option)
        {
            case 'change_by_fixed_amount':
                
            
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_change_amount = DB::update("update products set unit_price = $per where category_id = '$cat'");
                if($update_change_amount){
            
                
                
                 flash(translate('Unit Price Amount Change successfully'))->success();
                  return back();
                }
                  break;
                  
            case 'increase_by_percent':      
                
                
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_increase_price = DB::update("update products set unit_price = unit_price + (unit_price * '$per' / 100.0) where category_id = '$cat'");
                if($update_increase_price){
            
                
                
                 flash(translate('Unit Price Increase successfully'))->success();
                  return back();
                }
                  break;
                  
            case 'decrease_by_percent':   
                
                
                
               $per = $request->value;
                $cat = $request->category_id;
                
               $u = DB::update("update products set unit_price = unit_price - (unit_price * '$per' / 100.0) where category_id = '$cat'");
                if($u){
            
                
                
                 flash(translate('Unit Price Decrease successfully'))->success();
                  return back();
                  
                }
                
                break;
                
                
                case 'set_to_fixed_value':
                    
                    
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_fixed_price = DB::update("update products set unit_price = unit_price + $per where category_id = '$cat'");
                if($update_fixed_price){
            
                
                
                 flash(translate('In Unit Price Value added  successfully'))->success();
                  return back();
                  
                }
                
        }
        
           
         
            }elseif($request->option ==  'cost_price'){
                
                
                switch($request->option_option)
               {
            case 'change_by_fixed_amount':
                
            
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_change_amount = DB::update("update products set purchase_price = $per where category_id = '$cat'");
                if($update_change_amount){
            
                
                
                 flash(translate('Cost Price Amount Change successfully'))->success();
                  return back();
                }
                  break;
                  
            case 'increase_by_percent':      
                
                
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_increase_price = DB::update("update products set purchase_price = purchase_price + (purchase_price * '$per' / 100.0) where category_id = '$cat'");
                if($update_increase_price){
            
                
                
                 flash(translate('Cost Price Increase successfully'))->success();
                  return back();
                }
                  break;
                  
            case 'decrease_by_percent':   
                
                
                
               $per = $request->value;
                $cat = $request->category_id;
                
               $u = DB::update("update products set purchase_price = purchase_price - (purchase_price * '$per' / 100.0) where category_id = '$cat'");
                if($u){
            
                
                
                 flash(translate('Cost Price Decrease successfully'))->success();
                  return back();
                  
                }
                
                break;
                
                
                case 'set_to_fixed_value':
                    
                    
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_fixed_price = DB::update("update products set purchase_price = purchase_price + $per where category_id = '$cat'");
                if($update_fixed_price){
            
                
                
                 flash(translate('In Cost Price Value added  successfully'))->success();
                  return back();
                  
                }
                
        }
                
                
            }elseif($request->option ==  'compare_at'){
                
                
                switch($request->option_option)
               {
            case 'change_by_fixed_amount':
                
            
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_change_amount = DB::update("update products set discount = $per where category_id = '$cat'");
                if($update_change_amount){
            
                
                
                 flash(translate('Campare At Amount Change successfully'))->success();
                  return back();
                }
                  break;
                  
            case 'increase_by_percent':      
                
                
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_increase_price = DB::update("update products set discount = discount + (discount * '$per' / 100.0) where category_id = '$cat'");
                if($update_increase_price){
            
                
                
                 flash(translate('Campare At Increase successfully'))->success();
                  return back();
                }
                  break;
                  
            case 'decrease_by_percent':   
                
                
                
               $per = $request->value;
                $cat = $request->category_id;
                
               $u = DB::update("update products set discount = discount - (discount * '$per' / 100.0) where category_id = '$cat'");
                if($u){
            
                
                
                 flash(translate('Campare At Decrease successfully'))->success();
                  return back();
                  
                }
                
                break;
                
                
                case 'set_to_fixed_value':
                    
                    
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_fixed_price = DB::update("update products set discount = discount + $per where category_id = '$cat'");
                if($update_fixed_price){
            
                
                
                 flash(translate('In Campare At Value added  successfully'))->success();
                  return back();
                  
                }
                
        }
                
                
            }elseif($request->option ==  'minimum_quantity' ){
            
            
            switch($request->option_option)
               {
            case 'increase_stock':
                
            
               $per = $request->value;
                $cat = $request->category_id;
                
               $update_change_amount = DB::update("update products set current_stock = current_stock + $per where category_id = '$cat'");
                if($update_change_amount){
            
                
                
                 flash(translate('Minimum Quantity Increase successfully'))->success();
                  return back();
                }
                
                  break;
                  
            case 'decrease_stock':      
                
                
                 $per = $request->value;
                $cat = $request->category_id;
                
               $update_change_amount = DB::update("update products set current_stock = current_stock - $per where category_id = '$cat'");
                if($update_change_amount){
            
                
                
                 flash(translate('Minimum Quantity Decrease successfully'))->success();
                  return back();
                }
                
                
                  
                
        }
            
        }
        
        
        
        
        
    }
