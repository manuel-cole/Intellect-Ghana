/* This source code is Copyright (c) Vibrant Media 2001-2015 and forms part of the patented Vibrant Media product "IntelliTXT" (sm). */
if(!$iTXT){var $iTXT={};}
if(!$iTXT.tmpl){$iTXT.tmpl={};}
if(!$iTXT.tmpl.js){$iTXT.tmpl.js={};}
$iTXT.tmpl.loader["$iTXT.tmpl.js.Generic"]=true;$iTXT.tmpl.js.Generic_Load=function()
{$iTXT.tmpl.js.Generic=$iTXT.core.Class.create($iTXT.tmpl.TemplateBase,{afterTokenize:function()
{var cw=$iTXT.cnst.WEIGHTING_DEFAULT_CAMPAIGN;var isHouseAd=false;if(this.advert.getAdvertType()==96)
{isHouseAd=true;}
var fsv=this.advert.params.get("FSV");var atFttm=this.advert.params.get("fttm"+this.advert.getAdvertType());if(atFttm&&"1"!=atFttm&&"0"!=atFttm)
{var fttmVals=atFttm.split("$$");if(fttmVals.length>0)
{fsv=$iTXT.core.Util.parseInt(fttmVals[3],fsv);}}
fsv=this.advert.params.get("fl.support.version",fsv);var canFlash=$iTXT.core.Flash.supports(fsv)&&!$iTXT.core.Browser.isPlatform(["iOS/iPhone","iOS/iPad","iOS/iPod","Android"]);var price=this.advert.params.get("PRICE","");var imageSrc=this.advert.params.get("IMAGESRC","");var flashSrc=this.advert.params.get("FLASHSRC","");var iframeSrc=this.advert.params.get("iframe.src","");var body=this.advert.params.get("BODY","");var merchant=this.advert.params.get("ADOMAIN","");var multiAds=this.advert.params.get("multi.ad",false);var advertiserExt=this.advert.params.get("adx","");var components,clickVarName,flCompsStr,flpComps,w,h;var staticFallback=false;var allFlashFallback=false;if(!canFlash)
{components=$iTXT.core.Util.getQueryParams(flashSrc);clickVarName="clickURL";if(components.clickVarName)
{clickVarName=components.clickVarName;}
flCompsStr=components[clickVarName]||components.clickTAG||components.clickURL||flashSrc;if(flCompsStr)
{flpComps=flCompsStr.split("$$");if(flpComps.length>3)
{w=flpComps[1];h=flpComps[2];this.advert.params.set("img.w",w,cw);this.advert.params.set("img.max.w",w,cw);this.advert.params.set("img.h",h,cw);this.advert.params.set("img.max.h",h,cw);this.advert.params.set("IMAGESRC",flpComps[3],cw);this.advert.params.set("FLASHSRC","",cw);staticFallback=true;}}}else if(""!==flashSrc){components=$iTXT.core.Util.getQueryParams(flashSrc);flashSrc=flashSrc.split('?')[0];this.advert.params.set("FLASHSRC",flashSrc,cw);var templateFlashVars=this.advert.params.get("templateFlashVars",{});clickVarName="clickURL";if(components.clickVarName){clickVarName=components.clickVarName;}
for(var cname in components)
{if("clickURL"!=cname)
{templateFlashVars[cname]=components[cname];}}
this.advert.params.set("templateFlashVars",templateFlashVars,cw);flCompsStr=components[clickVarName]||components.clickTAG||components.clickURL||flashSrc;if(flCompsStr)
{flpComps=flCompsStr.split("$$");if(flpComps.length>3)
{w=flpComps[1];h=flpComps[2];var altImgSrc=flpComps[3];this.advert.params.set("img.w",w,cw);this.advert.params.set("img.max.w",w,cw);this.advert.params.set("img.h",h,cw);this.advert.params.set("img.max.h",h,cw);this.advert.params.set("IMAGESRC",h,cw);}}}
if(false===this.allFlashUnit)
{allFlashFallback=true;}
if(""===price)
{this.removeElement("PriceCell");}
if(""===merchant)
{this.removeElement("MerchantCell");}
if(""===body)
{this.removeElement("DescriptionRow");}
if(""===body&&""!==imageSrc)
{this.removeElement("TopTitleRow");this.removeElement("DescriptionRow");}
if(body!==''&&flashSrc===''&&!allFlashFallback&&this.advert.getAdvertType()!=40)
{this.removeElement("TitleRow");}
if(!multiAds)
{this.removeElement("MultiAdvertRow");}
if(""===imageSrc&&!staticFallback)
{this.removeElement("LogoImageCell");}
if(""===flashSrc)
{this.removeElement("LogoFlashCell");}
else
{this.removeElement("TopTitleRow");}
if(this.advert.getAdvertType()==40)
{this.removeElement("TopTitleRow");}
if(""!==flashSrc&&staticFallback)
{this.removeElement("LogoFlashCell");}
if(!this.allFlashUnit)
{this.removeElement("TopFlashRow");}
if(allFlashFallback)
{this.removeElement("TopTitleRow");}
if(""===iframeSrc)
{this.removeElement("TopIframeRow");}
else
{this.removeElement("GenericContentRow");this.removeElement("MultiAdvertRow");this.removeElement("SearchBarPaddingRow");this.removeElement("SearchBarRow");}
if(isHouseAd&&""!==advertiserExt)
{var comps=advertiserExt.split("$$");if(comps.length>0)
{this.advert.params.set("sb.bg.col",comps[0],cw);if(comps.length>1)
{this.advert.params.set("sb.img.src",comps[1],cw);}
if(comps.length>2)
{this.advert.params.set("sb.img.w",comps[2]+'px',cw);}
else
{this.advert.params.set("sb.img.w",'',cw);}}
else
{this.removeElement("SearchBarRow");this.removeElement("SearchBarPaddingRow");}}
else
{this.removeElement("SearchBarRow");this.removeElement("SearchBarPaddingRow");}
var html5Src=this.advert.params.get("js.html5.src");imageSrc=this.advert.params.get("js.html5.img.src");var canhtml5=!!document.createElement('video').canPlayType;if(canhtml5&&html5Src&&staticFallback)
{this.removeElement("LogoImageCell");}
else
{this.removeElement("LogoHtml5Cell");}},onShow:function($super)
{$super();var backfillProperties=this.advert.params.get("backfillproperties",false);if(backfillProperties&&backfillProperties.impressionPixel){$iTXT.core.Util.dropImage(backfillProperties.impressionPixel);}
var sbBgCol=this.advert.params.get("sb.bg.col","");if(""!==sbBgCol)
{$iTXT.core.$(document).itxtFire("$iTXT:tt:ftr:set:bgcol",sbBgCol);$iTXT.core.$(document).itxtFire("$iTXT:tt:tail:set:bgcol",sbBgCol);$iTXT.core.$(document).itxtFire("$iTXT:tt:ftr:set:hvcol",sbBgCol);$iTXT.core.$(document).itxtFire("$iTXT:tt:tail:set:hvcol",sbBgCol);}},searchBarGo:function()
{var parseOpts={};var sBox=this.getComponentByUID("sb.input.txt");if(null!==sBox)
{parseOpts.keyword=sBox.input.value;}
var searchUrl=this.advert.params.get("clickTag");searchUrl=this.advert.params.parse(searchUrl,parseOpts);var opts={advert:this.advert,redir:searchUrl};$iTXT.core.$(document).itxtFire("$iTXT:tt:click",opts);},init:function(_options,$super)
{this.paramDefaults=$iTXT.core.Util.extend({'width':320,'height':100,'flashpreloader':'','img.w':125,'img.h':125,'img.max.w':180,'img.max.h':150,'ad.rep.bg.col':'${tt.bg.col}','ad.rep.bg.h.col':'${tt.bg.h.col}','ad.rep.ftr.bg.col':'${ad.rep.bg.col}','ad.rep.ftr.bg.h.col':'${ad.rep.bg.h.col}','hovercolor':'transparent','tt.t.length':255,'tt.ar.t.length':40,'tt.bdy.length':255},this.paramDefaults);var defOpts=$iTXT.core.Util.extend({width:'${WIDTH}',height:'${HEIGHT}',styles:{cursor:'pointer'},events:{onMouseClick:function(e)
{this.onMouseClick(e);}}},_options);this.structure=[{type:'row',UID:'TopFlashRow',structure:[{type:'cell',structure:[{type:'comp',klass:'$iTXT.tmpl.Flash',UID:'GenericFlashMC',props:{src:'${fl.preloader.url}'}}]}]},{type:'row',UID:'TopIframeRow',structure:[{type:'cell',structure:[{type:'comp',klass:'$iTXT.tmpl.Iframe',UID:'GenericFlashMC',props:{src:'${iframe.src}'}}]}]},{type:'row',height:'**',UID:'GenericContentRow',structure:[{type:'cell',height:'**',hoverstyles:{backgroundColor:'${hovercolor}'},structure:[{type:'row',height:'**',UID:'TopTitleRow',structure:[{type:'cell',height:'**',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.Text',id:'itxttoptitle',styles:{color:'${tt.t.col}',fontSize:'11px',fontWeight:'bold',paddingLeft:'7px',paddingTop:'7px',paddingRight:'7px',paddingBottom:'3px'},ttoverstyles:{color:'${tt.t.h.col}'},props:{text:'$TRIM{${title},${tt.t.length}}'}}]}]},{type:'row',height:'**',UID:'MiddleRow',structure:[{type:'cell',height:'**',structure:[{type:'row',height:'**',UID:'TitleRow',structure:[{type:'cell',height:'**',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.Text',id:'itxtmiddletitle',styles:{color:'${tt.t.col}',fontSize:'11px',fontWeight:'bold',paddingLeft:'7px',paddingTop:'7px',paddingRight:'7px',paddingBottom:'3px'},ttoverstyles:{color:'${tt.t.h.col}'},props:{text:'$TRIM{${title},${tt.t.length}}'}}]}]},{type:'row',height:'**',UID:'DescriptionRow',structure:[{type:'cell',height:'**',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.Text',id:'itxtbody',styles:{color:'${tt.bdy.col}',fontSize:'11px',fontWeight:'normal',paddingLeft:'7px',paddingRight:'7px'},ttoverstyles:{color:'${tt.bdy.h.col}'},props:{text:'$TRIMHTML{${body},${tt.bdy.length}}'}}]}]}]},{type:'cell',height:'**',width:'**',UID:'LogoHtml5Cell',structure:[{type:'comp',height:'**',width:'**',klass:'$iTXT.tmpl.Html5Video',id:'itxthtml5',styles:{padding:"5px",paddingBottom:"0px"},props:{src:'${html5.src}',width:'${img.w}',height:'${img.h}'}}]},{type:'cell',height:'**',width:'**',UID:'LogoImageCell',structure:[{type:'comp',height:'**',width:'**',klass:'$iTXT.tmpl.Image',id:'itxtimg',styles:{padding:"5px",paddingBottom:"0px"},props:{src:'${IMAGESRC}',maxWidth:'${img.max.w}',maxHeight:'${img.max.h}'},events:{onCreate:function()
{if("${IMAGESRC}"==this.properties.src)
{this.fillWidth=false;this.contentWidth=true;this.options.styles={};this.rootElement.itxtHide();this.imageLoaded=true;}},neededSize:function(w,h)
{if("${IMAGESRC}"==this.properties.src)
{return[0,h];}
return[w,h];}}}]},{type:'cell',height:'**',width:'**',UID:'LogoFlashCell',structure:[{type:'comp',height:'**',width:'**',klass:'$iTXT.tmpl.Flash',id:'itxtflash',styles:{padding:"5px",paddingBottom:"0px"},props:{src:'${FLASHSRC}',loadingwidth:'${img.w}',loadingheight:'${img.h}',width:'${img.w}',height:'${img.h}'},events:{onCreate:function()
{if("${FLASHSRC}"==this.properties.src)
{this.fillWidth=false;this.contentWidth=true;this.options.styles={};this.rootElement.itxtHide();}},neededSize:function(w,h)
{if("${FLASHSRC}"==this.properties.src)
{return[0,h];}
return[w,h];}}}]}]},{type:'row',height:'**',UID:'MerchantRow',structure:[{type:'cell',height:'**',UID:'MerchantCell',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.Text',id:'itxtaddomain',styles:{color:'${tt.url.col}',fontSize:'10px',fontWeight:'normal',paddingLeft:'7px',paddingTop:'7px',paddingRight:'7px',paddingBottom:'3px',lineHeight:'${LINEHEIGHT}'},ttoverstyles:{color:'${tt.url.h.col}'},props:{text:'${ADOMAIN}'}}]},{type:'cell',height:'**',UID:'PriceCell',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.Text',id:'itxtprice',styles:{color:'${tt.url.col}',fontSize:'10px',fontWeight:'bold',paddingTop:'7px',paddingRight:'7px',paddingBottom:'3px',textAlign:'right',lineHeight:'${LINEHEIGHT}'},ttoverstyles:{color:'${tt.url.h.col}'},props:{text:'${TRANS.PRECS}$REPLACE{\\.,${PRICE},${TRANS.DECIMALPLACE}}${TRANS.POSTCS}'}}]},{type:'cell',height:'**',width:'**',structure:[{type:'comp',height:'**',width:'**',klass:'$iTXT.tmpl.Image',id:'itxtgoimg',styles:{padding:'7px',paddingLeft:'0'},props:{src:'${go.img.src}'},events:{onCreate:function()
{if("${go.img.src}"==this.properties.src)
{this.fillWidth=false;this.contentWidth=true;this.options.styles={};this.rootElement.itxtHide();this.imageLoaded=true;}},neededSize:function(w,h)
{if("${go.img.src}"==this.properties.src)
{return[0,h];}
return[w,h];}}}]}]}]}]},{type:'row',height:'**',UID:'MultiAdvertRow',structure:[{type:'cell',height:'**',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.components.AdRepeater',props:{maxAds:'${MAXADVERTS}'},structure:[{type:'cell',height:'**',hoverstyles:{backgroundColor:'${ad.rep.bg.h.col}'},props:{footerColor:'${ad.rep.ftr.bg.col}',footerHoverColor:'${ad.rep.ftr.bg.h.col}'},events:{onMouseClick:function(e)
{if(e.stop)
{e.stop();}
var opts={advert:this.advert,so:$iTXT.cnst.Source.MULTI+this.i};$iTXT.core.$(document).itxtFire("$iTXT:tt:click",opts);},onMouseOver:function(e)
{if(e.stop)
{e.stop();}
$iTXT.core.$(document).itxtFire("$iTXT:tt:over");if(this.advert.isLast)
{$iTXT.core.$(document).itxtFire("$iTXT:tt:ftr:change:bgcol",this.properties.footerHoverColor);$iTXT.core.$(document).itxtFire("$iTXT:tt:tail:change:bgcol",this.properties.footerHoverColor);}},onFtrMouseOver:function(e)
{this._onMouseOver(e.data);},onFtrMouseOut:function(e)
{this._onMouseOut(e.data);},onMouseOut:function(e)
{if(e.stop)
{e.stop();}
$iTXT.core.$(document).itxtFire("$iTXT:tt:out");if(this.advert.isLast)
{$iTXT.core.$(document).itxtFire("$iTXT:tt:ftr:change:bgcol",this.properties.footerColor);$iTXT.core.$(document).itxtFire("$iTXT:tt:tail:change:bgcol",this.properties.footerColor);}},onCreate:function()
{if(this.advert.isLast&&this.advert.params.getBool("multi.ftr.hv",true))
{this.customFtrOverEventBinding=$iTXT.core.Event.bind(this,this.events.onFtrMouseOver);this.customFtrOutEventBinding=$iTXT.core.Event.bind(this,this.events.onFtrMouseOut);$iTXT.core.$(document).itxtSubscribe("$iTXT:tt:ftr:mouse:over",this.customFtrOverEventBinding);$iTXT.core.$(document).itxtSubscribe("$iTXT:tt:ftr:mouse:out",this.customFtrOutEventBinding);}},onDispose:function()
{if(this.advert.isLast&&this.advert.params.getBool("multi.ftr.hv",true))
{$iTXT.core.$(document).itxtUnSubscribe("$iTXT:tt:ftr:mouse:over",this.customFtrOverEventBinding);$iTXT.core.$(document).itxtUnSubscribe("$iTXT:tt:ftr:mouse:out",this.customFtrOutEventBinding);}}},structure:[{type:'row',height:'**',structure:[{type:'cell',height:'**',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.Text',styles:{color:'${tt.t.col}',fontSize:'11px',fontWeight:'bold',paddingLeft:'7px',paddingTop:'3px',paddingRight:'7px',paddingBottom:'3px',borderTop:"1px dashed #999999"},ttoverstyles:{color:'${tt.t.h.col}'},props:{id:'itxtmult${i}title',text:'$TRIM{${title},${tt.ar.t.length}}'}}]}]},{type:'row',height:'**',structure:[{type:'cell',height:'**',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.Text',styles:{color:'${tt.url.col}',fontSize:'10px',fontWeight:'normal',paddingLeft:'7px',paddingTop:'0px',paddingRight:'7px',paddingBottom:'3px',lineHeight:'${LINEHEIGHT}'},ttoverstyles:{color:'${tt.url.h.col}'},props:{id:'itxtmulti${i}addomain',text:'${ADOMAIN}'}}]},{type:'cell',height:'**',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.Text',styles:{color:'${tt.url.col}',fontSize:'10px',fontWeight:'bold',paddingTop:'0px',paddingRight:'7px',paddingBottom:'3px',textAlign:'right',lineHeight:'${LINEHEIGHT}'},ttoverstyles:{color:'${tt.url.h.col}'},props:{id:'itxtmulti${i}price',text:'${TRANS.PRECS}$REPLACE{\\.,${PRICE},${TRANS.DECIMALPLACE}}${TRANS.POSTCS}'}}]},{type:'cell',height:'**',width:'**',structure:[{type:'comp',height:'**',width:'**',klass:'$iTXT.tmpl.Image',styles:{padding:'7px',paddingTop:'0',paddingLeft:'0'},props:{id:'itxtmulti${i}goimg',src:'${go.img.src}'},events:{onCreate:function()
{if("${go.img.src}"==this.properties.src)
{this.fillWidth=false;this.contentWidth=true;this.options.styles={};this.rootElement.itxtHide();this.imageLoaded=true;}},neededSize:function(w,h)
{if("${go.img.src}"==this.properties.src)
{return[0,h];}
return[w,h];}}}]}]}]}]}]}]},{type:'row',UID:'SearchBarPaddingRow',height:5,styles:{backgroundColor:'${sb.bg.col}'}},{type:'row',UID:'SearchBarRow',height:'**',styles:{backgroundColor:'${sb.bg.col}'},events:{onMouseClick:function(e)
{e.stop();return false;}},structure:[{type:'cell',height:'**',structure:[{type:'row',height:'**',structure:[{type:'cell',width:5},{type:'cell',height:'**',width:'**',structure:[{type:'comp',width:'**',height:'**',klass:'$iTXT.tmpl.Image',id:'itxtsearchimg',styles:{marginRight:'5px',marginLeft:'5px',width:'${sb.img.w}'},props:{src:'${sb.img.src}'}}]},{type:'cell',height:'**',structure:[{type:'comp',height:'**',klass:'$iTXT.tmpl.Input',UID:"sb.input.txt",id:'itxtsearchinput',props:{value:'${KEYWORD}',type:'text'},events:{onclick:function()
{return false;},onEnter:function()
{this.template.searchBarGo();}}}]},{type:'cell',width:5},{type:'cell',height:'**',width:'**',structure:[{type:'comp',width:'**',height:'**',klass:'$iTXT.tmpl.Input',id:'itxtsearchinput',props:{value:'${TRANS.SEARCH}',type:'button'},events:{onMouseClick:function()
{this.template.searchBarGo();}}}]},{type:'cell',width:5}]}]}]}];$super(defOpts);}});};