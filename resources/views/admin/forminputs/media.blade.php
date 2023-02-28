  @if(isset($width))
  <div class="media-div" style="width:{{$width}}%">
  @else
  <div class="media-div" >
  @endif
  <a target="_blank" href="{{$path}}">
    <span style="width: 80%;"  class="Polaris-Thumbnail Polaris-Thumbnail--sizeLarge">
        <img src="{{$path}}" alt="Black choker necklace" class="Polaris-Thumbnail__Image">
    </span>
</a>
<p>{{$image_title}}</p>
</div>
