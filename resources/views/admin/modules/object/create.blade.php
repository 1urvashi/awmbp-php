@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Vehicle</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @include('admin.includes.status-msg')
                <form role="form" enctype="multipart/form-data" method="post" action="@if(isset($edit)){{url('objects/'.$edit->id)}}@else{{url('objects')}}@endif">
                   @if(isset($edit)) <input name="_method" type="hidden" value="PUT"> @endif
                    {{ csrf_field() }}
                    {{--  <div class="box-body">
                        <div class="form-group">
                            <label>Customer Name  <span class="req">*</span></label>
                            <input type="text" class="form-control" id="customerName" name="customerName" required>
                        </div>
                        <div class="form-group">
                            <label>Customer Mobile  <span class="req">*</span></label>
                            <input type="text" class="form-control number" max="10" min="10"  id="customerMobile" name="customerMobile" required>
                        </div>
                        <div class="form-group">
                            <label>Customer Email  <span class="req">*</span></label>
                            <input type="email" class="form-control" id="customerEmail" name="customerEmail" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Bank</label>
                            <select name="bank" class="form-control" id="bank" required>
                                <option value=" ">Choose an Banks</option>
                                @foreach($bank as $bankvalue)
                                    <option value="{{$bankvalue->id}}">{{$bankvalue->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Reference Number  <span class="req">*</span></label>
                            <input type="text" class="form-control" id="customerReference" name="customerReference" required>
                        </div>
                        <div class="form-group">
                            <label>Suggested Amount  <span class="req">*</span></label>
                            <input type="text" class="form-control number" id="suggested_amount" name="suggested_amount" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Source of Enquiry</label>
                            <select name="sourceOfEnquiry" class="form-control" id="sourceOfEnquiry" required>
                                <option value="">Choose an Source</option>
                                @foreach($sourceOfEnquiry as $key=>$se)
                                    <option value="{{$key}}">{{$se}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>  --}}
                    {{--  <div>  --}}
                    
                    <div class="row">
                       <div class="col-xs-12">
                           <div class="col-xs-6 item">
                                <div class="form-group">
                               
                                    <label>Dealers<span class="req">*</span></label>
                                    <select class="form-control" name="dealer" id="dealer" required>
                                        <option value="">Select</option>
                                        @foreach($dealers as $dealer)
                                               <option value="{{$dealer->id}}">{{ $dealer->name }}</option>
                                         @endforeach
                                    </select>
                                </div>
                                </div>
                                <div class="col-xs-6 item">
                                   <div class="form-group">
                                        <label> Title  <span class="req">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                           </div>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                               <div class="col-xs-6 item">
                                    <div class="form-group">
                                    <label>Make<span class="req">*</span></label>
                                    <select class="form-control" name="make" id="make" required>
                                         <option value="">Choose Make</option>
                                         @foreach($makes as $make)
                                            <option value="{{$make->id}}">{{$make->name}}</option>
                                         @endforeach
                                    </select>
                                    </div>
                               </div>
                               <div class="col-xs-6 item">
                                    <div class="form-group">
                                    <label>Model<span class="req">*</span></label>
                                    <select class="form-control" name="model" id="model" required>
                                         <option value="">Choose Model</option>
                                    </select>
                                    </div>
                                </div>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-xs-12">
                            <div class="col-xs-6 item">
                                <div class="form-group">
                                    <label> Images (Maximum file size: 5 MB) <span class="req">*</span></label>
                                    <input type="file" multiple class="form-control" id="images"  name="images[]" required   data-max-size="32154"   accept="image/jpeg,image/gif,image/png,image/jpg">
                               </div>
                               <p id="output"></p>
                            </div>
                            
                         

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            
                             
                             <div class="col-xs-12 item">
                                 <div class="form-group">
                                     <label> Documentation (attachment) (Maximum file size: 5 MB)   </label>
                                     <input type="file" multiple class="form-control" id="attachment" name="attachment[]" data-max-size="32154"   accept="image/jpeg,image/gif,image/png,image/jpg">
                                </div>
                               
                             </div>
 
                         </div>
                     </div>
                    
                    @foreach($attributeSet as $set)
                    <div class="row"> 
                        {{-- @if($set->slug == 'car-details') --}}
                        <div class="col-md-12">
                            @if(isset($data[$set->slug]))
                                <div class="col-xs-12">
                                     <h4 style="font-weight: bold;text-decoration: underline;text-transform: uppercase;">
                                        {{$set->name}}
                                    </h4> 
                                </div>
                               
                                @foreach($data[$set->slug] as $attrvalue)
                                    <div class="tab-pane">
                                        <div class="col-xs-6 item">
                                            {{--  <div class="row">  --}}
                                                @if($attrvalue->input_type == $attrvalue->getInputType(0))
                                                    <div class="form-group">
                                                        <label>{{$attrvalue->name}}<span class="req">*</span></label>
                                                        <input type="text" class="form-control" name="attributeValue[{{$attrvalue->id}}]" value='{{$attrvalue->attribute_value}}' required/>
                                                    </div>
                                                @elseif($attrvalue->input_type == $attrvalue->getInputType(5))
                                                <div class="form-group">
                                                    <label>{{$attrvalue->name}}<span class="req">*</span></label>
                                                    <input type="text" class="form-control" name="attributeValue[{{$attrvalue->id}}]" value='{{$attrvalue->attribute_value}}' required/>
                                                </div>
                                                @elseif($attrvalue->input_type == $attrvalue->getInputType(8))
                                                <div class="form-group">
                                                    <label>{{$attrvalue->name}}<span class="req">*</span></label>
                                                    <input type="email" class="form-control" name="attributeValue[{{$attrvalue->id}}]" value='{{$attrvalue->attribute_value}}' required/>
                                                </div>
                                                 @elseif($attrvalue->input_type == $attrvalue->getInputType(10))
                                                <div class="form-group">
                                                    <label>{{$attrvalue->name}}</label>
                                                    <input type="text" class="form-control" name="attributeValue[{{$attrvalue->id}}]" value='{{$attrvalue->attribute_value}}' />
                                                </div>
                                                
                                                @elseif($attrvalue->input_type == $attrvalue->getInputType(9))
                                                <div class="form-group">
                                                    <label>{{$attrvalue->name}}<span class="req">*</span></label>
                                                    <input type="number" class="form-control" name="attributeValue[{{$attrvalue->id}}]" value='{{$attrvalue->attribute_value}}' required/>
                                                </div>
                                                @elseif($attrvalue->input_type == $attrvalue->getInputType(11))
                                                <div class="form-group">
                                                    <label>{{$attrvalue->name}}<span class="req">*</span></label>
                                                    <input type="text" class="form-control" id="yearPicker" name="attributeValue[{{$attrvalue->id}}]" value='{{$attrvalue->attribute_value}}' required/>
                                                </div>
                                                @elseif(($attrvalue->input_type == $attrvalue->getInputType(3)) ||
                                                ($attrvalue->input_type == $attrvalue->getInputType(2)) 
                                                )
                                                <div class="form-group">
                                                    <label>{{$attrvalue->name}}<span class="req">*</span></label>
                                                    <select name="attributeValue[{{$attrvalue->id}}]" class="form-control" required>
                                                        @foreach($attrvalue->attributeValues as $value)
                                                        @php
                                                            //$dda = ['value'=>$value->attribute_value,'color'=>$value->color];
                                                        @endphp
                                                            <option color="{{$value->color}}" @if($value->attribute_value == $attrvalue->attribute_value) selected @endif value="{{$value->attribute_value.','.$value->color}}">{{$value->attribute_value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @elseif(($attrvalue->input_type == $attrvalue->getInputType(1)) 
                                                )

                                                    @if ($set->name == "Options")
                                                    <div class="form-group">
                                                        <label >{{$attrvalue->name}}<span class="req">*</span></label>

                                                        @foreach($attrvalue->attributeValues as $value)
                                                        </br>
                                                        <label class="radio-inline">
                                                        <input type="radio"  name="attributeValue[{{$attrvalue->id}}]" @if($value->attribute_value == 'Yes' || $value->attribute_value == 'Good') checked @endif value='{{$value->attribute_value.','.$value->color}}'  required/>{{$value->attribute_value}} 
                                                        </label>
                                                        @endforeach

                                                    </div>
                                                    @else  
                                                    
                                                    <div class="form-group">
                                                        <label >{{$attrvalue->name}}<span class="req">*</span></label>

                                                        @foreach($attrvalue->attributeValues as $value)
                                                        </br>
                                                        <label class="radio-inline">
                                                        <input type="radio"  name="attributeValue[{{$attrvalue->id}}]" @if($value->attribute_value == $attrvalue->attribute_value) checked @endif value='{{$value->attribute_value.','.$value->color}}'  required/>{{$value->attribute_value}} 
                                                        </label>
                                                        @endforeach

                                                    </div>
                                                    @endif

                                                @else
                                                <div class="form-group">
                                                    <label>{{$attrvalue->name}}<span class="req">*</span></label>
                                                    <input type="text" class="form-control" name="attributeValue[{{$attrvalue->id}}]" value='{{$attrvalue->attribute_value}}' required/>
                                                </div>
                                                @endif
                                            {{--  </div>  --}}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        {{-- @endif --}}

                    </div>
                    @endforeach
                    

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .add_more .card-block {
                border: 1px solid #f6f6f6;
                padding: 10px;
                margin: 15px 0;
        }
    </style>

@endsection
@push('scripts')

<script type="text/javascript">
 $(document).ready(function() {
        $("#yearPicker").yearpicker({
        //   year: 2017,
        //   startYear: 2012,
        //   endYear: 2030
        });
      });

  
$('#attachment').change(function(){
    var fp = $("#attachment");
    var lg = fp[0].files.length; // get length
    var items = fp[0].files;
    var fileSize = 0;
    
    if (lg > 0) {
        for (var i = 0; i < lg; i++) {
            fileSize = fileSize+items[i].size; // get file size
        }
        if(fileSize >=	5000000) {
            alert('File size must not be more than 5 MB');
            $('#attachment').val('');
            return false
        }
    }
});

$('#images').change(function(){
    var fp = $("#images");
    var lg = fp[0].files.length; // get length
    var items = fp[0].files;
    var fileSize = 0;
    
    if (lg > 0) {
        for (var i = 0; i < lg; i++) {
            fileSize = fileSize+items[i].size; // get file size
        }
        if(fileSize >=	5000000) {
            alert('File size must not be more than 5 MB');
            $('#images').val('');
            return false
        }
    }
});
    $(document).ready(function () {

       

        //called when key is pressed in textbox
        $(".number").keypress(function (e) {
           //if the letter is not digit then display error and don't type anything
           if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
              //display error message
              $("#errmsg").html("Digits Only").show().fadeOut("slow");
                     return false;
          }
         });

         $('#make').on('change', function() {
       var makeId = $(this).val();
       $('.loading').show();
       if(makeId) {
            $.ajax({
                url: '{{url("get/models")}}/'+makeId,
                type: "GET",
                dataType: "html",
                success:function(data) {

                    $('#model').empty();

                    $('#model').html(data);
                    $('.loading').hide();


                }
            });
       }else{
            $('#model').empty();
            $('.loading').hide();
       }
    });
      });
</script>
@endpush
