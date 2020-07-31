# bobcatobs
A JSON file configurable approach (and project template) to pulling time-series data from a variety of data sources into graph overlays or other browser visualization/analysis. Feedback, reuse and further development are welcomed via issues labeled feedback,question,documentation,enhancement,etc.

Demo site https://www.floridaapdata.org/bobcatobs/?json_link=https://drive.google.com/uc?export=downloadzzzid=1m0JFXeI7slOcsHUGm0lwZuB9jH4MhcoC

README file in progress

Going to the demo site will show a leaflet map of the Southeastern US and several placemarks that represent coastal/ocean observing platform locations providing various time-series data such as

* water_temperature
* salinity
* dissolved_oxygen
* depth
![image](https://drive.google.com/uc?export=view&id=1mOJZf9ulbxk25GKktRFHO7irugMG9zGh "Map of several coastal/ocean platform locations")
The website itself is structured as a template for other's use and project development. It uses a bootstrap layout with project and platform specific content separated into example php files listed in the 'include' folder. The main index php file contains the keyword 'custom' to reference more project custom content that individual projects might wish to change to suit them. Further discussion below under 'Development History'. While this project was developed in the context of sharing time-series observational data, the general approach and code could be applied to problems in other domains without a geospatial/mapping reference.

# Demo steps
![image](https://drive.google.com/uc?export=view&id=1j4HMBcDPkwKZzG7CtvlRhPMEhvWcWzKV "Graph of several platform water temperatures")
* clicking a station placemark will change the tab to the 'Graph Data' controls. The platform clicked on the map should be selected in the first dropdown or other platforms can be selected from this dropdown. The platform selection will auto-fill the possible observation parameters available from this platform for the demo purposes. 
* select a start and end date(entering text directly or using the calendar popup) - for demo purposes, try smaller timespan windows of a few days or a week to get a quicker response
  * suggested date ranges for available data 
    * SUN2, CAP2 - past several years up through the past day
    
* click 'Add Graph' to plot the time-series data. The cursor over the graph should show the current date and value at the graph point and the gray bar below the graph represents a selection area for the graph that can be used to zoom in or out on the graph
* the user can continue to select other parameter, platform and date ranges and clicking 'Add Graph' to overlay onto the existing graph

# Additional functions

* a legend line with a checkbox allows their line to be toggle on/off in the graph
* the legend line also contains a button to download the time-series of that line as a simple CSV file(datetime,value)
* after graph(s) are present, the graph can be saved as png or printed using those buttons
* click 'Clear Graph' to clear the current graph area
* 

# Concepts - use of JSON configuration file to allow custom selection and bridge complexity

The two main problems in assembling or aggregating time-series data from a range of online data sources are

* lack of standards or complexity in
  * the data request format - how are time and parameter names referenced and formatted? what source-unique functionalities are present in the request format?
  * the data returned format - if JSON(or CSV,etc), what is the object structure and are time and parameter formatted and referenced the same as the request?

The use of a JSON configuration file(for example, the demo file which can be reviewed [here](https://drive.google.com/file/d/1m0JFXeI7slOcsHUGm0lwZuB9jH4MhcoC/view?usp=sharing)) allows the ability to create
* a list of platforms/stations/sources of time-series of interest and their
  * time-series request endpoint link
  * time and available parameter reference names and formats
  * associated javascript that can be shared and evaluated(using javascript 'eval' function) to convert data source responses into a common data format/array used in the browser for overlays and further visualization/analysis - see the 'SUN2' platform reference and 'evalCode' script([unminify](https://unminify.com/) version below)
  
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
  * location(optional)

# Ideas for other functionality


# Other Notes

## eval security concerns
In regards to security with using the javascript evaluation(eval) function, a longer general review link is [here](https://humanwhocodes.com/blog/2013/06/25/eval-isnt-evil-just-misunderstood).  The main potential advantage of using eval for this project is the abililty to create a few lines of javascript to handle unique complexities with the data source request or converting/mapping the data source response. This javascript can be [minified](https://javascript-minifier.com/) and placed in the JSON config file __evalCode__ string and marked as __"datSourceType":"CUSTOM"__ as shown with the 'SUN2' code listed earlier. The idea would be that JSON config files could be easily reviewed, shared, referenced and customized between trusted users and data sources. Use of the 'json_link' functionality as part of the initial page load as with the demo assumes an inherent trust that the JSON file referenced in the link does not contain(or will not change to contain) harmful code, similar to the trust held in [online javascript library script references](https://cdnjs.com/libraries). JSON configuration files can also be kept and loaded locally using the 'Load platform file' button.

## Relational Database(RDB) example

# Development History

The original site this was generalized from was the Florida Preserves https://www.floridaapdata.org which is a set of around 30 water quality monitoring sites and database of several million records spanning around the past 20 years. This site has 2 additional navigation tabs, one for 'Choose Preserve' where a preserve represents a set of regionally clustered platforms/stations and 'Download Data' which allows the user to download pregenerated yearly station files. These tabs were removed or commented in this project generalization to help make things simpler and more common. The 'Preserve' functionality could be uncommented and added back under other names such as 'Organization', etc to represent a way of grouping stations.
