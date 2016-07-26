<div class="photo-gallery style1" id="photo-gallery1" data-animation="slide" data-sync="#image-carousel1" style="height: 520px;display: block;position: relative;overflow: hidden;">
    {{ HTML::image($value->imgurl) }}
</div>
<div class="image-carousel style1" id="image-carousel1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photo-gallery1">
<p>{{$value->description}}</p>
</div>