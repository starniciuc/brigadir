if ($(".main-slider").length) {
    $(".main-slider").bxSlider();
}

if ($(".thumb-slide").length) {
    $(".thumb-slide").bxSlider({
        mode: 'vertical',
        minSlides: 3,
        maxSlides: 3,
        pager: false,
        slideMargin: 5
    });
}
var mSlide = " ";

if ($(".thumbnail-slide").length) {
    mSlide = $(".thumbnail-slide").bxSlider({
        minSlides: 5,
        maxSlides: 5,
        pager: false,
        slideMargin: 10,
        slideWidth: 102
    });
}

$('#slider').on('shown.bs.modal', function() {
    mSlide.reloadSlider();
});

$(".thumbnail-slide li img").click(function(){
    $this = $(this);
    $url = $this.attr("src");
    
    $(".thumbnail-slide li").removeClass("selected");
    
    $this.parents("li").addClass('selected');
    $("#imageView").attr("src",$url);
});
$(".thumb-slide li img").click(function(){
    $this = $(this);
    $url = $this.attr("src");
    $(".image-view-img").attr("src",$url);
});

$(".open-collapse").click(function () {

    var $this = $(this);
    var $par = $this.parents(".block-product");
    var $elm = $par.find(".sub-block");

    $(".sub-block").slideUp();
    $(".open-collapse").fadeIn();

    $this.fadeOut();
    $elm.addClass("active");
    $elm.slideDown();

});

$(".close-btn").click(function () {

    $(".sub-block").slideUp();
    $(".open-collapse").fadeIn();

});

$(".open-order").click(function () {
    var $this = $(this);
    var $par = $this.parents(".item-order");

    var $elem = $par.find(".collapse");

    if ($elem.hasClass('in')) {
        $elem.collapse("hide");
        $par.removeClass("open");
    } else {
        $elem.collapse("show");
        $par.addClass("open");
    }
});

$(".uploadInp").change(function () {
    var fullPath = $(this).val();
    if (fullPath) {
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
            filename = filename.substring(1);
        }
        var $par = $(this).parents(".input-file");
        var $name = $par.find(".nameFile");
        $name.html("Загружено " + filename);
    }
});

$(".btn-counter").click(function(){
  var $this = $(this);
  var $par = $this.parents(".counter");
  var $valElm = $par.find("input");
  var $val = parseInt($valElm.val());
  
  if(isNaN($val)) $val = 0;
  
  if($this.hasClass("left")){
   if($val>0) $val--;
  }else{
    $val++;
  }
  $valElm.val($val);
});

$(".image-produs").click(function(){
  var $prev = $(this).children(".preview");
  
  if($prev.hasClass("open")){
    $prev.removeClass("open");
  }else{
    $prev.addClass("open");
  }
});
