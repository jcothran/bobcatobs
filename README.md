# bobcatobs
A JSON file configurable approach (and project template) to pulling time-series data from a variety of data sources into graph overlays or other browser visualization/analysis.

Demo site https://www.floridaapdata.org/bobcatobs/?json_link=https://drive.google.com/uc?export=downloadzzzid=1m0JFXeI7slOcsHUGm0lwZuB9jH4MhcoC

README file in progress

Going to the demo site will show a leaflet map of the Southeastern US and several placemarks that represent coastal/ocean observing platform locations providing various time-series data such as

* water_temperature
* salinity
* dissolved_oxygen
* depth

The website itself is structured as a template for other's use and project development. It uses a bootstrap layout with project and platform specific content separated into example php files listed in the 'include' folder. The main index php file contains the keyword 'custom' to reference more project custom content that individual projects might wish to change to suit them. Further discussion below under 'Development History'. While this project was developed in the context of sharing time-series observational data, the general approach and code could be applied to problems in other domains without a geospatial/mapping reference.

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

# Concepts

# Ideas for other functionality


# Notes

# Development History

The original site this was generalized from was the Florida Preserves https://www.floridaapdata.org which is a set of around 30 water quality monitoring sites and database of several million records spanning around the past 20 years. This site has 2 additional navigation tabs, one for 'Choose Preserve' where a preserve represents a set of regionally clustered platforms/stations and 'Download Data' which allows the user to download pregenerated yearly station files. These tabs were removed or commented in the generalization of the project to help make things simpler. The 'Preserve' functionality could be uncommented and added back under other names such as 'Organization', etc to represent a way of grouping stations.
