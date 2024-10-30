<div class="editor_conteiner">
<div class="editor_toolbar">
<span class="editor_toolbar_separator" style="float:right;"></span>
<span class="editor_toolbar_separator" style="float:left;"></span>
<span>
<table class="editor_toolbar_series">
<tr>
<td><span class="editor_toolbar_button_static" style="margin-right:0;"><span title="<?php _e('Font Cell','csv_sumotto');?>" id="font"><?php _e('Font Cell','csv_sumotto');?></span></span><span class="editor_toolbar_button"><a href="javascript:void(null)" id="font_select" onClick="showBlocks('list_font','font_select');"></a></span></td>
<td><span class="editor_toolbar_button" style="margin-right:0;"><input type="text" id="input_font_size" onBlur="inputSizeFont();" style="width: 30px;height:20px;" maxlength="3"></span><span class="editor_toolbar_button"><a href="javascript:void(null)" id="font_size_select" onClick="showBlocks('font_size_list','font_size_select');"></a></span></td>
<td><span class="editor_toolbar_void"></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Top','csv_sumotto');?>" href="javascript:void(null);" id="top"  onClick="button(event)" rule="verticalAlign"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Middle','csv_sumotto');?>" href="javascript:void(null);" id="middle"  onClick="button(event)" rule="verticalAlign"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Buttom','csv_sumotto');?>" href="javascript:void(null);" id="bottom"  onClick="button(event)" rule="verticalAlign"></a></span></td>
<td><span class="editor_toolbar_void"></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Merge Cells','csv_sumotto');?>" href="javascript:void(null);" id="merge_cells" onClick="merge_cells()"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Split Cell','csv_sumotto');?>" href="javascript:void(null);" id="split_cells" onClick="split_cell()"></a></span></td>
<td><span class="editor_toolbar_void"></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Border collapse','csv_sumotto');?>" href="javascript:void(null);" id="border_collapse" onClick="collapse()"></a></span></td>
<td><span class="editor_toolbar_button_static" style="margin-right:0;"><a title="<?php _e('Borders','csv_sumotto');?>" href="javascript:void(null);" id="border"></a></span><span class="editor_toolbar_button"><a href="javascript:void(null)" id="border_select" onClick="showBlocks('border_style','border_select');"></a></span></td>
<td><span class="editor_toolbar_void"></span></td>
<td><span class="editor_toolbar_button_static" style="margin-right:0;"><span title="<?php _e('Size','csv_sumotto');?>" id="size"><?php _e('Size','csv_sumotto');?></span></span><span class="editor_toolbar_button"><a href="javascript:void(null)" id="size_select" onClick="sizeSelect();"></a></span></td>
<td><span class="editor_toolbar_void"></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Clear Formatting','csv_sumotto');?>" href="javascript:void(null);" id="cliar" onClick="clear_formatting()"></a></span></td>
</tr>
</table>
<table class="editor_toolbar_series">
<tr>
<td><span class="editor_toolbar_button"><a title="<?php _e('Bold','csv_sumotto');?>" href="javascript:void(null);" id="bold" onClick="button(event)" rule="fontWeight"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Italic','csv_sumotto');?>" href="javascript:void(null);" id="italic" onClick="button(event)" rule="fontStyle"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Underline','csv_sumotto');?>" href="javascript:void(null);" id="underline" onClick="button(event)" rule="textDecoration"></a></span></td>
<td><span class="editor_toolbar_void"></span></td>
<td><span class="editor_toolbar_button" style="margin-right:0;"><a title="<?php _e('Font Color','csv_sumotto');?>" href="javascript:void(null);" id="fontcolor" onClick="button(event)" rule="color"><div id="font_palette_last_color" style="background-color:;"></div></a></span><span class="editor_toolbar_button"><a href="javascript:void(null)" id="fontcolor_select" onClick="showBlocks('font_palette','fontcolor_select');"></a></span></td>
<td><span class="editor_toolbar_button" style="margin-right:0;"><a title="<?php _e('Background Color','csv_sumotto');?>" href="javascript:void(null);" id="bgcolor" onClick="button(event)" rule="backgroundColor"><div id="bg_palette_last_color" style="background-color:;"></div></a></span><span class="editor_toolbar_button"><a href="javascript:void(null)" id="bgcolor_select" onClick="showBlocks('bg_palette','bgcolor_select');"></a></span></td>
<td><span class="editor_toolbar_void"></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Left','csv_sumotto');?>" href="javascript:void(null);" id="left" onClick="button(event)" rule="textAlign"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Center','csv_sumotto');?>" href="javascript:void(null);" id="center" onClick="button(event)" rule="textAlign"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Right','csv_sumotto');?>" href="javascript:void(null);" id="right" onClick="button(event)" rule="textAlign"></a></span></td>
</tr>
</table>
</span>
</div>
<div class="select_conteiner" id="font_palette" onClick="colorSelect(event,'font_palette');" focus="false">
<table>
<tr>
<td style="width:200px;" rowspan="2" class="select_color">
<a href="javascript:void(null);" style="background-color: rgb(255, 255, 255);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 0, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(238, 236, 225);"></a><a href="javascript:void(null);" style="background-color: rgb(31, 73, 125);"></a><a href="javascript:void(null);" style="background-color: rgb(79, 129, 189);"></a><a href="javascript:void(null);" style="background-color: rgb(192, 80, 77);"></a><a href="javascript:void(null);" style="background-color: rgb(155, 187, 89);"></a><a href="javascript:void(null);" style="background-color: rgb(128, 100, 162);"></a><a href="javascript:void(null);" style="background-color: rgb(75, 172, 198);"></a><a href="javascript:void(null);" style="background-color: rgb(247, 150, 70);"></a>
<a href="javascript:void(null);" style="background-color: rgb(242, 242, 242);"></a><a href="javascript:void(null);" style="background-color: rgb(127, 127, 127);"></a><a href="javascript:void(null);" style="background-color: rgb(221, 217, 195);"></a><a href="javascript:void(null);" style="background-color: rgb(198, 217, 240);"></a><a href="javascript:void(null);" style="background-color: rgb(219, 229, 241);"></a><a href="javascript:void(null);" style="background-color: rgb(242, 220, 219);"></a><a href="javascript:void(null);" style="background-color: rgb(235, 241, 221);"></a><a href="javascript:void(null);" style="background-color: rgb(229, 224, 236);"></a><a href="javascript:void(null);" style="background-color: rgb(219, 238, 243);"></a><a href="javascript:void(null);" style="background-color: rgb(253, 234, 218);"></a>
<a href="javascript:void(null);" style="background-color: rgb(216, 216, 216);"></a><a href="javascript:void(null);" style="background-color: rgb(89, 89, 89);"></a><a href="javascript:void(null);" style="background-color: rgb(196, 189, 151);"></a><a href="javascript:void(null);" style="background-color: rgb(141, 179, 226);"></a><a href="javascript:void(null);" style="background-color: rgb(184, 204, 228);"></a><a href="javascript:void(null);" style="background-color: rgb(229, 185, 183);"></a><a href="javascript:void(null);" style="background-color: rgb(215, 227, 188);"></a><a href="javascript:void(null);" style="background-color: rgb(204, 193, 217);"></a><a href="javascript:void(null);" style="background-color: rgb(183, 221, 232);"></a><a href="javascript:void(null);" style="background-color: rgb(251, 213, 181);"></a>
<a href="javascript:void(null);" style="background-color: rgb(191, 191, 191);"></a><a href="javascript:void(null);" style="background-color: rgb(63, 63, 63);"></a><a href="javascript:void(null);" style="background-color: rgb(147, 137, 83);"></a><a href="javascript:void(null);" style="background-color: rgb(84, 141, 212);"></a><a href="javascript:void(null);" style="background-color: rgb(149, 179, 215);"></a><a href="javascript:void(null);" style="background-color: rgb(217, 150, 148);"></a><a href="javascript:void(null);" style="background-color: rgb(195, 214, 155);"></a><a href="javascript:void(null);" style="background-color: rgb(178, 162, 199);"></a><a href="javascript:void(null);" style="background-color: rgb(183, 221, 232);"></a><a href="javascript:void(null);" style="background-color: rgb(250, 192, 143);"></a>
<a href="javascript:void(null);" style="background-color: rgb(165, 165, 165);"></a><a href="javascript:void(null);" style="background-color: rgb(38, 38, 38);"></a><a href="javascript:void(null);" style="background-color: rgb(73, 68, 41);"></a><a href="javascript:void(null);" style="background-color: rgb(23, 54, 93);"></a><a href="javascript:void(null);" style="background-color: rgb(54, 96, 146);"></a><a href="javascript:void(null);" style="background-color: rgb(149, 55, 52);"></a><a href="javascript:void(null);" style="background-color: rgb(118, 146, 60);"></a><a href="javascript:void(null);" style="background-color: rgb(95, 73, 122);"></a><a href="javascript:void(null);" style="background-color: rgb(146, 205, 220);"></a><a href="javascript:void(null);" style="background-color: rgb(227, 108, 9);"></a>
<a href="javascript:void(null);" style="background-color: rgb(127, 127, 127);"></a><a href="javascript:void(null);" style="background-color: rgb(12, 12, 12);"></a><a href="javascript:void(null);" style="background-color: rgb(29, 27, 16);"></a><a href="javascript:void(null);" style="background-color: rgb(15, 36, 62);"></a><a href="javascript:void(null);" style="background-color: rgb(36, 64, 97);"></a><a href="javascript:void(null);" style="background-color: rgb(99, 36, 35);"></a><a href="javascript:void(null);" style="background-color: rgb(79, 97, 40);"></a><a href="javascript:void(null);" style="background-color: rgb(63, 49, 81);"></a><a href="javascript:void(null);" style="background-color: rgb(49, 133, 155);"></a><a href="javascript:void(null);" style="background-color: rgb(151, 72, 6);"></a>
<a href="javascript:void(null);" style="background-color: rgb(204, 0, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(255, 0, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(255, 204, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(255, 255, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(153, 204, 102);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 153, 102);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 153, 255);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 102, 204);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 51, 102);"></a><a href="javascript:void(null);" style="background-color: rgb(102, 51, 153);"></a>
</td>
<td style="height:50px; padding-left:10px;"><span class="editor_toolbar_button"><a href="javascript:void(null);" title="<?php _e('None Font Color','csv_sumotto');?>" id="none"></a></span></td>
</tr>
<tr>
<td> </td>
</tr>
</table>
</div>
<div class="select_conteiner" id="bg_palette" onClick="colorSelect(event,'bg_palette');" focus="false">
<table>
<tr>
<td style="width:200px;" rowspan="2" class="select_color">
<a href="javascript:void(null);" style="background-color: rgb(255, 255, 255);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 0, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(238, 236, 225);"></a><a href="javascript:void(null);" style="background-color: rgb(31, 73, 125);"></a><a href="javascript:void(null);" style="background-color: rgb(79, 129, 189);"></a><a href="javascript:void(null);" style="background-color: rgb(192, 80, 77);"></a><a href="javascript:void(null);" style="background-color: rgb(155, 187, 89);"></a><a href="javascript:void(null);" style="background-color: rgb(128, 100, 162);"></a><a href="javascript:void(null);" style="background-color: rgb(75, 172, 198);"></a><a href="javascript:void(null);" style="background-color: rgb(247, 150, 70);"></a>
<a href="javascript:void(null);" style="background-color: rgb(242, 242, 242);"></a><a href="javascript:void(null);" style="background-color: rgb(127, 127, 127);"></a><a href="javascript:void(null);" style="background-color: rgb(221, 217, 195);"></a><a href="javascript:void(null);" style="background-color: rgb(198, 217, 240);"></a><a href="javascript:void(null);" style="background-color: rgb(219, 229, 241);"></a><a href="javascript:void(null);" style="background-color: rgb(242, 220, 219);"></a><a href="javascript:void(null);" style="background-color: rgb(235, 241, 221);"></a><a href="javascript:void(null);" style="background-color: rgb(229, 224, 236);"></a><a href="javascript:void(null);" style="background-color: rgb(219, 238, 243);"></a><a href="javascript:void(null);" style="background-color: rgb(253, 234, 218);"></a>
<a href="javascript:void(null);" style="background-color: rgb(216, 216, 216);"></a><a href="javascript:void(null);" style="background-color: rgb(89, 89, 89);"></a><a href="javascript:void(null);" style="background-color: rgb(196, 189, 151);"></a><a href="javascript:void(null);" style="background-color: rgb(141, 179, 226);"></a><a href="javascript:void(null);" style="background-color: rgb(184, 204, 228);"></a><a href="javascript:void(null);" style="background-color: rgb(229, 185, 183);"></a><a href="javascript:void(null);" style="background-color: rgb(215, 227, 188);"></a><a href="javascript:void(null);" style="background-color: rgb(204, 193, 217);"></a><a href="javascript:void(null);" style="background-color: rgb(183, 221, 232);"></a><a href="javascript:void(null);" style="background-color: rgb(251, 213, 181);"></a>
<a href="javascript:void(null);" style="background-color: rgb(191, 191, 191);"></a><a href="javascript:void(null);" style="background-color: rgb(63, 63, 63);"></a><a href="javascript:void(null);" style="background-color: rgb(147, 137, 83);"></a><a href="javascript:void(null);" style="background-color: rgb(84, 141, 212);"></a><a href="javascript:void(null);" style="background-color: rgb(149, 179, 215);"></a><a href="javascript:void(null);" style="background-color: rgb(217, 150, 148);"></a><a href="javascript:void(null);" style="background-color: rgb(195, 214, 155);"></a><a href="javascript:void(null);" style="background-color: rgb(178, 162, 199);"></a><a href="javascript:void(null);" style="background-color: rgb(183, 221, 232);"></a><a href="javascript:void(null);" style="background-color: rgb(250, 192, 143);"></a>
<a href="javascript:void(null);" style="background-color: rgb(165, 165, 165);"></a><a href="javascript:void(null);" style="background-color: rgb(38, 38, 38);"></a><a href="javascript:void(null);" style="background-color: rgb(73, 68, 41);"></a><a href="javascript:void(null);" style="background-color: rgb(23, 54, 93);"></a><a href="javascript:void(null);" style="background-color: rgb(54, 96, 146);"></a><a href="javascript:void(null);" style="background-color: rgb(149, 55, 52);"></a><a href="javascript:void(null);" style="background-color: rgb(118, 146, 60);"></a><a href="javascript:void(null);" style="background-color: rgb(95, 73, 122);"></a><a href="javascript:void(null);" style="background-color: rgb(146, 205, 220);"></a><a href="javascript:void(null);" style="background-color: rgb(227, 108, 9);"></a>
<a href="javascript:void(null);" style="background-color: rgb(127, 127, 127);"></a><a href="javascript:void(null);" style="background-color: rgb(12, 12, 12);"></a><a href="javascript:void(null);" style="background-color: rgb(29, 27, 16);"></a><a href="javascript:void(null);" style="background-color: rgb(15, 36, 62);"></a><a href="javascript:void(null);" style="background-color: rgb(36, 64, 97);"></a><a href="javascript:void(null);" style="background-color: rgb(99, 36, 35);"></a><a href="javascript:void(null);" style="background-color: rgb(79, 97, 40);"></a><a href="javascript:void(null);" style="background-color: rgb(63, 49, 81);"></a><a href="javascript:void(null);" style="background-color: rgb(49, 133, 155);"></a><a href="javascript:void(null);" style="background-color: rgb(151, 72, 6);"></a>
<a href="javascript:void(null);" style="background-color: rgb(204, 0, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(255, 0, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(255, 204, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(255, 255, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(153, 204, 102);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 153, 102);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 153, 255);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 102, 204);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 51, 102);"></a><a href="javascript:void(null);" style="background-color: rgb(102, 51, 153);"></a>
</td>
<td style="height:50px;padding-left:10px;"><span class="editor_toolbar_button"><a href="javascript:void(null);" title="<?php _e('None Background Color','csv_sumotto');?>" id="none"></a></span></td>
</tr>
<tr><td> </td></tr>
</table>
</div>
<div id="list_font" class="select_conteiner" focus="false" onClick="fontSelect(event);">
<ul class="select_font">
<li style="font-family:;"><?php _e('Theme Font Style','csv_sumotto');?></li>
<li style="font-family:Arial;">Arial</li>
<li style="font-family:Arial Black;">Arial Black</li>
<li style="font-family:Comic Sans MS;">Comic Sans MS</li>
<li style="font-family:Courier New;">Courier New</li>
<li style="font-family:Georgia;">Georgia</li>
<li style="font-family:Impact;">Impact</li>
<li style="font-family:Times New Roman;">Times New Roman</li>
<li style="font-family:Trebuchet MS;">Trebuchet MS</li>
<li style="font-family:Verdana;">Verdana</li>
</ul>
</div>
<div id="font_size_list" class="select_conteiner" focus="false" onClick="fontSizeSelect(event);">
<table class="select_font_size">
<tr><td><span><?php _e('Theme size','csv_sumotto');?></span></td><td><span>8</span></td><td><span>9</span></td><td><span>10</span></td></tr>
<tr><td><span>11</span></td><td><span>12</span></td><td><span>14</span></td><td><span>16</span></td></tr>
<tr><td><span>18</span></td><td><span>20</span></td><td><span>22</span></td><td><span>24</span></td></tr>
<tr><td><span>28</span></td><td><span>36</span></td><td><span>48</span></td><td><span>72</span></td></tr>
</table>
</div>
<div id="border_style" class="select_conteiner" focus="false" style="width:500px;">
<table>
<tr>
<td><span class="editor_toolbar_button"><a title="<?php _e('Border All','csv_sumotto');?>" href="javascript:void(null);" id="border_all" onClick="document.getElementById('borderTD').style.borderWidth='2px';document.getElementById('borderTD').style.borderStyle='solid';border_width_value(event)" rule="border"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Border Top','csv_sumotto');?>" href="javascript:void(null);" id="border_top" onClick="document.getElementById('borderTD').style.borderWidth='2px 0 0 0';document.getElementById('borderTD').style.borderStyle='solid';border_width_value(event)" rule="border"></a></span></td></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Border Left','csv_sumotto');?>" href="javascript:void(null);" id="border_left" onClick="document.getElementById('borderTD').style.borderWidth='0 0 0 2px';document.getElementById('borderTD').style.borderStyle='solid';border_width_value(event)" rule="border"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Border Buttom','csv_sumotto');?>" href="javascript:void(null);" id="border_buttom" onClick="document.getElementById('borderTD').style.borderWidth='0 0 2px 0';document.getElementById('borderTD').style.borderStyle='solid';border_width_value(event)" rule="border"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Border Right','csv_sumotto');?>" href="javascript:void(null);" id="border_right" onClick="document.getElementById('borderTD').style.borderWidth='0 2px 0 0';document.getElementById('borderTD').style.borderStyle='solid';border_width_value(event)" rule="border"></a></span></td>
<td><span class="editor_toolbar_button"><a title="<?php _e('Border None','csv_sumotto');?>" href="javascript:void(null);" id="border_none" onClick="document.getElementById('borderTD').style.borderWidth='';document.getElementById('borderTD').style.borderStyle='';document.getElementById('borderTD').style.borderColor='';border_width_value(event)" rule="border"></a></span></td>				
<td rowspan="4">
<table>
<tr>
<td style="width:200px;" rowspan="2" class="select_color" onClick="borderColors(event);">
<a href="javascript:void(null);" style="background-color: rgb(255, 255, 255);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 0, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(238, 236, 225);"></a><a href="javascript:void(null);" style="background-color: rgb(31, 73, 125);"></a><a href="javascript:void(null);" style="background-color: rgb(79, 129, 189);"></a><a href="javascript:void(null);" style="background-color: rgb(192, 80, 77);"></a><a href="javascript:void(null);" style="background-color: rgb(155, 187, 89);"></a><a href="javascript:void(null);" style="background-color: rgb(128, 100, 162);"></a><a href="javascript:void(null);" style="background-color: rgb(75, 172, 198);"></a><a href="javascript:void(null);" style="background-color: rgb(247, 150, 70);"></a>
<a href="javascript:void(null);" style="background-color: rgb(242, 242, 242);"></a><a href="javascript:void(null);" style="background-color: rgb(127, 127, 127);"></a><a href="javascript:void(null);" style="background-color: rgb(221, 217, 195);"></a><a href="javascript:void(null);" style="background-color: rgb(198, 217, 240);"></a><a href="javascript:void(null);" style="background-color: rgb(219, 229, 241);"></a><a href="javascript:void(null);" style="background-color: rgb(242, 220, 219);"></a><a href="javascript:void(null);" style="background-color: rgb(235, 241, 221);"></a><a href="javascript:void(null);" style="background-color: rgb(229, 224, 236);"></a><a href="javascript:void(null);" style="background-color: rgb(219, 238, 243);"></a><a href="javascript:void(null);" style="background-color: rgb(253, 234, 218);"></a>
<a href="javascript:void(null);" style="background-color: rgb(216, 216, 216);"></a><a href="javascript:void(null);" style="background-color: rgb(89, 89, 89);"></a><a href="javascript:void(null);" style="background-color: rgb(196, 189, 151);"></a><a href="javascript:void(null);" style="background-color: rgb(141, 179, 226);"></a><a href="javascript:void(null);" style="background-color: rgb(184, 204, 228);"></a><a href="javascript:void(null);" style="background-color: rgb(229, 185, 183);"></a><a href="javascript:void(null);" style="background-color: rgb(215, 227, 188);"></a><a href="javascript:void(null);" style="background-color: rgb(204, 193, 217);"></a><a href="javascript:void(null);" style="background-color: rgb(183, 221, 232);"></a><a href="javascript:void(null);" style="background-color: rgb(251, 213, 181);"></a>
<a href="javascript:void(null);" style="background-color: rgb(191, 191, 191);"></a><a href="javascript:void(null);" style="background-color: rgb(63, 63, 63);"></a><a href="javascript:void(null);" style="background-color: rgb(147, 137, 83);"></a><a href="javascript:void(null);" style="background-color: rgb(84, 141, 212);"></a><a href="javascript:void(null);" style="background-color: rgb(149, 179, 215);"></a><a href="javascript:void(null);" style="background-color: rgb(217, 150, 148);"></a><a href="javascript:void(null);" style="background-color: rgb(195, 214, 155);"></a><a href="javascript:void(null);" style="background-color: rgb(178, 162, 199);"></a><a href="javascript:void(null);" style="background-color: rgb(183, 221, 232);"></a><a href="javascript:void(null);" style="background-color: rgb(250, 192, 143);"></a>
<a href="javascript:void(null);" style="background-color: rgb(165, 165, 165);"></a><a href="javascript:void(null);" style="background-color: rgb(38, 38, 38);"></a><a href="javascript:void(null);" style="background-color: rgb(73, 68, 41);"></a><a href="javascript:void(null);" style="background-color: rgb(23, 54, 93);"></a><a href="javascript:void(null);" style="background-color: rgb(54, 96, 146);"></a><a href="javascript:void(null);" style="background-color: rgb(149, 55, 52);"></a><a href="javascript:void(null);" style="background-color: rgb(118, 146, 60);"></a><a href="javascript:void(null);" style="background-color: rgb(95, 73, 122);"></a><a href="javascript:void(null);" style="background-color: rgb(146, 205, 220);"></a><a href="javascript:void(null);" style="background-color: rgb(227, 108, 9);"></a>
<a href="javascript:void(null);" style="background-color: rgb(127, 127, 127);"></a><a href="javascript:void(null);" style="background-color: rgb(12, 12, 12);"></a><a href="javascript:void(null);" style="background-color: rgb(29, 27, 16);"></a><a href="javascript:void(null);" style="background-color: rgb(15, 36, 62);"></a><a href="javascript:void(null);" style="background-color: rgb(36, 64, 97);"></a><a href="javascript:void(null);" style="background-color: rgb(99, 36, 35);"></a><a href="javascript:void(null);" style="background-color: rgb(79, 97, 40);"></a><a href="javascript:void(null);" style="background-color: rgb(63, 49, 81);"></a><a href="javascript:void(null);" style="background-color: rgb(49, 133, 155);"></a><a href="javascript:void(null);" style="background-color: rgb(151, 72, 6);"></a>
<a href="javascript:void(null);" style="background-color: rgb(204, 0, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(255, 0, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(255, 204, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(255, 255, 0);"></a><a href="javascript:void(null);" style="background-color: rgb(153, 204, 102);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 153, 102);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 153, 255);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 102, 204);"></a><a href="javascript:void(null);" style="background-color: rgb(0, 51, 102);"></a><a href="javascript:void(null);" style="background-color: rgb(102, 51, 153);"></a>
</td>
</tr>
</table>				
</td>
<td rowspan="3"> </td>
</tr>
<tr>
<td></td>
<td colspan="4" style="text-align:center;"><input type="text" id="borderTopWidth" style="width: 30px;height:20px;" maxlength="2" value="0"></td>
<td></td>
</tr>
<tr>
<td style="text-align:right;"><input type="text" id="borderLeftWidth" style="width: 30px;height:20px;" maxlength="2" value="0"></td>
<td colspan="4">
<table style="width:150px; background:#FFF;" id="borders">
<tr><td style="width:50px;"></td><td style="width:50px;"></td><td style="width:50px;"></td></tr>
<tr><td></td><td id="borderTD" style=" "><small><i><?php _e('content','csv_sumotto');?></i></small></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>
</table>
</td>
<td style="text-align::left;"><input type="text" id="borderRightWidth" style="width: 30px;height:20px;" maxlength="2" value="0"></td>
</tr>
<tr>
<td></td>
<td colspan="4" style="text-align:center;"><input type="text" id="borderBottomWidth" style="width: 30px;height:20px;" maxlength="2" value="0"></td>
<td></td>
<td><span class="editor_toolbar_button"><a title="OK" href="javascript:void(null);" id="border_ok" onClick="borderStyle()">O.K.</a></span></td>
</tr>
</table>
</div>
<div id="size_list" class="select_conteiner" focus="false" onClick="" style="width:inherit;">
<table style="text-align:center;" id="size_list">
<tr><td id="size_str" colspan="2"></td></tr>
<tr><td id="size_input" colspan="2"></td></tr>
<tr>
<td><span class="editor_toolbar_button" style="float: right;"><a title="auto" href="javascript:void(null);" id="border_ok" onClick="tableSize('auto')">auto</a></span></td>
<td><span class="editor_toolbar_button"><a title="OK" href="javascript:void(null);" id="border_ok" onClick="tableSize()">O.K.</a></span></td>
</tr>
</table>
</div>
<div align="center" onMouseDown="return false" onselectstart="return false" id="pole" style="position: relative; padding:10px;">
<div id="div"> </div>
<?php echo csv_sumotto_edit_display_table($table->id);?>
</div>
</div>
<script language="javascript">var pAll='<?php _e('table sizes','csv_sumotto');?>',pCell='<?php _e('cell sizes','csv_sumotto');?>',pCol='<?php _e('column width','csv_sumotto');?>',pRow='<?php _e('height of table row','csv_sumotto');?>';pH='<?php _e('height','csv_sumotto');?>',pW='<?php _e('width','csv_sumotto');?>';</script>