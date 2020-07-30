<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bobcatobs Demo Site</title>

<?php
include("include/site_keys.php");
?>

<?php
include("include/GA.php");
?>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <script src="js/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

    <link rel="stylesheet" href="/leaflet/leaflet.css" />
    <script src="/leaflet/leaflet.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/spin.js/2.0.1/spin.min.js'></script>

<!-- bootstrap-select dropdownup=false -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>

.line {
  fill: none;
  clip-path: url(#clip);
}

.zoom {
  cursor: move;
  fill: none;
  pointer-events: all;
}

.foo {
  float: left;
  width: 20px;
  height: 20px;
  margin: 5px;
  border: 1px solid rgba(0, 0, 0, .2);
}

.blue {
  background: #13b4ff;
}

.table_nopad table th{
   padding:0px;
}
.table_nopad table td{
   padding:0px;
}

/*   Change Color for Active Tabs     */
    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover,
    .nav-pills>li>a:hover,
    .nav>li>a:hover {
      //background-color: #F47321;
      background-color: #135d7c;
      border-color: #FFFFFF;
      color: #FFFFFF;
    }

    /*   Change Color for Inactive Tabs     */
    .nav-pills>li>a {
      background-color: #777;
      border-color: #FFFFFF;
      color: #FFFFFF;
    }

.nav-pills li {
    margin-left: 5px;
    margin-top: 3px;
    margin-bottom: 3px;
}

.spacer {
    margin-top: 10px;
}

.container{
  max-width: none !important;
  width: 960px;
}

.align-self-center .dropdown {
   top: 50%;
   transform: translateY(+30%);
}

}

</style>

  </head>


  <body>

<img style="display:none"/>
<canvas style="display:none" id="canvas" width="1110" height="560"></canvas>
<canvas style="display:none" style="background-color:white;" id="canvas3" width="1110" height="560"></canvas>

    <iframe id="my_iframe" style="display:none;"></iframe>


  <div class="container">
    <div class="row bobcatobs-brand">
<div>
<a href="index_bobcatobs.php">
      <img src="img/bobcat2c.png" height="120" width="130"></a>
</div>
<div class="align-self-center">
<a class="text-white" href="index_bobcatobs.php">
<h9>BOBCATOBS Organization<br/>
Office of ...<br/>
... Program</h9></a>
</div>
    </div>

    <!-- <div class="row" style="background-color:#135d7c;"> -->
    <div class="row" style="background-color:#0075ac;">
      <div class="col-md-auto align-self-center">
        <a class="text-white" href="index_bobcatobs.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      </div>
      <div class="col-md-auto align-self-center">
        <a class="text-white" href="about_us.php">About Us</a>
      </div>
      <div class="col-md-auto align-self-center">
      <!-- <div class="col-2 col-md-auto align-self-center" style="width: 15%"> -->
        <ul class="dropdown">
          <a class="dropdown-toggle text-white" data-toggle="dropdown" href="#">About Data</a>
          <ul class="dropdown-menu">
            <li><a href="about_data.php">Data Background</a></li>
            <li><a href="about_data_qaqc.php">Data QAQC</a></li>
            <li><a href="about_data_parameters.php">Collected Parameters</a></li>
            <li><a href="about_data_metadata.php">Metadata</a></li>
          </ul>
      </div>
      <div class="col-md-auto align-self-center">
        <a class="text-white" href="training.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Training Resources</a>

      </div>
      <div class="col-3 align-self-center">
        <ul class="dropdown">
          <a class="dropdown-toggle text-white" data-toggle="dropdown" href="#">Additional Resources</a>
          <ul class="dropdown-menu">
            <li><a target="_blank" href="index_bobcatobs.php">Sample link 1</a></li>
            <li><a target="_blank" href="index_bobcatobs.php">Sample link 2</a></li>
          </ul>
        </ul>

      </div>
      <div class="col-1 align-self-center">
        <a class="text-white" href="https://docs.google.com/document/d/15n5OmHxGL3wjz2dYOBI8r2h9ZB5j7-GYeWlsVYhMKwo/edit?usp=sharing" target="_blank">Help</a>
      </div>
    </div>

<div class="row">
<img src="img/pcreek.jpg" height="160" width="960">
</div>

<div class="row">
<p style="max-height:3px;"></p>
</div>

<div class="row">

<!--  <div class="container choice-main"> -->

<!--  <div class="container col-12"> -->

  <!--
  <h2>Dynamic Pills</h2>
  <p>To make the tabs toggleable, add the data-toggle="pill" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>
  -->
  <ul id="myTab" class="nav nav-pills">
<!--    <li class="nav-item"><a class="nav-link" id="pill1" data-toggle="pill" href="#choose_preserve">Choose Preserve</a></li> -->
    <li class="nav-item"><a class="nav-link" id="pill2" data-toggle="pill" href="#choose_station" onclick="clickNavStation();">Choose Station</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#choose_data">Graph Data</a></li>
    <!-- <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#get_data" onclick="setupDownloadData();">Download Data</a></li> -->
  </ul>

  <div class="tab-content">

    <div id="choose_preserve" class="tab-pane fade in active">
      <div id="map" style="width: 960px; height: 500px"></div>


    </div>

    <div id="choose_station" class="tab-pane fade">

<?php
include("include/list_station_available_data.php");
?>

      <p><i>* Denotes inactive stations</i></p> <!-- custom marker label convention -->
      <div id="map_station" style="width: 960px; height: 500px"></div>
    </div>
<div id="choose_data" class="tab-pane fade">
<div class="container">
<div class="row">
<p>Select a station, parameter and valid date range using the station parameter and dates available information below. Click 'Add to Graph' to add the chosen data to the graph display below. This process can be repeated to overlay several graphs with differing stations, parameters and date ranges. See the 'Help' link in the page menu above under 'Graph Data' details for additional info.</p>
</div>

<div class="row">
<div class="col-6">
<!-- event listener inputfile script listed later -->
<button onclick="document.getElementById('inputfile').click();">Load platform file</button>
<input id="inputfile" type="file" name="name" style="display: none;" />

<pre id="output"></pre>
</div>

</div> <!-- row -->


<div class="row">

<div id="option_preserve" class="col" style="display: none;">
<select id="preserve_choice">
</select>
</div>

<?php
//include("include/list_dropdown_choose_data.php");
?>

<!-- dynamic selection start, swap this section with php include of dropdowns for fixed application -->
<div class="col">
<p>Platform</p>
<select id="platform_choice"></select>
</div>

<div class="col">
<p>Parameter</p>
<select id="obs_choice"></select>

<!-- dynamic selection end -->

<!-- between currently performed on server-side, todo - add request types or filter results
<p>
<input type="checkbox" id="obs_range">
Between&nbsp;
  <input type="text" id="obs_range_start" value="start" onfocus="if (this.value == 'start') { this.value=''; }" style="width: 50px;">and
  <input type="text" id="obs_range_stop" value="stop" onfocus="if (this.value == 'stop') { this.value=''; }" style="width: 50px;">
</p>
-->


</div>


<div class="col">
  <p><input type="text" id="datepicker_start" onfocus="if (this.value == 'Start Date') { this.value=''; }" width="150"></p>
  <p><input type="text" id="datepicker_end" onfocus="if (this.value == 'End Date') { this.value=''; }" width="150"></p>
</div>

<div class="col">
   <p><input name="AddToGraphButton"
           type="button"
           value="Add to Graph"
           onclick="updateData();" /></p>
   <p><input name="clearGraphButton"
           type="button"
           value="Clear Graph"
	   onclick="clearGraph();" /></p>
</div>

</div> <!-- row -->

<?php
include("include/list_param.php");
?>


<div class="row justify-content-start" >

<div id="option_units" class="col-2">
Units
<select id="units_convert">
  <option value="metric" selected="selected">Metric</option>
  <option value="english">English</option>
</select>
</div>

<div class="col-2">
<input type="checkbox" id="check_fixed_y" onclick="fixedY()" checked=true>
Fixed Y-index
</div>

<div class="col-2">
<input type="checkbox" id="check_fixed_time" onclick="fixedTime()">
Fixed Time-index
</div>

<!-- todo - commenting this out for now till can address better later across possible data sources
<div class="col-2">
<input type="checkbox" id="check_filter_suspect" onclick="filterSuspect()">
Include suspect data
</div>
-->

<div id="save_or_print" class="col-3">
<button onclick="makeGraphImage(1)">Save graph as PNG</button>
<button onclick="makeGraphImage(0)">Print graph</button>
<a hidden id="link_dl">Download</a>
</div>


</div> <!-- row -->


<div id="main_legend" class="graph-legend"> <!-- graph-legend -->

</div> <!-- graph-legend -->

<svg id="svg_display" style="display:none" width="960" height="500"></svg>


</div> <!-- choose_data container -->
</div> <!-- choose_data -->

<div id="get_data" class="tab-pane fade">

</div> <!-- tab-content -->

<!-- </div> <!-- container -->

<!-- </div> <!-- container choice-main -->

    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <script>
    //more compact - but overrides bottom orientation - uiLibrary: 'bootstrap4'
    $('#datepicker_start').datepicker({
	orientation: 'bottom'
    });
    document.getElementById("datepicker_start").value = "Start Date";

    $('#datepicker_end').datepicker({
	orientation: 'bottom'
    });
    document.getElementById("datepicker_end").value = "End Date";

    </script>

<body>

<script>

function makeGraphImage(printOrSave) {

//get elements which will be used to write chart on canvas
    var canvas = document.querySelector('canvas');
    var svg = document.querySelector('svg');
    var img = document.querySelector('img');

    // get svg data
    var xml = new XMLSerializer().serializeToString(svg);

    // make it base64
    var svg64 = btoa(xml);
    var b64Start = 'data:image/svg+xml;base64,';

    // prepend a "header"
    var image64 = b64Start + svg64;

    // set it as the source of the img element
    img.src = image64;

    //connect img to arm
    var arm = img;

    //each legend entry is 48 pixels(was 30px with one line) height so multiply these times obsGraphed to get offset in save/print canvas
    //FIX?? the 560 pixel, subtraction is a kludge that seems to work to keep the bottom of the image from getting cropped off with additional graphs
    var legendLineHeight = 48;

    //wait for the image to be drawn and then draw it on canvas
    arm.addEventListener('load', function(){
        //draw on canvas
        var ctx = canvas3.getContext('2d');
	ctx.fillStyle = "#FFF";
	ctx.fillRect(0, 0, 1110, 560+obsGraphed*legendLineHeight); //was 38px high at first with one line
        //canvas3.getContext('2d').drawImage(img, 0, obsGraphed*30, 1110, 470+obsGraphed*30);
	canvas3.getContext('2d').drawImage(img, 0, obsGraphed*legendLineHeight, 1110, 560-obsGraphed*legendLineHeight);
    });

	//draw the tables on canvas
    	html2canvas(document.querySelector("#main_legend")).then(canvas => {
        //set id to canvas2
        canvas.id = "canvas2";
        //draw the tables on the canvas
        canvas3.getContext('2d').drawImage(canvas, 0, 0, 960, obsGraphed*legendLineHeight);
        var canvasFinal = document.getElementById("canvas3");

        if (printOrSave == 1) { //save
	var link = document.getElementById('link_dl');

        var selPlatform = document.getElementById("platform_choice");
        var optPlatform = selPlatform.options[selPlatform.selectedIndex];
        var dateStart = document.getElementById('datepicker_start').value;
        var dateEnd = document.getElementById('datepicker_end').value;

        link.setAttribute('download', optPlatform.value+'_'+dateStart+'_'+dateEnd+'.png');
	link.setAttribute('href', canvasFinal.toDataURL("image/png").replace("image/png", "image/octet-stream"));
	link.click();
	}
	else if (printOrSave == 0) { //print
  let mywindow = window.open('', 'to_print', 'height=600,width=800');

  mywindow.document.write(`<html><head><title>bobcatobs Graph</title>`);
  //mywindow.document.write('</head><body style="width: 100%; padding:0; margin:0; onload="window.focus(); window.print(); ">');
  mywindow.document.write('</head><body style="width: 100%; padding:0; margin:0;">');
  //mywindow.document.write(document.getElementById(divId).innerHTML);
  mywindow.document.write('<img src="' + canvasFinal.toDataURL("image/png") + '" /></body></html>');

  mywindow.document.close(); // necessary for IE >= 10

  mywindow.focus(); // necessary for IE >= 10*/
  mywindow.print();
  //mywindow.close();

	}

	});

}

</script>

<script>

    //custom setView
    var myMap = L.map('map').setView([29.3387649,-83.0563767],6);
    L.tileLayer(
	//'http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //attribution: '&copy; ' + mapLink + ' Contributors',
        maxZoom: 18,
	accessToken: leaflet_key
        }).addTo(myMap);

    //custom setView
    var myMapStation = L.map('map_station').setView([29.3387649,-83.0563767],5); //custom earlier version zoom = 6
    //mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
    L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //attribution: '&copy; ' + mapLink + ' Contributors',
        maxZoom: 18,
	accessToken: leaflet_key
        }).addTo(myMapStation);


function addMapMarker(myStringArray,mapType) {
    var arrayLength = myStringArray.length;
    var loopCtr = 0;
    for (var i = 0; i < arrayLength; i = i +3) {
        //alert(myStringArray[i]+":"+myStringArray[i+1]+":"+myStringArray[i+2]);

        loopCtr++;

        var strMarker =mapType+loopCtr+" = undefined";
        //Declaring and Setting dynamic variable to undefined using eval
        eval(strMarker);

	if (mapType == 'station') {
        strMarker = L.marker([myStringArray[i],myStringArray[i+1]]).addTo(myMapStation).on('click', onClickStation);

        strMarker.bindTooltip(myStringArray[i+2],
        {
            permanent: false,
            direction: 'right'
        }
        );
	}

	if (mapType == 'preserve') {
        str = L.marker([myStringArray[i],myStringArray[i+1]]).addTo(myMap).on('click', onClickPreserve);

        /*
        var icon = str.options.icon;
        icon.options.iconSize = [10, 10];
        str.setIcon(icon);
        */

	var labelDir = 'left';
	//custom
        if (myStringArray[i+2] == 'Indian River Lagoon' || myStringArray[i+2] == 'Northeast' || myStringArray[i+2] == 'Estero Bay') {labelDir = 'right';}

        str.bindTooltip(myStringPreserveArray[i+2],
        {
            permanent: false,
            direction: labelDir
        }
        );
	}


    }
}

    var myStringPreserveArray = [
<?php
include("include/list_preserve.php");
?>
    ];

    addMapMarker(myStringPreserveArray,'preserve');


var myStringStationArray = [
<?php
//include("include/list_station.php");
?>
];

    addMapMarker(myStringStationArray,'station'); 

    //var tabPreserveNum = 1;
    //var tabStationNum = 2;
    //var tabGraphNum = 3;

    var tabStationNum = 1;
    var tabGraphNum = 2;

    $(document).ready(function(){
      //$('#myTab li:nth-child('+tabPreserveNum+') a').tab('show');
      $('#myTab li:nth-child('+tabStationNum+') a').tab('show');

      setTimeout(function() {
      myMapStation.invalidateSize(true);
      }, 400);
    });

    //end default start/reload webpage

    function onClickPreserve(e) {
      //alert(e.target._tooltip._content);
      //document.getElementById("platform_choice").value = e.target._tooltip._content;

      $(document).ready(function(){

<?php
include("include/click_preserve.php");
?>

      //document.getElementById("pill1").innerHTML = "Choose Preserve<br/>"+e.target._tooltip._content;
      document.getElementById("pill2").innerHTML = "Choose Station";

      $('#myTab li:nth-child('+tabStationNum+') a').tab('show'); 

      setTimeout(function() {
      myMapStation.invalidateSize(true);
      }, 400);

      }); //readyfunction

    } //onClickPreserve


//handle click on station map placemark
    function onClickStation(e) {
      $(document).ready(function(){

      var stationPick;
      //alert(e.target._tooltip._content.substring(0,4));

      //default
      stationPick = e.target._tooltip._content;

<?php
include("include/click_station.php");
?>


      //document.getElementById("platform_choice").value = stationPick;
      changeStation(stationPick,0);
      //document.getElementById("pill2").innerHTML = "Choose Station<br/>"+e.target._tooltip._content;
      $('#myTab li:nth-child('+tabGraphNum+') a').tab('show'); 
      });

    }

//handle click on station map list
$(document).ready(function() {
    $( "#stationtable tbody tr" ).on( "click", function( event ) {
	var stationTableSel = $(this).find("th").eq(0).html();

        //document.getElementById("platform_choice").value = stationTableSel;
        changeStation(stationTableSel,0);
        //document.getElementById("pill2").innerHTML = "Choose Station<br/>"+$(this).find("th").eq(0).html()+' '+$(this).find("td").eq(0).html();
        $('#myTab li:nth-child('+tabGraphNum+') a').tab('show'); 
    });
});

</script>



<script src="https://d3js.org/d3.v4.min.js"></script>
<script>

//==forward to station page/graph if station url param present - only useful where webpage station/params dropdowns are pre-populated
var strJSONConfig = '';
var objJSONConfig;

<?php
$params = $_REQUEST;
$json_link = isset($params['json_link']) && $params['json_link'] !='' ? $params['json_link'] : 'none';
$station = isset($params['station']) && $params['station'] !='' ? $params['station'] : 'none';

if ($json_link != 'none') {
  
  //swap back in & symbol in our passed/formatted url to get
  $json_link = str_replace("zzz","&",$json_link);

   try {
     $json_config = @file_get_contents($json_link);

     if ($json_config === false) {
       // Handle the error
       echo 'swal("JSON file failed to load");';	
     }
   } catch (Exception $e) {
     // Handle exception
   }

   if ($json_config) {
     echo 'strJSONConfig = '.$json_config.';';
   }

}

?>

if (strJSONConfig != '') {
  strJSONConfig = JSON.stringify(strJSONConfig); //have to stringify to later validate object with JSON.parse which returns object?
  loadJSON(strJSONConfig);
}

var urlStation = '<?php echo $station ?>';

$(document).ready(function() {

if (urlStation != 'none') {
changeStation(urlStation,0);
$('#myTab li:nth-child('+tabGraphNum+') a').tab('show'); 
}

});


//===========================================================
var obsValue = 'none';
var obsTitle = 'none';
var platformTitle = 'none';
var timeValue = 'none';

var flagFixedY = 1;
var flagFilterSuspect = 0;
var flagFilterSuspectText = '';
var flagObsRangeText = '';

var flagFixedTime = 0;

var yMin;
var yMax;

listStations('none'); //clear station list on choose station page
listParams('none'); //clear param list on choose data page
document.getElementById("save_or_print").style.display = "none";


var svg = d3.select("svg"),
    margin = {top: 10, right: 10, bottom: 110, left: 40},
    margin2 = {top: 430, right: 10, bottom: 30, left: 40},
    width = +svg.attr("width") - margin.left - margin.right,
    height = +svg.attr("height") - margin.top - margin.bottom,
    height2 = +svg.attr("height") - margin2.top - margin2.bottom;


//custom
//var parseTime = d3.timeParse("%Y-%m-%d %H:%M:%S"); //RDB
//var parseTime = d3.timeParse("%Y-%m-%dT%H:%M:%S%Z"); //ERDDAP
var parseTime; //will be defined with each graph dataSourceType

  //console.log("width", width);
  //console.log("height", height);
var x = d3.scaleTime().range([0, width]),
    x2 = d3.scaleTime().range([0, width]),
    y = d3.scaleLinear().range([height, 0]),
    y2 = d3.scaleLinear().range([height2, 0]),
    z = d3.scaleOrdinal(d3.schemeCategory10);

var xAxis = d3.axisBottom(x)
	    .ticks(5)
            .tickFormat(d3.timeFormat("%Y-%m-%d %I%p")),
    xAxis2 = d3.axisBottom(x2)
            .tickFormat(d3.timeFormat("%Y-%m-%d")),
    yAxis = d3.axisLeft(y);

var brush = d3.brushX()
    .extent([[0, 0], [width, height2]])
    .on("brush end", brushed);

var zoom = d3.zoom()
    .scaleExtent([1, Infinity])
    .translateExtent([[0, 0], [width, height]])
    .extent([[0, 0], [width, height]])
    .on("zoom", zoomed);

var line = d3.line()
    //.curve(d3.curveLinear)
    //.defined(function(d) { return d; })
    .defined(function(d) { return !isNaN(d.value); })
    .x(function(d) { return x(d.date); })
    .y(function(d) { return y(d.value); });

var line2 = d3.line()
    .defined(function(d) { return !isNaN(d.value); })
    .x(function(d) { return x2(d.date); })
    .y(function(d) { return y2(d.value); });


svg.append("defs").append("clipPath")
    .attr("id", "clip")
    .append("rect")
    .attr("width", width)
    .attr("height", height);

var obs;

var focus = svg.append("g")
    .attr("class", "focus")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")"); //this took forever to figure out - commenting out from original
    //.attr("transform", "translate(" + margin.left + ",20)");

var context = svg.append("g")
    .attr("class", "context")
    .attr("transform", "translate(" + margin2.left + "," + margin2.top + ")");
    //.attr("transform", "translate(0," + margin2.top + ")");

  //interactive graph
  var mouseG = svg.append("g")
      .attr("class", "mouse-over-effects")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


var obsData = [];

//var colorSet = ["#001c9c","#101b4d","#475003","#9c8305","#d3c47c"];
//custom
var colorSet = ["#00FF00","#0000FF","#FF0000","#B2912F","#DECF3F","#CC3300","#000000","#00FFFF","#FF00FF"]; //red,blue,green,purple,orange - colors here acting wonky, seem to be influencing each other
//var colorSet = ["#5899DA","#E8743B","#19A979","#ED4A7B","#945ECF","#13A4B4","#525DF4i","#BF399E","#6C8893","#EE6868","#2F6497"]; //red,blue,green,purple,orange - colors here acting wonky, seem to be influencing each other
//var colorSet = ["","","","","","","","","",]; //red,blue,green,purple,orange - colors here acting wonky, seem to be influencing each other

var colorChoice;
var yIndexNum;
var yIndexAdd;
var yIndexWidth;
var obsGraphed; //count of obsGraphed

var paramGraphed; //array used to keep track of what's been graphed already to know whether we need another y-index(with fixed y-index option)
var yMultiMin;
var yMultiMax;

var checkGraph;

var graphData; //array used to hold plot values for csv download later
var textLegendText;
var strLegendText;

//json lookups for processing data to common form
var dataSourceType;
var objPlatform;
var sourceRefObs;
var sourceUrl;
var sourceUrlPrev;
var strTimeParse;
var evalCode;

clearGraph();

//custom
//add graph line break 'NA' values when data gaps
var dGapBreak = 60000; //time in milliseconds to place break 'NA' value
//var dGapThresh = 1800000+dGapBreak; //time in milliseconds = 30 min+1 minute, over thresh creates line break
var dGapThresh = 10800000+dGapBreak; //time in milliseconds = 3 hours+1 minute, over thresh creates line break


function graphObs(data) {

  //==trim array to remove elements outside of date selected range - mainly for static CSV files without dynamic query
  var dataRangeTime = [];

  //var t0 = performance.now();

  data.forEach(function(d) {
    if (d.m_date != null && d.m_date.getTime() >= startDateMilli && d.m_date.getTime() <= endDateMilli) { dataRangeTime.push(d); }
  });

  //var t1 = performance.now();
  //console.log(t1-t0);

  data = dataRangeTime.slice();

  if (data.length === 0) { swal("No data available"); return; }

  //==
  colorChoice++;
  if (colorChoice > 8) { colorChoice = 0; }

  obsGraphed++;

  //add another yIndex offset for different obs than last
  //console.log(paramGraphed.indexOf(obsValue))

  //add unitSuffix to differentiate between metric/english plot refs
  unitSuffix = document.getElementById('units_convert').value; 

  //add new yIndex if new param
  if (((paramGraphed.indexOf(obsValue+unitSuffix) == -1) && flagFixedY) || !flagFixedY) {
    paramGraphed.push(obsValue+unitSuffix);
    yIndexAdd = true;
    yIndexNum++;
    //width = width - yIndexWidth;
    width = width + yIndexWidth;

    if (obsGraphed <= 1) { //add right margin display for mouse-over, once only at beginning
      width = width + 160;
    }

    d3.selectAll("svg")
      .attr("width",width);

    //reset yMin,yMax
    //yMin = null; yMax = null;
  }

  //==map data - this section more to support CSV file with multiple parameters/keys in array at once - not really necessary where only querying one parameter at a time with other data sources
  var useColumn = obsValue;

  var varNames = d3.keys(data[0])
      .filter(function (key) { return key == useColumn;}); //pull/process just what specified in useColumn to object key

  obs = varNames.map(function (id) { //declared global for brush function
    return {
      id: id,
      values: data.map(function (d) {
        return {date: d.m_date, value: d[id]};
      })
    };
  });

  //console.log("Initial Data", obs);

  //dont change x-axis if graphing suspect data overlay
  if (flagFilterSuspect == 0) {
  //if (flagFilterSuspect == 0 && obsGraphed == 1) {
    x.domain(d3.extent(data, function(d) { return d.m_date; }));
    x2.domain(x.domain());
  }

  //console.log("yMin", yMin);
  //console.log("yMax", yMax);

  if (!flagFixedY || yMin == null || yMax == null) {
      yMin = d3.min(obs, function(c) { return d3.min(c.values, function(d) { return d.value; }); }),
      yMax = d3.max(obs, function(c) { return d3.max(c.values, function(d) { return d.value; }); })
  }

  y.domain([unitsConvert(yMin),unitsConvert(yMax)]);

  //support multi-y-axis
  yMultiMin[obsGraphed] = unitsConvert(yMin);
  yMultiMax[obsGraphed] = unitsConvert(yMax);


  y2.domain(y.domain());

  z.domain(obs.map(function(c) { return c.id; }));

  //y-axis

  if (yIndexAdd) {
  focus.append("g")
      .attr("class", "axis axis--y")
      .attr("transform", "translate("+(yIndexNum-1)*-1*yIndexWidth+",0)")
      //.attr("transform", "translate(-30,0)")
      .call(d3.axisLeft(y))
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", "0.71em")
      .attr("fill", "#000")
      .text(obsTitle);

  yIndexAdd = false;
  }

  //create line
  //https://stackoverflow.com/questions/24825145/black-area-when-exporting-graph-from-svg-d3-js-to-jpg
  //have to include fill none directly for svg to export

  focus.append("path")
      .data(obs)
      .attr("class", "line ymulti"+obsGraphed)
      .attr("opacity", "1")
      .attr("fill", "none")
      .attr("d", function(d) {

         var dTimePrev;
         var dTimeBreak;
	 var dGap = [];


     for (var i = 0; i < d.values.length; i++) {
	   if (i == 0) { dTimePrev = d.values[i].date; }

	   if (d.values[i].value == 0) { continue; } //remove null return values from erddap, FIX? depending on no actual param values at exactly 0

	   //below lines fixed by dataRangeTime array filter at start of graphObs
	   //if (d.values[i].date == null) { continue; } //FIX? problem with CSV testing

	   //cut out values from CSV that might be outside selected time range
	   //if (d.values[i].date.getTime() < startDateMilli) { dTimePrev = d.values[i].date; continue; } 
	   //if (d.values[i].date.getTime() > endDateMilli) { continue; } 


	     //console.log('i'+i+":time:"+d.values[i].date.getTime());
	     //console.log('i'+i+":time:",d.values[i]);
	   if (d.values[i].date.getTime() - dTimePrev > dGapThresh) {
	     //console.log('gap');
	     var dGapTemp = { date: dTimeBreak, value: 'NA'};
	     dGap.push(dGapTemp);
	   }
	   dTimePrev = d.values[i].date.getTime();
	   dTimeBreak = new Date(dTimePrev+dGapBreak); //create line break
	   //console.log("dvadate"+d.values[i].date.getTime());
	   //console.log("dva:"+d.values[i].value);
	   d.values[i].value = unitsConvert(d.values[i].value);
	   dGap.push(d.values[i]);
	 }

         //create array x, pushed onto array graphData for later download if needed - FIX - merge/move into 1st processing loop when 1st entering graphObs - only loop through data once - currently loop 3 times - once for time range, once for gaps, once for download
	 //comma will render object in debug
	 //https://stackoverflow.com/questions/957537/how-can-i-display-a-javascript-object
	 //console.log("dGap:",dGap);
	 const objArrdGap = Object.entries(dGap); //Fix to use just regular js object notaction instead of indexing
	 //filter out the index keys(every other element) in array
	 //var x = objArrdGap.filter((value,index,arr) => {
	   //return index % 2 === 0;
	 //})
	 //var x = [['datetime(EST)','value']];
	 var x = [['datetime','value']];
         for(i = 0 ; i < objArrdGap.length; i++) {

           //https://stackoverflow.com/questions/8362952/javascript-output-current-datetime-in-yyyy-mm-dd-hhmsec-format
	   //const offsetMs = now.getTimezoneOffset() * 60 * 1000;
	   //const offsetMs = 5 * 60 * 60 * 1000; //FIX? check? database time values timezone?
	   const offsetMs = 0; //FIX? check? database time values timezone?
	   const dateLocal = new Date(Object.entries(objArrdGap[i][1])[0][1] - offsetMs);
	   const date_formatted = dateLocal.toISOString().slice(0, 19).replace(/-/g, "/").replace("T", " ");

           x.push([date_formatted, Object.entries(objArrdGap[i][1])[1][1] ]);
           //x.push(Object.entries(objArrdGap[i][1])[1][1]);
	 }

	 //console.log(x)
	 graphData.push(x);

	 //console.log("dGap:"+objArrdGap);

	 d.values = dGap;
	 return line(d.values); }) //was d.values
      //.attr("transform", "translate(" + margin.left + "," + margin.top + ")") //shifty?

      .style("stroke", colorSet[colorChoice]);

  //console.log('obsTitle:'+obsTitle);

  //brush

  //FIX? duplicate of earlier y with label?
  /*
  focus.append("g")
      .attr("class", "axis axis--y")
      .call(yAxis);
  */

  //create line - context
  context.append("path")
      .data(obs)
      .attr("class", "line ymulticontext"+obsGraphed)
      .attr("opacity", "1")
      .attr("fill", "none")
      .attr("d", function(d) { return line2(d.values); })
      .style("stroke", colorSet[colorChoice]);

  focus.attr("transform", "translate(" + margin.left*yIndexNum + "," + margin.top + ")");

  context.attr("transform", "translate(" + margin2.left*yIndexNum + "," + margin2.top + ")");

  mouseG.attr("transform", "translate(" + margin.left*yIndexNum+ "," + margin.top + ")");

  if (obsGraphed <= 1) {
  focus.append("g")
      .attr("class", "axis axis--x")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);

  context.append("g")
      .attr("class", "axis axis--x")
      .attr("transform", "translate(0," + height2 + ")")
      .call(xAxis2);

  context.append("g")
      .attr("class", "brush")
      .call(brush)
      .call(brush.move, x.range());

/*
  svg.append("rect")
      .attr("class", "zoom")
      .attr("width", width)
      .attr("height", height)
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
      .call(zoom);
*/
  } //if obsGraphed <= 1


  //refresh graph to latest time range - cancels out earlier time range compare functionality
  if (flagFixedTime == 0) {
  for (i = 1; i <= obsGraphed; i++) {

    y.domain([yMultiMin[i],yMultiMax[i]]);
    //change value
    focus.select(".ymulti"+i).attr("d", function(d) { return line(d.values); });
    context.select(".ymulticontext"+i).attr("d", function(d) { return line2(d.values); });
  }
  }

  focus.select(".axis--x").call(xAxis);
  context.select(".axis--x").call(xAxis2);

  //refresh graph - end

  //interactive graph

    var lines = document.getElementsByClassName('line');

    //selectAll seems important vs select - places elements outside svg body otherwise,etc -
    //had to keep ymulti here, since running iteratively, need to keep js from thinking we already have the attr created(and not creating it)
    var mousePerLine = mouseG.selectAll('.ymulti-mouse-per-line'+obsGraphed)
      .data(obs)
      .enter()
      .append("g")
      .attr("class", "mouse-per-line ymulti-mouse-per-line"+obsGraphed)

    mousePerLine.append("circle")
      .attr("r", 7)
      .style("stroke", "black")
      //.style("stroke", function(d) {
      //  return color(d.name);
      //})
      .style("fill", "none")
      .style("stroke-width", "1px")
      .style("opacity", "0");

    mousePerLine.append("text")
      .attr("transform", "translate(10,-3)"); //text display offset

    //if (obsGraphed <= 1) { //seems to be needed repeatedly for each element or glitches on first plot
    mouseG.append('svg:rect') // append a rect to catch mouse movements on canvas
      .attr('width', width) // can't catch mouse events on a g element
      .attr('height', height)
      .attr('fill', 'none')
      .attr('pointer-events', 'all')
      .on('mouseout', function() { // on mouse out hide line, circles and text
        //d3.select(".mouse-line")
          //.style("opacity", "0");
        //d3.selectAll(".mouse-per-line circle")
          //.style("opacity", "0");
        //d3.selectAll(".mouse-per-line text")
          //.style("opacity", "0");
      })
      .on('mouseover', function() { // on mouse in show line, circles and text
        d3.select(".mouse-line")
          .style("opacity", "1");

        //switch on mouseover for checkGraph=true lines
        for (i = 1; i <= obsGraphed; i++) {
	  //console.log(document.getElementById("toggle_graph_"+i).checked); //returns null, doesn't work, for dynamically added elements

	  //check legend toggle for graph
	  if (checkGraph[i]) {
            d3.selectAll(".ymulti-mouse-per-line"+i+" circle")
              .style("opacity", "1");
            d3.selectAll(".ymulti-mouse-per-line"+i+" text")
              .style("opacity", "1");
	  } else {
            d3.selectAll(".ymulti-mouse-per-line"+i+" circle")
              .style("opacity", "0");
            d3.selectAll(".ymulti-mouse-per-line"+i+" text")
              .style("opacity", "0");
	  }
	}
      })
      .on('mousemove', function() { // mouse moving over canvas
        var mouse = d3.mouse(this);
        d3.select(".mouse-line")
          .attr("d", function() {
            var d = "M" + mouse[0] + "," + height;
            d += " " + mouse[0] + "," + 0;
            return d;
          });

	//var options = { hour12: true };
	//var thisDate = x.invert(mouse[0]).toLocaleString("pl-PL", options)

	var thisDateYear = x.invert(mouse[0]).getFullYear();
        //console.log(x.invert(mouse[0]).getMonth());
	var thisDateMonth = pad(x.invert(mouse[0]).getMonth()+1,2);
	var thisDateDay = pad(x.invert(mouse[0]).getDate(),2);

	var AMPM = "AM";
	var thisDateHours = x.invert(mouse[0]).getHours();
	if (thisDateHours > 12) {
    	  thisDateHours -= 12;
	  AMPM = "PM";
	} else if (thisDateHours === 0) {
   	  thisDateHours = 12;
	}

	var thisDateMinutes = pad(x.invert(mouse[0]).getMinutes(),2);

	thisDate = thisDateYear.toString()+"-"+thisDateMonth+"-"+thisDateDay+" "+thisDateHours.toString()+":"+thisDateMinutes+" "+AMPM;

	//var thisDate = dateformat(x.invert(mouse[0]), "dddd, mmmm dS, yyyy, h:MM:ss TT");

	mouseXOffset = +mouse[0] + 10;
        d3.select(".mouse-valuetime")
          .attr("transform", "translate("+mouseXOffset+",10)") //text display offset
          .text(thisDate);

        d3.selectAll(".mouse-per-line")
          .attr("transform", function(d, i) {
            //console.log(width/mouse[0])
            //console.log(d)
            var xDate = x.invert(mouse[0]),
                bisect = d3.bisector(function(d) { return d.date; }).right;
                idx = bisect(d.values, xDate);

            var beginning = 0,
                end = lines[i].getTotalLength(),
                target = null;

	    var hideMouse = 0;

            while (true){
              target = Math.floor((beginning + end) / 2);
              pos = lines[i].getPointAtLength(target);

              if ((target === end || target === beginning) && pos.x !== mouse[0]) {
		  if (Math.abs(mouse[0] - pos.x) > 2) { //2 is the threshold pixel value distance where this is close enought to a graph line break
		    hideMouse = 1;
		  }
                  break;
              }
              if (pos.x > mouse[0])      end = target;
              else if (pos.x < mouse[0]) beginning = target;
              else break; //position found
            }

            y.domain([yMultiMin[i+1],yMultiMax[i+1]]);
	    if (hideMouse == 0 && checkGraph[i+1]) {
            d3.select(this).select('text')
              .text(y.invert(pos.y).toFixed(2));
            d3.select(this).select('circle')
              .style("opacity", "1");
	    }
	    else {
            d3.select(this).select('text')
              .text('');
              //.style("opacity", "0"); //valid step also but would need to enable like circle above
            d3.select(this).select('circle')
              .style("opacity", "0");

	    //keeping this on in case of several graphs displayed with different gaps
            //d3.select(".mouse-valuetime")
            //  .text('');
	    }

            return "translate(" + mouse[0] + "," + pos.y +")";
          });

      });
      //} //if ObsGraphed <= 1

  //add row to legend
  var nodeDiv = document.createElement("DIV");
  nodeDiv.className = 'row mygraph';

  //checkbox
  var colorClick = document.createElement("DIV");
  colorClick.className = 'col-1 align-middle';
  //colorClick.className = 'col-1';

  var checkbox = document.createElement("input");
  checkbox.setAttribute("type", "checkbox");
  checkbox.setAttribute("name", "toggle_graph_"+obsGraphed);
  checkbox.setAttribute("value", obsGraphed);
  checkbox.setAttribute("onchange", "toggleGraph(this)");
  checkbox.checked = true;
  colorClick.appendChild(checkbox);
  nodeDiv.appendChild(colorClick);
  //remember to check the associated array value true also
  checkGraph[obsGraphed] = true;

  //colorLegend
  var colorLegend = document.createElement("DIV");
  colorLegend.className = 'col-1 foo';
  colorLegend.style.backgroundColor = colorSet[colorChoice];
  nodeDiv.appendChild(colorLegend);

  //declaring and saving strLegendText here for reference on download later
  //custom earlier version strLegendText = obsTitle+","+$("#preserve_choice>option:selected").text()+","+$("#platform_choice>option:selected").text()+" "+document.getElementById('datepicker_start').value+" to "+document.getElementById('datepicker_end').value+flagFilterSuspectText+flagObsRangeText;
  strLegendText = obsTitle+","+$("#platform_choice>option:selected").text()+" "+document.getElementById('datepicker_start').value+" to "+document.getElementById('datepicker_end').value+flagFilterSuspectText+flagObsRangeText;

  //dlLink
  var dlLinkDiv = document.createElement("DIV");
  dlLinkDiv.className = 'col-1';
  var dlLink = document.createElement("button");
  dlLink.setAttribute("onclick", "strLegendText = \'"+strLegendText+"\'; downloadGraph("+obsGraphed+")");
  dlLink.textContent = 'Download';

  dlLinkDiv.appendChild(dlLink);
  nodeDiv.appendChild(dlLinkDiv);

  //textLegend
  var textLegend = document.createElement("DIV");
  textLegend.className = 'col-8';
  //textLegend.setAttribute("margin", "5px 30px !important");
  //textLegend.setAttribute("padding-left", "30px !important");
  textLegend.style.paddingLeft = "30px";
  textLegendText = document.createTextNode(strLegendText);
  textLegend.appendChild(textLegendText);
  nodeDiv.appendChild(textLegend)

  var legend = document.getElementsByClassName("graph-legend");
  legend[0].appendChild(nodeDiv);

} //graphObs

//});

function brushed() {
  if (d3.event.sourceEvent && d3.event.sourceEvent.type === "zoom") return; // ignore brush-by-zoom
  var s = d3.event.selection || x2.range();
  x.domain(s.map(x2.invert, x2));
  //x.domain([s[0][0] - 40, s[1][0] - 40].map(x2.invert, x2));
  //focus.select(".line").data(obs).attr("d", function(d) { return line(d.values); });
  //focus.selectAll(".line").attr("d", function(d) { return line(d.values); });

  for (i = 1; i <= obsGraphed; i++) {

    y.domain([yMultiMin[i],yMultiMax[i]]);
    //change value
    focus.select(".ymulti"+i).attr("d", function(d) { return line(d.values); });
    context.select(".ymulticontext"+i).attr("d", function(d) { return line2(d.values); });
  }

  focus.select(".axis--x").call(xAxis);
  context.select(".axis--x").call(xAxis2);

  svg.select(".zoom").call(zoom.transform, d3.zoomIdentity
      .scale(width / (s[1] - s[0]))
      .translate(-s[0], 0));
}

//zoomed is probably never called as events are captured by mouseover rectangle
function zoomed() {
  if (d3.event.sourceEvent && d3.event.sourceEvent.type === "brush") return; // ignore zoom-by-brush
  var t = d3.event.transform;
  x.domain(t.rescaleX(x2).domain());
  //focus.select(".line").data(obs).attr("d", function(d) { return line(d.values); });
  //focus.selectAll(".line").attr("d", function(d) { return line(d.values); });

  for (i = 1; i <= obsGraphed; i++) {
    y.domain([yMultiMin[i],yMultiMax[i]]);
    //change value
    focus.select(".ymulti"+i).attr("d", function(d) { return line(d.values); });
  }

  focus.select(".axis--x").call(xAxis);
  context.select(".brush").call(brush.move, x.range().map(t.invertX, t));
}

function type(d, _, columns) {
  d.m_date = parseTime(d.m_date);
  for (var i = 1, n = columns.length, c; i < n; ++i) d[c = columns[i]] = +d[c];
  return d;
}

function updateData() {

  //platform - FIX? simplify the 2-step way of selPlatform to simpler var assignment in one-step
  var selPlatform = document.getElementById("platform_choice");
  var optPlatform = selPlatform.options[selPlatform.selectedIndex];
  if (optPlatform == null) { swal('Please select a station'); return; }
  if (optPlatform.value == 'none') { swal('Please select a station'); return; }

  //obs
  var sel = document.getElementById("obs_choice");
  var opt = sel.options[sel.selectedIndex];
  if (opt == null) { swal('Please select a parameter'); return; }
  if (opt.value == 'none') { swal('Please select a parameter'); return; }
  obsValue = opt.value;
  
  //get our current obs properties from JSON listing
  objObs = objJSONConfig.find(record => record.name === 'obs').obsList.find(record => record.obsName === obsValue);

  //var obsUnitLkp = objObs.obsList.find(record => record.obsName === obsValue).obsProperties.unitMetric;
  var obsUnitLkp = objObs.unitMetric;
  if (document.getElementById('units_convert').value == 'english') { if (objObs.unitEnglish) { obsUnitLkp = objObs.unitEnglish; } } 
  obsTitle = opt.text+' '+obsUnitLkp;


  //FIX? test reset yMin,yMax all cases?
  yMin = null;
  yMax = null;

  //lookup yMin,yMax from json config file
  objObsList = objJSONConfig.find(record => record.name === 'obs');
  yMin = objObsList.obsList.find(record => record.obsName === opt.label).yMin;
  yMax = objObsList.obsList.find(record => record.obsName === opt.label).yMax;

  //alert(":"+document.getElementById('datepicker_start').value+":");
  if (document.getElementById('datepicker_start').value == 'Start Date') { swal('Please select a start date'); return; }
  if (document.getElementById('datepicker_end').value == 'End Date') { swal('Please select an end date'); return; }

  var dateStart = new Date(document.getElementById('datepicker_start').value);
  var dateEnd = new Date(document.getElementById('datepicker_end').value);
  //customSet
  if (dateEnd - dateStart > 157680000000) { swal('Please choose a time span less than 5 years'); return; }
  //alert(dateStart+":"+dateStart.getTime());

  optTime = document.getElementById('datepicker_start').value+document.getElementById('datepicker_end').value;


  document.getElementById("svg_display").style.display = "block";
  document.getElementById("save_or_print").style.display = "block";

  platformTitle = optPlatform.value;
  //get our current objPlatform ref from JSON listing
  objPlatform = objJSONConfig.find(record => record.name === optPlatform.label);

  dataSourceType = objPlatform.dataSourceType;
  strTimeParse = objPlatform.strTimeParse;
  sourceRefObs = objPlatform.subitems.find(record => record.name === opt.label).sourceRefObs;
  sourceUrl = document.getElementById('platform_choice').value;
  evalCode = objPlatform.evalCode;

  loadPlatform(); //load every time with single parameter

}

function loadPlatform() {

  startDate = document.getElementById("datepicker_start").value;
  startDateMilli = new Date(startDate).getTime();
  endDate = document.getElementById("datepicker_end").value;
  endDateMilli = new Date(endDate).getTime();

  // loader settings
  var target = document.getElementById('main_legend');

  // loader settings
  var opts = {
  lines: 9, // The number of lines to draw
  length: 9, // The length of each line
  width: 5, // The line thickness
  radius: 14, // The radius of the inner circle
  color: '#EE3124', // #rgb or #rrggbb or array of colors
  speed: 1.9, // Rounds per second
  trail: 40, // Afterglow percentage
  className: 'spinner', // The CSS class to assign to the spinner
  };

  //trigger loader
  var spinner = new Spinner(opts).spin(target);

  //check obs range
  var obsRangeStart = '';
  var obsRangeStop = '';
    //alert(":"+document.getElementById('obs_range').checked+":");
  if (document.getElementById('obs_range') && document.getElementById('obs_range').checked) {
    //alert("between checked");

    obsRangeStart = document.getElementById('obs_range_start').value;
    obsRangeStop = document.getElementById('obs_range_stop').value;
    flagObsRangeText = "',between "+obsRangeStart+" and "+obsRangeStop;

    if (document.getElementById('units_convert').value == 'english') {
      obsRangeStart = unitsConvertMetric(document.getElementById('obs_range_start').value);
      obsRangeStop = unitsConvertMetric(document.getElementById('obs_range_stop').value);
    }
  }
  else {
    flagObsRangeText = ''
  }

//================================================================
  if (dataSourceType == 'RDB') {

  //FIX - only works for local php, fails against remote json? use same solution as csv?
  d3.json("response_bobcatobs.php?action=get&station="+platformTitle+"&param="+sourceRefObs+"&start_date="+startDate+"&end_date="+endDate+"&filter_suspect="+flagFilterSuspect+"&obs_range_start="+obsRangeStart+"&obs_range_stop="+obsRangeStop, function(error, data) {
  if (error) throw error;

  // stop the loader
  spinner.stop();

  //customParam
  if (data == false) { swal("No data available"); return; }
  else {

  parseTime = d3.timeParse("%Y-%m-%d %H:%M:%S");

  data.forEach(function(d) {
    d.m_date = parseTime(d.m_date);
    d.water_temperature = +d.temp;
    d.specific_conductivity = +d.spcond;
    d.salinity = +d.sal;
    d.dissolved_oxygen_pct = +d.do_pct;
    d.dissolved_oxygen_mgl = +d.do_mgl;
    d.depth = +d.depth;
    d.ph = +d.ph;
    d.turbidity = +d.turb;
  });

  obsData = data.slice();
  graphObs(obsData);
  }

  });

  } //RDB

//================================================================
  if (dataSourceType == 'ERDDAP') {

  //FIX - add max hi/low

  erddap_startDate = startDate.substr(6,4)+'-'+startDate.substr(0,2)+'-'+startDate.substr(3,2);  
  erddap_endDate = endDate.substr(6,4)+'-'+endDate.substr(0,2)+'-'+endDate.substr(3,2);  

  //d3.json("https://erddap.secoora.org/erddap/tabledap/41110-ilm2wave-ilm2w-5-miles-.json?time%2C"+sourceRefObs+"&time%3E=2020-07-08T00%3A00%3A00Z&time%3C=2020-07-15T17%3A11%3A00Z", function(error, data) {

  d3.json(sourceUrl+".json?time%2C"+sourceRefObs+"&time%3E="+erddap_startDate+"&time%3C="+erddap_endDate, function(error, data) {
  //d3.json(sourceUrl, function(error, data) {
  if (error) throw error;

  // stop the loader
  spinner.stop();

  if (data == false) { swal("No data available"); return; }
  else {

  parseTime = d3.timeParse('%Y-%m-%dT%H:%M:%S%Z');

  //convert erddap json table to form d3 expects
  data2 = data.table.rows;

  //computed property names http://eloquentcode.com/computed-property-names-in-javascript
  //use + operator to convert double-quoted strings to numbers (if present, like from RDB json, but not ERDDAP json)

  //convert to common form
  var data3 = data2.map(function(x) { 
    return { 
      m_date: parseTime(x[0]), 
      [obsValue]: +x[1] 
    }; 
  });

  obsData = data3.slice();
  graphObs(obsData);
  }

  });

  } //ERDDAP

//================================================================
if (dataSourceType == 'CSV') {

//CSV a little different in that all variables loaded/saved from file at once and don't need to reload same file twice if not needed
//in this case if the same CSV source is queried back-to-back it won't reload the file but just use the existing previously loaded array

if (sourceUrl != sourceUrlPrev) {
sourceUrlPrev = sourceUrl;

var sourceUrlFormatCSV = sourceUrl.replace("&","zzz");

parseTime = d3.timeParse(strTimeParse);

$.ajax(
  'load_file.php?url='+sourceUrlFormatCSV,
  {
      success: function(data_ext) {
        //alert('AJAX call was successful');
	//alert('Data from the server' + data_ext);
	
  // stop the loader
  spinner.stop();

  //customParam
  if (data_ext == false) { swal("No data available"); return; }
  else {

  data2 = csvJSON(data_ext);

  var strMapping = 'var data3 = data2.map(function(d) { return { m_date: parseTime(d.'+objPlatform.sourceRefTime+'),';
  for (var i = 0; i < objPlatform.subitems.length; i++) {
    strMapping = strMapping+objPlatform.subitems[i].name+": +d."+objPlatform.subitems[i].sourceRefObs+","; 
  }
  
  //remove trailing comma
  strMapping = strMapping.slice(0, -1);

  strMapping += "}; });";

  eval(strMapping);

  /*
  var data3 = data2.map(function(d) { 
    return { 
      m_date: parseTime(d.DateTimeStamp), 
      water_temperature: +d.Temp,
      specific_conductivity: +d.SpCond,
      salinity: +d.Sal,
      dissolved_oxygen_pct: +d.DO_Pct,
      dissolved_oxygen_mgl: +d.DO_mgl,
      depth: +d.Depth,
      ph: +d.pH,
      turbidity: +d.Turb
    }; 
  });
  */

  obsData = data3.slice();
  graphObs(obsData);
  }


      },
      error: function() {
        alert('There was some error performing the AJAX call');
      }
   }
);

}
else { //use full CSV file array as previously loaded
  // stop the loader
  spinner.stop();

  graphObs(obsData);
}

} //CSV

//================================================================
if (dataSourceType == 'CDMO') {

cdmo_startDate = startDate.substr(6,4)+'-'+startDate.substr(0,2)+'-'+startDate.substr(3,2);  
cdmo_endDate = endDate.substr(6,4)+'-'+endDate.substr(0,2)+'-'+endDate.substr(3,2);  

sourceUrl += '?begin_date='+cdmo_startDate+'&end_date='+cdmo_endDate+'&parameters='+sourceRefObs;

var sourceUrlFormatCSV = sourceUrl.replace("&","zzz");

parseTime = d3.timeParse(strTimeParse);

$.ajax(
  'load_file.php?url='+sourceUrlFormatCSV,
  {
      success: function(data_ext) {
        //alert('AJAX call was successful');
	//alert('Data from the server' + data_ext);
	
  // stop the loader
  spinner.stop();

  //customParam
  if (data_ext == false) { swal("No data available"); return; }
  else {

  data2 = JSON.parse(data_ext);
  data2 = data2.properties;

  var strMapping = 'var data3 = data2.map(function(d) { return { m_date: parseTime(d.'+objPlatform.sourceRefTime+'),';
  for (var i = 0; i < objPlatform.subitems.length; i++) {
    strMapping = strMapping+objPlatform.subitems[i].name+": +d."+objPlatform.subitems[i].sourceRefObs+","; 
  }
  
  //remove trailing comma
  strMapping = strMapping.slice(0, -1);

  strMapping += "}; });";

  eval(strMapping);

  obsData = data3.slice();
  graphObs(obsData);
  }
      },
      error: function() {
        alert('There was some error performing the AJAX call');
      }
   }
);

} //CDMO

//================================================================
if (dataSourceType == 'CUSTOM') {

eval(evalCode);

}

} //loadPlatform


//================================================================
function fixedY() {
  if (flagFixedY == 1) { flagFixedY = 0; } //FIX - could set yMin,YMax null here and set in other, but need to check 
  else if (flagFixedY == 0) { flagFixedY = 1; }
}

function fixedTime() {
  if (flagFixedTime == 1) { flagFixedTime = 0; }  
  else if (flagFixedTime == 0) { flagFixedTime = 1; }
}

function filterSuspect() {
  if (flagFilterSuspect == 1) { flagFilterSuspect = 0; flagFilterSuspectText = ''; }
  else if (flagFilterSuspect == 0) { flagFilterSuspect = 1; flagFilterSuspectText = ',suspect data'; }
  updateData();
}



function toggleGraph(checkboxElem) {
  if (checkboxElem.checked) {
    //alert ("hi"+checkboxElem.value);
    d3.selectAll(".ymulti"+checkboxElem.value)
      .attr("opacity","1");
    d3.selectAll(".ymulticontext"+checkboxElem.value)
      .attr("opacity","1");
    checkGraph[checkboxElem.value] = true;
  } else {
    //alert ("bye"+checkboxElem.value);
    d3.selectAll(".ymulti"+checkboxElem.value)
      .attr("opacity","0");
    d3.selectAll(".ymulticontext"+checkboxElem.value)
      .attr("opacity","0");
    checkGraph[checkboxElem.value] = false;
  }
}

function changeStation(stationPick,mode) {
  //platform
  //var selPlatform = document.getElementById("platform_choice");
  //var optPlatform = selPlatform.options[selPlatform.selectedIndex];
  //alert(optPlatform.value);
  //alert(document.getElementById("platform_choice").options[document.getElementById("platform_choice").selectedIndex].value);
  //alert(stationPick);
  //alert(mode);

  //don't change tab text on download page with multiple stations
  if (mode == 1) { return; }

  //customPlatform
<?php
//include("include/list_preserve_from_station.php");
?>
  
  //document.getElementById("platform_choice").value = stationPick; //custom earlier version

  //below several lines modified from earlier version to generalized version with JSON file config
  objPlatform = objJSONConfig.find(record => record.name === stationPick);
  document.getElementById("platform_choice").value = objPlatform.value;
  $("#platform_choice").trigger("change");

  //custom/fix - add name_long for placemarks, with just name used for value and short displays - json platform lookup
  //var stationText = document.getElementById('platform_choice').options[document.getElementById('platform_choice').selectedIndex].text; //custom earlier version
  var stationText = stationPick;

  //https://stackoverflow.com/questions/14804253/how-to-set-selected-value-on-select-using-selectpicker-plugin-from-bootstrap
  $('.selectpicker').selectpicker('refresh')

  document.getElementById("pill2").innerHTML = "Choose Station<br/>"+stationText;

  listParams(stationPick);

}

function listStations(preservePick) {

<?php
include("include/list_preserve_reset.php");
?>

  if (preservePick == 'none') { return; }

  $('.station_list_'+preservePick).css('display','block');
}

function listParams(stationPick) {

  //FIX? could shorten this here and elsewhere by looping through station array with same command
<?php
include("include/list_station_reset.php");
?>

  if (stationPick == 'none') { return; }

  $('.param_list_'+stationPick).css('display','block');
}

function clickNavStation() {
  //alert("clickNavStation");

  setTimeout(function() {
    //myMapStation.setView([29.3387649,-83.0563767],7);
    myMapStation.setView([29.3487649,-83.0463767],6); //customSet
    myMapStation.invalidateSize(true);
  }, 400);
}


function setupDownloadData() {
  //document.getElementById("pill1").innerHTML = "Choose Preserve";
  document.getElementById("pill2").innerHTML = "Choose Station";
  listStations('none'); //clear station list on choose station page
  listParams('none'); //clear param list
}

//customFormula
function unitsConvert(baseValue) {

  if (document.getElementById('units_convert').value == 'english') {
    if (document.getElementById('obs_choice').value == 'water_temperature') {
      baseValue = (baseValue*9/5)+32;
    }
    if (document.getElementById('obs_choice').value == 'depth') {
      baseValue = (baseValue*3.2808);
    }
  }

  return baseValue;
}

//customFormula
function unitsConvertMetric(baseValue) {

  if (document.getElementById('units_convert').value == 'english') {
    if (document.getElementById('obs_choice').value == 'water_temperature') {
      baseValue = (baseValue-32)*5/9;
    }
    if (document.getElementById('obs_choice').value == 'depth') {
      baseValue = (baseValue/3.2808);
    }
  }

  return baseValue;
}

function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}


function clearGraph () {
  d3.selectAll('g > *').remove();
  d3.selectAll('.mygraph').remove();
  document.getElementById('save_or_print').style.display = 'none';

  colorChoice = 0;
  yIndexNum = 0;
  yIndexAdd = false;
  yIndexWidth = 40;
  obsGraphed = 0;

  paramGraphed = [];
  yMultiMin = [];
  yMultiMax = [];
  checkGraph = [];

  graphData = [];

  //add cleared common 'g' elements back
  mouseG.append("path") // this is the black vertical line to follow mouse
      .attr("class", "mouse-line")
      .style("stroke", "black")
      .style("stroke-width", "1px")
      .style("opacity", "0");

  mouseG.append("text") // this is the line value timestamp readout
      .attr("class", "mouse-valuetime")
      .attr("transform", "translate(10,10)") //text display offset
      .style("opacity", "1")
      .text('');

}


function downloadGraph(graphId) {

  //https://stackoverflow.com/questions/14964035/how-to-export-javascript-array-info-to-csv-on-client-side

  //download csv test
  /*
  const rows = [
      ["name1", "city1", "some other info"],
      ["name2", "city2", "more info"]
  ];
  */

  const rows = graphData[graphId-1];
  let csvContent = "data:text/csv;charset=utf-8,"
	      + rows.map(e => e.join(",")).join("\n");

  var encodedUri = encodeURI(csvContent);
  //window.open(encodedUri);

  var link = document.createElement("a");
  link.setAttribute("href", encodedUri);
  link.setAttribute("download", strLegendText+".csv");
  document.body.appendChild(link); // Required for FF

  link.click(); // This will download the data file named "my_data.csv".

}


//load inputfile json to dropdown selection boxes when button clicked
//https://www.geeksforgeeks.org/how-to-read-a-local-text-file-using-javascript/
//https://stackoverflow.com/questions/20483470/javascript-dynamic-drop-down-menu-values

//var objJSONConfig;

document.getElementById('inputfile') 
  .addEventListener('change', function() { 
              
  var fr=new FileReader(); 
  fr.onload=function(){ 
    //document.getElementById('output') 
    //.textContent=fr.result;

  //trim the JSON string before, otherwise the first character may be a whitespace
  if (fr.result.trim().charCodeAt(0) === 0xFEFF) {
    fr.result = fr.result.slice(1); // cut the BOM character
  }

  loadJSON(fr.result);

  } //onload 
              
  fr.readAsText(this.files[0]); 

}); 

function loadJSON(strJSON) {

  //if valid JSON then assign to script object variable
  if (JSONCheck(strJSON)) { objJSONConfig = JSON.parse(strJSON); } 

  var temp1 = {};

  //change platform/obs dropdowns to match JSON file
  var menu1 = $("#platform_choice");
  menu1.empty();

  $.each(objJSONConfig, function() {
    if (this.name != 'obs') { //don't include or obs properties list
    $("<option />")
      .attr("value", this.value)
      .html(this.name)
      .appendTo("#platform_choice");
    temp1[this.value] = this.subitems;
    }
  });

  $("#platform_choice").change(function() {
    var value = $(this).val();
    var menu = $("#obs_choice");

    menu.empty();
    $.each(temp1[value], function() {
      $("<option />")
        .attr("value", this.value)
        .html(this.name)
        .appendTo(menu);
    });
  }).change();

  //add mapMarkers from JSON file station locations 
  $.each(objJSONConfig, function() {

  if (this.lat != null) {
    //FIX? push all to one array before function call
    addMapMarker([this.lat,this.lon,this.name],'station');
  }

  });

}

//check JSON string validity as JSON object with JSON.parse
function JSONCheck(str) {
    try {
        JSON.parse(str);
    } catch (e) {
	swal("Bad JSON file, try jsonlint.com to find errors.");
        return false;
    }
    return true;
}

//convert CSV to JSON object
//var csv is the CSV file with headers
function csvJSON(csv){

  var lines=csv.split("\n");
  var result = [];
  var headers=lines[0].split(",");

  for(var i=1;i<lines.length;i++){

    var obj = {};
    var currentline=lines[i].split(",");

    for(var j=0;j<headers.length;j++){
      obj[headers[j]] = currentline[j];
    }

    if (obj != null) {
      result.push(obj);
    }
  }
        	  	  	  		  	  	      
  return result; //JavaScript object
  //return JSON.stringify(result); //JSON
}


</script>

<!-- Footer -->
<?php
include("footer.php");
?>

