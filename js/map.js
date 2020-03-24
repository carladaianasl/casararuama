$(document).ready(function(){
  $("#map1").hover(function(){
    $("#map1 img").css("width", "40%");
    $(this).css("font-size", "18px");
    }, function(){
    $("#map1 img").css("width", "30%");
    $(this).css("font-size", "14px");

  });
});

$(document).ready(function(){
  $("#map2").hover(function(){
    $("#map2 img").css("width", "45%");
    $(this).css("font-size", "18px");
    }, function(){
    $("#map2 img").css("width", "35%");
    $(this).css("font-size", "14px");

  });
});


$(document).ready(function(){
  $("#map3").hover(function(){
    $("#map3 img").css("width", "35%");
    $(this).css("font-size", "10px");
    }, function(){
    $("#map3 img").css("width", "30%");
    $(this).css("font-size", "7px");

  });
});

$(document).ready(function(){
  $("#map4").hover(function(){
    $("#map4 img").css("width", "35%");
    $(this).css("font-size", "10px");
    }, function(){
    $("#map4 img").css("width", "30%");
    $(this).css("font-size", "8px");

  });
});


$(document).ready(function(){
  $("#map5").hover(function(){
    $("#map5 img").css("width", "45%");
    $(this).css("font-size", "16px");
    }, function(){
    $("#map5 img").css("width", "35%");
    $(this).css("font-size", "12px");

  });
});


$(document).ready(function(){
  $("#map6").hover(function(){
    $("#map6 img").css("width", "45%");
    $(this).css("font-size", "16px");
    }, function(){
    $("#map6 img").css("width", "35%");
    $(this).css("font-size", "12px");

  });
});



$(document).ready(function(){
  $("#map7").hover(function(){
    $("#map7 img").css("width", "45%");
    $(this).css("font-size", "16px");
    }, function(){
    $("#map7 img").css("width", "35%");
    $(this).css("font-size", "12px");

  });
});


function fechar(){

    for (let element of document.getElementsByClassName("map")){
       element.style.display="none";
    }
};




$(document).ready(function(){
  $("#map1").click(function(){
    $(".map").css("display", "none");
    $("#map_1").toggle();
    
  });
});

$(document).ready(function(){
  $("#map2").click(function(){
     fechar();
    $("#map_2").toggle();
  });
});

$(document).ready(function(){
  $("#map3").click(function(){
     fechar();
    $("#map_3").toggle();
  });
});

$(document).ready(function(){
  $("#map4").click(function(){
     fechar();
    $("#map_4").toggle();
  });
});

$(document).ready(function(){
  $("#map5").click(function(){
     fechar();
    $("#map_5").toggle();
  });
});

$(document).ready(function(){
  $("#map6").click(function(){
     fechar();
    $("#map_6").toggle();
  });
});

$(document).ready(function(){
  $("#map7").click(function(){
     fechar();
    $("#map_7").toggle();
  });
});