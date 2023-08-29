$(document).ready(function()
{
var supportsAudio = document.createElement('audio');
if (supportsAudio) 
{
   var currentTrack = 0;
   var isPlaying = false;
   var autoPlay = false;
   var loop = false;
   var volume = 70/100;
   var $info = $('#Extension1-info');
   var $video = $('#Extension1 video');
   var player = $video.get(0);
   var playlist = [{ "title" : "Parametros Gerais", "length" : "0:00", "filename" : "Gravação de vídeo por aba  (2023-08-09 17_00 GMT-3).mp4", "poster" : ""},
{ "title" : "Configuração por Aplicativo", "length" : "0:00", "filename" : "Gravação de vídeo por aba configuracao por aplicativo.mp4", "poster" : ""},
{ "title" : "Palavras Sensíveis", "length" : "0:00", "filename" : "Gravação de vídeo por aba palavras sensiveis.mp4", "poster" : ""},
];

   $.each(playlist, function(index, value) 
   {
      var track = (index+1).toString();
      if (track.length < 2) 
      {
         track = '0' + track;
      } 
      $('#Extension1-playlist ul').append('<li><div class="item">' + track + '. ' + value.title + '<div class="length">' + value.length + '</div></div></li>');
   });
   $video.bind('play', function () 
   {
      isPlaying = true;
      $info.text('Playing...');
   });
   $video.bind('pause', function () 
   {
      isPlaying = false;
      $info.text('Paused');
   });
   $video.bind('ended', function () 
   {
      $info.text('Paused');
      $('#Extension1-next').trigger('click');
   });
   $('#Extension1-prev').click(function () 
   {
      if (currentTrack > 0) 
      {
         currentTrack--;
         setTrack(currentTrack);
         if (isPlaying) 
         {
            player.play();
         }
      } 
      else 
      {
         player.pause();
         setTrack(0);
      }
   });
   $('#Extension1-next').click(function () 
   {
      if ((currentTrack + 1) < playlist.length) 
      {
         currentTrack++;
         setTrack(currentTrack);
         if (isPlaying) 
         {
            player.play();
         }
      } 
      else 
      {
         player.pause();
         if (loop)
         {
            setTrack(0);
            player.play();
         }
      }
   });
   $('#Extension1-playlist ul li').click(function () 
   {
      currentTrack = parseInt($(this).index());
      setTrack(currentTrack);
      if (isPlaying) 
      {
         player.play();
      }
   });
   
   function setTrack(track) 
   {
      currentTrack = track;
      if (playlist[currentTrack].filename.charAt(0) == '/')
          player.src = '.' + playlist[currentTrack].filename;
      else
          player.src = playlist[currentTrack].filename;

      var poster = '';
      if (playlist[currentTrack].poster.charAt(0) == '/')
          poster = '.' + playlist[currentTrack].poster;
      else
          poster = playlist[currentTrack].poster;

      $video.attr('poster', poster);

      $('#Extension1 .selected').removeClass('selected');
      $('#Extension1-playlist ul li:eq(' + currentTrack + ')').addClass('selected');
      $('#Extension1-title').text(playlist[currentTrack].title);
   }

   setTrack(0);
   player.volume = volume;
   if (autoPlay)
   {
      player.play();
   }
}

});
