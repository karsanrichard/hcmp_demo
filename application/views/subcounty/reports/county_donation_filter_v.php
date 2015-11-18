<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-info">
 		 		<b>Below are the Commodity Redistribution trends in the County</b>:Select filter Options
			</div>
		</div>
	</div>
	
	
	<div class="row">
		
		<div class="col-md-2">
			
			<div class="filter row">
			<form class="form-inline" role="form">
				<select id="county_year_expired" class="form-control col-md-2">
					<option value="NULL" selected="selected">Select year</option>
					<?php for($i=2014; $i<=date('Y'); $i++): echo "<option value='$i'>$i</option>"; endfor;  ?>
				</select>
		
			
		</div>
			</div> 
			<div class="col-md-1">
			<button class="btn btn-sm btn-success" id="county-filter" name="filter"><span class="glyphicon glyphicon-filter"></span>Filter</button> 
			</div> 
		</form>
		<div class="col-md-2">
			<button class="btn btn-xs btn-success" id="download_redistributions" name="download_redistributions"><span class="glyphicon glyphicon-download-alt"></span>Download Summary</button> 
			</div> 
	
	</div>
	
</div>


<div id="myTabContent" class="tab-content">
	       <div  id="county" class="tab-pane fade active in">
       	<br>
		
</div>
<div  id="subcounty" class="tab-pane fade in" >
       	<br>
			<div class="filter row">
			<form class="form-inline" role="form">
			<select id="year_expired" class="form-control col-md-2">
				<option value="NULL" selected="selected">Select year</option>
				<?php for($i=2014; $i<=date('Y'); $i++): echo "<option value='$i'>$i</option>"; endfor;  ?>
			</select>
				<select id="district_filter" class="form-control col-md-2" style="margin-left: 1%;">
			<option selected="selected" value="NULL">Select Sub-county</option>
			<?php
			foreach($district_data as $district_):
					$district_id=$district_->id;
					$district_name=$district_->district;	
					echo "<option value='$district_id'>$district_name</option>";
			endforeach;
			?>
			</select> 
			<select id="facility_filter" class="form-control col-md-2">
			<option value="NULL">Select facility</option>
			</select>	
			<div class="col-md-2">
			<button class="btn btn-sm btn-success" id="filter" name="filter"><span class="glyphicon glyphicon-filter"></span>Filter</button> 
			</div> 
			
			</form>
			</div>
</div>
</div>

<div class="graph_content" id="dem_graph_"  ></div>

<script>

$(window).load(function(){
		
        var url_ = "reports/donation_reports/"+
        "<?php echo $year; ?>"+
        "/NULL"+
        "/NULL";	
		ajax_request_replace_div_content(url_,'.graph_content');	
	

});	
	var year  = '<?php echo $year; ?>';
	$.get("reports/donation_reports/"+year+"/NULL"+"/NULL", function(data){
		$("#dem_graph_").html(data);
		
		
	});
	
	$(document).ready(function() {
			$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          $('.graph_content').html('');
          })
		$("#facility_filter").hide();
		$("#district_filter").change(function() {
		var option_value=$(this).val();
		
		if(option_value=='NULL'){
		$("#facility_filter").hide('slow');	
		}
		else{
var drop_down='';
 var hcmp_facility_api = "<?php echo base_url(); ?>reports/get_facility_json_data/"+$("#district_filter").val();
  $.getJSON( hcmp_facility_api ,function( json ) {
     $("#facility_filter").html('<option value="NULL" selected="selected">--select facility--</option>');
      $.each(json, function( key, val ) {
      	drop_down +="<option value='"+json[key]["facility_code"]+"'>"+json[key]["facility_name"]+"</option>";	
      });
      $("#facility_filter").append(drop_down);
    });
		$("#facility_filter").show('slow');		
		}
		});	
		
		$("#county-filter").on('click',function(e) {
			e.preventDefault();	
	        var url_ = "reports/donation_reports/"+$("#county_year_expired").val()+"/NULL"+"/NULL";	
			ajax_request_replace_div_content(url_,'.graph_content');	
          });	
		$("#filter").on('click',function(e) {
			e.preventDefault();	
	        var url_ = "reports/donation_reports/"+$("#year_expired").val()+"/"+$("#district_filter").val()+"/"+ $("#facility_filter").val();	
			ajax_request_replace_div_content(url_,'.graph_content');	
          });
          $("#download_redistributions").button().click(function(e) {
        e.preventDefault(); 
        var year_from =$("#county_year_expired").val();
                
  		var url_ = "reports/donation_report_download"+ "/"+encodeURI(year_from)+ "/NULL/NULL/NULL"; 
         window.open(url+url_ ,'_blank');   
          }); 
     
});

		
</script>