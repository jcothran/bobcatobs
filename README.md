# bobcatobs
A JSON file configurable approach (and project template) to pulling time-series data from a variety of data sources into graph overlays(currently using [d3](https://d3js.org/)) or other browser visualization/analysis. Feedback, reuse and further development are welcomed via issues labeled feedback,question,documentation,enhancement,etc.

__Demo site__ https://www.floridaapdata.org/bobcatobs/?json_link=https://drive.google.com/uc?export=downloadzzzid=1m0JFXeI7slOcsHUGm0lwZuB9jH4MhcoC

README file project documentation in progress

Going to the demo site will show a [leaflet](https://leafletjs.com) map of the Southeastern US and several placemarks that represent coastal/ocean observing platform locations providing various time-series data such as water-temperature,salinity,dissolved_oxygen,depth,ph,turbidity,air_temperature

> ![image](https://drive.google.com/uc?export=view&id=1mOJZf9ulbxk25GKktRFHO7irugMG9zGh "Map of several coastal/ocean platform locations")
>  

The website itself is structured as a template for other's use and project development. It uses a [bootstrap](https://getbootstrap.com) layout with project and platform specific content separated into example php files listed in the 'include' folder. The main index php file contains the keyword 'custom' to reference more project custom content that individual projects might wish to change to suit them. Further discussion below under 'Development History'. While this project was developed in the context of sharing time-series observational data, the general approach and code could be applied to problems in other domains without a geospatial/mapping reference.

# Demo site
> ![image](https://drive.google.com/uc?export=view&id=1j4HMBcDPkwKZzG7CtvlRhPMEhvWcWzKV "Graph of several platform water temperatures")
>  

* clicking a station placemark will change the tab to the 'Graph Data' controls. The platform clicked on the map should be selected in the first dropdown or other platforms can be selected from this dropdown. The platform selection will auto-fill the observation/parameter choices available for this platform(for the demo). 
* select a start and end date(entering text directly or using the calendar popup) - for demo purposes, try smaller timespan windows of a few days or a week to get a quicker response
  * suggested date ranges for available data 
    * SUN2, CAP2, niwolwq, noczbwq, rkblhwq - past several years up through the past day
    * MP3C - 2010 to 2018
    * EB03 - 2018 only - this data is pulled from a single year CSV file
    
* click 'Add Graph' to plot the time-series data. The cursor over the graph should show the current date and value at the graph point and the gray bar(or brush control) below the graph represents a selection area for the graph that can be used to zoom in or out on the graph
* the user can continue to select other parameter, platform and date ranges and clicking 'Add Graph' to overlay onto the existing graph

## Additional functions

* a legend line with a checkbox allows their line to be toggle on/off in the graph
* the legend line also contains a button to download the time-series of that line as a simple CSV file(datetime,value)
* after graph(s) are present, the graph can be saved as png or printed using those buttons
* click 'Clear Graph' to clear the current graph area
* metric/english unit selection available
* default ‘fixed-y’ limits the y-index to a preset parameter range to allow easier same-graph comparison between plots, deselecting ‘fixed-y’ plots between the selected data min&max(including possible outliers which might skew the graph) for each graph
* graph line breaks are created for data gaps > custom time threshold
* same params plot against the same fixed-y index, different params/units create additional y-index
* by default, x-index(time) tracks last graphed time range, but checking 'Fixed Time-index' will allow differing time periods to be overlayed, snapping to the most recent time range if the brush control is used

## Multiple parameters

Differing platforms/parameters can be compared with each other.

> ![image](https://drive.google.com/uc?export=view&id=14FCbABiyM7sQx1VlQI0DptIyAEXTQB0N "Graph of several platform water temperatures")
>   

## Fixed Time-index

The 'Fixed Time-index' option allows different time windows to be overlayed - the same months overlayed across several years(water_temperature April-June 2017-2020) shown below.

> ![image](https://drive.google.com/uc?export=view&id=1CHPX8Pp3fuC2tQpnIE_uQHKrOb5_-6y3 "Graph of same parameter/time-span over several years")
>  

# Concepts - use of JSON configuration file to allow custom selection and bridge complexity

The two main problems in assembling or aggregating time-series data from a range of online data sources are

* lack of standards or complexity in
  * the data request format - how are time and parameter names referenced and formatted? what source-unique functionalities are present in the request format?
  * the data returned format - if JSON(or CSV,etc), what is the object structure and are time and parameter formatted and referenced the same as the request?

The use of a JSON configuration file(for example, the demo file which can be reviewed [here](https://drive.google.com/file/d/1m0JFXeI7slOcsHUGm0lwZuB9jH4MhcoC/view?usp=sharing) allows the ability to create
* a custom list of platforms/stations/sources of time-series of interest and their
  * request endpoint link
  * time and available parameter reference names and formats
  * associated javascript that can be shared and evaluated(using javascript 'eval' function) to convert/map data source responses into a common data format/array used in the browser for overlays and further visualization/analysis - see the 'SUN2' platform reference and 'evalCode' script([unminify](https://unminify.com/) version below)
  
```javascript
erddap_startDate = startDate.substr(6, 4) + "-" + startDate.substr(0, 2) + "-" + startDate.substr(3, 2);
erddap_endDate = endDate.substr(6, 4) + "-" + endDate.substr(0, 2) + "-" + endDate.substr(3, 2);
d3.json(sourceUrl + ".json?time%2C" + sourceRefObs + "&time%3E=" + erddap_startDate + "&time%3C=" + erddap_endDate, function (a, t) {
  if (a) throw a;
  if ((spinner.stop(), 0 != t)) {
    (parseTime = d3.timeParse("%Y-%m-%dT%H:%M:%S%Z")), (data2 = t.table.rows);
    var e = data2.map(function (a) {
      return { m_date: parseTime(a[0]), [obsValue]: +a[1] };
    });
    (obsData = e.slice()), graphObs(obsData);
  } else swal("No data available");
});

```
  * name,group,location(optional) or other common associated platform/station/datasource properties

## JSON config file structure

The [demo JSON config file](https://drive.google.com/file/d/1m0JFXeI7slOcsHUGm0lwZuB9jH4MhcoC/view?usp=sharing) consists of
* __obsList__ section, listing observation/parameters that might be used and associated properties
* following platform/station/datasource section which lists the data links and associated properties and observations for each data source

The config file can be loaded automatically from a trusted source in the __json_link__ site call or loaded at the client by the 'Load platform file' button. The JSON configuration info could also be hard-coded within the website as part of website development.

### dataSourceType
A CSV file with a datetime column and several associated parameters can be handled by the current config file and associated code.

I've also provided examples processing from a relational database web service the site template provides, an [ERDDAP](https://coastwatch.pfeg.noaa.gov/erddap/index.html) web service, a [CDMO(NERRS)](https://cdmo.baruch.sc.edu) web service and a CUSTOM version of the earlier present ERDDAP service. _Aside from the CSV file case, all the other services could also be listed/shared as CUSTOM services and the CUSTOM case provides a way to add/share other data sources/web services not currently listed._

Within the index_bobcatobs.php code, the [loadPlatform() function](https://github.com/jcothran/bobcatobs/blob/97fb36f4dbdb06f468d6fcb9b82709416f19f55b/index_bobcatobs.php#L1450) details the several current ways to process different cases depending on the __dataSourceType__. A technical note with web services and the d3.json ajax calling function is that this requires(will error out otherwise) the data source use a https/ssl type endpoint. If the endpoint does not use https, then I had to use a CSV case work-around of getting the requested data via php and echoing the results back to a different ajax request. An example of this can be seen with the current CDMO processing code case. 

__obsList__ example
```json
  {
    "name": "obs",
    "obsList": [
      {
        "obsName": "water_temperature",
        "unitMetric": "C",
	"unitEnglish": "F",
        "yMin": 0,
        "yMax": 37
      },
      {
        "obsName": "salinity",
	"unitMetric": "ppt",
        "yMin": 0,
        "yMax": 36
      }
    ]
  },
```

platform example - ERDDAP
```json
 {
    "name": "CAP2",
    "value": "https://erddap.secoora.org/erddap/tabledap/org_cormp_cap2",
    "organization":"CORMP",
    "dataSourceType":"ERDDAP",
    "lat":"32.8032",
    "lon":"-79.6204",
    "subitems": [{
        "name": "water_temperature",
        "value": "water_temperature",
	"sourceRefObs": "sea_water_temperature"
      },
      {
        "name": "salinity",
        "value": "salinity",
	"sourceRefObs": "sea_water_practical_salinity"
      },
      {
        "name": "air_temperature",
        "value": "air_temperature",
	"sourceRefObs": "air_temperature"
      }
    ]
  }
```

platform example - relational database(RDB)
```json
  {
    "name": "MP3C",
    "value": "MP3C",
    "organization":"FLDEP",
    "dataSourceType":"RDB",
    "lat":"26.629",
    "lon":"-82.067",
    "strTimeParse": "%m/%d/%Y %H:%M",
    "sourceRefTime": "DateTimeStamp",
    "subitems": [{
        "name": "water_temperature",
        "value": "water_temperature",
	"sourceRefObs": "Temp"
      },
      {
        "name": "salinity",
        "value": "salinity",
	"sourceRefObs": "Sal"
      },
      {
        "name": "dissolved_oxygen_mgl",
        "value": "dissolved_oxygen_mgl",
	"sourceRefObs": "DO_mgl"
      }
    ]
  }
```

platform example - CSV file
```json
  {
    "name": "EB03",
    "value": "https://drive.google.com/uc?export=download&id=1pX_0MaWZLVzwLgsVO0tABGF1fYHseUiV",
    "organization":"FLDEP",
    "dataSourceType":"CSV",
    "lat":"26.355",
    "lon":"-81.845",
    "strTimeParse": "%m/%d/%Y %H:%M",
    "sourceRefTime": "DateTimeStamp",
    "subitems": [{
        "name": "water_temperature",
        "value": "water_temperature",
	"sourceRefObs": "Temp"
      },
      {
        "name": "salinity",
        "value": "salinity",
	"sourceRefObs": "Sal"
      },
      {
        "name": "conductivity",
        "value": "specific_conductivity",
	"sourceRefObs": "SpCond"
      },
      {
        "name": "dissolved_oxygen_mgl",
        "value": "dissolved_oxygen_mgl",
	"sourceRefObs": "DO_mgl"
      }
    ]
  }

platform example - CUSTOM - including eval script in evalCode string
```json
    {
    "name": "SUN2",
    "value": "https://erddap.secoora.org/erddap/tabledap/org_cormp_sun2",
    "organization":"CORMP",
    "dataSourceType":"CUSTOM",
    "evalCode":"erddap_startDate=startDate.substr(6,4)+'-'+startDate.substr(0,2)+'-'+startDate.substr(3,2),erddap_endDate=endDate.substr(6,4)+'-'+endDate.substr(0,2)+'-'+endDate.substr(3,2),d3.json(sourceUrl+'.json?time%2C'+sourceRefObs+'&time%3E='+erddap_startDate+'&time%3C='+erddap_endDate,function(a,t){if(a)throw a;if(spinner.stop(),0!=t){parseTime=d3.timeParse('%Y-%m-%dT%H:%M:%S%Z'),data2=t.table.rows;var e=data2.map(function(a){return{m_date:parseTime(a[0]),[obsValue]:+a[1]}});obsData=e.slice(),graphObs(obsData)}else swal('No data available')});",
    "lat":"33.8444",
    "lon":"-78.4839",
    "subitems": [{
        "name": "water_temperature",
        "value": "water_temperature",
	"sourceRefObs": "sea_water_temperature"
      },
      {
        "name": "salinity",
        "value": "salinity",
	"sourceRefObs": "sea_water_practical_salinity"
      },
      {
        "name": "air_temperature",
        "value": "air_temperature",
	"sourceRefObs": "air_temperature"
      }
    ]
  }
```

# Potential Enhancements

* add higher 'grouping' level for platforms, to associate by organization, etc
* process quality control(QC) flags for tagging/filtering suspect or other flagged data
* include platform available data ranges for platforms/parameters
* JSON config
  * add plot/visualization/analysis job/grouping tags to automatically plot/review recent time-series data(updates) from an earlier tagged set of platforms/parameters
  * add platform/station profiles,etc to reduce repeated elements between similar platforms
* additional processing or analysis/visualiztion within or between pulled time-series for
  * average/min/max by various or custom time windows(x hours/days/etc)
  * correlation indexes between time-series sets
  * ???
* while the graphing currently uses d3, other javascript analysis/visualization libraries could be added or used also

# Other Notes

## eval security concerns
In regards to security with using the javascript evaluation(eval) function, a longer general review link is [here](https://humanwhocodes.com/blog/2013/06/25/eval-isnt-evil-just-misunderstood).  The main potential advantage of using eval for this project is the abililty to create a few lines of javascript to handle unique complexities with the data source request or converting/mapping the data source response. This javascript can be [minified](https://javascript-minifier.com/) and placed in the JSON config file __evalCode__ string and marked as __"datSourceType":"CUSTOM"__ as shown with the 'SUN2' code listed earlier. The idea would be that JSON config files could be easily reviewed, shared, referenced and customized between trusted users and data sources. Use of the 'json_link' functionality as part of the initial page load as with the demo assumes an inherent trust that the JSON file referenced in the link does not contain(or will not change to contain) harmful code, similar to the trust held in [online javascript library script references](https://cdnjs.com/libraries). JSON configuration files can also be kept and loaded locally using the 'Load platform file' button.

## Relational Database(RDB) example

## Links

To validate JSON files https://jsonlint.com/

# Development History

The original site this was generalized from was the Florida Preserves https://www.floridaapdata.org which is a set of around 30 water quality monitoring sites and database of several million records spanning around the past 20 years. This site has 2 additional navigation tabs, one for 'Choose Preserve' where a preserve represents a set of regionally clustered platforms/stations and 'Download Data' which allows the user to download pregenerated yearly station files. These tabs were removed or commented in this project generalization to help make things simpler and more common. The 'Preserve' functionality could be uncommented and added back under other names such as 'Organization', etc to represent a way of grouping stations.
