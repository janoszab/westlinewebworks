$(function() {
    var time = 5000;

    setInterval(function(){
        $("#poll-table").load('/', function() {console.log('asd')});
    }, time);
});