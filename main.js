$(document).ready(function(){
  var x = $(".x-button");
  var y = $("#y-input");
  var r = $("#r-input");

  x.click(function(){
    x.removeClass("select");
    $(this).addClass("select");
    $("input[name='x']").val($(this).val());
  })

  $("#btnSubmit").mouseover(function(){
    var varR = r.val();
    var varY = y.val();
    if (!(varY >= -5 && varY <= 5 && varR >= 1 && varR <= 4) || varR == "" || varY == ""){
      $("#btnSubmit").attr("disabled", true);
      if(!(varY >= -5 && varY <= 5) || varY == "") {
        y.css("background-color", "#F24E4E");
      }
      if(!(varR >= 1 && varR <= 4) || varR == "") {
        r.css("background-color", "#F24E4E");
      }
    }
    if(!x.hasClass('select')){
      $("#btnSubmit").attr("disabled", true);
      x.css("background-color", "#F24E4E");
    }
  })


  $("#btnSubmit").mouseout(function(){
    $("#btnSubmit").attr("disabled", false);
    y.css("background-color", "");
    r.css("background-color", "");
    x.css("background-color", "");
  })

  $("#btnSubmit").click(function(){
    var varX = $("input[name='x']").val();
    var varR = r.val();
    var varY = y.val();
    $.post("check.php",{
      x: varX,
      y: varY,
      r: varR
    }, function(data,status) {
      $(".resTable").append(data)
    }
  )
  })
})
