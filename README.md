# bobcatobs
A JSON file configurable approach (and project template) to pulling time-series data from a variety of data sources into graph overlays or other browser visualization/analysis.

Demo site https://www.floridaapdata.org/bobcatobs/?json_link=https://drive.google.com/uc?export=downloadzzzid=1m0JFXeI7slOcsHUGm0lwZuB9jH4MhcoC

README file in progress

Going to the demo site will show a leaflet map of the Southeastern US and several placemarks that represent coastal/ocean observing platform locations providing various time-series data such as

* water_temperature
* salinity
* dissolved_oxygen
* depth

# Demo steps

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
