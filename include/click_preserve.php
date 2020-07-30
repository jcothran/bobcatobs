      if (e.target._tooltip._content == "Matlacha Pass") {
        document.getElementById("preserve_choice").value = "MP";
        myMapStation.setView([26.613147, -82.056711],12);
	listStations('MP');
      }
      if (e.target._tooltip._content == "Estero Bay") {
        document.getElementById("preserve_choice").value = "EB";
        myMapStation.setView([26.422406, -81.863977],12);
	listStations('EB');
      }
