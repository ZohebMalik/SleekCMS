  <div class="animation-delay w3-animate-opacity" id="radio-box">
<img class="avatar" src="/app/tpl/skins/{skin}/images/radio/GIF/frank_dj.gif" style="-webkit-filter: drop-shadow(0 1px 0 #FFF) drop-shadow(0 -1px 0 #FFF) drop-shadow(1px 0 0 #FFF) drop-shadow(-1px 0 0 #FFF) drop-shadow(0 0 10px rgba(000,000,000,000));" />
<div class="current"><marquee>Playing the hottest beats for {hotelname} Hotel!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</marquee></div>
	<audio autoplay="autoplay" id="streamPlayer"></audio>
	<div id="refresh">
	</div>
	<div class="volume">
		<small><center><b style="width:83px;opacity: 0.4;">CapitalFM<h5>♪</h5></br></b></center></small>
	</div>
	<a onclick="javascript:toggleRadio();">
		<div style="opacity: 0.4;" class="play"><img id="toggler" src="/app/tpl/skins/{skin}/images/radio/client_radio/PNG/play.png"></div>
	</a>

	<script type="text/javascript">
		var _0xabfd=["\x73\x74\x72\x65\x61\x6D\x50\x6C\x61\x79\x65\x72","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x74\x6F\x67\x67\x6C\x65\x72","\x76\x6F\x6C\x75\x6D\x65","","\x68\x69\x64\x65","\x2E\x76\x6F\x6C\x75\x6D\x65","\x2E\x70\x6C\x61\x79","\x2E\x63\x75\x72\x72\x65\x6E\x74","\x2E\x61\x76\x61\x74\x61\x72","\x32\x32","\x61\x6E\x69\x6D\x61\x74\x65","\x23\x72\x61\x64\x69\x6F\x2D\x62\x6F\x78","\x73\x68\x6F\x77","\x38\x33","\x63\x6C\x69\x63\x6B","\x2E\x6D\x69\x6E\x69","\x6F\x6E\x6C\x6F\x61\x64","\x73\x72\x63","\x68\x74\x74\x70\x3A\x2F\x2F\x6D\x65\x64\x69\x61\x2D\x69\x63\x65\x2E\x6D\x75\x73\x69\x63\x72\x61\x64\x69\x6F\x2E\x63\x6F\x6D\x2F\x43\x61\x70\x69\x74\x61\x6C\x55\x4B\x4D\x50\x33","\x70\x6C\x61\x79","\x2f\x61\x70\x70\x2f\x74\x70\x6c\x2f\x73\x6b\x69\x6e\x73\x2f\x53\x6c\x65\x65\x6b\x2f\x69\x6d\x61\x67\x65\x73\x2f\x72\x61\x64\x69\x6f\x2f\x63\x6c\x69\x65\x6e\x74\x5f\x72\x61\x64\x69\x6f\x2f\x2f\x50\x4e\x47\x2f\x70\x61\x75\x73\x65\x2e\x70\x6e\x67","\x2F\x72\x61\x64\x69\x6F","\x6C\x6F\x61\x64","\x23\x72\x65\x66\x72\x65\x73\x68","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x63\x75\x72\x72\x65\x6E\x74\x44\x6A","\x70\x61\x75\x73\x65\x64","\x70\x61\x75\x73\x65","\x2f\x61\x70\x70\x2f\x74\x70\x6c\x2f\x73\x6b\x69\x6e\x73\x2f\x53\x6c\x65\x65\x6b\x2f\x69\x6d\x61\x67\x65\x73\x2f\x72\x61\x64\x69\x6f\x2f\x63\x6c\x69\x65\x6e\x74\x5f\x72\x61\x64\x69\x6f\x2f\x50\x4e\x47\x2f\x70\x6c\x61\x79\x2e\x70\x6e\x67","\x6F\x6E\x69\x6E\x70\x75\x74","\x76\x61\x6C\x75\x65"];var stream=document[_0xabfd[1]](_0xabfd[0]);var toggler=document[_0xabfd[1]](_0xabfd[2]);var volume=document[_0xabfd[1]](_0xabfd[3]);var minimized=false;var currentDJ=_0xabfd[4];$(_0xabfd[16])[_0xabfd[15]](function(){if(!minimized){$(_0xabfd[6])[_0xabfd[5]]();$(_0xabfd[7])[_0xabfd[5]]();$(_0xabfd[8])[_0xabfd[5]]();$(_0xabfd[9])[_0xabfd[5]]();$(_0xabfd[12])[_0xabfd[11]]({"\x68\x65\x69\x67\x68\x74":_0xabfd[10]},500);minimized= true}else {$(_0xabfd[6])[_0xabfd[13]]();$(_0xabfd[7])[_0xabfd[13]]();$(_0xabfd[8])[_0xabfd[13]]();$(_0xabfd[9])[_0xabfd[13]]();$(_0xabfd[12])[_0xabfd[11]]({"\x68\x65\x69\x67\x68\x74":_0xabfd[14]},500);minimized= false}});window[_0xabfd[17]]= function(){if(stream[_0xabfd[18]]!= _0xabfd[19]){stream[_0xabfd[18]]= _0xabfd[19]};stream[_0xabfd[20]]();toggler[_0xabfd[18]]= _0xabfd[21];stream[_0xabfd[3]]= 0.5;$(_0xabfd[24])[_0xabfd[23]](_0xabfd[22])};setInterval(function(){$(_0xabfd[24])[_0xabfd[23]](_0xabfd[22],function(){if(minimized){$(_0xabfd[8])[_0xabfd[5]]();$(_0xabfd[9])[_0xabfd[5]]()}});var _0x1f5dx6=document[_0xabfd[1]](_0xabfd[26])[_0xabfd[25]];if(currentDJ!= _0x1f5dx6&&  !stream[_0xabfd[27]]){stream[_0xabfd[18]]= _0xabfd[19];stream[_0xabfd[20]]()};currentDJ= _0x1f5dx6},10000);function toggleRadio(){if(stream[_0xabfd[27]]){if(stream[_0xabfd[18]]!= _0xabfd[19]){stream[_0xabfd[18]]= _0xabfd[19]};stream[_0xabfd[20]]();toggler[_0xabfd[18]]= _0xabfd[21]}else {stream[_0xabfd[28]]();stream[_0xabfd[18]]= _0xabfd[4];toggler[_0xabfd[18]]= _0xabfd[29]}}volume[_0xabfd[30]]= function(){if(stream[_0xabfd[27]]){if(stream[_0xabfd[18]]!= _0xabfd[19]){stream[_0xabfd[18]]= _0xabfd[19]};stream[_0xabfd[20]]();toggler[_0xabfd[18]]= _0xabfd[21]};stream[_0xabfd[3]]= volume[_0xabfd[31]]}
	</script>
  </div>
  