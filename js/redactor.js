var aCell=new Array(),sTable=document.getElementById("stable"),div=document.getElementById("div"),status=false,allCell=false,col=false,row=false,showBlock=0;colId="";window.onload=function(){document.getElementById("borders").style.borderCollapse=document.getElementById("stable").style.borderCollapse;};document.getElementById("csv_sumotto_title").oninput=caption_input;function caption_input(){document.getElementById("caption").innerHTML=document.getElementById("csv_sumotto_title").value;}function removeClass(el,cls){var c=el.className.split(" "),i;for(i=0;i<c.length;i++){if(c[i]==cls){c.splice(i--,1);}}el.className=c.join(" ");}function pos(elem){var w=elem.offsetWidth,h=elem.offsetHeight,l=0,t=0;while(elem){l+=elem.offsetLeft;t+=elem.offsetTop;elem=elem.offsetParent;}return{left:l,top:t,width:w,height:h};}function selectAll(){var tdLength=sTable.getElementsByTagName("TD").length,i;for(i=0;i<aCell.length;i++){removeClass(aCell[i],"active_cell");}aCell.length=0;sTable.className+=" active_cell";aCell.push(sTable);allCell=true;}div.onmousemove=function(event){if(status==true){var polePos=pos(pole),x2=polePos.left,y2=polePos.top,x=event.pageX,y=event.pageY,cY=event.clientY,cH=document.documentElement.clientHeight;div.style.width=x-parseInt(div.style.left)-x2+"px";div.style.height=y-parseInt(div.style.top)-y2+"px";if(cY>cH-20){window.scrollBy(0,25);}else{if(cY<100){window.scrollBy(0,-25);}}}};sTable.onmousedown=function(event){var elem=event.target||event.srcElement,i,polePos,x,y,td,tdLength=sTable.getElementsByTagName("TD").length,thPos,tdPos;allCell=row=col=false;colId="";for(i=0;i<aCell.length;i++){removeClass(aCell[i],"active_cell");}aCell.length=0;if(elem.tagName=="TD"||elem.tagName=="TR"){status=true;polePos=pos(pole);x=event.pageX-polePos.left;y=event.pageY-polePos.top;div.style.zIndex="100";div.style.left=x+"px";div.style.top=y+"px";}else{if(elem.tagName=="TH"&&elem.id!=="all"){tdLength=sTable.getElementsByTagName("TD").length;thPos=pos(elem);for(i=0;i<tdLength;i++){td=sTable.getElementsByTagName("TD").item(i);tdPos=pos(td);if((tdPos.left>=thPos.left&&tdPos.left<thPos.left+thPos.width||thPos.left>=tdPos.left&&thPos.left<tdPos.left+tdPos.width)||(tdPos.top>=thPos.top&&tdPos.top<thPos.top+thPos.height-5||thPos.top>=tdPos.top&&thPos.top<tdPos.top+tdPos.height-5)){td.className="active_cell";aCell.push(td);}}if(elem.parentNode.id=="col"){col=true;colId="col"+elem.id;}else{row=true;}}else{if(elem==sTable.caption){elem.className="active_cell";aCell.push(elem);}}}};sTable.onmouseup=function(event){var elem=event.target||event.srcElement,i,tdLength=sTable.getElementsByTagName("TD").length,td,tdPos,divPos;if(elem.tagName=="TD"||elem.tagName=="TR"){status=false;for(i=0;i<tdLength;i++){td=sTable.getElementsByTagName("TD").item(i);tdPos=pos(td);divPos=pos(div);if((tdPos.left>divPos.left&&tdPos.left<divPos.left+divPos.width||divPos.left>tdPos.left&&divPos.left<tdPos.left+tdPos.width)&&(tdPos.top>divPos.top&&tdPos.top<divPos.top+divPos.height||divPos.top>tdPos.top&&divPos.top<tdPos.top+tdPos.height)){td.className="active_cell";aCell.push(td);}}div.style.width=0+"px";div.style.height=0+"px";}};sTable.onmousemove=function(event){if(status==true){var polePos=pos(pole),x2=polePos.left,y2=polePos.top,x=event.pageX,y=event.pageY,cY=event.clientY;div.style.width=x-parseInt(div.style.left)-x2+"px";div.style.height=y-parseInt(div.style.top)-y2+"px";cH=document.documentElement.clientHeight;if(cY>cH-20){window.scrollBy(0,25);}else{if(cY<100){window.scrollBy(0,-25);}}}};function button(event){var idButton=event.target.id,l,styleButton=event.target.getAttribute("rule");if(idButton=="bold"){idButton="700";}if(typeof(aCell)!=="undefined"){if(idButton!=="bgcolor"&&idButton!=="bg_palette_last_color"){if(idButton!=="fontcolor"){if(row==true){if(aCell[0].parentNode.style[styleButton]!==idButton){aCell[0].parentNode.style[styleButton]=idButton;}else{aCell[0].parentNode.style[styleButton]="";}}else{for(l=0;l<aCell.length;l++){if(aCell[l].style[styleButton]!==idButton){aCell[l].style[styleButton]=idButton;}else{aCell[l].style[styleButton]="";}}}}else{if(row==true){aCell[0].parentNode.style.color=document.getElementById("font_palette_last_color").style.backgroundColor;}else{for(l=0;l<aCell.length;l++){aCell[l].style.color=document.getElementById("font_palette_last_color").style.backgroundColor;}}}}else{if(col==true){document.getElementById(colId).style.backgroundColor=document.getElementById("bg_palette_last_color").style.backgroundColor;}else{if(row==true){aCell[0].parentNode.style.backgroundColor=document.getElementById("bg_palette_last_color").style.backgroundColor;}else{for(l=0;l<aCell.length;l++){aCell[l].style.backgroundColor=document.getElementById("bg_palette_last_color").style.backgroundColor;}}}}}}function colorSelect(event,palette){if(typeof(aCell)!=="undefined"){var elem=event.target||event.srcElement,i,color=elem.style.backgroundColor;if(elem.tagName=="A"){if(color!=="none"){if(palette=="font_palette"){for(i=0;i<aCell.length;i++){aCell[i].style.color=color;}}else{if(col==true){document.getElementById(colId).style.backgroundColor=color;}else{if(row==true){aCell[0].parentNode.style.backgroundColor=color;}else{for(i=0;i<aCell.length;i++){aCell[i].style.backgroundColor=color;}}}}document.getElementById(palette).style.display="none";document.getElementById(palette+"_last_color").style.backgroundColor=color;}else{for(i=0;i<aCell.length;i++){aCell[i].style.color=color;}document.getElementById(palette).style.display="none";}}}}function borderColors(event){var elem=event.target||event.srcElement;if(elem.tagName=="A"){document.getElementById("borderTD").style.borderColor=elem.style.backgroundColor;}}function border_width_value(event){var id=event.target.id||event.srcElement,td=document.getElementById("borderTD");if(id=="border_none"){document.getElementById("borderTopWidth").value=0;document.getElementById("borderLeftWidth").value=0;document.getElementById("borderRightWidth").value=0;document.getElementById("borderBottomWidth").value=0;}else{document.getElementById("borderTopWidth").value=parseInt(td.style.borderTopWidth);document.getElementById("borderLeftWidth").value=parseInt(td.style.borderLeftWidth);document.getElementById("borderRightWidth").value=parseInt(td.style.borderRightWidth);document.getElementById("borderBottomWidth").value=parseInt(td.style.borderBottomWidth);}}document.getElementById("borderTopWidth").oninput=border_width_input;document.getElementById("borderLeftWidth").oninput=border_width_input;document.getElementById("borderRightWidth").oninput=border_width_input;document.getElementById("borderBottomWidth").oninput=border_width_input;function border_width_input(event){document.getElementById("borderTD").style.borderWidth=document.getElementById("borderTopWidth").value+"px "+document.getElementById("borderRightWidth").value+"px "+document.getElementById("borderBottomWidth").value+"px "+document.getElementById("borderLeftWidth").value+"px";}function borderStyle(){var borderTD=document.getElementById("borderTD"),i,borderStyle;if(allCell==true){borderStyle="border-width:"+borderTD.style.borderWidth+";border-style:"+borderTD.style.borderStyle+";border-color:"+borderTD.style.borderColor+";";document.getElementById("style").innerHTML=".csv-table td{"+borderStyle+"}";}else{if(typeof(aCell)!=="undefined"){for(i=0;i<aCell.length;i++){aCell[i].style.borderWidth=borderTD.style.borderWidth;aCell[i].style.borderStyle=borderTD.style.borderStyle;aCell[i].style.borderColor=borderTD.style.borderColor;}}}document.getElementById("border_style").style.display="none";}function fontSelect(event){if(typeof(aCell)!=="undefined"){var elem=event.target||event.srcElement,i,font=elem.style.fontFamily;if(elem.tagName=="LI"){for(i=0;i<aCell.length;i++){aCell[i].style.fontFamily=font;}document.getElementById("list_font").style.display="none";}}}function fontSizeSelect(event){if(typeof(aCell)!=="undefined"){var elem=event.target||event.srcElement,i,fontSize=elem.textContent;if(elem.tagName=="SPAN"){if(fontSize!=="Theme size"){for(i=0;i<aCell.length;i++){aCell[i].style.fontSize=fontSize+"px";}}else{for(i=0;i<aCell.length;i++){aCell[i].style.fontSize="";aCell[i].style.height="";}}document.getElementById("font_size_list").style.display="none";}}}document.getElementById("input_font_size").oninput=inputSizeFont;function inputSizeFont(){var size=parseInt(document.getElementById("input_font_size").value);if(size>0){for(i=0;i<aCell.length;i++){aCell[i].style.fontSize=size+"px";}}}function collapse(){if(sTable.style.borderCollapse=='collapse'){sTable.style.borderCollapse='separate';document.getElementById("borders").style.borderCollapse='separate';}else{sTable.style.borderCollapse='collapse';document.getElementById("borders").style.borderCollapse='collapse';}}function clear_formatting(){if(allCell==true){var td=sTable.getElementsByTagName("TD"),tr=sTable.getElementsByTagName("tr"),colL=sTable.getElementsByTagName("COL");for(i=0;i<td.length;i++){td.item(i).style.cssText="";}for(i=0;i<tr.length;i++){tr.item(i).style.cssText="";}sTable.style.cssText="";sTable.caption.style.cssText="";document.getElementById("style").innerHTML="";for(i=1;i<colL.length;i++){colL.item(i).style.cssText="";}}else{for(i=0;i<aCell.length;i++){aCell[i].style.cssText="";}if(col==true){document.getElementById(colId).style.cssText="";}if(row==true){aCell[0].parentNode.style.cssText="";}}}function sizeSelect(){if(allCell==true){document.getElementById("size_str").innerHTML=pAll;document.getElementById("size_input").innerHTML='<table style="line-height:0.5;"><tr><td style="text-align:right;"><small>'+pW+'</small></td><td rowspan=2 style="vertical-align:center;">&times;</td><td style="text-align:left;"><small>'+pH+'</small></td></tr><tr><td style="text-align:right;"><span class="editor_toolbar_button" style="margin-right:0;"><input type="text" name="width" id="width" style="width: 40px;height:20px;"></span></td><td style="text-align:left;"><span class="editor_toolbar_button" style="margin-right:0;"><input type="text" name="height" id="height" style="width: 40px;height:20px;"></span></td></tr></table>';showBlocks("size_list","size_select");}else{if(col==true){document.getElementById("size_str").innerHTML=pCol;document.getElementById("size_input").innerHTML="<small>"+pW+' :</small><input type="text" name="width" id="width" style="width: 40px;height:20px;">';showBlocks("size_list","size_select");}else{if(row==true){document.getElementById("size_str").innerHTML=pRow;document.getElementById("size_input").innerHTML="<small>"+pH+' :</small><input type="text" name="height" id="height" style="width: 40px;height:20px;">';showBlocks("size_list","size_select");}else{if(aCell.length>0){document.getElementById("size_str").innerHTML=pCell;document.getElementById("size_input").innerHTML='<table style="line-height:0.5;"><tr><td style="text-align:right;"><small>'+pW+'</small></td><td rowspan=2 style="vertical-align:center;">&times;</td><td style="text-align:left;"><small>'+pH+'</small></td></tr><tr><td style="text-align:right;"><span class="editor_toolbar_button" style="margin-right:0;"><input type="text" name="width" id="width" style="width: 40px;height:20px;"></span></td><td style="text-align:left;"><span class="editor_toolbar_button" style="margin-right:0;"><input type="text" name="height" id="height" style="width: 40px;height:20px;"></span></td></tr></table>';showBlocks("size_list","size_select");}}}}}function tableSize(auto){if(typeof(auto)!=="undefined"){if(allCell==true){sTable.style.height="";sTable.style.width="";}else{if(col==true){document.getElementById(colId).style.width="";}else{if(row==true){aCell[0].parentNode.style.height="";}else{if(aCell.length>0){for(i=0;i<aCell.length;i++){aCell[i].style.height="";aCell[i].style.width="";}}}}}}else{if(allCell==true){sTable.style.height=document.getElementById("height").value+"px";sTable.style.width=document.getElementById("width").value+"px";}else{if(col==true){document.getElementById(colId).style.width=document.getElementById("width").value+"px";}else{if(row==true){aCell[0].parentNode.style.height=document.getElementById("height").value+"px";}else{if(aCell.length>0){for(i=0;i<aCell.length;i++){aCell[i].style.height=document.getElementById("height").value+"px";aCell[i].style.width=document.getElementById("width").value+"px";}}}}}}document.getElementById("size_list").style.display="none";}function merge_cells(){var maxRow=0,maxCell=0,r,c,adress,colspan,rowspan,id;for(i=0;i<aCell.length;i++){r=0,c=0;adress=aCell[i].getAttribute("adress").split(":");if(aCell[i].rowSpan>1){r=parseInt(aCell[i].rowSpan)-1;}if(aCell[i].colSpan>1){c=parseInt(aCell[i].colSpan)-1;}if(parseInt(adress[0])>maxRow){maxRow=parseInt(adress[0])+parseInt(r);}if(parseInt(adress[1])>maxCell){maxCell=parseInt(adress[1])+parseInt(c);}}adress=aCell[0].getAttribute("adress").split(":");colspan=maxCell-parseInt(adress[1])+1;rowspan=maxRow-parseInt(adress[0])+1;for(i=1;i<aCell.length;i++){document.getElementById("stable").rows[aCell[i].parentNode.rowIndex].deleteCell(aCell[i].cellIndex);id=id+";"+aCell[i].id;}aCell[0].setAttribute("listCell",id);if(colspan>1){aCell[0].setAttribute("colspan",colspan);}if(rowspan>1){aCell[0].setAttribute("rowspan",rowspan);}}function split_cell(){var row,rows,c,rI2,cI,adress,x,x2,x3,y,tre,trL,a,b;for(i=0;i<aCell.length;i++){if(aCell[i].rowSpan>1){row=parseInt(aCell[i].rowSpan)-1;}else{row=0;}if(aCell[i].colSpan>1||aCell[i].rowSpan>1){rows=aCell[i].parentNode.rowIndex;c=parseInt(aCell[i].colSpan)-1;rI2=rI=aCell[i].parentNode.rowIndex;cI=aCell[i].cellIndex;adress=aCell[i].getAttribute("adress").split(":");x=x2=adress[0];y=adress[1];for(r2=0;r2<row;r2++){rI2++,x++;sTable.rows[rI2].insertCell(cI);sTable.rows[rI2].cells[cI].setAttribute("adress",x+":"+y);}for(r=0;r<c;r++){cI++,y++;sTable.rows[rI].insertCell(cI);sTable.rows[rI].cells[cI].setAttribute("adress",x2+":"+y);rI3=rI;x3=adress[0];for(r2=0;r2<row;r2++){rI3++,x3++;sTable.rows[rI3].insertCell(cI);sTable.rows[rI3].cells[cI].setAttribute("adress",x3+":"+y);}}aCell[i].rowSpan=1;aCell[i].colSpan=1;for(i=0;i<=row;i++){tre=sTable.rows[rows];trL=tre.cells.length;for(i2=1;i2<trL-1;i2++){a=ab(tre.cells[i2]);b=ab(tre.cells[i2+1]);if(a.y>b.y){vi2=tre.cells[i2];tre.deleteCell(i2);tre.insertCell(i2+1);tre.cells[i2+1].setAttribute("adress",vi2.getAttribute("adress"));tre.cells[i2+1].style.cssText=vi2.style.cssText;tre.cells[i2+1].innerHTML=vi2.innerHTML;tre.cells[i2+1].colSpan=vi2.colSpan;tre.cells[i2+1].rowSpan=vi2.rowSpan;i2=0;}}rows++;}}}}function ab(c){var adress=c.getAttribute("adress").split(":"),x=adress[0],y=adress[1];return{x:x,y:y};}document.onmousemove=focusBlocks;document.onclick=hiddenBlocks;function hiddenBlocks(event){if(showBlock!==0&&showBlock.getAttribute("focus")=="false"&&event.target.id!==showSelect.id){showBlock.style.display="none";showBlock=0;}}function showBlocks(blockId,selectId){if(showBlock!==0){showBlock.style.display="none";}showBlock=document.getElementById(blockId);showSelect=document.getElementById(selectId);showBlock.style.display="block";}function focusBlocks(){if(showBlock!==0){var id=showBlock.id;document.getElementById(id).onmouseover=function(){document.getElementById(id).setAttribute("focus","true");};document.getElementById(id).onmouseout=function(){document.getElementById(id).setAttribute("focus","false");};}}function editSubmit(){var tableTdAttribute=sTable.style.cssText+"&"+document.getElementById("style").innerHTML+"&"+sTable.caption.style.cssText+"&",td=sTable.getElementsByTagName("TD"),tr=sTable.getElementsByTagName("tr"),col=sTable.getElementsByTagName("COL"),trStyle,colStyle,tdStyle,tdRowSpan,tdColSpan;for(i=0;i<tr.length;i++){trStyle="";if(tr.item(i).style.cssText.length>0){trStyle=tr.item(i).style.cssText;tableTdAttribute+=tr.item(i).id+"#"+trStyle+"*";}}tableTdAttribute+="&";for(i=0;i<col.length;i++){colStyle="";if(col.item(i).style.cssText.length>0){colStyle=col.item(i).style.cssText;tableTdAttribute+=col.item(i).id+"#"+colStyle+"*";}}tableTdAttribute+="&";for(i=0;i<td.length;i++){tdStyle="";tdRowSpan="";tdColSpan="";tdAdress=td.item(i).getAttribute("adress");if(td.item(i).style.cssText.length>0){tdStyle=td.item(i).style.cssText;}if(td.item(i).getAttribute("rowspan")>1){tdRowSpan=td.item(i).getAttribute("rowspan");}if(td.item(i).getAttribute("colspan")>1){tdColSpan=td.item(i).getAttribute("colspan");}if(tdStyle.length>0||tdRowSpan>0||tdColSpan>0){tableTdAttribute+=tdAdress+"#"+tdRowSpan+"#"+tdColSpan+"#"+tdStyle+"*";}}document.getElementById("attributes").value=tableTdAttribute;return true;}