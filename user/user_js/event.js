
var Events = {
"monthly": [
<?php foreach($event as $v){?>
{
"id": <?php echo $v['id'];?>,
"name": "<?php echo $v['time'];?>",
"startdate": "<?php echo $v['date'];?>",
"enddate": "",
"color": "#53c3db"
},
<?php }?>
]
};


window.onload = function(){

$('#mycalendar').monthly({
mode: 'event',
dataType: 'json',
events: Events,
eventList:false
});

};

document.addEventListener("click", function(e) {
    if(e.target.classList.contains("monthly-event-indicator")) {
        console.log('ok');
        console.log(e.target.dataset.eventid);
    }
    if(e.target.classList.contains("eventClick")) {
        console.log('ok');
        console.log(e.target.dataset.eventid);
    }
})