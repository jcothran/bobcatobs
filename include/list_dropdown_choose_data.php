<!--
<div id="option_preserve" class="col" style="display: none;">
<select id="preserve_choice">
  <option value="none">Select preserve...</option>
  <option value="MP">Matlacha Pass</option>
  <option value="EB">Estero Bay</option>
</select>
</div>
-->

<div id="option_platform" class="col">
<select id="platform_choice" onchange="changeStation(document.getElementById('platform_choice').options[document.getElementById('platform_choice').selectedIndex].value,0)" class="selectpicker" data-dropup-auto="false" data-display="static">
  <option value="none" hidden>Select station...</option>
  <option value="none">* Denotes inactive stations</option>
  <option value="none">-Matlacha Pass AP</option>
  <option value="MP1A">MP1A</option>
  <option value="MP2B">MP2B</option>
  <option value="none">-Estero Bay AP</option>
  <option value="EB01">EB01</option>
  <option value="EB02">EB02</option>
</select>
</div>

<div id="option_obs" class="col">

<!-- <select id="param" onchange="paramChange(this)"> -->
<select id="obs_choice" class="selectpicker" data-dropup-auto="false" data-display="static">
  <option value="none" hidden>Select parameter...</option>
  <option value="temp">water_temperature C</option>
  <option value="sal">salinity ppt</option>
  <option value="spcond">conductivity mS/cm</option>
  <option value="do_mgl">dissolved_oxygen mg/l</option>
  <option value="do_pct">dissolved_oxygen %</option>
  <option value="depth">depth m</option>
  <option value="ph">ph</option>
  <option value="turb">turbidity ntu</option>
</select>

