$(function() {
    $('.image_box .disabled_checkbox').click(function() {
    return false;
  });

  // 画像がクリックされた時の処理です。
  $('img.movie').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="movie"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="movie"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
      $('img.karaoke').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="karaoke"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="karaoke"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
      $('img.camera').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="camera"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="camera"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
      $('img.theater').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="theater"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="theater"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    $('img.art').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="art"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="art"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });  
    
      $('img.music').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="music"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="music"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
      $('img.creator').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="creator"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="creator"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
     $('img.gaming').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="gaming"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="gaming"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
       $('img.anime').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="anime"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="anime"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
       $('img.book').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="book"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="book"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
       $('img.travel').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="travel"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="travel"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
  
       $('img.exercise').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="exercise"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="exercise"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
       $('img.jogging').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="jogging"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="jogging"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
  
     $('img.car').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="car"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="car"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
       $('img.byecicle').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="byecicle"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="byecicle"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
       $('img.dance').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="dance"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="dance"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
       $('img.golf').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="golf"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="golf"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
       $('img.dart').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="dart"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="dart"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
       $('img.boxing').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="boxing"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="boxing"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
       $('img.fitness').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="fitness"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="fitness"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
       $('img.wedding').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="wedding"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="wedding"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
       $('img.sweet').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="sweet"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="sweet"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
       $('img.cock').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="cock"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="cock"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
   
    
       $('img.indoor').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="indoor"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="indoor"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
    
       $('img.norway').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="norway"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="norway"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
    
       $('img.owarai').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="owarai"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="owarai"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
    
       $('img.zakka').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="zakka"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="zakka"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
       $('img.mountain').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="mountain"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="mountain"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
       $('img.onsen').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="onsen"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="onsen"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
       $('img.ferris-wheel').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="ferris-wheel"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="ferris-wheel"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
           $('img.alchool').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="alchool"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="alchool"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
    
           $('img.talk').on('click', function() {
      
    if (!$(this).is('.checked')) {
      // チェックが入っていない画像をクリックした場合、チェックを入れます。
        $('input[name="talk"]').prop('checked', true);
      $(this).addClass('checked');
        
    } else {
      // チェックが入っている画像をクリックした場合、チェックを外します。
        $('input[name="talk"]').prop('checked', false);
      $(this).removeClass('checked');
    
    }
  });
    
    
    
    
    
        
    
});