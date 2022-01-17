@php
    $translation = $row->translateOrOrigin(app()->getLocale());
@endphp




<div class=" item-loop {{$wrap_class ?? ''}}" style=" padding-bottom: 0px !important; border: none !important;">

{{--    Рекомендуемые--}}
    @if($row->is_featured == "1")
        <div class="featured">
            {{__("Featured")}}
        </div>
    @endif




{{--    <div class="thumb-image ">--}}
{{--        <a @if(!empty($blank)) target="_blank" @endif href="{{$row->getDetailUrl($include_param ?? true)}}">--}}
{{--            @if($row->image_url)--}}
{{--                @if(!empty($disable_lazyload))--}}
{{--                    <img src="{{$row->image_url}}" class="img-responsive" alt="">--}}
{{--                @else--}}
{{--                    {!! get_image_tag($row->image_id,'medium',['class'=>'img-responsive','alt'=>$row->title]) !!}--}}
{{--                @endif--}}
{{--            @endif--}}
{{--        </a>--}}



{{--        <div class="service-wishlist {{$row->isWishList()}}" data-id="{{$row->id}}" data-type="{{$row->type}}">--}}
{{--            <i class="fa fa-heart-o"></i>--}}
{{--        </div>--}}



{{--        @if($row->discount_percent)--}}
{{--            <div class="sale_info">{{$row->discount_percent}}</div>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <div class="location">--}}
{{--        @if(!empty($row->location->name))--}}
{{--            @php $location =  $row->location->translateOrOrigin(app()->getLocale()) @endphp--}}
{{--            {{$location->name ?? ''}}--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <div class="item-title">--}}
{{--        <a @if(!empty($blank)) target="_blank" @endif href="{{$row->getDetailUrl($include_param ?? true)}}">--}}
{{--            @if($row->is_instant)--}}
{{--                <i class="fa fa-bolt d-none"></i>--}}
{{--            @endif--}}
{{--                {!! clean($translation->title) !!}--}}
{{--        </a>--}}
{{--    </div>--}}
    @if(setting_item('space_enable_review'))
    <?php
    $reviewData = $row->getScoreReview();
    $score_total = $reviewData['score_total'];
    ?>
{{--        <div class="service-review">--}}
{{--            <span class="rate">--}}
{{--                @if($reviewData['total_review'] > 0) {{$score_total}}/5 @endif <span class="rate-text">{{$reviewData['review_text']}}</span>--}}
{{--            </span>--}}
{{--            <span class="review">--}}
{{--             @if($reviewData['total_review'] > 1)--}}
{{--                    {{ __(":number Reviews",["number"=>$reviewData['total_review'] ]) }}--}}
{{--                @else--}}
{{--                    {{ __(":number Review",["number"=>$reviewData['total_review'] ]) }}--}}
{{--                @endif--}}
{{--            </span>--}}
{{--        </div>--}}
    @endif




{{--    @if(!empty($time = $row->start_time))--}}
{{--        <div class="start-time">--}}
{{--            {{ __("Start Time: :time",['time'=>$time]) }}--}}
{{--        </div>--}}
{{--    @endif--}}










{{--    <div class="info">--}}
{{--        <div class="duration">--}}
{{--            {{duration_format($row->duration)}}--}}
{{--        </div>--}}
{{--        <div class="g-price">--}}
{{--            <div class="prefix">--}}
{{--                <span class="fr_text">{{__("from")}}</span>--}}
{{--            </div>--}}
{{--            <div class="price">--}}
{{--                <span class="onsale">{{ $row->display_sale_price }}</span>--}}
{{--                <span class="text-price">{{ $row->display_price }}</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}




{{--<link rel="stylesheet" href="css.css">--}}
<li class="card mb-5 overflow-hidden" style="margin: 0 !important;">
    <div class="product-item__outer w-100">
        <div class="row">
            <div class="col-md-12 ">
                <div class="product-item__header">
                    <div class="position-relative">
                        <a @if(!empty($blank)) target="_blank" @endif href="{{$row->getDetailUrl($include_param ?? true)}}" class="d-block">
                            @if($row->image_url)
                                @if(!empty($disable_lazyload))
                                    <img src="{{$row->image_url}}" style="height: 14.375rem; object-fit:cover;" class="min-height-230 bg-img-hero card-img-top">
                                @else
                                    {!! get_image_tag($row->image_id,'medium',['class'=>'card-img-bottom img-fluid','alt'=>$row->title,'style'=>'max-height:100px !important;max-width:100px;height:auto;width:auto;']) !!}
                                @endif
                            @endif
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                <div class="w-100 position-relative m-4 m-md-0">

                    <a @if(!empty($blank)) target="_blank" @endif href="{{$row->getDetailUrl($include_param ?? true)}}" style="font-size:1.2em ">
                        @if($row->is_instant)
                            <i class="fa fa-bolt d-none"></i>
                        @endif
                        {!! clean($translation->title) !!}
                    </a>



{{--                    <a target="_blank" href="http://safar.com/putevoditel-single/16">--}}
{{--                                                <span class="font-weight-medium font-size-17 text-dark d-flex mb-1">--}}
{{--                                                                                                            Каратепа--}}
{{--                                                                                                    </span>--}}
{{--                    </a>--}}



                    <div class="card-body p-0">
                        <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
{{--                            <i class="icon flaticon-placeholder mr-2 font-size-20"></i>--}}
                            <i class="fa fa-map-marker mr-2 font-size-20" aria-hidden="true" style="color: #ed2c06"></i>
                            @if(!empty($row->location->name))
                                @php $location =  $row->location->translateOrOrigin(app()->getLocale()) @endphp
                                {{$location->name ?? ''}}
                            @endif



                            </div>





                        <span>{{__("Type")}} : <span style="color: #000; text-transform: capitalize;">

                                    @php
                                        $terms_ids = $row->terms->pluck('term_id');
                                        $attributes = \Modules\Core\Models\Terms::getTermsById($terms_ids);
                                    @endphp
                            @if(!empty($terms_ids) and !empty($attributes))
                                @foreach($attributes as $attribute )
                                    @php $translate_attribute = $attribute['parent']->translateOrOrigin(app()->getLocale()) @endphp
                                    @if(empty($attribute['parent']['hide_in_single']))


                                        @php $terms = $attribute['child'] @endphp



                                        @foreach($terms as $term )
                                            @php $translate_term = $term->translateOrOrigin(app()->getLocale()) @endphp

                                            @if(!empty($term->image_id))
                                                @php $image_url = get_file_url($term->image_id, 'full'); @endphp

                                            @endif
                                            {{$translate_term->name}}

                                        @endforeach


                                    @endif

                                @endforeach
                            @endif








                                </span> <!--ы-->
                        </span>





                        <div class="">

                            <p> <?php echo   substr($translation->content, 0, 150) . "..." ;?> </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0  border-xl-top-0">
                <div class="d-xl-flex flex-wrap border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end">
                    <div class="mb-xl-5 mb-wd-7">
                        <div class="mb-0">
                            <div class="my-xl-1">
                                <div class="d-flex align-items-center justify-content-xl-end mb-2">
                                    <span class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">@if($reviewData['total_review'] > 0) {{$score_total}}/5 @endif </span>
                                    <span class="font-size-17 font-weight-bold text-primary"><span class="rate-text">{{$reviewData['review_text']}}</span>
                                </div>
                            </div>
                            <span class="font-size-14 text-gray-1">
                                @if($reviewData['total_review'] > 1)
                                    {{ __(":number Reviews",["number"=>$reviewData['total_review'] ]) }}
                                @else
                                    {{ __(":number Review",["number"=>$reviewData['total_review'] ]) }}
                                @endif
                                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</li>

</div>

