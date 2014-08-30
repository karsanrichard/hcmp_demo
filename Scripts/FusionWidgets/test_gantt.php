<?php include'../FusionCharts/FusionCharts.php' ?>
<html>
<head>
	<title>FusionGadgets Chart Gallery - Gantt Chart</title>
	<script language="JavaScript" src="JSClass/FusionCharts.js"></script>
</head>
<body bgcolor="#ffffff">
<table width='98%' align='center' cellpadding='2' cellspacing='0'>
  <tr>
  <td align="center">
   <div id="chartdiv" align="center">FusionGadgets</div>
   <script type="text/javascript">
	var myChart = new FusionCharts("Charts/Gantt.swf", "myChartId", "600", "400", "0", "0");
	myChart.setDataURL("Gallery/Data/Gantt6.xml");
	myChart.render("chartdiv");
   </script>
   </td>
   </tr>
   <tr height='10'>

   <td><?php
      	$test="<chart dateFormat='dd/mm/yyyy' outputDateFormat='ddds mns yy' ganttWidthPercent='65' canvasBorderColor='999999' canvasBorderThickness='0' gridBorderColor='4567aa' gridBorderAlpha='20' ganttPaneDuration='3' ganttPaneDurationUnit='m' >
<categories  bgColor='009999'>
	<category start='1/3/2008' end='31/8/2008' label='Residential Construction'  fontColor='ffffff' fontSize='16' />
</categories>
<categories  bgColor='4567aa' fontColor='ff0000'>
	<category start='1/3/2008' end='31/8/2008' label='Months'  alpha='' font='Verdana' fontColor='ffffff' fontSize='16' />
</categories>
<categories  bgColor='ffffff' fontColor='1288dd' fontSize='10' isBold='1' align='center'>
	<category start='1/3/2008' end='31/3/2008' label='March' />
	<category start='1/4/2008' end='30/4/2008' label='April' />
	<category start='1/5/2008' end='31/5/2008' label='May' />
	<category start='1/6/2008' end='30/6/2008' label='June' />
	<category start='1/7/2008' end='31/7/2008' label='July' />
	<category start='1/8/2008' end='31/8/2008' label='August' />
</categories>
<processes headerText='Task' fontColor='000000' fontSize='11' isAnimated='1' bgColor='4567aa'  headerVAlign='bottom' headerAlign='left' headerbgColor='4567aa' headerFontColor='ffffff' headerFontSize='16'  align='left' isBold='1' bgAlpha='25'>
	<process label='Writing' id='1' />
	<process label='Signing' id='2' />
	<process label='Financing' id='3' />
	<process label='Permission' id='4' />
	<process label='Plumbing' id='5' />
	<process label='Terrace' id='6' />
	<process label='Inspection' id='7' />
	<process label='Wood Work' id='8' />
	<process label='Interiors' id='9' />
	<process label='Shifting' id='10' />
</processes>
<dataTable showProcessName='1' nameAlign='left' fontColor='000000' fontSize='10' vAlign='right' align='center' headerVAlign='bottom' headerAlign='left' headerbgColor='4567aa' headerFontColor='ffffff' headerFontSize='16' >
	<dataColumn bgColor='eeeeee' headerText='Start' >
		<text label='7/3/2008' /> 
		<text label='6/4/2008' />
		<text label='1/5/2008' />
		<text label='13/5/2008' />
		<text label='2/5/2008' />
		<text label='1/6/2008' />
		<text label='15/6/2008' /> 
		<text label='22/6/2008' />
		<text label='18/6/2008' />
		<text label='15/7/2008' />
	</dataColumn>
	<dataColumn bgColor='eeeeee' headerText='Finish'>
		<text label='22/4/2008' /> 
		<text label='12/5/2008' />
		<text label='2/6/2008' />
		<text label='19/6/2008' /> 
		<text label='19/6/2008' />
		<text label='19/7/2008' />
		<text label='11/8/2008' />
		<text label='5/8/2008' /> 
		<text label='22/7/2008' />
		<text label='11/8/2008' />
	</dataColumn>
	<dataColumn bgColor='eeeeee' headerText='Hrs'>
		<text label='150' /> 
		<text label='340' />
		<text label='60' />
		<text label='20' /> 
		<text label='30' />
		<text label='45' />
		<text label='40' />
		<text label='102' /> 
		<text label='60' />
		<text label='30' />
		<text label='90' />
		<text label='30' />
	</dataColumn>
	<dataColumn align='right' bgColor='4567aa' bgAlpha='25' headerText='Cost' isBold='1'>
		<text label='$4100' /> 
		<text label='$8290' />
		<text label='$12340' />
		<text label='$2330' /> 
		<text label='$4550' />
		<text label='$15720' />
		<text label='$1780' />
		<text label='$32330' /> 
		<text label='$9890' />
		<text label='$1110' />
		<text label='$1260' />
		<text label='$4260' />
	</dataColumn>
</dataTable>
<tasks>
	<task label='Planned' processId='1' start='7/3/2008' end='18/4/2008' id='1-1' color='4567aa' height='32%' topPadding='12%' />
	<task label='Actual' processId='1' start='9/3/2008' end='22/4/2008' id='1' color='EEEEEE' alpha='100'  topPadding='56%' height='32%' />
	<task label='Planned' processId='8' start='22/6/2008' end='29/7/2008' id='2-1' color='4567aa' alpha='100'  height='32%' topPadding='12%' />
	<task label='Actual' processId='8' start='22/6/2008' end='5/8/2008' id='2' color='EEEEEE' alpha='100'  height='32%' topPadding='56%' percentComplete='78'/>
	<task label='Planned' processId='2' start='6/4/2008' end='2/5/2008' id='3-1' color='4567aa' height='32%' topPadding='12%' />
	<task label='Actual' processId='2' start='6/4/2008' end='12/5/2008' id='3' color='EEEEEE' alpha='100'  isAnimated='1' height='32%' topPadding='56%'/>
	<task label='Planned' processId='9' start='18/6/2008' end='21/7/2008' id='4-1' color='4567aa' height='32%' topPadding='12%' />
	<task label='Actual' processId='9' start='18/6/2008' end='22/7/2008' id='4' color='EEEEEE' alpha='100'  isAnimated='1' height='32%' topPadding='56%'/>
	<task label='Planned' processId='3' start='1/5/2008' end='2/6/2008' id='5-1' color='4567aa' height='32%' topPadding='12%' />
	<task label='Actual' processId='3' start='1/5/2008' end='2/6/2008' id='5' color='EEEEEE' height='32%' topPadding='56%'/>
	<task label='Planned' processId='4' start='11/5/2008' end='12/6/2008' id='6-1' color='4567aa' height='32%' topPadding='12%' />
  	<task label='Actual' processId='4' start='13/5/2008' end='19/6/2008' id='6' color='EEEEEE'  height='32%' topPadding='56%'/>
	<task label='Planned' processId='5' start='1/5/2008' end='12/6/2008' id='7-1' color='4567aa' height='32%' topPadding='12%' />
  	<task label='Actual' processId='5' start='2/5/2008' end='19/6/2008' id='7' color='EEEEEE'  height='32%' topPadding='56%'/>
	<task label='Planned' processId='6' start='1/6/2008' end='12/7/2008' id='8-1' color='4567aa' height='32%' topPadding='12%' />
  	<task label='Actual' processId='6' start='1/6/2008' end='19/7/2008' Id='8' color='EEEEEE' height='32%' topPadding='56%' percentComplete='91'/>
	<task label='Planned' processId='7' start='11/6/2008' end='7/8/2008' Id='9-1' color='4567aa' height='32%' topPadding='12%' />
  	<task label='Actual' processId='7' start='15/6/2008' end='11/8/2008' Id='9' color='EEEEEE' height='32%' topPadding='56%'/>
	<task label='Planned' processId='10' start='11/7/2008' end='7/8/2008' Id='10-1' color='4567aa' height='32%' topPadding='12%' />
  	<task label='Actual' processId='10' start='15/7/2008' end='11/8/2008' Id='10' color='EEEEEE' height='32%' topPadding='56%'/>
</tasks>
<connectors>
	<connector fromTaskId='3' toTaskId='5' color='4567aa' thickness='2' fromTaskConnectStart='1'/>
	<connector fromTaskId='8' toTaskId='2' color='4567aa' thickness='2' fromTaskConnectStart='1'/>
</connectors>
<milestones>
	<milestone date='7/8/2008' taskId='10-1' color='2E4472' shape='star' toolText='Original moving date' />
	<milestone date='21/8/2008' taskId='10' color='999999' shape='star' toolText='New estimated moving date' />
</milestones>
<legend>
        <item label='Planned' color='4567aa' />
        <item label='Actual' color='999999' />
        <item label='Slack (Delay)' color='FF5E5E' />
</legend>
<styles>
        <definition>
                <style type='Font' name='legendFont' size='12' />
        </definition>                
        <application>
                <apply toObject='LEGEND' styles='legendFont' />
        </application>
</styles>
</chart>
";
   
   
    echo renderChart("Charts/Gantt.swf","", rawurlencode($test),"myChartId", 700, 450, false, false);?></td>
   </tr>
   <tr>
    <td align="center">
	<a href='Data/Gantt6.xml' target='_blank'><img src='../Contents/Images/BtnViewXML.gif' border='0' alt='View XML for above chart'></a>
    </td>
   </tr>
</table>
</body>
</html>
