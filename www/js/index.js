// Alla videor väntar på varandra att laddad därefter börjar spelas.

var promises = [];
function makePromise(i, video) {
  promises[i] = new $.Deferred();
  // Detta event berättar för oss att nu kan filerna spelet utan stopp/buffer.
  video.oncanplaythrough = function() {
    promises[i].resolve();
  }
}
// Pausa alla videos och gå till väga med "promise" arrayen.
$('video').each(function(index){
  this.pause();
  makePromise(index, this);
})

// Vänta för alla att resolvas därefter startar animationen.
$.when.apply(null, promises).done(function () {
  $('video').each(function(){
    this.play();
  });
});