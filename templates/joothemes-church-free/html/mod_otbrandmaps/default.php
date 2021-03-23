<?php
/**
 * @package 	OT Brand Map Module for Joomla! 3.3
 * @version 	$Id: default.php - Mar 2015 00:00:00Z OmegaTheme
 * @author 		OmegaTheme Extensions (services@omegatheme.com) - http://omegatheme.com
 * @copyright	Copyright(C) 2015 - OmegaTheme Extensions
 * @license 	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
**/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="otmaps-wrapper <?php echo $moduleclass_sfx; ?>">
	<?php
      if ($params->get('select_map', 'dynamic') == 'static')
        {
			$description = '';
            $query_url = 'http://maps.google.com/maps/api/staticmap?maptype='.$params->get('map_type','roadmap ').'&size='.$params->get('map_width', 250).'x'.$params->get('map_height', 210).'&zoom='.$params->get('map_default_zoom_level', 12).'&sensor=false&center='.$add_arr1[0][2];
            $marker_size = $params->get('address_markers_size','') != '' ? 'size:'.$params->get('address_markers_size','').'%7C' : '';
            $a='';
			$i=0;
			$area_array = array();
			foreach ($add_arr1 as $index => $value ) {
					$item = array();
					$item=$value[7];
					$area_array[]=$item;
				}
			$area_array = array_unique($area_array);
			foreach ($add_arr1 as $index => $add)
            {
				$i++;
			}
			$b=floor(12/$i);
			foreach ($area_array as $index => $item)
            {
				 $description .= '<div class="ot_area">'.$item.'</div><div class="ot_'.$index.' col-md-12 col-xs-12">';
				 foreach ($add_arr1 as $index1 => $add) {
					 if($add[7] == $item) {
						 $description .= '<div class="list_item_wrap_static col-lg-'.$params->get('map_col',4).' col-md-'.$params->get('map_col',4).' col-sm-'.$params->get('map_col',4).' col-xs-12">';
						 if(!empty($add[0])) {
						 $description .= '<div class="ot_info"> '.$add[0].': '.$add[1].'</div>';
						 } else {
							$description .= '<div class="ot_info">'.$add[1].'</div>';
						 }
						 $description .= '<div class="ot_info"><img src="'.JURI::base().'modules/mod_otbrandmaps/assets/images/geo.png" alt="'.str_replace('+',' ',$add[2]).'"/>'.str_replace('+',' ',$add[2]).'</div>';
						if(!empty($add[3])) {
						 $description .= '<div class="ot_info"><img src="'.JURI::base().'modules/mod_otbrandmaps/assets/images/phone.png" alt="'.$add[3].'"/> '.$add[3].'</div>';
						}
						if(!empty($add[4])) {
						 $description .= '<div class="ot_info"><img src="'.JURI::base().'modules/mod_otbrandmaps/assets/images/seo.png" alt="'.$add[4].'"/>'.$add[4].'</div>';
						}
						if(!empty($add[5])) {
						 $description .= '<div class="ot_info"><img src="'.JURI::base().'modules/mod_otbrandmaps/assets/images/email.png" alt="'.$add[5].'"/>'.$add[5].'</div>';
						}
						 if(!empty($add[6])) {
						 $description .= '<div class="ot_info"><img src="'.JURI::base().'modules/mod_otbrandmaps/assets/images/fax.png" alt="'.$add[6].'"/>'.$add[6].'</div>';
						 }
						$description .= '</div>';
					 }
				}
				$description .= '</div>';

			}
            foreach ($add_arr1 as $index => $add)
            {
                $a .=  '&markers='.$marker_size.'color:'.trim($params->get('address_markers_color', 'blue')).'%7Clabel:'.strtoupper($add[0]).'%7C'.$add[2];

            }

            echo '<div class="ot-map" style="width:'.$params->get('map_width', 250).''.$params->get('width_type').'; height:'.$params->get('map_height', 210).''.$params->get('height_type', 'px').';"><img alt="loading maps..." style="width:100%"/>
                        <div id="location_list_static">'.$description.'</div></div>'; ?>
			<script type="text/javascript" charset="utf-8">
				jQuery(document).ready(function($){
					var a= $(".ot-map").width();
					var src1="http://maps.google.com/maps/api/staticmap?maptype=<?php echo $params->get('map_type','roadmap ')?>&size="+a+"x<?php echo $params->get('map_height', 210)?>&zoom=<?php echo $params->get('map_default_zoom_level', 12)?>&sensor=false&center=<?php echo $add_arr1[0][2]?><?php echo $a; ?>";
					$(".ot-map > img").attr("src", src1);
				});
			</script>
		<?php }
        else
        {
            $custom_style = "
                 #map_canvas".$params->get('map_id_sfx')." {
                    width: {$params->get('map_width', 250)}{$params->get('width_type','px')};
                    height: {$params->get('map_height', 210)}{$params->get('height_type','px')};
                    position: relative;
                }
				.ot-maps,#location_list,.otmaps-wrapper  {
					width: {$params->get('map_width', 250)}{$params->get('width_type','px')};
					position: relative;
				}
            ";
			$doc = Jfactory::getDocument();
            $doc->addStyleDeclaration($custom_style);
            ?>
            <script type="text/javascript" charset="utf-8">
            //<![CDATA[
            var points = [];
            <?php
            $i = 0;
            foreach ($add_arr1 as $index => $value )
            { ?>
                points[<?php echo $index; ?>] = {
                    lat: "<?php echo $value[0]; ?>",
					lng: "<?php echo $value[8]; ?>",
					icon: "<?php echo JURI::root().''.$value[9]; ?>",

					image: "<?php echo $value[10]; ?>",
                    name: "<?php echo $value[1]; ?>",
                    address: "<?php echo $value[2]; ?>",
					phone: "<?php echo $value[3]; ?>",
					web:"<?php echo $value[4]; ?>",
					email:"<?php echo $value[5]; ?>",
					fax:"<?php echo $value[6]; ?>",
					area:"<?php echo $value[7]; ?>",
                    original_add:"<?php echo str_replace('+', ' ', $value[2])?>"
                };

              <?php  $i++;
            }
            ?>
            //]]>
            </script>

            <?php $a=floor(12/$i);
            echo '<div id="map_canvas'.$params->get('map_id_sfx').'"><img src="http://maps.google.com/maps/api/staticmap?center=21.614306, 105.856919&zoom='.$params->get('map_default_zoom_level', 12).'&size='.$params->get('map_width', 250).'x'.$params->get('map_height', 210).'&maptype=roadmap&sensor=false"/>
						<span class="loading">'.JTEXT::_('MAP_LOADING').'</span></div>
                        ';

			$area_array = array();
			foreach ($add_arr1 as $index => $value ) {
					$item = array();
					$item=$value[7];
					$area_array[]=$item;
				}
			$area_array = array_unique($area_array);
			foreach ($area_array as $index =>  $value ) {  ?>
				<div  style="display:none;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="ot_area"><?php echo $value?></div><div id="ot_<?php echo $index?>" ></div></div>
			<?php }
						 ?></div>
            <script type="text/javascript">
                            var map;
                            var geoCoder;
                            var markers = [];
                            var counter = 0;

                            var ErrMsg = {
                                ERROR: "<?php echo JTEXT::_('GEOCODE_ERROR')?>",
                                INVALID_REQUEST: "<?php echo JTEXT::_('GEOCODE_INVALID_REQUEST')?>",
                                OVER_QUERY_LIMIT: "<?php echo JTEXT::_('GEOCODE_OVER_QUERY_LIMIT')?>",
                                REQUEST_DENIED: "<?php echo JTEXT::_('GEOCODE_REQUEST_DENIED')?>",
                                UNKNOWN_ERROR: "<?php echo JTEXT::_('GEOCODE_UNKNOWN_ERROR')?>",
                                ZERO_RESULTS: "<?php echo JTEXT::_('GEOCODE_ZERO_RESULTS')?>"
                            };

                            function initialize() {
                                map = new google.maps.Map(document.getElementById("map_canvas<?php echo $params->get('map_id_sfx')?>"), {
                                        zoom: <?php echo $params->get("map_default_zoom_level", 12)?>,
                                        center: new google.maps.LatLng(21.614306, 105.856919),
                                        mapTypeId: google.maps.MapTypeId.<?php echo strtoupper($params->get('map_type','roadmap '))?> ,
                                        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
										styles: [ { stylers: [ { hue: "#dece8f" } ] } ]
                                });


                                geoCoder = new google.maps.Geocoder();
                                getLaLo();
                            }

                            function getLaLo(){
                                if (counter == points.length)
                                {
                                    if(markers.length > 0) map.panTo(markers[0].position);
                                    return;
                                }

                                var geoRequest ={
                                    address: points[counter].address
                                };

                                geoCoder.geocode(geoRequest, function (result, status)
                                {
                                    if (status == google.maps.GeocoderStatus.OK){
										<?php $x=0; foreach ($area_array as $index => $value ) { $x++; ?>
											if(points[counter].area =="<?php echo $value; ?>") {
                                        var list_item<?php echo $x;?> = document.createElement("a");

										points[counter].location=new google.maps.LatLng(points[counter].lat,points[counter].lng);
                                        list_item<?php echo $x;?>.style.textDecoration = "none";
                                        list_item<?php echo $x;?>.style.lineHeight = "1.5em";

                                        list_item<?php echo $x;?>.style.display = "block";
                                        list_item<?php echo $x;?>.setAttribute("class","location_list_item");
                                        list_item<?php echo $x;?>.setAttribute("href","javascript:gotoThisLoc("+points[counter].lat+","+points[counter].lng+")");
                                        list_item<?php echo $x;?>.setAttribute("title", result[0].formatted_address);

                                        list_item<?php echo $x;?>.setAttribute("address", points[counter].address);
                                        list_item<?php echo $x;?>.setAttribute("lat",points[counter].lat);
                                        list_item<?php echo $x;?>.setAttribute("lng",points[counter].lng);

										list_item<?php echo $x;?>.innerHTML = points[counter].name;

                                        var list_item_wrap<?php echo $x;?> = document.createElement("div");
                                        list_item_wrap<?php echo $x;?>.setAttribute("class","list_item_wrap col-lg-<?php echo $params->get('map_col',4)?> col-md-<?php echo $params->get('map_col',4)?> col-sm-<?php echo $params->get('map_col',4)?> col-xs-12");

                                        list_item_wrap<?php echo $x;?>.appendChild(list_item<?php echo $x;?>);

										if(points[counter].address.length !=0) {
										var ot_div = document.createElement("div");
										list_item_wrap<?php echo $x;?>.appendChild(ot_div);
										ot_div.setAttribute("class","ot_info");
										ot_div.innerHTML="<img src='<?php echo JURI::base();?>modules/mod_otbrandmaps/assets/images/geo.png' alt='"+points[counter].address+"'/><span>"+points[counter].address+"</span>";
										}

										if(points[counter].phone.length !=0) {
										var ot_div1 = document.createElement("div");
										list_item_wrap<?php echo $x;?>.appendChild(ot_div1);
										ot_div1.setAttribute("class","ot_info");
										ot_div1.innerHTML="<img src='<?php echo JURI::base();?>modules/mod_otbrandmaps/assets/images/phone.png' alt='"+points[counter].phone+"' /><span>"+points[counter].phone+"</span>";
										}

										if(points[counter].web.length !=0) {
										var ot_div2 = document.createElement("div");
										list_item_wrap<?php echo $x;?>.appendChild(ot_div2);
										ot_div2.setAttribute("class","ot_info");
										ot_div2.innerHTML="<img src='<?php echo JURI::base();?>modules/mod_otbrandmaps/assets/images/seo.png' alt='"+points[counter].web+"' /><span>"+points[counter].web+"</span>";
										}

										if(points[counter].email.length !=0) {
										var ot_div3 = document.createElement("div");
										list_item_wrap<?php echo $x;?>.appendChild(ot_div3);
										ot_div3.setAttribute("class","ot_info");
										ot_div3.innerHTML="<img src='<?php echo JURI::base();?>modules/mod_otbrandmaps/assets/images/email.png' alt='"+points[counter].email+"' /><span>"+points[counter].email+"</span>";
										}

										if(points[counter].fax.length !=0) {
										var ot_div4 = document.createElement("div");
										list_item_wrap<?php echo $x;?>.appendChild(ot_div4);
										ot_div4.setAttribute("class","ot_info");
										ot_div4.innerHTML="<img src='<?php echo JURI::base();?>modules/mod_otbrandmaps/assets/images/fax.png' alt='"+points[counter].fax+"' /><span>"+points[counter].fax+"</span>";
										}

                                        document.getElementById("ot_<?php echo $index ?>").appendChild(list_item_wrap<?php echo $x;?>);
										}
											<?php
										}	?>
                                        createMarker(points[counter].location,points[counter].icon,points[counter].image, points[counter].name, points[counter].address,points[counter].phone,points[counter].web,points[counter].email,points[counter].fax);
									}

                                    else {
                                        var err_msg = document.createElement("div");
                                        err_msg.setAttribute("class","result_error");
                                        err_msg.style.color = "#CC0000";
                                        err_msg.style.background = "#EEEEEE";
                                        err_msg.style.padding = "1px 5px";
                                        if (status == google.maps.GeocoderStatus.INVALID_REQUEST || status == google.maps.GeocoderStatus.ZERO_RESULTS)
                                        {
                                            err_msg.innerHTML = ErrMsg[status]+": "+points[counter].original_add;
                                        }
                                        else{
                                            err_msg.innerHTML = ErrMsg[status];
                                        }
                                        document.getElementById("location_list").appendChild(err_msg);
                                        counter += 1;
                                        getLaLo();
                                    }
                                });
                            }

                            function createMarker(latlng,icon,image,name, address,phone,web,email,fax) {
								if(image.length >0) { image="<div style='float:left; padding-right:10px; padding-top:5px;'><image src='"+image+"' /></div>";};
								if(phone.length >0) {  phone="<br /><small>Phone: "+phone+"</small>"; }
								if(web.length >0) { web="<br /><small>Web: "+web+"</small>";}
								if(email.length >0) { email="<br /><small>Email: "+email+"</small>";}
								if(fax.length >0) { fax="<br /><small>Fax: "+fax+"</small>";}
                                var html = image+"<div style='float:left;'><strong>" +  name + ": " + "</strong><br /><small>" + address +"</small>" + phone +""+ web +""+ email +"" + fax+"</div>";
                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: latlng,
									icon: icon,
                                    title: points[counter].name+": "+address
                                });
                                var infowindow = new google.maps.InfoWindow({
                                    content: html,
                                    size: new google.maps.Size(30,50)
                                });
                                google.maps.event.addListener(marker, "click", function() {
                                    infowindow.open(map,marker);
                                });
                                markers.push(marker);
                                counter = counter + 1;
                                getLaLo();
                            }

                            function gotoThisLoc(lat, lng)
                            {
                                map.panTo(new google.maps.LatLng(lat, lng));
                            }

                            function loadScript() {
                                var script = document.createElement("script");
                                script.type = "text/javascript";
                                script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize&key=AIzaSyC5xCvAPHNqLK2vRXZWB6SYS2b5oDMrxmU";
                                document.body.appendChild(script);
                            }

                            window.onload = loadScript;
                        </script>
		<?php
        }
		?>
	<div class="clear"></div>


<style type="text/css">
<?php foreach ($area_array as $index =>  $value ) { ?>
	#ot_<?php echo $index;?> .list_item_wrap:nth-child(<?php echo (12/$params->get('map_col',4)+1);?>),
	.ot_<?php echo $index;?> .list_item_wrap_static:nth-child(<?php echo (12/$params->get('map_col',4)+1);?>){
		clear:both;
	}
<?php } ?>
</style>
