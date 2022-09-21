<div class="specifications">
    <h3 class="title">{{trans('frontend.specify')}}</h3>

    <div class="specifications-info">
      
          @foreach($attributeSet as $set)
      
          @if(isset($data[$set->slug]))   
            @if ($set->slug != 'customer')  
            <h4 class="specifications-info__title">{{$set->name}}</h4>
            @endif
          @endif
          @if($set->slug == 'body-work')
            <div id="body-work-video">
            <div class="flexslider">
               <div class="video_wrapper">
                  <video id="caranim" width="" height="" autoplay>
                     <source src="../../../css/images/car.mp4" type="video/mp4"/>
                  </video>
               </div>
               <ul class="slides hidden">
                  <li class="side_left_view">
                     <div class="">
                        <div class="front_left {{$auction->getObjectAttribute(1,$auction->object_id) ? $auction->getObjectAttribute(1,$auction->object_id)->color : ''}}"></div>
                        <div class="front_left_door {{$auction->getObjectAttribute(36,$auction->object_id) ? $auction->getObjectAttribute(36,$auction->object_id)->color : ''}}"></div>
                        <div class="back_left_door {{$auction->getObjectAttribute(38,$auction->object_id) ? $auction->getObjectAttribute(38,$auction->object_id)->color : ''}}"></div>
                        <div class="back_left {{$auction->getObjectAttribute(41,$auction->object_id) ? $auction->getObjectAttribute(41,$auction->object_id)->color : ''}}"></div>
                     </div>
                     <div class="">
                        <div class="wheel_left {{$auction->getObjectAttribute(43,$auction->object_id) ? $auction->getObjectAttribute(43,$auction->object_id)->color : ''}}"></div>
                        <div class="wheel_left_back {{$auction->getObjectAttribute(120,$auction->object_id) ? $auction->getObjectAttribute(120,$auction->object_id)->color : ''}}"></div>
                     </div>
                  </li>
                  <li class="front_view">
                     <div class="top {{$auction->getObjectAttribute(30,$auction->object_id) ? $auction->getObjectAttribute(30,$auction->object_id)->color : ''}}"></div>
                     <div class="bottom {{$auction->getObjectAttribute(29,$auction->object_id) ? $auction->getObjectAttribute(29,$auction->object_id)->color : ''}}"></div>
                  </li>
                  <li class="top_view">
                     <div class="bonnet {{$auction->getObjectAttribute(30,$auction->object_id) ? $auction->getObjectAttribute(30,$auction->object_id)->color : ''}}"></div>
                     <div class="top {{$auction->getObjectAttribute(33,$auction->object_id) ? $auction->getObjectAttribute(33,$auction->object_id)->color : ''}}"></div>
                     <div class="trunk_top {{$auction->getObjectAttribute(32,$auction->object_id) ? $auction->getObjectAttribute(32,$auction->object_id)->color : ''}}"></div>
                  </li>
                  <li class="side_right_view">
                     <div class="">
                        <div class="back_right {{$auction->getObjectAttribute(40,$auction->object_id) ? $auction->getObjectAttribute(40,$auction->object_id)->color : ''}}"></div>
                        <div class="back_right_door {{$auction->getObjectAttribute(39,$auction->object_id) ? $auction->getObjectAttribute(39,$auction->object_id)->color : ''}}"></div>
                        <div class="front_right_door {{$auction->getObjectAttribute(37,$auction->object_id) ? $auction->getObjectAttribute(37,$auction->object_id)->color : ''}}"></div>
                        <div class="front_right {{$auction->getObjectAttribute(35,$auction->object_id) ? $auction->getObjectAttribute(35,$auction->object_id)->color : ''}}"></div>
                     </div>
                     <div class="">
                        <div class="wheel_right_back {{$auction->getObjectAttribute(121,$auction->object_id) ? $auction->getObjectAttribute(121,$auction->object_id)->color : ''}}"></div>
                        <div class="wheel_right {{$auction->getObjectAttribute(119,$auction->object_id) ? $auction->getObjectAttribute(119,$auction->object_id)->color : ''}}"></div>
                     </div>
                  </li>
                  <li class="back_view">
                     <div class="top {{$auction->getObjectAttribute(32,$auction->object_id) ?$auction->getObjectAttribute(32,$auction->object_id)->color : ''}}"></div>
                     <div class="bottom {{$auction->getObjectAttribute(31,$auction->object_id) ?$auction->getObjectAttribute(31,$auction->object_id)->color : ''}}"></div>
                  </li>
               </ul>
            </div>
            </div>


            @endif
          {{-- @if($set->slug == 'car-details') --}}
          <div class="specifications-info__list" id="{{$set->slug}}">
              @if($set->slug == 'car-details') 
              <div class="specifications-info__item">
                  <span class="specifications-info__item__title">Make</span>
                  <span class="specifications-info__item__info">{{$make}}</span>
              </div>
              <div class="specifications-info__item">
                  <span class="specifications-info__item__title">Model</span>
                  <span class="specifications-info__item__info">{{$model}}</span>
              </div>
              @endif
              @if(isset($data[$set->slug]))


             @if ($set->slug != 'customer')              
           
                     @foreach($data[$set->slug] as $attrvalue)
                     @if (!empty($attrvalue->attribute_value))
                     <div class="specifications-info__item">
                        <span class="specifications-info__item__title">{{$attrvalue->attribute->name}}
                           @if (!empty($attrvalue->color))
                           
                           <span class="circle-indi" style="background-color: {{$attrvalue->color}}"></span>
                           @endif
                        </span>
                        
                        <span class="specifications-info__item__info">{{$attrvalue->attribute_value}}</span>
                     </div>
                     @endif
                     @endforeach
               @endif
               
            @endif
              
          </div>
          {{-- @endif --}}
          @endforeach
       </div>

    </div>


 {{-- </div>
 <script></script> --}}