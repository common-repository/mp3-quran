var $ = jQuery.noConflict();


function pauseSurah(e){
    var element = $(e);
    var btn_play = $(element.siblings('.play_btn')[0]);
    var audio = element.siblings(".surah_audio").get(0);
    btn_play.show();
    audio.pause();
    element.hide();
}

function playSurah(e){
    var element = $(e);
    var all_pause = $('.pause_btn');
    all_pause.hide();
    var all_play = $('.play_btn');
    all_play.show();
    var all_audio = $('.surah_audio');
    all_audio.each(function(i) {
        var aud = this;
        if(!aud.paused){
            aud.pause();
        }
    });
    var btn_pause = $(element.siblings('.pause_btn')[0]);
    var audio = element.siblings(".surah_audio").get(0);
    var bars = btn_pause.find('.bar');
    btn_pause.show();
    $(bars).each(function(i) {
         genHeight($(this));
    });
    audio.play();
    element.hide();
}

function onAudioPlay(e){
    console.log("Audio Play");
    var element = $(e);
    var all_pause = $('.pause_btn');
    all_pause.hide();
    var all_play = $('.play_btn');
    all_play.show();
    var all_audio = $('.surah_audio');
    all_audio.each(function(i) {
        var aud = this;
        if(!aud.paused && this.id != e.id){
            aud.pause();
        }
    });
    var btn_pause = $(element.siblings('.pause_btn')[0]);
    var btn_play = $(element.siblings(".play_btn").get(0));
    var bars = btn_pause.find('.bar');
    btn_pause.show();
    $(bars).each(function(i) {
         genHeight($(this));
    });
    //e.play();
    btn_play.hide();
}
function onAudioPause(e){
     console.log("Audio Pause");
    var element = $(e);
    var btn_play = $(element.siblings('.play_btn')[0]);
    var btn_pause = $(element.siblings(".pause_btn").get(0));
    btn_play.show();
   // audio.pause();
    btn_pause.hide();
}

function changeText(Surh_id , Surh_name, Surh_url, file_name,img) {
    var element = document.getElementById('element' + Surh_id);
    //var surhnumber = (Surh_id+1);
    var surhnumber = Surh_id;

    if (Surh_id > 114) {
        element.innerHTML = 'Not Found';
    }else{
        var bars = '<div class="visualiser-bg"><div class="visualiser"><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span></div></div>';
        
        element.innerHTML = bars;
    // 	if (element.innerHTML === surhnumber+'- '+Surh_name){
    	    
    //     	element.innerHTML = '<p><a href="'+Surh_url+'" download="'+file_name+'" target="_blank"><img src="'+img+'" alt="Download file" /></a><span>'+surhnumber+'- '+Surh_name+'</span></p><audio preload="auto" controls id="surah_'+surhnumber+'"><source type="audio/mpeg" src="'+Surh_url+'" /></audio>'+bars;
    //     // 	element.innerHTML = '<p><a onclick=downloadFile("'+Surh_url+'","'+file_name+'")><img src="'+img+'" alt="Download file" /></a><span>'+surhnumber+'- '+Surh_name+'</span></p><audio preload="auto" controls><source type="audio/mpeg" src="'+Surh_url+'" /></audio>';
    //     }else{
    //         element.innerHTML = surhnumber+'- '+Surh_name ;
    //     }
        // $(".bar").each(function(i) {
        //   // genHeight($(this));
        // });
    }
}

jQuery( document ).ready(function( $ ) {
});


function genHeight(bar) {
        var minHeight = 2;
        var maxHeight = 30;
        var barHeight = Math.ceil((Math.random()*maxHeight)+minHeight);
        var time = barHeight * 15;
        bar.animate({
            height: barHeight
        }, time, function() {
            genHeight($(this));
        });
}
        
function aud_play_pause(id) {
  var myAudio = document.getElementById(id);
  if (myAudio.paused) {
    myAudio.play();
  } else {
    myAudio.pause();
  }
}
function downloadFile(urlToSend,file_name) {
    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
   
		jQuery.post(urlToSend, {}, function(response) {
			alert('Got this from the server: ' + response);
		});
    // var request = new Request(urlToSend);
    //  fetch(request, {mode: 'cors',method: 'GET',headers: new Headers({
    //             "content-disposition": "inline; filename= " + file_name ,"Access-Control-Allow-Origin": "*"
    //         })})
    //   .then(resp => resp.blob())
    //   .then(blob => {
    //     const url = window.URL.createObjectURL(blob);
    //     const a = document.createElement('a');
    //     a.style.display = 'none';
    //     a.href = url;
    //     // the filename you want
    //     a.download = file_name;
    //     document.body.appendChild(a);
    //     a.click();
    //     window.URL.revokeObjectURL(url);
    //     alert('your file has downloaded!'); // or you know, something with better UX...
    //   })
    // .catch(() => alert('oh no!'));
 }