      //customPlatform
      //stationPick = e.target._tooltip._content.substring(0,4);

      //special cases
      if (e.target._tooltip._content.includes("YRMAP1")) {
        stationPick = "YRMAP1";
      }
      else if (e.target._tooltip._content.substring(0,3) == "BBS") {
	stationPick = e.target._tooltip._content.substring(0,5);
      }
